<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/device.proto

namespace Toit\Model\DeviceEvent\Info\Value;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.DeviceEvent.Info.Value.Primitive</code>
 */
class Primitive extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.toit.model.DeviceEvent.Info.Value.Primitive.Type type = 1;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>bytes value = 2;</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type string $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceEvent.Info.Value.Primitive.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceEvent.Info.Value.Primitive.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Toit\Model\DeviceEvent\Info\Value\Primitive\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>bytes value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Primitive::class, \Toit\Model\DeviceEvent_Info_Value_Primitive::class);

