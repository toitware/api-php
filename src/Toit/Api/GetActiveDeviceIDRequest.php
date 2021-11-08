<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/hardware.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.GetActiveDeviceIDRequest</code>
 */
class GetActiveDeviceIDRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes hardware_id = 1;</code>
     */
    protected $hardware_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hardware_id
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

}
