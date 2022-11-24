<?php

declare(strict_types=1);

namespace Keboola\StorageDriver\Shared\Driver;

use Keboola\Db\ImportExport\Storage\SqlSourceInterface;
use Keboola\StorageDriver\Command\Table\PreviewTableCommand;

interface TableFilterQueryBuilderInterface
{
    public const DEFAULT_CAST_SIZE = 16384; // 16K letters

    public function buildQueryFromCommnand(
        PreviewTableCommand $options,
        string $schemaName
    ): SqlSourceInterface;
}
