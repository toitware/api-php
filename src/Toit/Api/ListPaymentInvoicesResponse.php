<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/user.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ListPaymentInvoicesResponse</code>
 */
class ListPaymentInvoicesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.toit.api.Invoice invoices = 1;</code>
     */
    protected $invoices = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Api\Invoice $invoices
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.api.Invoice invoices = 1;</code>
     * @return \Toit\Api\Invoice|null
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    public function hasInvoices()
    {
        return isset($this->invoices);
    }

    public function clearInvoices()
    {
        unset($this->invoices);
    }

    /**
     * Generated from protobuf field <code>.toit.api.Invoice invoices = 1;</code>
     * @param \Toit\Api\Invoice $var
     * @return $this
     */
    public function setInvoices($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\Invoice::class);
        $this->invoices = $var;

        return $this;
    }

}
