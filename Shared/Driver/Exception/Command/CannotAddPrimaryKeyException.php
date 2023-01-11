<?php

declare(strict_types=1);

namespace Keboola\StorageDriver\Shared\Driver\Exception\Command;

use Keboola\CommonExceptions\ApplicationExceptionInterface;
use Keboola\StorageDriver\Contract\Driver\Exception\NonRetryableExceptionInterface;
use Keboola\StorageDriver\Shared\Driver\Exception\Exception;

final class CannotAddPrimaryKeyException extends Exception implements
    ApplicationExceptionInterface,
    NonRetryableExceptionInterface
{
    public const ERR_NULLABLE_COLUMN = 1;
    public const ERR_DUPLICITIES_ON_PK = 2;
    public const ERR_PK_EXISTS = 3;
    public const ERR_UNKNOWN = 0;

    public function __construct(string $message, int $code = self::ERR_UNKNOWN)
    {
        parent::__construct($message, $code);
    }

    public static function createForNullableColumn(string $columnName): self
    {
        return new self(sprintf('Selected column %s is nullable', $columnName), self::ERR_NULLABLE_COLUMN);
    }

    public static function createForDuplicates(): self
    {
        return new self('Selected columns contain duplicities', self::ERR_DUPLICITIES_ON_PK);
    }

    public static function createForExistingPK(): self
    {
        return new self('Primary key already exists', self::ERR_PK_EXISTS);
    }
}
