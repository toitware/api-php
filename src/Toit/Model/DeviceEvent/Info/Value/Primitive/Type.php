<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/device.proto

namespace Toit\Model\DeviceEvent\Info\Value\Primitive;

use UnexpectedValueException;

/**
 * Protobuf type <code>toit.model.DeviceEvent.Info.Value.Primitive.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>INVALID = 0;</code>
     */
    const INVALID = 0;
    /**
     * Generated from protobuf enum <code>JSON = 1;</code>
     */
    const JSON = 1;
    /**
     * Generated from protobuf enum <code>STRING = 2;</code>
     */
    const STRING = 2;

    private static $valueToName = [
        self::INVALID => 'INVALID',
        self::JSON => 'JSON',
        self::STRING => 'STRING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Toit\Model\DeviceEvent_Info_Value_Primitive_Type::class);
