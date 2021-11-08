<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/device.proto

namespace Toit\Model;

use UnexpectedValueException;

/**
 * Protobuf type <code>toit.model.DeviceSessionChangeType</code>
 */
class DeviceSessionChangeType
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_TYPE = 0;</code>
     */
    const UNKNOWN_TYPE = 0;
    /**
     * Generated from protobuf enum <code>CONNECTED = 1;</code>
     */
    const CONNECTED = 1;
    /**
     * Generated from protobuf enum <code>DISCONNECTED = 2;</code>
     */
    const DISCONNECTED = 2;

    private static $valueToName = [
        self::UNKNOWN_TYPE => 'UNKNOWN_TYPE',
        self::CONNECTED => 'CONNECTED',
        self::DISCONNECTED => 'DISCONNECTED',
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
