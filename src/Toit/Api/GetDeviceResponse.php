<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/device.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.GetDeviceResponse</code>
 */
class GetDeviceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.toit.api.Device device = 1;</code>
     */
    protected $device = null;
    /**
     * Generated from protobuf field <code>repeated .toit.api.Job jobs = 2 [deprecated = true];</code>
     * @deprecated
     */
    private $jobs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Api\Device $device
     *     @type \Toit\Api\Job[]|\Google\Protobuf\Internal\RepeatedField $jobs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.api.Device device = 1;</code>
     * @return \Toit\Api\Device|null
     */
    public function getDevice()
    {
        return $this->device;
    }

    public function hasDevice()
    {
        return isset($this->device);
    }

    public function clearDevice()
    {
        unset($this->device);
    }

    /**
     * Generated from protobuf field <code>.toit.api.Device device = 1;</code>
     * @param \Toit\Api\Device $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\Device::class);
        $this->device = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.api.Job jobs = 2 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getJobs()
    {
        @trigger_error('jobs is deprecated.', E_USER_DEPRECATED);
        return $this->jobs;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.api.Job jobs = 2 [deprecated = true];</code>
     * @param \Toit\Api\Job[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setJobs($var)
    {
        @trigger_error('jobs is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Toit\Api\Job::class);
        $this->jobs = $arr;

        return $this;
    }

}

