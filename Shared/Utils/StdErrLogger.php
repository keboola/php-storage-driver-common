<?php

declare(strict_types=1);

namespace Keboola\StorageDriver\Shared\Utils;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;

class StdErrLogger implements LoggerInterface
{
    use LoggerTrait;

    /**
     * @param string   $level
     * @param string   $message
     * @param mixed[] $context
     */
    // phpcs:ignore SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
    public function log($level, $message, array $context = []): void
    {
        file_put_contents('php://stderr', sprintf('[%s] %s', $level, $message));
    }
}
