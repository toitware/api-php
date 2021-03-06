<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/device.proto

namespace Toit\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.LoggingSettings</code>
 */
class LoggingSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.toit.model.LogData.Level level = 1;</code>
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
        \GPBMetadata\Toit\Model\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.model.LogData.Level level = 1;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>.toit.model.LogData.Level level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Toit\Model\LogData\Level::class);
        $this->level = $var;

        return $this;
    }

}

