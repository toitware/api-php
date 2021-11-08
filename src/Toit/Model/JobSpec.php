<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/app.proto

namespace Toit\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.JobSpec</code>
 */
class JobSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string entrypoint = 2;</code>
     */
    protected $entrypoint = '';
    /**
     * Generated from protobuf field <code>.toit.model.JobResources resources = 3;</code>
     */
    protected $resources = null;
    /**
     * Generated from protobuf field <code>.toit.model.JobTriggers triggers = 4;</code>
     */
    protected $triggers = null;
    /**
     * Generated from protobuf field <code>.toit.model.JobSpec.PubSub pubsub = 5;</code>
     */
    protected $pubsub = null;
    /**
     * Generated from protobuf field <code>repeated .toit.model.JobFile files = 6;</code>
     */
    private $files;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $entrypoint
     *     @type \Toit\Model\JobResources $resources
     *     @type \Toit\Model\JobTriggers $triggers
     *     @type \Toit\Model\JobSpec\PubSub $pubsub
     *     @type \Toit\Model\JobFile[]|\Google\Protobuf\Internal\RepeatedField $files
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\App::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string entrypoint = 2;</code>
     * @return string
     */
    public function getEntrypoint()
    {
        return $this->entrypoint;
    }

    /**
     * Generated from protobuf field <code>string entrypoint = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEntrypoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->entrypoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.JobResources resources = 3;</code>
     * @return \Toit\Model\JobResources|null
     */
    public function getResources()
    {
        return $this->resources;
    }

    public function hasResources()
    {
        return isset($this->resources);
    }

    public function clearResources()
    {
        unset($this->resources);
    }

    /**
     * Generated from protobuf field <code>.toit.model.JobResources resources = 3;</code>
     * @param \Toit\Model\JobResources $var
     * @return $this
     */
    public function setResources($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\JobResources::class);
        $this->resources = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.JobTriggers triggers = 4;</code>
     * @return \Toit\Model\JobTriggers|null
     */
    public function getTriggers()
    {
        return $this->triggers;
    }

    public function hasTriggers()
    {
        return isset($this->triggers);
    }

    public function clearTriggers()
    {
        unset($this->triggers);
    }

    /**
     * Generated from protobuf field <code>.toit.model.JobTriggers triggers = 4;</code>
     * @param \Toit\Model\JobTriggers $var
     * @return $this
     */
    public function setTriggers($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\JobTriggers::class);
        $this->triggers = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.JobSpec.PubSub pubsub = 5;</code>
     * @return \Toit\Model\JobSpec\PubSub|null
     */
    public function getPubsub()
    {
        return $this->pubsub;
    }

    public function hasPubsub()
    {
        return isset($this->pubsub);
    }

    public function clearPubsub()
    {
        unset($this->pubsub);
    }

    /**
     * Generated from protobuf field <code>.toit.model.JobSpec.PubSub pubsub = 5;</code>
     * @param \Toit\Model\JobSpec\PubSub $var
     * @return $this
     */
    public function setPubsub($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\JobSpec\PubSub::class);
        $this->pubsub = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.JobFile files = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.JobFile files = 6;</code>
     * @param \Toit\Model\JobFile[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Toit\Model\JobFile::class);
        $this->files = $arr;

        return $this;
    }

}

