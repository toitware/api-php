<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/device.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ReadDeviceEventsRequest</code>
 */
class ReadDeviceEventsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes device_id = 1;</code>
     */
    protected $device_id = '';
    /**
     * Generated from protobuf field <code>uint64 limit = 4;</code>
     */
    protected $limit = 0;
    /**
     * Generated from protobuf field <code>bool reverse = 5;</code>
     */
    protected $reverse = false;
    protected $offset;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $device_id
     *     @type string $id
     *     @type \Google\Protobuf\Timestamp $ts
     *     @type int|string $limit
     *     @type bool $reverse
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes device_id = 1;</code>
     * @return string
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }

    /**
     * Generated from protobuf field <code>bytes device_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, False);
        $this->device_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->readOneof(2);
    }

    public function hasId()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>bytes id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp ts = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTs()
    {
        return $this->readOneof(3);
    }

    public function hasTs()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp ts = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTs($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 limit = 4;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Generated from protobuf field <code>uint64 limit = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkUint64($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool reverse = 5;</code>
     * @return bool
     */
    public function getReverse()
    {
        return $this->reverse;
    }

    /**
     * Generated from protobuf field <code>bool reverse = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setReverse($var)
    {
        GPBUtil::checkBool($var);
        $this->reverse = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getOffset()
    {
        return $this->whichOneof("offset");
    }

}

