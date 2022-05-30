<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/info.proto

namespace Keboola\StorageDriver\Command\Info\TableInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Table column definition
 *
 * Generated from protobuf message <code>keboola.storageDriver.command.info.TableInfo.TableColumn</code>
 */
class TableColumn extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>string length = 3;</code>
     */
    protected $length = '';
    /**
     * Generated from protobuf field <code>bool nullable = 4;</code>
     */
    protected $nullable = false;
    /**
     * Generated from protobuf field <code>string default = 5;</code>
     */
    protected $default = '';
    /**
     * metadata specific for each backend
     *
     * Generated from protobuf field <code>.google.protobuf.Any meta = 6;</code>
     */
    protected $meta = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $type
     *     @type string $length
     *     @type bool $nullable
     *     @type string $default
     *     @type \Google\Protobuf\Any $meta
     *           metadata specific for each backend
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Info::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string length = 3;</code>
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Generated from protobuf field <code>string length = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLength($var)
    {
        GPBUtil::checkString($var, True);
        $this->length = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool nullable = 4;</code>
     * @return bool
     */
    public function getNullable()
    {
        return $this->nullable;
    }

    /**
     * Generated from protobuf field <code>bool nullable = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setNullable($var)
    {
        GPBUtil::checkBool($var);
        $this->nullable = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default = 5;</code>
     * @return string
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Generated from protobuf field <code>string default = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDefault($var)
    {
        GPBUtil::checkString($var, True);
        $this->default = $var;

        return $this;
    }

    /**
     * metadata specific for each backend
     *
     * Generated from protobuf field <code>.google.protobuf.Any meta = 6;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getMeta()
    {
        return $this->meta;
    }

    public function hasMeta()
    {
        return isset($this->meta);
    }

    public function clearMeta()
    {
        unset($this->meta);
    }

    /**
     * metadata specific for each backend
     *
     * Generated from protobuf field <code>.google.protobuf.Any meta = 6;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setMeta($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->meta = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TableColumn::class, \Keboola\StorageDriver\Command\Info\TableInfo_TableColumn::class);

