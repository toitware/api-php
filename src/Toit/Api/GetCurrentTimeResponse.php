<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/device.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.GetCurrentTimeResponse</code>
 */
class GetCurrentTimeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp current_time = 1;</code>
     */
    protected $current_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $current_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp current_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCurrentTime()
    {
        return $this->current_time;
    }

    public function hasCurrentTime()
    {
        return isset($this->current_time);
    }

    public function clearCurrentTime()
    {
        unset($this->current_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp current_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCurrentTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->current_time = $var;

        return $this;
    }

}

