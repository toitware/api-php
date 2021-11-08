<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/data.proto

namespace Toit\Model\LogData;

use UnexpectedValueException;

/**
 * Protobuf type <code>toit.model.LogData.Level</code>
 */
class Level
{
    /**
     * Generated from protobuf enum <code>PRINT_LEVEL = 0;</code>
     */
    const PRINT_LEVEL = 0;
    /**
     * Generated from protobuf enum <code>DEBUG_LEVEL = 1;</code>
     */
    const DEBUG_LEVEL = 1;
    /**
     * Generated from protobuf enum <code>INFO_LEVEL = 2;</code>
     */
    const INFO_LEVEL = 2;
    /**
     * Generated from protobuf enum <code>WARN_LEVEL = 3;</code>
     */
    const WARN_LEVEL = 3;
    /**
     * Generated from protobuf enum <code>ERROR_LEVEL = 4;</code>
     */
    const ERROR_LEVEL = 4;
    /**
     * Generated from protobuf enum <code>FATAL_LEVEL = 5;</code>
     */
    const FATAL_LEVEL = 5;

    private static $valueToName = [
        self::PRINT_LEVEL => 'PRINT_LEVEL',
        self::DEBUG_LEVEL => 'DEBUG_LEVEL',
        self::INFO_LEVEL => 'INFO_LEVEL',
        self::WARN_LEVEL => 'WARN_LEVEL',
        self::ERROR_LEVEL => 'ERROR_LEVEL',
        self::FATAL_LEVEL => 'FATAL_LEVEL',
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
class_alias(Level::class, \Toit\Model\LogData_Level::class);

