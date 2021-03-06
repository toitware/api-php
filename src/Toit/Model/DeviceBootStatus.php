<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/device.proto

namespace Toit\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.DeviceBootStatus</code>
 */
class DeviceBootStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_boot = 1;</code>
     */
    protected $last_boot = null;
    /**
     * Generated from protobuf field <code>bool in_factory = 2;</code>
     */
    protected $in_factory = false;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_factory_boot = 3;</code>
     */
    protected $last_factory_boot = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $last_boot
     *     @type bool $in_factory
     *     @type \Google\Protobuf\Timestamp $last_factory_boot
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_boot = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastBoot()
    {
        return $this->last_boot;
    }

    public function hasLastBoot()
    {
        return isset($this->last_boot);
    }

    public function clearLastBoot()
    {
        unset($this->last_boot);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_boot = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastBoot($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_boot = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool in_factory = 2;</code>
     * @return bool
     */
    public function getInFactory()
    {
        return $this->in_factory;
    }

    /**
     * Generated from protobuf field <code>bool in_factory = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setInFactory($var)
    {
        GPBUtil::checkBool($var);
        $this->in_factory = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_factory_boot = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastFactoryBoot()
    {
        return $this->last_factory_boot;
    }

    public function hasLastFactoryBoot()
    {
        return isset($this->last_factory_boot);
    }

    public function clearLastFactoryBoot()
    {
        unset($this->last_factory_boot);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_factory_boot = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastFactoryBoot($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_factory_boot = $var;

        return $this;
    }

}

