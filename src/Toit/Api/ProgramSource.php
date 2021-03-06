<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/program.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ProgramSource</code>
 */
class ProgramSource extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Api\ProgramSource\Files $files
     *     @type \Toit\Api\ProgramSource\Bundle $bundle
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Program::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ProgramSource.Files files = 1;</code>
     * @return \Toit\Api\ProgramSource\Files|null
     */
    public function getFiles()
    {
        return $this->readOneof(1);
    }

    public function hasFiles()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ProgramSource.Files files = 1;</code>
     * @param \Toit\Api\ProgramSource\Files $var
     * @return $this
     */
    public function setFiles($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ProgramSource\Files::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.api.ProgramSource.Bundle bundle = 2;</code>
     * @return \Toit\Api\ProgramSource\Bundle|null
     */
    public function getBundle()
    {
        return $this->readOneof(2);
    }

    public function hasBundle()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ProgramSource.Bundle bundle = 2;</code>
     * @param \Toit\Api\ProgramSource\Bundle $var
     * @return $this
     */
    public function setBundle($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ProgramSource\Bundle::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

