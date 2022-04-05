<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/table.proto

namespace Keboola\StorageDriver\Command\Table\PreviewTableResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>keboola.storageDriver.command.table.PreviewTableResponse.Row</code>
 */
class Row extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.PreviewTableResponse.Row.Column columns = 1;</code>
     */
    private $columns;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Keboola\StorageDriver\Command\Table\PreviewTableResponse\Row\Column[]|\Google\Protobuf\Internal\RepeatedField $columns
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.PreviewTableResponse.Row.Column columns = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.PreviewTableResponse.Row.Column columns = 1;</code>
     * @param \Keboola\StorageDriver\Command\Table\PreviewTableResponse\Row\Column[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Keboola\StorageDriver\Command\Table\PreviewTableResponse\Row\Column::class);
        $this->columns = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Row::class, \Keboola\StorageDriver\Command\Table\PreviewTableResponse_Row::class);
