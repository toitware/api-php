<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/device.proto

namespace Toit\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.DeviceEvent</code>
 */
class DeviceEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes device_id = 1;</code>
     */
    protected $device_id = '';
    /**
     * Together with the device_id, it globally identifies the event. Device
     * events can be sorted, and will always be returned in increasing order.
     *
     * Generated from protobuf field <code>bytes event_id = 2;</code>
     */
    protected $event_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 3;</code>
     */
    protected $created = null;
    /**
     * Generated from protobuf field <code>.toit.model.DeviceEvent.Type type = 4;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>string msg = 5;</code>
     */
    protected $msg = '';
    /**
     * Generated from protobuf field <code>bytes data = 6;</code>
     */
    protected $data = '';
    /**
     * Generated from protobuf field <code>.toit.model.DeviceEvent.Initiater initiater = 7;</code>
     */
    protected $initiater = null;
    /**
     * Generated from protobuf field <code>repeated .toit.model.DeviceEvent.Info information = 8;</code>
     */
    private $information;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $device_id
     *     @type string $event_id
     *           Together with the device_id, it globally identifies the event. Device
     *           events can be sorted, and will always be returned in increasing order.
     *     @type \Google\Protobuf\Timestamp $created
     *     @type int $type
     *     @type string $msg
     *     @type string $data
     *     @type \Toit\Model\DeviceEvent\Initiater $initiater
     *     @type \Toit\Model\DeviceEvent\Info[]|\Google\Protobuf\Internal\RepeatedField $information
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Device::initOnce();
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
     * Together with the device_id, it globally identifies the event. Device
     * events can be sorted, and will always be returned in increasing order.
     *
     * Generated from protobuf field <code>bytes event_id = 2;</code>
     * @return string
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Together with the device_id, it globally identifies the event. Device
     * events can be sorted, and will always be returned in increasing order.
     *
     * Generated from protobuf field <code>bytes event_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkString($var, False);
        $this->event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreated()
    {
        return $this->created;
    }

    public function hasCreated()
    {
        return isset($this->created);
    }

    public function clearCreated()
    {
        unset($this->created);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceEvent.Type type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceEvent.Type type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Toit\Model\DeviceEvent\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string msg = 5;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Generated from protobuf field <code>string msg = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 6;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceEvent.Initiater initiater = 7;</code>
     * @return \Toit\Model\DeviceEvent\Initiater|null
     */
    public function getInitiater()
    {
        return $this->initiater;
    }

    public function hasInitiater()
    {
        return isset($this->initiater);
    }

    public function clearInitiater()
    {
        unset($this->initiater);
    }

    /**
     * Generated from protobuf field <code>.toit.model.DeviceEvent.Initiater initiater = 7;</code>
     * @param \Toit\Model\DeviceEvent\Initiater $var
     * @return $this
     */
    public function setInitiater($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\DeviceEvent\Initiater::class);
        $this->initiater = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.DeviceEvent.Info information = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.DeviceEvent.Info information = 8;</code>
     * @param \Toit\Model\DeviceEvent\Info[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInformation($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Toit\Model\DeviceEvent\Info::class);
        $this->information = $arr;

        return $this;
    }

}

