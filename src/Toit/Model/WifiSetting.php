<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/device.proto

namespace Toit\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.WifiSetting</code>
 */
class WifiSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ssid = 1;</code>
     */
    protected $ssid = '';
    /**
     * Generated from protobuf field <code>string password = 2;</code>
     */
    protected $password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ssid
     *     @type string $password
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ssid = 1;</code>
     * @return string
     */
    public function getSsid()
    {
        return $this->ssid;
    }

    /**
     * Generated from protobuf field <code>string ssid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSsid($var)
    {
        GPBUtil::checkString($var, True);
        $this->ssid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

}
