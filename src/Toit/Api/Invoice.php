<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/user.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.Invoice</code>
 */
class Invoice extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string invoice_id = 1;</code>
     */
    protected $invoice_id = '';
    /**
     * Generated from protobuf field <code>string invoice_number = 2;</code>
     */
    protected $invoice_number = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     */
    protected $created_at = null;
    /**
     * Generated from protobuf field <code>string pdf_url = 4;</code>
     */
    protected $pdf_url = '';
    /**
     * Generated from protobuf field <code>string status = 5;</code>
     */
    protected $status = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp due_date = 6;</code>
     */
    protected $due_date = null;
    /**
     * Generated from protobuf field <code>string receipt_pdf_url = 7;</code>
     */
    protected $receipt_pdf_url = '';
    /**
     * Generated from protobuf field <code>int64 amount_paid = 8;</code>
     */
    protected $amount_paid = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $invoice_id
     *     @type string $invoice_number
     *     @type \Google\Protobuf\Timestamp $created_at
     *     @type string $pdf_url
     *     @type string $status
     *     @type \Google\Protobuf\Timestamp $due_date
     *     @type string $receipt_pdf_url
     *     @type int|string $amount_paid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string invoice_id = 1;</code>
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoice_id;
    }

    /**
     * Generated from protobuf field <code>string invoice_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInvoiceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->invoice_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string invoice_number = 2;</code>
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoice_number;
    }

    /**
     * Generated from protobuf field <code>string invoice_number = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInvoiceNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->invoice_number = $var;

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
     * Generated from protobuf field <code>string pdf_url = 4;</code>
     * @return string
     */
    public function getPdfUrl()
    {
        return $this->pdf_url;
    }

    /**
     * Generated from protobuf field <code>string pdf_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPdfUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->pdf_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string status = 5;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp due_date = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDueDate()
    {
        return $this->due_date;
    }

    public function hasDueDate()
    {
        return isset($this->due_date);
    }

    public function clearDueDate()
    {
        unset($this->due_date);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp due_date = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDueDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->due_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string receipt_pdf_url = 7;</code>
     * @return string
     */
    public function getReceiptPdfUrl()
    {
        return $this->receipt_pdf_url;
    }

    /**
     * Generated from protobuf field <code>string receipt_pdf_url = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setReceiptPdfUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->receipt_pdf_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amount_paid = 8;</code>
     * @return int|string
     */
    public function getAmountPaid()
    {
        return $this->amount_paid;
    }

    /**
     * Generated from protobuf field <code>int64 amount_paid = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmountPaid($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount_paid = $var;

        return $this;
    }

}

