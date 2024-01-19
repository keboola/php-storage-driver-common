<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/bucket.proto

namespace Keboola\StorageDriver\Command\Bucket\LinkBucketCommand;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>keboola.storageDriver.command.bucket.LinkBucketCommand.LinkBucketBigqueryMeta</code>
 */
class LinkBucketBigqueryMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * region where linked bucket is created
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
     *           region where linked bucket is created
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Bucket::initOnce();
        parent::__construct($data);
    }

    /**
     * region where linked bucket is created
     *
     * Generated from protobuf field <code>string region = 1;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * region where linked bucket is created
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
class_alias(LinkBucketBigqueryMeta::class, \Keboola\StorageDriver\Command\Bucket\LinkBucketCommand_LinkBucketBigqueryMeta::class);

