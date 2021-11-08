<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/data.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ListSubscriptionsResponse</code>
 */
class ListSubscriptionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .toit.api.Subscription subscriptions = 1;</code>
     */
    private $subscriptions;
    /**
     * Generated from protobuf field <code>bytes next_offset = 2;</code>
     */
    protected $next_offset = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Api\Subscription[]|\Google\Protobuf\Internal\RepeatedField $subscriptions
     *     @type string $next_offset
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .toit.api.Subscription subscriptions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.api.Subscription subscriptions = 1;</code>
     * @param \Toit\Api\Subscription[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubscriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Toit\Api\Subscription::class);
        $this->subscriptions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes next_offset = 2;</code>
     * @return string
     */
    public function getNextOffset()
    {
        return $this->next_offset;
    }

    /**
     * Generated from protobuf field <code>bytes next_offset = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextOffset($var)
    {
        GPBUtil::checkString($var, False);
        $this->next_offset = $var;

        return $this;
    }

}

