<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/program.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.RunInput</code>
 */
class RunInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes input = 1;</code>
     */
    protected $input = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $input
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Program::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes input = 1;</code>
     * @return string
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Generated from protobuf field <code>bytes input = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkString($var, False);
        $this->input = $var;

        return $this;
    }

}

