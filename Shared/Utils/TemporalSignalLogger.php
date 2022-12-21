<?php

declare(strict_types=1);

namespace Keboola\StorageDriver\Shared\Utils;

use Temporal\Client\WorkflowStubInterface;

class TemporalSignalLogger extends DebugLogger
{
    private WorkflowStubInterface $workflow;

    public function __construct(WorkflowStubInterface $workflow)
    {
        $this->workflow = $workflow;
    }

    /**
     * @phpcs:ignore
     * @param string   $level
     * @param string   $message
     * @param mixed[] $context
     */
    // phpcs:ignore SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
    public function log($level, $message, array $context = []): void
    {
        $this->workflow->signal(
            'addLogMessage',
            sprintf(
                '%s context: %s',
                $this->interpolate($message, $context),
                json_encode($context, JSON_THROW_ON_ERROR)
            )
        );
    }
}
