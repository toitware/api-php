<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/app.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.GetAppFilesRequest</code>
 */
class GetAppFilesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes app_id = 1;</code>
     */
    protected $app_id = '';
    /**
     * if revision is zero will give the latest.
     *
     * Generated from protobuf field <code>uint64 revision = 2;</code>
     */
    protected $revision = 0;
    /**
     * If path ends with '/', the request is for a directory.
     *
     * Generated from protobuf field <code>string path = 3;</code>
     */
    protected $path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $app_id
     *     @type int|string $revision
     *           if revision is zero will give the latest.
     *     @type string $path
     *           If path ends with '/', the request is for a directory.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\App::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes app_id = 1;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Generated from protobuf field <code>bytes app_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, False);
        $this->app_id = $var;

        return $this;
    }

    /**
     * if revision is zero will give the latest.
     *
     * Generated from protobuf field <code>uint64 revision = 2;</code>
     * @return int|string
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * if revision is zero will give the latest.
     *
     * Generated from protobuf field <code>uint64 revision = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRevision($var)
    {
        GPBUtil::checkUint64($var);
        $this->revision = $var;

        return $this;
    }

    /**
     * If path ends with '/', the request is for a directory.
     *
     * Generated from protobuf field <code>string path = 3;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * If path ends with '/', the request is for a directory.
     *
     * Generated from protobuf field <code>string path = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

}
