<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/device.proto

namespace Toit\Api\ConfigChange;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ConfigChange.SDKModel</code>
 */
class SDKModel extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string model = 1;</code>
     */
    protected $model = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $model
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string model = 1;</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Generated from protobuf field <code>string model = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SDKModel::class, \Toit\Api\ConfigChange_SDKModel::class);

