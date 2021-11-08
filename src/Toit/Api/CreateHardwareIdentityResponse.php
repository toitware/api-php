<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/simulator.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.CreateHardwareIdentityResponse</code>
 */
class CreateHardwareIdentityResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.toit.model.HardwareIdentity identity = 1;</code>
     */
    protected $identity = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Model\HardwareIdentity $identity
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Simulator::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.model.HardwareIdentity identity = 1;</code>
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
     * Generated from protobuf field <code>.toit.model.HardwareIdentity identity = 1;</code>
     * @param \Toit\Model\HardwareIdentity $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\HardwareIdentity::class);
        $this->identity = $var;

        return $this;
    }

}

