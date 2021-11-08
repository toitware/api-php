<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/job.proto

namespace Toit\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.JobResources</code>
 */
class JobResources extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.toit.model.MemoryResource memory = 1;</code>
     */
    protected $memory = null;
    /**
     * Generated from protobuf field <code>.toit.model.JobFeatures features = 2;</code>
     */
    protected $features = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Model\MemoryResource $memory
     *     @type \Toit\Model\JobFeatures $features
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.model.MemoryResource memory = 1;</code>
     * @return \Toit\Model\MemoryResource|null
     */
    public function getMemory()
    {
        return $this->memory;
    }

    public function hasMemory()
    {
        return isset($this->memory);
    }

    public function clearMemory()
    {
        unset($this->memory);
    }

    /**
     * Generated from protobuf field <code>.toit.model.MemoryResource memory = 1;</code>
     * @param \Toit\Model\MemoryResource $var
     * @return $this
     */
    public function setMemory($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\MemoryResource::class);
        $this->memory = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.JobFeatures features = 2;</code>
     * @return \Toit\Model\JobFeatures|null
     */
    public function getFeatures()
    {
        return $this->features;
    }

    public function hasFeatures()
    {
        return isset($this->features);
    }

    public function clearFeatures()
    {
        unset($this->features);
    }

    /**
     * Generated from protobuf field <code>.toit.model.JobFeatures features = 2;</code>
     * @param \Toit\Model\JobFeatures $var
     * @return $this
     */
    public function setFeatures($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\JobFeatures::class);
        $this->features = $var;

        return $this;
    }

}

