<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/common.proto

namespace Keboola\StorageDriver\Command\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Generic log message compliant with PSR-3
 *
 * Generated from protobuf message <code>keboola.storageDriver.command.common.LogMessage</code>
 */
class LogMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.common.LogMessage.Level level = 1;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>string message = 2;</code>
     */
    protected $message = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Any context = 3;</code>
     */
    protected $context = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $level
     *     @type string $message
     *     @type \Google\Protobuf\Any $context
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.common.LogMessage.Level level = 1;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>.keboola.storageDriver.command.common.LogMessage.Level level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Keboola\StorageDriver\Command\Common\LogMessage\Level::class);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any context = 3;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getContext()
    {
        return $this->context;
    }

    public function hasContext()
    {
        return isset($this->context);
    }

    public function clearContext()
    {
        unset($this->context);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any context = 3;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->context = $var;

        return $this;
    }

}

