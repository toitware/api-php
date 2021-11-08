<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/device.proto

namespace Toit\Model\DeviceEvent;

use UnexpectedValueException;

/**
 * Protobuf type <code>toit.model.DeviceEvent.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>CONFIG_CHANGE = 1;</code>
     */
    const CONFIG_CHANGE = 1;
    /**
     * Generated from protobuf enum <code>STATUS_CHANGE = 2;</code>
     */
    const STATUS_CHANGE = 2;
    /**
     * Generated from protobuf enum <code>NEXT_ACTION = 3;</code>
     */
    const NEXT_ACTION = 3;
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION = 4;</code>
     */
    const DEVICE_ACTION = 4;
    /**
     * Generated from protobuf enum <code>QUEUE_OVERFLOW = 5;</code>
     */
    const QUEUE_OVERFLOW = 5;
    /**
     * Generated from protobuf enum <code>REQUEST_FILE = 6;</code>
     */
    const REQUEST_FILE = 6;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::CONFIG_CHANGE => 'CONFIG_CHANGE',
        self::STATUS_CHANGE => 'STATUS_CHANGE',
        self::NEXT_ACTION => 'NEXT_ACTION',
        self::DEVICE_ACTION => 'DEVICE_ACTION',
        self::QUEUE_OVERFLOW => 'QUEUE_OVERFLOW',
        self::REQUEST_FILE => 'REQUEST_FILE',
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
class_alias(Type::class, \Toit\Model\DeviceEvent_Type::class);

