<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/table.proto

namespace Keboola\StorageDriver\Command\Table\ImportExportShared;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Common import options
 *
 * Generated from protobuf message <code>keboola.storageDriver.command.table.ImportExportShared.ImportOptions</code>
 */
class ImportOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * timestamp column name, in Keboola connection it's usually _timestamp, can be empty
     *
     * Generated from protobuf field <code>string timestampColumn = 1;</code>
     */
    protected $timestampColumn = '';
    /**
     * Specifies columns where empty string values will be converted to null
     *
     * Generated from protobuf field <code>repeated string convertEmptyValuesToNullOnColumns = 2;</code>
     */
    private $convertEmptyValuesToNullOnColumns;
    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ImportOptions.ImportType importType = 3;</code>
     */
    protected $importType = 0;
    /**
     * number of lines that are skipped, usually used values is 1 to skip csv header
     *
     * Generated from protobuf field <code>int32 numberOfIgnoredLines = 4;</code>
     */
    protected $numberOfIgnoredLines = 0;
    /**
     **
     * Deduplication logic type for handling duplicate values
     *
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ImportOptions.DedupType dedupType = 5;</code>
     */
    protected $dedupType = 0;
    /**
     * columns on which base will be deduplication performed
     *
     * Generated from protobuf field <code>repeated string dedupColumnsNames = 6;</code>
     */
    private $dedupColumnsNames;
    /**
     **
     * Import strategy type decide internal handling and type casting
     *
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ImportOptions.ImportStrategy importStrategy = 7;</code>
     */
    protected $importStrategy = 0;
    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ImportOptions.CreateMode createMode = 8;</code>
     */
    protected $createMode = 0;
    /**
     * list of values which should be imported as null, default should be always empty string
     *
     * Generated from protobuf field <code>repeated string importAsNull = 9;</code>
     */
    private $importAsNull;
    /**
     * columns that are ignored during import, used to ignore _timestamp column from check when importing table from workspace
     *
     * Generated from protobuf field <code>repeated string ignoreColumnsNames = 10;</code>
     */
    private $ignoreColumnsNames;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $timestampColumn
     *           timestamp column name, in Keboola connection it's usually _timestamp, can be empty
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $convertEmptyValuesToNullOnColumns
     *           Specifies columns where empty string values will be converted to null
     *     @type int $importType
     *     @type int $numberOfIgnoredLines
     *           number of lines that are skipped, usually used values is 1 to skip csv header
     *     @type int $dedupType
     *          *
     *           Deduplication logic type for handling duplicate values
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $dedupColumnsNames
     *           columns on which base will be deduplication performed
     *     @type int $importStrategy
     *          *
     *           Import strategy type decide internal handling and type casting
     *     @type int $createMode
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $importAsNull
     *           list of values which should be imported as null, default should be always empty string
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ignoreColumnsNames
     *           columns that are ignored during import, used to ignore _timestamp column from check when importing table from workspace
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * timestamp column name, in Keboola connection it's usually _timestamp, can be empty
     *
     * Generated from protobuf field <code>string timestampColumn = 1;</code>
     * @return string
     */
    public function getTimestampColumn()
    {
        return $this->timestampColumn;
    }

    /**
     * timestamp column name, in Keboola connection it's usually _timestamp, can be empty
     *
     * Generated from protobuf field <code>string timestampColumn = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTimestampColumn($var)
    {
        GPBUtil::checkString($var, True);
        $this->timestampColumn = $var;

        return $this;
    }

    /**
     * Specifies columns where empty string values will be converted to null
     *
     * Generated from protobuf field <code>repeated string convertEmptyValuesToNullOnColumns = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConvertEmptyValuesToNullOnColumns()
    {
        return $this->convertEmptyValuesToNullOnColumns;
    }

    /**
     * Specifies columns where empty string values will be converted to null
     *
     * Generated from protobuf field <code>repeated string convertEmptyValuesToNullOnColumns = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConvertEmptyValuesToNullOnColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->convertEmptyValuesToNullOnColumns = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ImportOptions.ImportType importType = 3;</code>
     * @return int
     */
    public function getImportType()
    {
        return $this->importType;
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ImportOptions.ImportType importType = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setImportType($var)
    {
        GPBUtil::checkEnum($var, \Keboola\StorageDriver\Command\Table\ImportExportShared\ImportOptions\ImportType::class);
        $this->importType = $var;

        return $this;
    }

    /**
     * number of lines that are skipped, usually used values is 1 to skip csv header
     *
     * Generated from protobuf field <code>int32 numberOfIgnoredLines = 4;</code>
     * @return int
     */
    public function getNumberOfIgnoredLines()
    {
        return $this->numberOfIgnoredLines;
    }

    /**
     * number of lines that are skipped, usually used values is 1 to skip csv header
     *
     * Generated from protobuf field <code>int32 numberOfIgnoredLines = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNumberOfIgnoredLines($var)
    {
        GPBUtil::checkInt32($var);
        $this->numberOfIgnoredLines = $var;

        return $this;
    }

    /**
     **
     * Deduplication logic type for handling duplicate values
     *
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ImportOptions.DedupType dedupType = 5;</code>
     * @return int
     */
    public function getDedupType()
    {
        return $this->dedupType;
    }

    /**
     **
     * Deduplication logic type for handling duplicate values
     *
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ImportOptions.DedupType dedupType = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDedupType($var)
    {
        GPBUtil::checkEnum($var, \Keboola\StorageDriver\Command\Table\ImportExportShared\ImportOptions\DedupType::class);
        $this->dedupType = $var;

        return $this;
    }

    /**
     * columns on which base will be deduplication performed
     *
     * Generated from protobuf field <code>repeated string dedupColumnsNames = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDedupColumnsNames()
    {
        return $this->dedupColumnsNames;
    }

    /**
     * columns on which base will be deduplication performed
     *
     * Generated from protobuf field <code>repeated string dedupColumnsNames = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDedupColumnsNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->dedupColumnsNames = $arr;

        return $this;
    }

    /**
     **
     * Import strategy type decide internal handling and type casting
     *
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ImportOptions.ImportStrategy importStrategy = 7;</code>
     * @return int
     */
    public function getImportStrategy()
    {
        return $this->importStrategy;
    }

    /**
     **
     * Import strategy type decide internal handling and type casting
     *
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ImportOptions.ImportStrategy importStrategy = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setImportStrategy($var)
    {
        GPBUtil::checkEnum($var, \Keboola\StorageDriver\Command\Table\ImportExportShared\ImportOptions\ImportStrategy::class);
        $this->importStrategy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ImportOptions.CreateMode createMode = 8;</code>
     * @return int
     */
    public function getCreateMode()
    {
        return $this->createMode;
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.table.ImportExportShared.ImportOptions.CreateMode createMode = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setCreateMode($var)
    {
        GPBUtil::checkEnum($var, \Keboola\StorageDriver\Command\Table\ImportExportShared\ImportOptions\CreateMode::class);
        $this->createMode = $var;

        return $this;
    }

    /**
     * list of values which should be imported as null, default should be always empty string
     *
     * Generated from protobuf field <code>repeated string importAsNull = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImportAsNull()
    {
        return $this->importAsNull;
    }

    /**
     * list of values which should be imported as null, default should be always empty string
     *
     * Generated from protobuf field <code>repeated string importAsNull = 9;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImportAsNull($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->importAsNull = $arr;

        return $this;
    }

    /**
     * columns that are ignored during import, used to ignore _timestamp column from check when importing table from workspace
     *
     * Generated from protobuf field <code>repeated string ignoreColumnsNames = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIgnoreColumnsNames()
    {
        return $this->ignoreColumnsNames;
    }

    /**
     * columns that are ignored during import, used to ignore _timestamp column from check when importing table from workspace
     *
     * Generated from protobuf field <code>repeated string ignoreColumnsNames = 10;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIgnoreColumnsNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ignoreColumnsNames = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImportOptions::class, \Keboola\StorageDriver\Command\Table\ImportExportShared_ImportOptions::class);

