<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/hardware.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ClaimHardwareIdentityResponse</code>
 */
class ClaimHardwareIdentityResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.toit.model.HardwareIdentity hardware_identity = 1;</code>
     */
    protected $hardware_identity = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Model\HardwareIdentity $hardware_identity
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Hardware::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.model.HardwareIdentity hardware_identity = 1;</code>
     * @return \Toit\Model\HardwareIdentity|null
     */
    public function getHardwareIdentity()
    {
        return $this->hardware_identity;
    }

    public function hasHardwareIdentity()
    {
        return isset($this->hardware_identity);
    }

    public function clearHardwareIdentity()
    {
        unset($this->hardware_identity);
    }

    /**
     * Generated from protobuf field <code>.toit.model.HardwareIdentity hardware_identity = 1;</code>
     * @param \Toit\Model\HardwareIdentity $var
     * @return $this
     */
    public function setHardwareIdentity($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\HardwareIdentity::class);
        $this->hardware_identity = $var;

        return $this;
    }

}

