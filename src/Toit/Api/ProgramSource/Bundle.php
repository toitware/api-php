<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/program.proto

namespace Toit\Api\ProgramSource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ProgramSource.Bundle</code>
 */
class Bundle extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes bundle = 1;</code>
     */
    protected $bundle = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bundle
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Program::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes bundle = 1;</code>
     * @return string
     */
    public function getBundle()
    {
        return $this->bundle;
    }

    /**
     * Generated from protobuf field <code>bytes bundle = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBundle($var)
    {
        GPBUtil::checkString($var, False);
        $this->bundle = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Bundle::class, \Toit\Api\ProgramSource_Bundle::class);

