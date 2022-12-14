<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/bucket.proto

namespace Keboola\StorageDriver\Command\Bucket;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>keboola.storageDriver.command.bucket.LinkBucketCommand</code>
 */
class LinkBucketCommand extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string stackPrefix = 1;</code>
     */
    protected $stackPrefix = '';
    /**
     * Generated from protobuf field <code>string targetProjectId = 2;</code>
     */
    protected $targetProjectId = '';
    /**
     * Generated from protobuf field <code>string targetBucketId = 3;</code>
     */
    protected $targetBucketId = '';
    /**
     * Generated from protobuf field <code>string sourceShareRoleName = 4;</code>
     */
    protected $sourceShareRoleName = '';
    /**
     * Generated from protobuf field <code>string targetProjectReadOnlyRoleName = 5;</code>
     */
    protected $targetProjectReadOnlyRoleName = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Any meta = 6;</code>
     */
    protected $meta = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $stackPrefix
     *     @type string $targetProjectId
     *     @type string $targetBucketId
     *     @type string $sourceShareRoleName
     *     @type string $targetProjectReadOnlyRoleName
     *     @type \Google\Protobuf\Any $meta
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Bucket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string stackPrefix = 1;</code>
     * @return string
     */
    public function getStackPrefix()
    {
        return $this->stackPrefix;
    }

    /**
     * Generated from protobuf field <code>string stackPrefix = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStackPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->stackPrefix = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string targetProjectId = 2;</code>
     * @return string
     */
    public function getTargetProjectId()
    {
        return $this->targetProjectId;
    }

    /**
     * Generated from protobuf field <code>string targetProjectId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->targetProjectId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string targetBucketId = 3;</code>
     * @return string
     */
    public function getTargetBucketId()
    {
        return $this->targetBucketId;
    }

    /**
     * Generated from protobuf field <code>string targetBucketId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetBucketId($var)
    {
        GPBUtil::checkString($var, True);
        $this->targetBucketId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sourceShareRoleName = 4;</code>
     * @return string
     */
    public function getSourceShareRoleName()
    {
        return $this->sourceShareRoleName;
    }

    /**
     * Generated from protobuf field <code>string sourceShareRoleName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceShareRoleName($var)
    {
        GPBUtil::checkString($var, True);
        $this->sourceShareRoleName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string targetProjectReadOnlyRoleName = 5;</code>
     * @return string
     */
    public function getTargetProjectReadOnlyRoleName()
    {
        return $this->targetProjectReadOnlyRoleName;
    }

    /**
     * Generated from protobuf field <code>string targetProjectReadOnlyRoleName = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetProjectReadOnlyRoleName($var)
    {
        GPBUtil::checkString($var, True);
        $this->targetProjectReadOnlyRoleName = $var;

        return $this;
    }

    /**
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

