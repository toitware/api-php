<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/organization.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ListAPIKeysRequest</code>
 */
class ListAPIKeysRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes offset = 1;</code>
     */
    protected $offset = '';
    /**
     * Generated from protobuf field <code>int64 limit = 2;</code>
     */
    protected $limit = 0;
    /**
     * Generated from protobuf field <code>string order_by = 3;</code>
     */
    protected $order_by = '';
    /**
     * Generated from protobuf field <code>bool order_desc = 4;</code>
     */
    protected $order_desc = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $offset
     *     @type int|string $limit
     *     @type string $order_by
     *     @type bool $order_desc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Organization::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes offset = 1;</code>
     * @return string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Generated from protobuf field <code>bytes offset = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkString($var, False);
        $this->offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 limit = 2;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Generated from protobuf field <code>int64 limit = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string order_by = 3;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Generated from protobuf field <code>string order_by = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool order_desc = 4;</code>
     * @return bool
     */
    public function getOrderDesc()
    {
        return $this->order_desc;
    }

    /**
     * Generated from protobuf field <code>bool order_desc = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setOrderDesc($var)
    {
        GPBUtil::checkBool($var);
        $this->order_desc = $var;

        return $this;
    }

}

