<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/device.proto

namespace Toit\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.DeviceModulesConfig</code>
 */
class DeviceModulesConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp sync_requested = 1;</code>
     */
    protected $sync_requested = null;
    /**
     * Generated from protobuf field <code>.toit.model.DeviceModules modules = 2;</code>
     */
    protected $modules = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $sync_requested
     *     @type \Toit\Model\DeviceModules $modules
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp sync_requested = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getSyncRequested()
    {
        return $this->sync_requested;
    }

    public function hasSyncRequested()
    {
        return isset($this->sync_requested);
    }

    public function clearSyncRequested()
    {
        unset($this->sync_requested);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp sync_requested = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSyncRequested($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->sync_requested = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceModules modules = 2;</code>
     * @return \Toit\Model\DeviceModules|null
     */
    public function getModules()
    {
        return $this->modules;
    }

    public function hasModules()
    {
        return isset($this->modules);
    }

    public function clearModules()
    {
        unset($this->modules);
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceModules modules = 2;</code>
     * @param \Toit\Model\DeviceModules $var
     * @return $this
     */
    public function setModules($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\DeviceModules::class);
        $this->modules = $var;

        return $this;
    }

}

