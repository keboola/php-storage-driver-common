<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/table.proto

namespace Keboola\StorageDriver\Command\Table\CreateTableCommand;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>keboola.storageDriver.command.table.CreateTableCommand.BigQueryTableMeta</code>
 */
class BigQueryTableMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.keboola.storageDriver.backend.bigQuery.TimePartitioning timePartitioning = 1;</code>
     */
    protected $timePartitioning = null;
    /**
     * Generated from protobuf field <code>.keboola.storageDriver.backend.bigQuery.RangePartitioning rangePartitioning = 2;</code>
     */
    protected $rangePartitioning = null;
    /**
     * Generated from protobuf field <code>bool requirePartitionFilter = 3;</code>
     */
    protected $requirePartitionFilter = false;
    /**
     * Generated from protobuf field <code>.keboola.storageDriver.backend.bigQuery.Clustering clustering = 4;</code>
     */
    protected $clustering = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Keboola\StorageDriver\Backend\BigQuery\TimePartitioning $timePartitioning
     *     @type \Keboola\StorageDriver\Backend\BigQuery\RangePartitioning $rangePartitioning
     *     @type bool $requirePartitionFilter
     *     @type \Keboola\StorageDriver\Backend\BigQuery\Clustering $clustering
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.backend.bigQuery.TimePartitioning timePartitioning = 1;</code>
     * @return \Keboola\StorageDriver\Backend\BigQuery\TimePartitioning|null
     */
    public function getTimePartitioning()
    {
        return $this->timePartitioning;
    }

    public function hasTimePartitioning()
    {
        return isset($this->timePartitioning);
    }

    public function clearTimePartitioning()
    {
        unset($this->timePartitioning);
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.backend.bigQuery.TimePartitioning timePartitioning = 1;</code>
     * @param \Keboola\StorageDriver\Backend\BigQuery\TimePartitioning $var
     * @return $this
     */
    public function setTimePartitioning($var)
    {
        GPBUtil::checkMessage($var, \Keboola\StorageDriver\Backend\BigQuery\TimePartitioning::class);
        $this->timePartitioning = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.backend.bigQuery.RangePartitioning rangePartitioning = 2;</code>
     * @return \Keboola\StorageDriver\Backend\BigQuery\RangePartitioning|null
     */
    public function getRangePartitioning()
    {
        return $this->rangePartitioning;
    }

    public function hasRangePartitioning()
    {
        return isset($this->rangePartitioning);
    }

    public function clearRangePartitioning()
    {
        unset($this->rangePartitioning);
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.backend.bigQuery.RangePartitioning rangePartitioning = 2;</code>
     * @param \Keboola\StorageDriver\Backend\BigQuery\RangePartitioning $var
     * @return $this
     */
    public function setRangePartitioning($var)
    {
        GPBUtil::checkMessage($var, \Keboola\StorageDriver\Backend\BigQuery\RangePartitioning::class);
        $this->rangePartitioning = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool requirePartitionFilter = 3;</code>
     * @return bool
     */
    public function getRequirePartitionFilter()
    {
        return $this->requirePartitionFilter;
    }

    /**
     * Generated from protobuf field <code>bool requirePartitionFilter = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequirePartitionFilter($var)
    {
        GPBUtil::checkBool($var);
        $this->requirePartitionFilter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.backend.bigQuery.Clustering clustering = 4;</code>
     * @return \Keboola\StorageDriver\Backend\BigQuery\Clustering|null
     */
    public function getClustering()
    {
        return $this->clustering;
    }

    public function hasClustering()
    {
        return isset($this->clustering);
    }

    public function clearClustering()
    {
        unset($this->clustering);
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.backend.bigQuery.Clustering clustering = 4;</code>
     * @param \Keboola\StorageDriver\Backend\BigQuery\Clustering $var
     * @return $this
     */
    public function setClustering($var)
    {
        GPBUtil::checkMessage($var, \Keboola\StorageDriver\Backend\BigQuery\Clustering::class);
        $this->clustering = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BigQueryTableMeta::class, \Keboola\StorageDriver\Command\Table\CreateTableCommand_BigQueryTableMeta::class);

