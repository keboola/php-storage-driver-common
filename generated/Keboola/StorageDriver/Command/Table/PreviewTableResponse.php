<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/table.proto

namespace Keboola\StorageDriver\Command\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>keboola.storageDriver.command.table.PreviewTableResponse</code>
 */
class PreviewTableResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string columns = 1;</code>
     */
    private $columns;
    /**
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.PreviewTableResponse.Row rows = 2;</code>
     */
    private $rows;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $columns
     *     @type \Keboola\StorageDriver\Command\Table\PreviewTableResponse\Row[]|\Google\Protobuf\Internal\RepeatedField $rows
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string columns = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Generated from protobuf field <code>repeated string columns = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->columns = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.PreviewTableResponse.Row rows = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.PreviewTableResponse.Row rows = 2;</code>
     * @param \Keboola\StorageDriver\Command\Table\PreviewTableResponse\Row[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Keboola\StorageDriver\Command\Table\PreviewTableResponse\Row::class);
        $this->rows = $arr;

        return $this;
    }

}
