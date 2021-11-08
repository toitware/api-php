<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/hardware.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ClaimRequest</code>
 */
class ClaimRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes hardware_id = 1;</code>
     */
    protected $hardware_id = '';
    /**
     * Generated from protobuf field <code>string init_device_name = 2;</code>
     */
    protected $init_device_name = '';
    /**
     * Optional to set. Default is the current org for the user.
     *
     * Generated from protobuf field <code>bytes organization_id = 3;</code>
     */
    protected $organization_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hardware_id
     *     @type string $init_device_name
     *     @type string $organization_id
     *           Optional to set. Default is the current org for the user.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Hardware::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes hardware_id = 1;</code>
     * @return string
     */
    public function getHardwareId()
    {
        return $this->hardware_id;
    }

    /**
     * Generated from protobuf field <code>bytes hardware_id = 1;</code>
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
     * Generated from protobuf field <code>string init_device_name = 2;</code>
     * @return string
     */
    public function getInitDeviceName()
    {
        return $this->init_device_name;
    }

    /**
     * Generated from protobuf field <code>string init_device_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInitDeviceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->init_device_name = $var;

        return $this;
    }

    /**
     * Optional to set. Default is the current org for the user.
     *
     * Generated from protobuf field <code>bytes organization_id = 3;</code>
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * Optional to set. Default is the current org for the user.
     *
     * Generated from protobuf field <code>bytes organization_id = 3;</code>
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

