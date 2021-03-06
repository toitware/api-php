<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/pubsub/message.proto

namespace Toit\Model\Pubsub;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.pubsub.Envelope</code>
 */
class Envelope extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.toit.model.pubsub.Message message = 2;</code>
     */
    protected $message = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type \Toit\Model\Pubsub\Message $message
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Pubsub\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>bytes id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, False);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.pubsub.Message message = 2;</code>
     * @return \Toit\Model\Pubsub\Message|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * Generated from protobuf field <code>.toit.model.pubsub.Message message = 2;</code>
     * @param \Toit\Model\Pubsub\Message $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\Pubsub\Message::class);
        $this->message = $var;

        return $this;
    }

}

