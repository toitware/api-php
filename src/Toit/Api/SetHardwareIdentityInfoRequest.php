<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/hardware.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.SetHardwareIdentityInfoRequest</code>
 */
class SetHardwareIdentityInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string flash_station_secret = 1;</code>
     */
    protected $flash_station_secret = '';
    /**
     * Generated from protobuf field <code>bytes hardware_id = 2;</code>
     */
    protected $hardware_id = '';
    /**
     * Generated from protobuf field <code>.toit.model.HardwareIdentityInfo info = 3;</code>
     */
    protected $info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $flash_station_secret
     *     @type string $hardware_id
     *     @type \Toit\Model\HardwareIdentityInfo $info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Hardware::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string flash_station_secret = 1;</code>
     * @return string
     */
    public function getFlashStationSecret()
    {
        return $this->flash_station_secret;
    }

    /**
     * Generated from protobuf field <code>string flash_station_secret = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFlashStationSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->flash_station_secret = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes hardware_id = 2;</code>
     * @return string
     */
    public function getHardwareId()
    {
        return $this->hardware_id;
    }

    /**
     * Generated from protobuf field <code>bytes hardware_id = 2;</code>
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
     * Generated from protobuf field <code>.toit.model.HardwareIdentityInfo info = 3;</code>
     * @return \Toit\Model\HardwareIdentityInfo|null
     */
    public function getInfo()
    {
        return $this->info;
    }

    public function hasInfo()
    {
        return isset($this->info);
    }

    public function clearInfo()
    {
        unset($this->info);
    }

    /**
     * Generated from protobuf field <code>.toit.model.HardwareIdentityInfo info = 3;</code>
     * @param \Toit\Model\HardwareIdentityInfo $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\HardwareIdentityInfo::class);
        $this->info = $var;

        return $this;
    }

}

