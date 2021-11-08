<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/device.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ListDevicesFilter</code>
 */
class ListDevicesFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration last_updated = 1;</code>
     */
    protected $last_updated = null;
    /**
     * Generated from protobuf field <code>bool only_simulators = 2;</code>
     */
    protected $only_simulators = false;
    /**
     * Generated from protobuf field <code>string name_prefix = 3;</code>
     */
    protected $name_prefix = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $last_updated
     *     @type bool $only_simulators
     *     @type string $name_prefix
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration last_updated = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLastUpdated()
    {
        return $this->last_updated;
    }

    public function hasLastUpdated()
    {
        return isset($this->last_updated);
    }

    public function clearLastUpdated()
    {
        unset($this->last_updated);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration last_updated = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLastUpdated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->last_updated = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool only_simulators = 2;</code>
     * @return bool
     */
    public function getOnlySimulators()
    {
        return $this->only_simulators;
    }

    /**
     * Generated from protobuf field <code>bool only_simulators = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setOnlySimulators($var)
    {
        GPBUtil::checkBool($var);
        $this->only_simulators = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name_prefix = 3;</code>
     * @return string
     */
    public function getNamePrefix()
    {
        return $this->name_prefix;
    }

    /**
     * Generated from protobuf field <code>string name_prefix = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNamePrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->name_prefix = $var;

        return $this;
    }

}
