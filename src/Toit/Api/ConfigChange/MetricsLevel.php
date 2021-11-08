<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/device.proto

namespace Toit\Api\ConfigChange;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ConfigChange.MetricsLevel</code>
 */
class MetricsLevel extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.toit.model.MetricsData.Level level = 1;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.model.MetricsData.Level level = 1;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>.toit.model.MetricsData.Level level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Toit\Model\MetricsData\Level::class);
        $this->level = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MetricsLevel::class, \Toit\Api\ConfigChange_MetricsLevel::class);

