<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/bucket.proto

namespace Keboola\StorageDriver\Command\Bucket;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Response which is always returned as result of LinkedBucketResponse
 *
 * Generated from protobuf message <code>keboola.storageDriver.command.bucket.LinkedBucketResponse</code>
 */
class LinkedBucketResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string linkedBucketObjectName = 1;</code>
     */
    protected $linkedBucketObjectName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $linkedBucketObjectName
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Bucket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string linkedBucketObjectName = 1;</code>
     * @return string
     */
    public function getLinkedBucketObjectName()
    {
        return $this->linkedBucketObjectName;
    }

    /**
     * Generated from protobuf field <code>string linkedBucketObjectName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLinkedBucketObjectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->linkedBucketObjectName = $var;

        return $this;
    }

}

