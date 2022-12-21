<?php

declare(strict_types=1);

namespace Keboola\StorageDriver\Controller;

use Generator;
use Keboola\StorageDriver\Credentials\GenericBackendCredentials;
use Temporal\Workflow;

#[Workflow\WorkflowInterface]
interface ControllerKillWorkflowInterface
{
    #[Workflow\WorkflowMethod(name: 'KillDriverCommand')]
    public function killDriverCommand(GenericBackendCredentials $credentials, string $workflowId): Generator;
}
