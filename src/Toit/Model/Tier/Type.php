<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/organization.proto

namespace Toit\Model\Tier;

use UnexpectedValueException;

/**
 * Protobuf type <code>toit.model.Tier.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>FREE = 1;</code>
     */
    const FREE = 1;
    /**
     * Generated from protobuf enum <code>PAID = 2;</code>
     */
    const PAID = 2;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::FREE => 'FREE',
        self::PAID => 'PAID',
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
class_alias(Type::class, \Toit\Model\Tier_Type::class);

