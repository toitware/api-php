<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/user.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.UserChange</code>
 */
class UserChange extends \Google\Protobuf\Internal\Message
{
    protected $change;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $set_settings_welcome_closed
     *     @type bool $set_settings_newsletter
     *     @type string $role
     *     @type string $name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool set_settings_welcome_closed = 1;</code>
     * @return bool
     */
    public function getSetSettingsWelcomeClosed()
    {
        return $this->readOneof(1);
    }

    public function hasSetSettingsWelcomeClosed()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>bool set_settings_welcome_closed = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSetSettingsWelcomeClosed($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool set_settings_newsletter = 2;</code>
     * @return bool
     */
    public function getSetSettingsNewsletter()
    {
        return $this->readOneof(2);
    }

    public function hasSetSettingsNewsletter()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>bool set_settings_newsletter = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setSetSettingsNewsletter($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string role = 3;</code>
     * @return string
     */
    public function getRole()
    {
        return $this->readOneof(3);
    }

    public function hasRole()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>string role = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->readOneof(4);
    }

    public function hasName()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getChange()
    {
        return $this->whichOneof("change");
    }

}

