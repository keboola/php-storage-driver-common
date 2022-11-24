<?php

namespace Keboola\StorageDriver\Shared\Driver;

use Keboola\CommonExceptions\ApplicationExceptionInterface;
use Keboola\StorageDriver\Shared\Driver\Exception\Exception;
use Keboola\StorageDriver\Contract\Driver\Exception\NonRetryableExceptionInterface;
use Throwable;

final class TableFilterQueryBuilderException extends Exception implements
    ApplicationExceptionInterface,
    NonRetryableExceptionInterface
{
    public function __construct(string $message, Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
