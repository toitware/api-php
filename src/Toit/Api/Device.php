<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/device.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.Device</code>
 */
class Device extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>bytes hardware_id = 5;</code>
     */
    protected $hardware_id = '';
    /**
     * Generated from protobuf field <code>string hardware_fqdn = 6;</code>
     */
    protected $hardware_fqdn = '';
    /**
     * Generated from protobuf field <code>.toit.model.DeviceConfig config = 7;</code>
     */
    protected $config = null;
    /**
     * Generated from protobuf field <code>.toit.model.DeviceStatus status = 8;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>bool is_simulator = 9;</code>
     */
    protected $is_simulator = false;
    /**
     * Generated from protobuf field <code>.toit.model.DeviceAction next_action = 10;</code>
     */
    protected $next_action = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $hardware_id
     *     @type string $hardware_fqdn
     *     @type \Toit\Model\DeviceConfig $config
     *     @type \Toit\Model\DeviceStatus $status
     *     @type bool $is_simulator
     *     @type int $next_action
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>bytes id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, False);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes hardware_id = 5;</code>
     * @return string
     */
    public function getHardwareId()
    {
        return $this->hardware_id;
    }

    /**
     * Generated from protobuf field <code>bytes hardware_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setHardwareId($var)
    {
        GPBUtil::checkString($var, False);
        $this->hardware_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string hardware_fqdn = 6;</code>
     * @return string
     */
    public function getHardwareFqdn()
    {
        return $this->hardware_fqdn;
    }

    /**
     * Generated from protobuf field <code>string hardware_fqdn = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setHardwareFqdn($var)
    {
        GPBUtil::checkString($var, True);
        $this->hardware_fqdn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceConfig config = 7;</code>
     * @return \Toit\Model\DeviceConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceConfig config = 7;</code>
     * @param \Toit\Model\DeviceConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\DeviceConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceStatus status = 8;</code>
     * @return \Toit\Model\DeviceStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceStatus status = 8;</code>
     * @param \Toit\Model\DeviceStatus $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\DeviceStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_simulator = 9;</code>
     * @return bool
     */
    public function getIsSimulator()
    {
        return $this->is_simulator;
    }

    /**
     * Generated from protobuf field <code>bool is_simulator = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSimulator($var)
    {
        GPBUtil::checkBool($var);
        $this->is_simulator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceAction next_action = 10;</code>
     * @return int
     */
    public function getNextAction()
    {
        return $this->next_action;
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceAction next_action = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setNextAction($var)
    {
        GPBUtil::checkEnum($var, \Toit\Model\DeviceAction::class);
        $this->next_action = $var;

        return $this;
    }

}

