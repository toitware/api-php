<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/organization.proto

namespace Toit\Model\Customer;

use UnexpectedValueException;

/**
 * Protobuf type <code>toit.model.Customer.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>PERSON = 1;</code>
     */
    const PERSON = 1;
    /**
     * Generated from protobuf enum <code>ORGANIZATION = 2;</code>
     */
    const ORGANIZATION = 2;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::PERSON => 'PERSON',
        self::ORGANIZATION => 'ORGANIZATION',
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
class_alias(Type::class, \Toit\Model\Customer_Type::class);

