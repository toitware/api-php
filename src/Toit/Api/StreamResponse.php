<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/data.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.StreamResponse</code>
 */
class StreamResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .toit.api.Message messages = 1;</code>
     */
    private $messages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Api\Message[]|\Google\Protobuf\Internal\RepeatedField $messages
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .toit.api.Message messages = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.api.Message messages = 1;</code>
     * @param \Toit\Api\Message[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Toit\Api\Message::class);
        $this->messages = $arr;

        return $this;
    }

}

