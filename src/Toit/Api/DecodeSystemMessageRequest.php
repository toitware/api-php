<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/program.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.DecodeSystemMessageRequest</code>
 */
class DecodeSystemMessageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes message = 1;</code>
     */
    protected $message = '';
    /**
     * Generated from protobuf field <code>string model = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $model = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *     @type string $model
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Program::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>bytes message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, False);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string model = 2 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getModel()
    {
        @trigger_error('model is deprecated.', E_USER_DEPRECATED);
        return $this->model;
    }

    /**
     * Generated from protobuf field <code>string model = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setModel($var)
    {
        @trigger_error('model is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

}

