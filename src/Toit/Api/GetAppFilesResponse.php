<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/app.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.GetAppFilesResponse</code>
 */
class GetAppFilesResponse extends \Google\Protobuf\Internal\Message
{
    protected $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Api\GetAppFilesResponse\Directory $directory
     *     @type string $file_content
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\App::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.api.GetAppFilesResponse.Directory directory = 1;</code>
     * @return \Toit\Api\GetAppFilesResponse\Directory|null
     */
    public function getDirectory()
    {
        return $this->readOneof(1);
    }

    public function hasDirectory()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.toit.api.GetAppFilesResponse.Directory directory = 1;</code>
     * @param \Toit\Api\GetAppFilesResponse\Directory $var
     * @return $this
     */
    public function setDirectory($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\GetAppFilesResponse\Directory::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes file_content = 2;</code>
     * @return string
     */
    public function getFileContent()
    {
        return $this->readOneof(2);
    }

    public function hasFileContent()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>bytes file_content = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}

