<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/job.proto

namespace Toit\Model;

use UnexpectedValueException;

/**
 * Protobuf type <code>toit.model.JobState</code>
 */
class JobState
{
    /**
     * Generated from protobuf enum <code>JOB_STATE_UNKNOWN = 0;</code>
     */
    const JOB_STATE_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>JOB_STATE_UNINSTALLED = 1;</code>
     */
    const JOB_STATE_UNINSTALLED = 1;
    /**
     * Generated from protobuf enum <code>JOB_STATE_INSTALLING = 2;</code>
     */
    const JOB_STATE_INSTALLING = 2;
    /**
     * Generated from protobuf enum <code>JOB_STATE_INSTALLED = 3;</code>
     */
    const JOB_STATE_INSTALLED = 3;
    /**
     * Generated from protobuf enum <code>JOB_STATE_FAILED = 4;</code>
     */
    const JOB_STATE_FAILED = 4;

    private static $valueToName = [
        self::JOB_STATE_UNKNOWN => 'JOB_STATE_UNKNOWN',
        self::JOB_STATE_UNINSTALLED => 'JOB_STATE_UNINSTALLED',
        self::JOB_STATE_INSTALLING => 'JOB_STATE_INSTALLING',
        self::JOB_STATE_INSTALLED => 'JOB_STATE_INSTALLED',
        self::JOB_STATE_FAILED => 'JOB_STATE_FAILED',
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

