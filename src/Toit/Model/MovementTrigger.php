<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/job.proto

namespace Toit\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.MovementTrigger</code>
 */
class MovementTrigger extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool shaken = 1;</code>
     */
    protected $shaken = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $shaken
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool shaken = 1;</code>
     * @return bool
     */
    public function getShaken()
    {
        return $this->shaken;
    }

    /**
     * Generated from protobuf field <code>bool shaken = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setShaken($var)
    {
        GPBUtil::checkBool($var);
        $this->shaken = $var;

        return $this;
    }

}

