<?php

declare(strict_types=1);

namespace Keboola\StorageDriver\Controller;

use DateInterval;
use Generator;
use Google\Protobuf\Any;
use Keboola\StorageDriver\Command\Common\DriverRequest;
use Keboola\StorageDriver\Command\Common\TerminateSessionCommand;
use Keboola\StorageDriver\Credentials\GenericBackendCredentials;
use Keboola\StorageDriver\Driver\DriverCommandActivityInterface;
use Temporal\Activity\ActivityOptions;
use Temporal\Workflow;

class ControllerKillWorkflow implements ControllerKillWorkflowInterface
{
    public function killDriverCommand(
        GenericBackendCredentials $credentials,
        string $workflowId
    ): Generator {
        /** @var ControllerExecutorWorkflow|Workflow\ExternalWorkflowStubInterface $externalWorkflow */
        $externalWorkflow = Workflow::newExternalWorkflowStub(
            ControllerExecutorWorkflow::class,
            new Workflow\WorkflowExecution($workflowId)
        );
        $sessionId = $externalWorkflow->getSessionId();
        yield $externalWorkflow->cancel();

        if ($sessionId === null) {
            return;
        }

        $driverActivity = Workflow::newActivityStub(
            DriverCommandActivityInterface::class,
            ActivityOptions::new()->withStartToCloseTimeout(DateInterval::createFromDateString('8 hours'))
        );

        $req = new DriverRequest();
        $cmd = (new TerminateSessionCommand())->setSessionId($sessionId);
        $any = new Any();
        $any->pack($cmd);
        $req->setCommand($any);
        $any = new Any();
        $any->pack($credentials);
        $req->setCredentials($any);

        $driverActivity->executeCommand($req);
    }
}
