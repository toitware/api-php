<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/data.proto

namespace Toit\Model\LogData;

use UnexpectedValueException;

/**
 * Protobuf type <code>toit.model.LogData.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>PRINT = 1;</code>
     */
    const PBPRINT = 1;
    /**
     * Generated from protobuf enum <code>PROCESS_START = 2;</code>
     */
    const PROCESS_START = 2;
    /**
     * Generated from protobuf enum <code>PROCESS_STOP = 3;</code>
     */
    const PROCESS_STOP = 3;
    /**
     * Generated from protobuf enum <code>STACK_TRACE = 4;</code>
     */
    const STACK_TRACE = 4;
    /**
     * Generated from protobuf enum <code>BOOT = 5;</code>
     */
    const BOOT = 5;
    /**
     * Generated from protobuf enum <code>SHUTDOWN = 6;</code>
     */
    const SHUTDOWN = 6;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::PBPRINT => 'PBPRINT',
        self::PROCESS_START => 'PROCESS_START',
        self::PROCESS_STOP => 'PROCESS_STOP',
        self::STACK_TRACE => 'STACK_TRACE',
        self::BOOT => 'BOOT',
        self::SHUTDOWN => 'SHUTDOWN',
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
class_alias(Type::class, \Toit\Model\LogData_Type::class);

