<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/device.proto

namespace Toit\Model;

use UnexpectedValueException;

/**
 * Protobuf type <code>toit.model.DeviceModuleType</code>
 */
class DeviceModuleType
{
    /**
     * Generated from protobuf enum <code>Unknown = 0;</code>
     */
    const Unknown = 0;
    /**
     * Generated from protobuf enum <code>Cellular = 1;</code>
     */
    const Cellular = 1;

    private static $valueToName = [
        self::Unknown => 'Unknown',
        self::Cellular => 'Cellular',
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

