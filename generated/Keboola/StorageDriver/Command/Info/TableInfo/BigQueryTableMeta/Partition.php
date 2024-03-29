<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/info.proto

namespace Keboola\StorageDriver\Command\Info\TableInfo\BigQueryTableMeta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Bigquery table partition detail based on INFORMATION_SCHEMA.PARTITIONS
 * https://cloud.google.com/bigquery/docs/information-schema-partitions
 *
 * Generated from protobuf message <code>keboola.storageDriver.command.info.TableInfo.BigQueryTableMeta.Partition</code>
 */
class Partition extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string partition_id = 1;</code>
     */
    protected $partition_id = '';
    /**
     * Generated from protobuf field <code>string rowsNumber = 2;</code>
     */
    protected $rowsNumber = '';
    /**
     * Generated from protobuf field <code>string lastModifiedTime = 3;</code>
     */
    protected $lastModifiedTime = '';
    /**
     * Generated from protobuf field <code>string storageTier = 4;</code>
     */
    protected $storageTier = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $partition_id
     *     @type string $rowsNumber
     *     @type string $lastModifiedTime
     *     @type string $storageTier
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Info::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string partition_id = 1;</code>
     * @return string
     */
    public function getPartitionId()
    {
        return $this->partition_id;
    }

    /**
     * Generated from protobuf field <code>string partition_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPartitionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->partition_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string rowsNumber = 2;</code>
     * @return string
     */
    public function getRowsNumber()
    {
        return $this->rowsNumber;
    }

    /**
     * Generated from protobuf field <code>string rowsNumber = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRowsNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->rowsNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string lastModifiedTime = 3;</code>
     * @return string
     */
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    /**
     * Generated from protobuf field <code>string lastModifiedTime = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLastModifiedTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->lastModifiedTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string storageTier = 4;</code>
     * @return string
     */
    public function getStorageTier()
    {
        return $this->storageTier;
    }

    /**
     * Generated from protobuf field <code>string storageTier = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStorageTier($var)
    {
        GPBUtil::checkString($var, True);
        $this->storageTier = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Partition::class, \Keboola\StorageDriver\Command\Info\TableInfo_BigQueryTableMeta_Partition::class);

