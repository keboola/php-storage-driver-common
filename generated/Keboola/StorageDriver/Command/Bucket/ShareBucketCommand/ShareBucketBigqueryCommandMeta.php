<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/bucket.proto

namespace Keboola\StorageDriver\Command\Bucket\ShareBucketCommand;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * @deprecated
 * Generated from protobuf message <code>keboola.storageDriver.command.bucket.ShareBucketCommand.ShareBucketBigqueryCommandMeta</code>
 */
class ShareBucketBigqueryCommandMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * region where listing is created
     *
     * Generated from protobuf field <code>string region = 1;</code>
     */
    protected $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $region
     *           region where listing is created
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Bucket::initOnce();
        parent::__construct($data);
    }

    /**
     * region where listing is created
     *
     * Generated from protobuf field <code>string region = 1;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * region where listing is created
     *
     * Generated from protobuf field <code>string region = 1;</code>
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
class_alias(ShareBucketBigqueryCommandMeta::class, \Keboola\StorageDriver\Command\Bucket\ShareBucketCommand_ShareBucketBigqueryCommandMeta::class);

