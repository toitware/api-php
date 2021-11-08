<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/device.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ReadDeviceLogsResponse</code>
 */
class ReadDeviceLogsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .toit.api.DeviceLog logs = 1;</code>
     */
    private $logs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Api\DeviceLog[]|\Google\Protobuf\Internal\RepeatedField $logs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .toit.api.DeviceLog logs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.api.DeviceLog logs = 1;</code>
     * @param \Toit\Api\DeviceLog[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Toit\Api\DeviceLog::class);
        $this->logs = $arr;

        return $this;
    }

}

