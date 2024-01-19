<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/project.proto

namespace Keboola\StorageDriver\Command\Project\DropProjectCommand;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Bigquery backend metadata
 *
 * Generated from protobuf message <code>keboola.storageDriver.command.project.DropProjectCommand.DropProjectBigqueryMeta</code>
 */
class DropProjectBigqueryMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * file storage bucket in GCS
     *
     * Generated from protobuf field <code>string gcsFileBucketName = 1;</code>
     */
    protected $gcsFileBucketName = '';
    /**
     * region where exchanger is created during project creation
     *
     * Generated from protobuf field <code>string region = 2;</code>
     */
    protected $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gcsFileBucketName
     *           file storage bucket in GCS
     *     @type string $region
     *           region where exchanger is created during project creation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Project::initOnce();
        parent::__construct($data);
    }

    /**
     * file storage bucket in GCS
     *
     * Generated from protobuf field <code>string gcsFileBucketName = 1;</code>
     * @return string
     */
    public function getGcsFileBucketName()
    {
        return $this->gcsFileBucketName;
    }

    /**
     * file storage bucket in GCS
     *
     * Generated from protobuf field <code>string gcsFileBucketName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsFileBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcsFileBucketName = $var;

        return $this;
    }

    /**
     * region where exchanger is created during project creation
     *
     * Generated from protobuf field <code>string region = 2;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * region where exchanger is created during project creation
     *
     * Generated from protobuf field <code>string region = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DropProjectBigqueryMeta::class, \Keboola\StorageDriver\Command\Project\DropProjectCommand_DropProjectBigqueryMeta::class);

