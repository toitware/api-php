<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/organization.proto

namespace Toit\Model\User;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.User.Settings</code>
 */
class Settings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool welcome_closed = 1;</code>
     */
    protected $welcome_closed = false;
    /**
     * Generated from protobuf field <code>bool newsletter = 2;</code>
     */
    protected $newsletter = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $welcome_closed
     *     @type bool $newsletter
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Organization::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool welcome_closed = 1;</code>
     * @return bool
     */
    public function getWelcomeClosed()
    {
        return $this->welcome_closed;
    }

    /**
     * Generated from protobuf field <code>bool welcome_closed = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setWelcomeClosed($var)
    {
        GPBUtil::checkBool($var);
        $this->welcome_closed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool newsletter = 2;</code>
     * @return bool
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Generated from protobuf field <code>bool newsletter = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setNewsletter($var)
    {
        GPBUtil::checkBool($var);
        $this->newsletter = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Settings::class, \Toit\Model\User_Settings::class);

