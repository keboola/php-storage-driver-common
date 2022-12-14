<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/table.proto

namespace Keboola\StorageDriver\Command\Table\ImportExportShared;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>keboola.storageDriver.command.table.ImportExportShared.ExportFilters</code>
 */
class ExportFilters extends \Google\Protobuf\Internal\Message
{
    /**
     **
     * limit number of records
     *
     * Generated from protobuf field <code>int32 limit = 3;</code>
     */
    protected $limit = 0;
    /**
     **
     * export only records changed since time
     * filter records based on timestamp column
     *
     * Generated from protobuf field <code>string changeSince = 4;</code>
     */
    protected $changeSince = '';
    /**
     **
     * export only records changed until time
     * filter records based on timestamp column
     *
     * Generated from protobuf field <code>string changeUntil = 5;</code>
     */
    protected $changeUntil = '';
    /**
     **
     * Fulltext search on all records
     *
     * Generated from protobuf field <code>string fulltextSearch = 6;</code>
     */
    protected $fulltextSearch = '';
    /**
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.ImportExportShared.TableWhereFilter whereFilters = 7;</code>
     */
    private $whereFilters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $limit
     *          *
     *           limit number of records
     *     @type string $changeSince
     *          *
     *           export only records changed since time
     *           filter records based on timestamp column
     *     @type string $changeUntil
     *          *
     *           export only records changed until time
     *           filter records based on timestamp column
     *     @type string $fulltextSearch
     *          *
     *           Fulltext search on all records
     *     @type array<\Keboola\StorageDriver\Command\Table\ImportExportShared\TableWhereFilter>|\Google\Protobuf\Internal\RepeatedField $whereFilters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Table::initOnce();
        parent::__construct($data);
    }

    /**
     **
     * limit number of records
     *
     * Generated from protobuf field <code>int32 limit = 3;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     **
     * limit number of records
     *
     * Generated from protobuf field <code>int32 limit = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit = $var;

        return $this;
    }

    /**
     **
     * export only records changed since time
     * filter records based on timestamp column
     *
     * Generated from protobuf field <code>string changeSince = 4;</code>
     * @return string
     */
    public function getChangeSince()
    {
        return $this->changeSince;
    }

    /**
     **
     * export only records changed since time
     * filter records based on timestamp column
     *
     * Generated from protobuf field <code>string changeSince = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setChangeSince($var)
    {
        GPBUtil::checkString($var, True);
        $this->changeSince = $var;

        return $this;
    }

    /**
     **
     * export only records changed until time
     * filter records based on timestamp column
     *
     * Generated from protobuf field <code>string changeUntil = 5;</code>
     * @return string
     */
    public function getChangeUntil()
    {
        return $this->changeUntil;
    }

    /**
     **
     * export only records changed until time
     * filter records based on timestamp column
     *
     * Generated from protobuf field <code>string changeUntil = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setChangeUntil($var)
    {
        GPBUtil::checkString($var, True);
        $this->changeUntil = $var;

        return $this;
    }

    /**
     **
     * Fulltext search on all records
     *
     * Generated from protobuf field <code>string fulltextSearch = 6;</code>
     * @return string
     */
    public function getFulltextSearch()
    {
        return $this->fulltextSearch;
    }

    /**
     **
     * Fulltext search on all records
     *
     * Generated from protobuf field <code>string fulltextSearch = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setFulltextSearch($var)
    {
        GPBUtil::checkString($var, True);
        $this->fulltextSearch = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.ImportExportShared.TableWhereFilter whereFilters = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWhereFilters()
    {
        return $this->whereFilters;
    }

    /**
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.ImportExportShared.TableWhereFilter whereFilters = 7;</code>
     * @param array<\Keboola\StorageDriver\Command\Table\ImportExportShared\TableWhereFilter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWhereFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Keboola\StorageDriver\Command\Table\ImportExportShared\TableWhereFilter::class);
        $this->whereFilters = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportFilters::class, \Keboola\StorageDriver\Command\Table\ImportExportShared_ExportFilters::class);

