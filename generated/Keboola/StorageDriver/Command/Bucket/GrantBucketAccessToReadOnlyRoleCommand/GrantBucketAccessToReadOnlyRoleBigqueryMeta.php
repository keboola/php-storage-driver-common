<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/bucket.proto

namespace Keboola\StorageDriver\Command\Bucket\GrantBucketAccessToReadOnlyRoleCommand;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>keboola.storageDriver.command.bucket.GrantBucketAccessToReadOnlyRoleCommand.GrantBucketAccessToReadOnlyRoleBigqueryMeta</code>
 */
class GrantBucketAccessToReadOnlyRoleBigqueryMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * region where destination dataset is created
     *
     * Generated from protobuf field <code>string region = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $region
     *           region where destination dataset is created
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Bucket::initOnce();
        parent::__construct($data);
    }

    /**
     * region where destination dataset is created
     *
     * Generated from protobuf field <code>string region = 1 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getRegion()
    {
        @trigger_error('region is deprecated.', E_USER_DEPRECATED);
        return $this->region;
    }

    /**
     * region where destination dataset is created
     *
     * Generated from protobuf field <code>string region = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setRegion($var)
    {
        @trigger_error('region is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GrantBucketAccessToReadOnlyRoleBigqueryMeta::class, \Keboola\StorageDriver\Command\Bucket\GrantBucketAccessToReadOnlyRoleCommand_GrantBucketAccessToReadOnlyRoleBigqueryMeta::class);

