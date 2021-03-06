<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/program.proto

namespace Toit\Api\AnalyzeResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.AnalyzeResponse.Features</code>
 */
class Features extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool gps = 1;</code>
     */
    protected $gps = false;
    /**
     * Generated from protobuf field <code>repeated string pubsub_subscriptions = 2;</code>
     */
    private $pubsub_subscriptions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $gps
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $pubsub_subscriptions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Program::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool gps = 1;</code>
     * @return bool
     */
    public function getGps()
    {
        return $this->gps;
    }

    /**
     * Generated from protobuf field <code>bool gps = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setGps($var)
    {
        GPBUtil::checkBool($var);
        $this->gps = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string pubsub_subscriptions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPubsubSubscriptions()
    {
        return $this->pubsub_subscriptions;
    }

    /**
     * Generated from protobuf field <code>repeated string pubsub_subscriptions = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPubsubSubscriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pubsub_subscriptions = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Features::class, \Toit\Api\AnalyzeResponse_Features::class);

