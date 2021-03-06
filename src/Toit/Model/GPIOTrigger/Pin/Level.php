<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/job.proto

namespace Toit\Model\GPIOTrigger\Pin;

use UnexpectedValueException;

/**
 * Protobuf type <code>toit.model.GPIOTrigger.Pin.Level</code>
 */
class Level
{
    /**
     * Generated from protobuf enum <code>HIGH = 0;</code>
     */
    const HIGH = 0;
    /**
     * Generated from protobuf enum <code>LOW = 1;</code>
     */
    const LOW = 1;

    private static $valueToName = [
        self::HIGH => 'HIGH',
        self::LOW => 'LOW',
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
class_alias(Level::class, \Toit\Model\GPIOTrigger_Pin_Level::class);

