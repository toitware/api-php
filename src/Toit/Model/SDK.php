<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/program.proto

namespace Toit\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.SDK</code>
 */
class SDK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string version = 2;</code>
     */
    protected $version = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     */
    protected $created_at = null;
    /**
     * Generated from protobuf field <code>string created_by = 4;</code>
     */
    protected $created_by = '';
    /**
     * Generated from protobuf field <code>map<string, string> settings = 5;</code>
     */
    private $settings;
    /**
     * Generated from protobuf field <code>repeated string models = 6;</code>
     */
    private $models;
    /**
     * Generated from protobuf field <code>.toit.model.ReleaseLevel.Type release_level = 7;</code>
     */
    protected $release_level = 0;
    /**
     * Generated from protobuf field <code>bool deprecated = 8;</code>
     */
    protected $deprecated = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $version
     *     @type \Google\Protobuf\Timestamp $created_at
     *     @type string $created_by
     *     @type array|\Google\Protobuf\Internal\MapField $settings
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $models
     *     @type int $release_level
     *     @type bool $deprecated
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Program::initOnce();
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
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>string version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string created_by = 4;</code>
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Generated from protobuf field <code>string created_by = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->created_by = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> settings = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Generated from protobuf field <code>map<string, string> settings = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSettings($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->settings = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string models = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModels()
    {
        return $this->models;
    }

    /**
     * Generated from protobuf field <code>repeated string models = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->models = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.ReleaseLevel.Type release_level = 7;</code>
     * @return int
     */
    public function getReleaseLevel()
    {
        return $this->release_level;
    }

    /**
     * Generated from protobuf field <code>.toit.model.ReleaseLevel.Type release_level = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setReleaseLevel($var)
    {
        GPBUtil::checkEnum($var, \Toit\Model\ReleaseLevel\Type::class);
        $this->release_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool deprecated = 8;</code>
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * Generated from protobuf field <code>bool deprecated = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeprecated($var)
    {
        GPBUtil::checkBool($var);
        $this->deprecated = $var;

        return $this;
    }

}

