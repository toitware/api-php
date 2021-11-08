<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/simulator.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.CreateSimulatorRequest</code>
 */
class CreateSimulatorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sdk_name = 1;</code>
     */
    protected $sdk_name = '';
    /**
     * Generated from protobuf field <code>.toit.model.HardwareIdentity identity = 2;</code>
     */
    protected $identity = null;
    /**
     * Generated from protobuf field <code>string device_name = 3;</code>
     */
    protected $device_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sdk_name
     *     @type \Toit\Model\HardwareIdentity $identity
     *     @type string $device_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Simulator::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sdk_name = 1;</code>
     * @return string
     */
    public function getSdkName()
    {
        return $this->sdk_name;
    }

    /**
     * Generated from protobuf field <code>string sdk_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSdkName($var)
    {
        GPBUtil::checkString($var, True);
        $this->sdk_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.HardwareIdentity identity = 2;</code>
     * @return \Toit\Model\HardwareIdentity|null
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    public function hasIdentity()
    {
        return isset($this->identity);
    }

    public function clearIdentity()
    {
        unset($this->identity);
    }

    /**
     * Generated from protobuf field <code>.toit.model.HardwareIdentity identity = 2;</code>
     * @param \Toit\Model\HardwareIdentity $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\HardwareIdentity::class);
        $this->identity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string device_name = 3;</code>
     * @return string
     */
    public function getDeviceName()
    {
        return $this->device_name;
    }

    /**
     * Generated from protobuf field <code>string device_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_name = $var;

        return $this;
    }

}

