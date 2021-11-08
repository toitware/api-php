<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/organization.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.CreateNewOrganizationResponse</code>
 */
class CreateNewOrganizationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes organization_id = 1;</code>
     */
    protected $organization_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $organization_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Organization::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes organization_id = 1;</code>
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * Generated from protobuf field <code>bytes organization_id = 1;</code>
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

