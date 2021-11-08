<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/pubsub/subscribe.proto

namespace Toit\Api\Pubsub;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.pubsub.ListSubscriptionsRequest</code>
 */
class ListSubscriptionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    protected $topic = '';
    /**
     * Generated from protobuf field <code>bytes offset = 3;</code>
     */
    protected $offset = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *     @type string $offset
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Pubsub\Subscribe::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes offset = 3;</code>
     * @return string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Generated from protobuf field <code>bytes offset = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkString($var, False);
        $this->offset = $var;

        return $this;
    }

}
