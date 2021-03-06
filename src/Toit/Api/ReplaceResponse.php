<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/hardware.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ReplaceResponse</code>
 */
class ReplaceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.toit.model.HardwareInfo hardware_info = 1;</code>
     */
    protected $hardware_info = null;
    /**
     * Generated from protobuf field <code>bytes organization_id = 2;</code>
     */
    protected $organization_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Model\HardwareInfo $hardware_info
     *     @type string $organization_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Hardware::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.model.HardwareInfo hardware_info = 1;</code>
     * @return \Toit\Model\HardwareInfo|null
     */
    public function getHardwareInfo()
    {
        return $this->hardware_info;
    }

    public function hasHardwareInfo()
    {
        return isset($this->hardware_info);
    }

    public function clearHardwareInfo()
    {
        unset($this->hardware_info);
    }

    /**
     * Generated from protobuf field <code>.toit.model.HardwareInfo hardware_info = 1;</code>
     * @param \Toit\Model\HardwareInfo $var
     * @return $this
     */
    public function setHardwareInfo($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\HardwareInfo::class);
        $this->hardware_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes organization_id = 2;</code>
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * Generated from protobuf field <code>bytes organization_id = 2;</code>
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

