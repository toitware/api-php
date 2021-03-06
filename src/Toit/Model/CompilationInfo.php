<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/job.proto

namespace Toit\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.CompilationInfo</code>
 */
class CompilationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes program_id = 1;</code>
     */
    protected $program_id = '';
    /**
     * Generated from protobuf field <code>string sdk = 2;</code>
     */
    protected $sdk = '';
    /**
     * Generated from protobuf field <code>bytes creator_id = 3;</code>
     */
    protected $creator_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $program_id
     *     @type string $sdk
     *     @type string $creator_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes program_id = 1;</code>
     * @return string
     */
    public function getProgramId()
    {
        return $this->program_id;
    }

    /**
     * Generated from protobuf field <code>bytes program_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProgramId($var)
    {
        GPBUtil::checkString($var, False);
        $this->program_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sdk = 2;</code>
     * @return string
     */
    public function getSdk()
    {
        return $this->sdk;
    }

    /**
     * Generated from protobuf field <code>string sdk = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSdk($var)
    {
        GPBUtil::checkString($var, True);
        $this->sdk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes creator_id = 3;</code>
     * @return string
     */
    public function getCreatorId()
    {
        return $this->creator_id;
    }

    /**
     * Generated from protobuf field <code>bytes creator_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatorId($var)
    {
        GPBUtil::checkString($var, False);
        $this->creator_id = $var;

        return $this;
    }

}

