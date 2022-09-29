<?php

declare(strict_types=1);

namespace Keboola\StorageDriver\Controller;

use Generator;
use Keboola\StorageDriver\Command\Common\DriverRequest;
use Keboola\StorageDriver\Command\Common\DriverResponse;
use Temporal\Workflow;

/**
 * @Workflow\WorkflowInterface
 */
interface ControllerExecutorWorkflowInterface
{
    /**
     * @Workflow\WorkflowMethod(name="ExecuteDriverCommand")
     * @Workflow\ReturnType(name=DriverResponse::class)
     */
    public function executeDriverCommand(DriverRequest $req): Generator;

    /**
     * @Workflow\QueryMethod(name="GetSessionId")
     */
    public function getSessionId(): ?string;

    /**
     * @Workflow\SignalMethod(name="SetSessionId")
     */
    public function setSessionId(string $sessionId): void;

    /**
     * @Workflow\SignalMethod(name="LogMessage")
     */
    public function addLogMessage(string $message): void;
}
