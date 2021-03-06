<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/program.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.GetCompilationResponse</code>
 */
class GetCompilationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.toit.model.Compilation compilation = 1;</code>
     */
    protected $compilation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Model\Compilation $compilation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Program::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.model.Compilation compilation = 1;</code>
     * @return \Toit\Model\Compilation|null
     */
    public function getCompilation()
    {
        return $this->compilation;
    }

    public function hasCompilation()
    {
        return isset($this->compilation);
    }

    public function clearCompilation()
    {
        unset($this->compilation);
    }

    /**
     * Generated from protobuf field <code>.toit.model.Compilation compilation = 1;</code>
     * @param \Toit\Model\Compilation $var
     * @return $this
     */
    public function setCompilation($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\Compilation::class);
        $this->compilation = $var;

        return $this;
    }

}

