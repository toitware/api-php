<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/sdk.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.DeregisterSDKRequest</code>
 */
class DeregisterSDKRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>bool check_exists = 2;</code>
     */
    protected $check_exists = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type bool $check_exists
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Sdk::initOnce();
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
     * Generated from protobuf field <code>bool check_exists = 2;</code>
     * @return bool
     */
    public function getCheckExists()
    {
        return $this->check_exists;
    }

    /**
     * Generated from protobuf field <code>bool check_exists = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setCheckExists($var)
    {
        GPBUtil::checkBool($var);
        $this->check_exists = $var;

        return $this;
    }

}
