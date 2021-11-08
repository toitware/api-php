<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/job.proto

namespace Toit\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.CronSpec</code>
 */
class CronSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string cron_string = 1;</code>
     */
    protected $cron_string = '';
    /**
     * Generated from protobuf field <code>repeated .toit.model.CronSchedule schedules = 2;</code>
     */
    private $schedules;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cron_string
     *     @type \Toit\Model\CronSchedule[]|\Google\Protobuf\Internal\RepeatedField $schedules
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string cron_string = 1;</code>
     * @return string
     */
    public function getCronString()
    {
        return $this->cron_string;
    }

    /**
     * Generated from protobuf field <code>string cron_string = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCronString($var)
    {
        GPBUtil::checkString($var, True);
        $this->cron_string = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.CronSchedule schedules = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSchedules()
    {
        return $this->schedules;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.CronSchedule schedules = 2;</code>
     * @param \Toit\Model\CronSchedule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSchedules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Toit\Model\CronSchedule::class);
        $this->schedules = $arr;

        return $this;
    }

}

