<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/pubsub/publish.proto

namespace Toit\Api\Pubsub;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.pubsub.PublishRequest</code>
 */
class PublishRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    protected $topic = '';
    /**
     * Generated from protobuf field <code>string publisher_name = 2;</code>
     */
    protected $publisher_name = '';
    /**
     * Generated from protobuf field <code>repeated bytes data = 3;</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *     @type string $publisher_name
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Pubsub\Publish::initOnce();
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
     * Generated from protobuf field <code>string publisher_name = 2;</code>
     * @return string
     */
    public function getPublisherName()
    {
        return $this->publisher_name;
    }

    /**
     * Generated from protobuf field <code>string publisher_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPublisherName($var)
    {
        GPBUtil::checkString($var, True);
        $this->publisher_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes data = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>repeated bytes data = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->data = $arr;

        return $this;
    }

}
