<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/backend/bigQuery.proto

namespace Keboola\StorageDriver\Backend\BigQuery\RangePartitioning;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>keboola.storageDriver.backend.bigQuery.RangePartitioning.Range</code>
 */
class Range extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string start = 1;</code>
     */
    protected $start = '';
    /**
     * Generated from protobuf field <code>string end = 2;</code>
     */
    protected $end = '';
    /**
     * Generated from protobuf field <code>string interval = 3;</code>
     */
    protected $interval = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $start
     *     @type string $end
     *     @type string $interval
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Backend\BigQuery::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string start = 1;</code>
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Generated from protobuf field <code>string start = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkString($var, True);
        $this->start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string end = 2;</code>
     * @return string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Generated from protobuf field <code>string end = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkString($var, True);
        $this->end = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string interval = 3;</code>
     * @return string
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Generated from protobuf field <code>string interval = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkString($var, True);
        $this->interval = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Range::class, \Keboola\StorageDriver\Backend\BigQuery\RangePartitioning_Range::class);

