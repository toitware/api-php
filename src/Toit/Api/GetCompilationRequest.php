<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/program.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.GetCompilationRequest</code>
 */
class GetCompilationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes compilation_id = 1;</code>
     */
    protected $compilation_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $compilation_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Program::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes compilation_id = 1;</code>
     * @return string
     */
    public function getCompilationId()
    {
        return $this->compilation_id;
    }

    /**
     * Generated from protobuf field <code>bytes compilation_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCompilationId($var)
    {
        GPBUtil::checkString($var, False);
        $this->compilation_id = $var;

        return $this;
    }

}
