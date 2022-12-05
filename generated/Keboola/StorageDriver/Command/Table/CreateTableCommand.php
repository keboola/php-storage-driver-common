<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/table.proto

namespace Keboola\StorageDriver\Command\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Command is used when new table is created in Keboola connection
 * Command will create new table and set all grants needed by project
 *
 * Generated from protobuf message <code>keboola.storageDriver.command.table.CreateTableCommand</code>
 */
class CreateTableCommand extends \Google\Protobuf\Internal\Message
{
    /**
     * path where table is created
     *
     * Generated from protobuf field <code>repeated string path = 1;</code>
     */
    private $path;
    /**
     * table name
     *
     * Generated from protobuf field <code>string tableName = 2;</code>
     */
    protected $tableName = '';
    /**
     * table columns definitions
     *
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.TableColumnShared columns = 3;</code>
     */
    private $columns;
    /**
     * primary key columns names
     *
     * Generated from protobuf field <code>repeated string primaryKeysNames = 4;</code>
     */
    private $primaryKeysNames;
    /**
     * metadata specific for each backend
     *
     * Generated from protobuf field <code>.google.protobuf.Any meta = 5;</code>
     */
    protected $meta = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $path
     *           path where table is created
     *     @type string $tableName
     *           table name
     *     @type \Keboola\StorageDriver\Command\Table\TableColumnShared[]|\Google\Protobuf\Internal\RepeatedField $columns
     *           table columns definitions
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $primaryKeysNames
     *           primary key columns names
     *     @type \Google\Protobuf\Any $meta
     *           metadata specific for each backend
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * path where table is created
     *
     * Generated from protobuf field <code>repeated string path = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * path where table is created
     *
     * Generated from protobuf field <code>repeated string path = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPath($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->path = $arr;

        return $this;
    }

    /**
     * table name
     *
     * Generated from protobuf field <code>string tableName = 2;</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * table name
     *
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
     * table columns definitions
     *
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.TableColumnShared columns = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * table columns definitions
     *
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.table.TableColumnShared columns = 3;</code>
     * @param \Keboola\StorageDriver\Command\Table\TableColumnShared[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Keboola\StorageDriver\Command\Table\TableColumnShared::class);
        $this->columns = $arr;

        return $this;
    }

    /**
     * primary key columns names
     *
     * Generated from protobuf field <code>repeated string primaryKeysNames = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrimaryKeysNames()
    {
        return $this->primaryKeysNames;
    }

    /**
     * primary key columns names
     *
     * Generated from protobuf field <code>repeated string primaryKeysNames = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrimaryKeysNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->primaryKeysNames = $arr;

        return $this;
    }

    /**
     * metadata specific for each backend
     *
     * Generated from protobuf field <code>.google.protobuf.Any meta = 5;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Any meta = 5;</code>
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

