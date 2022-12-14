<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/table.proto

namespace Keboola\StorageDriver\Command\Table\ImportExportShared;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Common where filter which is transformed into WHERE cause in driver
 *
 * Generated from protobuf message <code>keboola.storageDriver.command.table.ImportExportShared.TableWhereFilter</code>
 */
class TableWhereFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * column where is filter applied
     *
     * Generated from protobuf field <code>string columnsName = 1;</code>
     */
    protected $columnsName = '';
    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.TableWhereFilter.Operator operator = 2;</code>
     */
    protected $operator = 0;
    /**
     * comparison value
     *
     * Generated from protobuf field <code>repeated string values = 3;</code>
     */
    private $values;
    /**
     * datatype of value usually driver will cast value with TRY method
     *
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.DataType dataType = 4;</code>
     */
    protected $dataType = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $columnsName
     *           column where is filter applied
     *     @type int $operator
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $values
     *           comparison value
     *     @type int $dataType
     *           datatype of value usually driver will cast value with TRY method
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * column where is filter applied
     *
     * Generated from protobuf field <code>string columnsName = 1;</code>
     * @return string
     */
    public function getColumnsName()
    {
        return $this->columnsName;
    }

    /**
     * column where is filter applied
     *
     * Generated from protobuf field <code>string columnsName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setColumnsName($var)
    {
        GPBUtil::checkString($var, True);
        $this->columnsName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.TableWhereFilter.Operator operator = 2;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.TableWhereFilter.Operator operator = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Keboola\StorageDriver\Command\Table\ImportExportShared\TableWhereFilter\Operator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * comparison value
     *
     * Generated from protobuf field <code>repeated string values = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * comparison value
     *
     * Generated from protobuf field <code>repeated string values = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->values = $arr;

        return $this;
    }

    /**
     * datatype of value usually driver will cast value with TRY method
     *
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.DataType dataType = 4;</code>
     * @return int
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * datatype of value usually driver will cast value with TRY method
     *
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.DataType dataType = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDataType($var)
    {
        GPBUtil::checkEnum($var, \Keboola\StorageDriver\Command\Table\ImportExportShared\DataType::class);
        $this->dataType = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TableWhereFilter::class, \Keboola\StorageDriver\Command\Table\ImportExportShared_TableWhereFilter::class);

