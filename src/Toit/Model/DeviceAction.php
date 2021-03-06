<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/device.proto

namespace Toit\Model;

use UnexpectedValueException;

/**
 * Protobuf type <code>toit.model.DeviceAction</code>
 */
class DeviceAction
{
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION_UNKNOWN = 0;</code>
     */
    const DEVICE_ACTION_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION_NOP = 1;</code>
     */
    const DEVICE_ACTION_NOP = 1;
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION_REBOOT = 2;</code>
     */
    const DEVICE_ACTION_REBOOT = 2;
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION_NEW_EPOCH = 3;</code>
     */
    const DEVICE_ACTION_NEW_EPOCH = 3;
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION_REPORT_CONFIG = 4;</code>
     */
    const DEVICE_ACTION_REPORT_CONFIG = 4;
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION_FACTORY_PROMOTE = 5;</code>
     */
    const DEVICE_ACTION_FACTORY_PROMOTE = 5;
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION_UPDATE_CONFIG = 6;</code>
     */
    const DEVICE_ACTION_UPDATE_CONFIG = 6;
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION_UPDATE_FIRMWARE = 7;</code>
     */
    const DEVICE_ACTION_UPDATE_FIRMWARE = 7;
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION_FACTORY_RESET = 8;</code>
     */
    const DEVICE_ACTION_FACTORY_RESET = 8;
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION_RECONCILE = 9;</code>
     */
    const DEVICE_ACTION_RECONCILE = 9;
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION_UPDATE_PARTIAL_FIRMWARE = 10;</code>
     */
    const DEVICE_ACTION_UPDATE_PARTIAL_FIRMWARE = 10;
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION_REPORT_MODULES = 11;</code>
     */
    const DEVICE_ACTION_REPORT_MODULES = 11;
    /**
     * Generated from protobuf enum <code>DEVICE_ACTION_UPDATE_MODULE_CELLULAR = 12;</code>
     */
    const DEVICE_ACTION_UPDATE_MODULE_CELLULAR = 12;

    private static $valueToName = [
        self::DEVICE_ACTION_UNKNOWN => 'DEVICE_ACTION_UNKNOWN',
        self::DEVICE_ACTION_NOP => 'DEVICE_ACTION_NOP',
        self::DEVICE_ACTION_REBOOT => 'DEVICE_ACTION_REBOOT',
        self::DEVICE_ACTION_NEW_EPOCH => 'DEVICE_ACTION_NEW_EPOCH',
        self::DEVICE_ACTION_REPORT_CONFIG => 'DEVICE_ACTION_REPORT_CONFIG',
        self::DEVICE_ACTION_FACTORY_PROMOTE => 'DEVICE_ACTION_FACTORY_PROMOTE',
        self::DEVICE_ACTION_UPDATE_CONFIG => 'DEVICE_ACTION_UPDATE_CONFIG',
        self::DEVICE_ACTION_UPDATE_FIRMWARE => 'DEVICE_ACTION_UPDATE_FIRMWARE',
        self::DEVICE_ACTION_FACTORY_RESET => 'DEVICE_ACTION_FACTORY_RESET',
        self::DEVICE_ACTION_RECONCILE => 'DEVICE_ACTION_RECONCILE',
        self::DEVICE_ACTION_UPDATE_PARTIAL_FIRMWARE => 'DEVICE_ACTION_UPDATE_PARTIAL_FIRMWARE',
        self::DEVICE_ACTION_REPORT_MODULES => 'DEVICE_ACTION_REPORT_MODULES',
        self::DEVICE_ACTION_UPDATE_MODULE_CELLULAR => 'DEVICE_ACTION_UPDATE_MODULE_CELLULAR',
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

