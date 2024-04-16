<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/info.proto

namespace Keboola\StorageDriver\Command\Info;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Generic table information's
 * TODO dependent views
 *
 * Generated from protobuf message <code>keboola.storageDriver.command.info.TableInfo</code>
 */
class TableInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * path where table is located
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
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.info.TableInfo.TableColumn columns = 3;</code>
     */
    private $columns;
    /**
     * primary key columns names
     *
     * Generated from protobuf field <code>repeated string primaryKeysNames = 4;</code>
     */
    private $primaryKeysNames;
    /**
     * Generated from protobuf field <code>int64 rowsCount = 5;</code>
     */
    protected $rowsCount = 0;
    /**
     * Generated from protobuf field <code>int64 sizeBytes = 6;</code>
     */
    protected $sizeBytes = 0;
    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.info.TableType tableType = 7;</code>
     */
    protected $tableType = 0;
    /**
     * metadata specific for each backend
     *
     * Generated from protobuf field <code>.google.protobuf.Any meta = 8;</code>
     */
    protected $meta = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $path
     *           path where table is located
     *     @type string $tableName
     *           table name
     *     @type array<\Keboola\StorageDriver\Command\Info\TableInfo\TableColumn>|\Google\Protobuf\Internal\RepeatedField $columns
     *           table columns definitions
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $primaryKeysNames
     *           primary key columns names
     *     @type int|string $rowsCount
     *     @type int|string $sizeBytes
     *     @type int $tableType
     *     @type \Google\Protobuf\Any $meta
     *           metadata specific for each backend
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Info::initOnce();
        parent::__construct($data);
    }

    /**
     * path where table is located
     *
     * Generated from protobuf field <code>repeated string path = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * path where table is located
     *
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
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.info.TableInfo.TableColumn columns = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * table columns definitions
     *
     * Generated from protobuf field <code>repeated .keboola.storageDriver.command.info.TableInfo.TableColumn columns = 3;</code>
     * @param array<\Keboola\StorageDriver\Command\Info\TableInfo\TableColumn>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Keboola\StorageDriver\Command\Info\TableInfo\TableColumn::class);
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
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrimaryKeysNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->primaryKeysNames = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 rowsCount = 5;</code>
     * @return int|string
     */
    public function getRowsCount()
    {
        return $this->rowsCount;
    }

    /**
     * Generated from protobuf field <code>int64 rowsCount = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->rowsCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 sizeBytes = 6;</code>
     * @return int|string
     */
    public function getSizeBytes()
    {
        return $this->sizeBytes;
    }

    /**
     * Generated from protobuf field <code>int64 sizeBytes = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->sizeBytes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.info.TableType tableType = 7;</code>
     * @return int
     */
    public function getTableType()
    {
        return $this->tableType;
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.info.TableType tableType = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setTableType($var)
    {
        GPBUtil::checkEnum($var, \Keboola\StorageDriver\Command\Info\TableType::class);
        $this->tableType = $var;

        return $this;
    }

    /**
     * metadata specific for each backend
     *
     * Generated from protobuf field <code>.google.protobuf.Any meta = 8;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Any meta = 8;</code>
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

