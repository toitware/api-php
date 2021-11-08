<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/auth.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.LoginRequest</code>
 */
class LoginRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string username = 1;</code>
     */
    protected $username = '';
    /**
     * Generated from protobuf field <code>string password = 2;</code>
     */
    protected $password = '';
    /**
     * Generated from protobuf field <code>bool remember = 3;</code>
     */
    protected $remember = false;
    /**
     * optional
     *
     * Generated from protobuf field <code>bytes organization_id = 4;</code>
     */
    protected $organization_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $username
     *     @type string $password
     *     @type bool $remember
     *     @type string $organization_id
     *           optional
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string username = 1;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool remember = 3;</code>
     * @return bool
     */
    public function getRemember()
    {
        return $this->remember;
    }

    /**
     * Generated from protobuf field <code>bool remember = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRemember($var)
    {
        GPBUtil::checkBool($var);
        $this->remember = $var;

        return $this;
    }

    /**
     * optional
     *
     * Generated from protobuf field <code>bytes organization_id = 4;</code>
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * optional
     *
     * Generated from protobuf field <code>bytes organization_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrganizationId($var)
    {
        GPBUtil::checkString($var, False);
        $this->organization_id = $var;

        return $this;
    }

}
