<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/user.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.GetCurrentUserResponse</code>
 */
class GetCurrentUserResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.toit.model.User user = 1;</code>
     */
    protected $user = null;
    /**
     * Generated from protobuf field <code>.toit.model.Organization organization = 2;</code>
     */
    protected $organization = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Model\User $user
     *     @type \Toit\Model\Organization $organization
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.model.User user = 1;</code>
     * @return \Toit\Model\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * Generated from protobuf field <code>.toit.model.User user = 1;</code>
     * @param \Toit\Model\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.Organization organization = 2;</code>
     * @return \Toit\Model\Organization|null
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    public function hasOrganization()
    {
        return isset($this->organization);
    }

    public function clearOrganization()
    {
        unset($this->organization);
    }

    /**
     * Generated from protobuf field <code>.toit.model.Organization organization = 2;</code>
     * @param \Toit\Model\Organization $var
     * @return $this
     */
    public function setOrganization($var)
    {
        GPBUtil::checkMessage($var, \Toit\Model\Organization::class);
        $this->organization = $var;

        return $this;
    }

}
