<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/device.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ListJobsFilter</code>
 */
class ListJobsFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes device_id = 1;</code>
     */
    protected $device_id = '';
    /**
     * Generated from protobuf field <code>repeated .toit.model.JobState states = 2;</code>
     */
    private $states;
    /**
     * Generated from protobuf field <code>repeated .toit.model.JobGoalState goalstates = 3;</code>
     */
    private $goalstates;
    /**
     * Generated from protobuf field <code>bytes job_id = 4;</code>
     */
    protected $job_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $device_id
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $states
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $goalstates
     *     @type string $job_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes device_id = 1;</code>
     * @return string
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }

    /**
     * Generated from protobuf field <code>bytes device_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, False);
        $this->device_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.JobState states = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.JobState states = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Toit\Model\JobState::class);
        $this->states = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.JobGoalState goalstates = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGoalstates()
    {
        return $this->goalstates;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.JobGoalState goalstates = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGoalstates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Toit\Model\JobGoalState::class);
        $this->goalstates = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes job_id = 4;</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Generated from protobuf field <code>bytes job_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, False);
        $this->job_id = $var;

        return $this;
    }

}

