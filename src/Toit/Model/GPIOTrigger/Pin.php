<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/job.proto

namespace Toit\Model\GPIOTrigger;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.GPIOTrigger.Pin</code>
 */
class Pin extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.toit.model.GPIOTrigger.Pin.Level level = 1;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>uint32 num = 2;</code>
     */
    protected $num = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $level
     *     @type int $num
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.model.GPIOTrigger.Pin.Level level = 1;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>.toit.model.GPIOTrigger.Pin.Level level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Toit\Model\GPIOTrigger\Pin\Level::class);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 num = 2;</code>
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Generated from protobuf field <code>uint32 num = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNum($var)
    {
        GPBUtil::checkUint32($var);
        $this->num = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Pin::class, \Toit\Model\GPIOTrigger_Pin::class);
