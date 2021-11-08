<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/app.proto

namespace Toit\Api\GetAppFilesResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.GetAppFilesResponse.Directory</code>
 */
class Directory extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .toit.api.GetAppFilesResponse.Entry entries = 1;</code>
     */
    private $entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Api\GetAppFilesResponse\Entry[]|\Google\Protobuf\Internal\RepeatedField $entries
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\App::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .toit.api.GetAppFilesResponse.Entry entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.api.GetAppFilesResponse.Entry entries = 1;</code>
     * @param \Toit\Api\GetAppFilesResponse\Entry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Toit\Api\GetAppFilesResponse\Entry::class);
        $this->entries = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Directory::class, \Toit\Api\GetAppFilesResponse_Directory::class);
