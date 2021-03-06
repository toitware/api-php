<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/hardware.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ReplaceRequest</code>
 */
class ReplaceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes new_hardware_id = 1;</code>
     */
    protected $new_hardware_id = '';
    /**
     * Generated from protobuf field <code>bytes current_hardware_id = 2;</code>
     */
    protected $current_hardware_id = '';
    /**
     * The ID of the device to replace.
     *
     * Generated from protobuf field <code>bytes device_id = 3;</code>
     */
    protected $device_id = '';
    /**
     * Optional to set. Default is the current org for the user.
     *
     * Generated from protobuf field <code>bytes organization_id = 4;</code>
     */
    protected $organization_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $new_hardware_id
     *     @type string $current_hardware_id
     *     @type string $device_id
     *           The ID of the device to replace.
     *     @type string $organization_id
     *           Optional to set. Default is the current org for the user.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Hardware::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes new_hardware_id = 1;</code>
     * @return string
     */
    public function getNewHardwareId()
    {
        return $this->new_hardware_id;
    }

    /**
     * Generated from protobuf field <code>bytes new_hardware_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNewHardwareId($var)
    {
        GPBUtil::checkString($var, False);
        $this->new_hardware_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes current_hardware_id = 2;</code>
     * @return string
     */
    public function getCurrentHardwareId()
    {
        return $this->current_hardware_id;
    }

    /**
     * Generated from protobuf field <code>bytes current_hardware_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrentHardwareId($var)
    {
        GPBUtil::checkString($var, False);
        $this->current_hardware_id = $var;

        return $this;
    }

    /**
     * The ID of the device to replace.
     *
     * Generated from protobuf field <code>bytes device_id = 3;</code>
     * @return string
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }

    /**
     * The ID of the device to replace.
     *
     * Generated from protobuf field <code>bytes device_id = 3;</code>
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
     * Optional to set. Default is the current org for the user.
     *
     * Generated from protobuf field <code>bytes organization_id = 4;</code>
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * Optional to set. Default is the current org for the user.
     *
     * Generated from protobuf field <code>bytes organization_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrganizationId($var)
    {
        GPBUtil::checkString($var, False);
        $this->organization_id = $var;

        return $this;
    }

}

