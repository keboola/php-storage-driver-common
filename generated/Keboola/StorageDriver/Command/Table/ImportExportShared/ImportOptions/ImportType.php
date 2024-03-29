<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/table.proto

namespace Keboola\StorageDriver\Command\Table\ImportExportShared\ImportOptions;

use UnexpectedValueException;

/**
 **
 * Type of import into table
 * Based on DedupType vary behavior of handling duplicate values
 *
 * Protobuf type <code>keboola.storageDriver.command.table.ImportExportShared.ImportOptions.ImportType</code>
 */
class ImportType
{
    /**
     * destination table is truncated before import
     *
     * Generated from protobuf enum <code>FULL = 0;</code>
     */
    const FULL = 0;
    /**
     * rows are added into table
     *
     * Generated from protobuf enum <code>INCREMENTAL = 1;</code>
     */
    const INCREMENTAL = 1;
    /**
     * only view is created from source
     *
     * Generated from protobuf enum <code>VIEW = 2;</code>
     */
    const VIEW = 2;
    /**
     * clone of object if supported (CTAS or copy can be used as polyfill of clone)
     *
     * Generated from protobuf enum <code>CLONE = 3;</code>
     */
    const PBCLONE = 3;

    private static $valueToName = [
        self::FULL => 'FULL',
        self::INCREMENTAL => 'INCREMENTAL',
        self::VIEW => 'VIEW',
        self::PBCLONE => 'CLONE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImportType::class, \Keboola\StorageDriver\Command\Table\ImportExportShared_ImportOptions_ImportType::class);

