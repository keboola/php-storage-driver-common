<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/table.proto

namespace Keboola\StorageDriver\Command\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>keboola.storageDriver.command.table.PreviewTableCommand</code>
 */
class PreviewTableCommand extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string path = 1;</code>
     */
    private $path;
    /**
     * Generated from protobuf field <code>string tableName = 2;</code>
     */
    protected $tableName = '';
    /**
     **
     * preview only certain columns of table
     *
     * Generated from protobuf field <code>repeated string columns = 3;</code>
     */
    private $columns;
    /**
     **
     * Order of preview records
     *
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.ImportExportShared.ExportOrderBy orderBy = 4;</code>
     */
    private $orderBy;
    /**
     **
     * Filters of preview records
     *
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ExportFilters filters = 5;</code>
     */
    protected $filters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $path
     *     @type string $tableName
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $columns
     *          *
     *           preview only certain columns of table
     *     @type array<\Keboola\StorageDriver\Command\Table\ImportExportShared\ExportOrderBy>|\Google\Protobuf\Internal\RepeatedField $orderBy
     *          *
     *           Order of preview records
     *     @type \Keboola\StorageDriver\Command\Table\ImportExportShared\ExportFilters $filters
     *          *
     *           Filters of preview records
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string path = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Generated from protobuf field <code>repeated string path = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPath($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->path = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tableName = 2;</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * Generated from protobuf field <code>string tableName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->tableName = $var;

        return $this;
    }

    /**
     **
     * preview only certain columns of table
     *
     * Generated from protobuf field <code>repeated string columns = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     **
     * preview only certain columns of table
     *
     * Generated from protobuf field <code>repeated string columns = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->columns = $arr;

        return $this;
    }

    /**
     **
     * Order of preview records
     *
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.ImportExportShared.ExportOrderBy orderBy = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     **
     * Order of preview records
     *
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.ImportExportShared.ExportOrderBy orderBy = 4;</code>
     * @param array<\Keboola\StorageDriver\Command\Table\ImportExportShared\ExportOrderBy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Keboola\StorageDriver\Command\Table\ImportExportShared\ExportOrderBy::class);
        $this->orderBy = $arr;

        return $this;
    }

    /**
     **
     * Filters of preview records
     *
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ExportFilters filters = 5;</code>
     * @return \Keboola\StorageDriver\Command\Table\ImportExportShared\ExportFilters|null
     */
    public function getFilters()
    {
        return $this->filters;
    }

    public function hasFilters()
    {
        return isset($this->filters);
    }

    public function clearFilters()
    {
        unset($this->filters);
    }

    /**
     **
     * Filters of preview records
     *
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ExportFilters filters = 5;</code>
     * @param \Keboola\StorageDriver\Command\Table\ImportExportShared\ExportFilters $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Keboola\StorageDriver\Command\Table\ImportExportShared\ExportFilters::class);
        $this->filters = $var;

        return $this;
    }

}

