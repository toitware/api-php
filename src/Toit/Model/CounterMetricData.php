<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/data.proto

namespace Toit\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.CounterMetricData</code>
 */
class CounterMetricData extends \Google\Protobuf\Internal\Message
{
    /**
     * name_index references the name in the names list in MetricsData.
     *
     * Generated from protobuf field <code>uint32 name_index = 1;</code>
     */
    protected $name_index = 0;
    /**
     * Generated from protobuf field <code>int64 count = 2;</code>
     */
    protected $count = 0;
    /**
     * Generated from protobuf field <code>double mean = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $mean = 0.0;
    /**
     * Generated from protobuf field <code>double stdev = 4 [deprecated = true];</code>
     * @deprecated
     */
    protected $stdev = 0.0;
    /**
     * Generated from protobuf field <code>map<uint32, uint32> tags = 5;</code>
     */
    private $tags;
    /**
     * Generated from protobuf field <code>.toit.model.MetricsData.Level level = 6;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $name_index
     *           name_index references the name in the names list in MetricsData.
     *     @type int|string $count
     *     @type float $mean
     *     @type float $stdev
     *     @type array|\Google\Protobuf\Internal\MapField $tags
     *     @type int $level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * name_index references the name in the names list in MetricsData.
     *
     * Generated from protobuf field <code>uint32 name_index = 1;</code>
     * @return int
     */
    public function getNameIndex()
    {
        return $this->name_index;
    }

    /**
     * name_index references the name in the names list in MetricsData.
     *
     * Generated from protobuf field <code>uint32 name_index = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNameIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->name_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double mean = 3 [deprecated = true];</code>
     * @return float
     * @deprecated
     */
    public function getMean()
    {
        @trigger_error('mean is deprecated.', E_USER_DEPRECATED);
        return $this->mean;
    }

    /**
     * Generated from protobuf field <code>double mean = 3 [deprecated = true];</code>
     * @param float $var
     * @return $this
     * @deprecated
     */
    public function setMean($var)
    {
        @trigger_error('mean is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkDouble($var);
        $this->mean = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double stdev = 4 [deprecated = true];</code>
     * @return float
     * @deprecated
     */
    public function getStdev()
    {
        @trigger_error('stdev is deprecated.', E_USER_DEPRECATED);
        return $this->stdev;
    }

    /**
     * Generated from protobuf field <code>double stdev = 4 [deprecated = true];</code>
     * @param float $var
     * @return $this
     * @deprecated
     */
    public function setStdev($var)
    {
        @trigger_error('stdev is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkDouble($var);
        $this->stdev = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> tags = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> tags = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->tags = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.model.MetricsData.Level level = 6;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>.toit.model.MetricsData.Level level = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Toit\Model\MetricsData\Level::class);
        $this->level = $var;

        return $this;
    }

}

