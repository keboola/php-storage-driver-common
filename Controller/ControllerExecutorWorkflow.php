<?php

declare(strict_types=1);

namespace Keboola\StorageDriver\Controller;

use DateInterval;
use Generator;
use Keboola\StorageDriver\Command\Common\DriverRequest;
use Keboola\StorageDriver\Driver\DriverCommandActivityInterface;
use Temporal\Activity\ActivityOptions;
use Temporal\Common\RetryOptions;
use Temporal\Workflow;

class ControllerExecutorWorkflow implements ControllerExecutorWorkflowInterface
{
    private ?string $sessionId = null;

    public function executeDriverCommand(
        DriverRequest $req
    ): Generator {
        $backend = $req->getBackend();
        assert($backend !== '');

        $driverActivity = Workflow::newActivityStub(
            DriverCommandActivityInterface::class,
            ActivityOptions::new()
                ->withStartToCloseTimeout(
                    DateInterval::createFromDateString('8 hours')
                )
                ->withHeartbeatTimeout(
                    DateInterval::createFromDateString('10 seconds')
                )
                ->withRetryOptions(
                    (new RetryOptions)
                        ->withMaximumAttempts(1)
                )
                ->withTaskQueue(sprintf('driver-%s', $backend))
        );
        return yield $driverActivity->executeCommand($req);
    }

    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    public function setSessionId(string $sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    public function addLogMessage(string $message): void
    {
        // do nothing signal is just recorded in temporal
    }
}
