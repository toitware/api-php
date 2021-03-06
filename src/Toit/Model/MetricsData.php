<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/data.proto

namespace Toit\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.model.MetricsData</code>
 */
class MetricsData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated bytes names = 1;</code>
     */
    private $names;
    /**
     * Generated from protobuf field <code>repeated .toit.model.GuageMetricData gauges = 2;</code>
     */
    private $gauges;
    /**
     * Generated from protobuf field <code>repeated .toit.model.CounterMetricData counters = 3;</code>
     */
    private $counters;
    /**
     * Generated from protobuf field <code>repeated .toit.model.PlotMetricData plots = 4 [deprecated = true];</code>
     * @deprecated
     */
    private $plots;
    /**
     * Generated from protobuf field <code>repeated .toit.model.HistogramMetricData histograms = 5;</code>
     */
    private $histograms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $names
     *     @type \Toit\Model\GuageMetricData[]|\Google\Protobuf\Internal\RepeatedField $gauges
     *     @type \Toit\Model\CounterMetricData[]|\Google\Protobuf\Internal\RepeatedField $counters
     *     @type \Toit\Model\PlotMetricData[]|\Google\Protobuf\Internal\RepeatedField $plots
     *     @type \Toit\Model\HistogramMetricData[]|\Google\Protobuf\Internal\RepeatedField $histograms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Model\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated bytes names = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Generated from protobuf field <code>repeated bytes names = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->names = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.GuageMetricData gauges = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGauges()
    {
        return $this->gauges;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.GuageMetricData gauges = 2;</code>
     * @param \Toit\Model\GuageMetricData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGauges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Toit\Model\GuageMetricData::class);
        $this->gauges = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.CounterMetricData counters = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCounters()
    {
        return $this->counters;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.CounterMetricData counters = 3;</code>
     * @param \Toit\Model\CounterMetricData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCounters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Toit\Model\CounterMetricData::class);
        $this->counters = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.PlotMetricData plots = 4 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getPlots()
    {
        @trigger_error('plots is deprecated.', E_USER_DEPRECATED);
        return $this->plots;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.PlotMetricData plots = 4 [deprecated = true];</code>
     * @param \Toit\Model\PlotMetricData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setPlots($var)
    {
        @trigger_error('plots is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Toit\Model\PlotMetricData::class);
        $this->plots = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.HistogramMetricData histograms = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHistograms()
    {
        return $this->histograms;
    }

    /**
     * Generated from protobuf field <code>repeated .toit.model.HistogramMetricData histograms = 5;</code>
     * @param \Toit\Model\HistogramMetricData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHistograms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Toit\Model\HistogramMetricData::class);
        $this->histograms = $arr;

        return $this;
    }

}

