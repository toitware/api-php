<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/hardware.proto

namespace Toit\Api\HardwareEvent;

use UnexpectedValueException;

/**
 * Protobuf type <code>toit.api.HardwareEvent.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>LOGS = 1;</code>
     */
    const LOGS = 1;
    /**
     * Generated from protobuf enum <code>METRICS = 2;</code>
     */
    const METRICS = 2;
    /**
     * Generated from protobuf enum <code>PUBSUB = 3;</code>
     */
    const PUBSUB = 3;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::LOGS => 'LOGS',
        self::METRICS => 'METRICS',
        self::PUBSUB => 'PUBSUB',
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
class_alias(Type::class, \Toit\Api\HardwareEvent_Type::class);

