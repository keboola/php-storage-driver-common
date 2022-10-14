<?php

declare(strict_types=1);

namespace Keboola\StorageDriver\Teradata\Temporal;

use DateTimeInterface;
use Google\Protobuf\Any;
use Keboola\StorageDriver\Command\Common\DriverRequest;
use Keboola\StorageDriver\Command\Common\DriverResponse;
use Keboola\StorageDriver\Driver\DriverCommandActivityInterface;
use Keboola\StorageDriver\Shared\Utils\StdErrLogger;
use Psr\SimpleCache\InvalidArgumentException;
use RuntimeException;
use Spiral\Goridge\RPC\RPC;
use Spiral\RoadRunner\KeyValue\Factory;
use Spiral\RoadRunner\Services\Exception\ServiceException;
use Spiral\RoadRunner\Services\Manager;
use Temporal\Activity;
use Temporal\Internal\Activity\ActivityContext;
use function Keboola\StorageDriver\Controller\retry;
use function React\Async\async;
use function React\Async\await;
use function React\Promise\Timer\sleep as async_sleep;

class DriverCommandActivity implements DriverCommandActivityInterface
{
    private StdErrLogger $logger;

    public function __construct()
    {
        $this->logger = new StdErrLogger();
    }

    public function executeCommand(DriverRequest $req): DriverResponse
    {
        $info = Activity::getInfo();
        /** @var ActivityContext $ctx */
        $ctx = Activity::getCurrentContext();
        assert($info->workflowExecution !== null);
        $workflowId = $info->workflowExecution->getID();
        assert($workflowId !== '');

        // dump activity info
        $this->log(sprintf('workflowId=%s', $workflowId));
        $this->log(sprintf('runId=%s', $info->workflowExecution->getRunID()));
        $this->log(sprintf('activityId=%s', $info->id));
        $this->log(sprintf('activityDeadline=%s', $info->deadline->format(DateTimeInterface::ATOM)));

        // run heartbeat
        async(function () use (&$ctx): void {
            while (true) {
                $this->log('beat');
                $ctx->heartbeat('running');
                await(async_sleep(1));
            }
        })();

        $rpc = RPC::fromGlobals();
        $manager = new Manager($rpc);

        // run driver process
        $result = retry(fn() => $manager->create(
            $workflowId,
            'php /code/service/driver/driver.php ' . $workflowId,
            1,
            0,
            false,
            [
                'ACTIVITY_INPUT' => $req->serializeToJsonString(),
                'WORKFLOW_ID' => $workflowId,
            ]
        ));
        if (!$result) {
            throw new ServiceException('Service creation failed.');
        }

        $factory = new Factory($rpc);
        $storage = $factory->select('storage-driver');

        // wait for driver process to finish
        await(async(function () use ($workflowId, &$storage, &$manager): void {
            while (true) {
                // we are waiting to KV recort do be set
                $val = $storage->get($workflowId);
                if (is_string($val) && $val !== '') {
                    break;
                }
                $this->log('waiting ' . implode(',', $manager->list()));
                await(async_sleep(1));
            }
        })());

        // get result from KV
        /** @var string $result */
        $result = $storage->get($workflowId);

        $result = json_decode($result, true, 512, JSON_THROW_ON_ERROR);

        /** @var array{exception?:array<mixed>, response?:array<mixed>} $result */
        // detect exception
        if (array_key_exists('exception', $result)) {
            throw new RuntimeException(json_encode($result, JSON_THROW_ON_ERROR));
        }

        //create response
        $result = $result['response'] ?? null;
        $driverResponse = new DriverResponse();
        if ($result !== null) {
            $anyResponse = new Any();
            $anyResponse->pack($result);
            $driverResponse->setResponse($anyResponse);
        }

        $storage->delete($workflowId);
        return $driverResponse;
    }

    private function log(string $message, string ...$arg): void
    {
        $this->logger->debug(sprintf($message, ...$arg));
    }
}
