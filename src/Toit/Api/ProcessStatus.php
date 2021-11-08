<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/device.proto

namespace Toit\Api;

use UnexpectedValueException;

/**
 * Protobuf type <code>toit.api.ProcessStatus</code>
 */
class ProcessStatus
{
    /**
     * Generated from protobuf enum <code>PROCESS_STATUS_UNKNOWN = 0;</code>
     */
    const PROCESS_STATUS_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>PROCESS_STATUS_RUNNING = 1;</code>
     */
    const PROCESS_STATUS_RUNNING = 1;
    /**
     * Generated from protobuf enum <code>PROCESS_STATUS_TERMINATED = 2;</code>
     */
    const PROCESS_STATUS_TERMINATED = 2;

    private static $valueToName = [
        self::PROCESS_STATUS_UNKNOWN => 'PROCESS_STATUS_UNKNOWN',
        self::PROCESS_STATUS_RUNNING => 'PROCESS_STATUS_RUNNING',
        self::PROCESS_STATUS_TERMINATED => 'PROCESS_STATUS_TERMINATED',
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

