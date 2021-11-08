<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/device.proto

namespace Toit\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>toit.api.ConfigChange</code>
 */
class ConfigChange extends \Google\Protobuf\Internal\Message
{
    protected $config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Toit\Api\ConfigChange\SDK $sdk
     *     @type \Toit\Api\ConfigChange\Name $name
     *     @type \Toit\Api\ConfigChange\SDKModel $sdk_model
     *     @type \Toit\Api\ConfigChange\Broker $broker
     *     @type \Toit\Api\ConfigChange\MaxOffline $max_offline
     *     @type \Toit\Api\ConfigChange\Connections $connections
     *     @type \Toit\Api\ConfigChange\Reboot $reboot
     *     @type \Toit\Api\ConfigChange\FactoryReset $factory_reset
     *     @type \Toit\Api\ConfigChange\EventQueueThreshold $event_queue_threshold
     *     @type \Toit\Api\ConfigChange\LoggingLevel $logging_level
     *     @type \Toit\Api\ConfigChange\MetricsLevel $metrics_level
     *     @type \Toit\Api\ConfigChange\ReportModules $report_modules
     *     @type \Toit\Api\ConfigChange\UpdateModule $update_module
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Toit\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.SDK sdk = 1;</code>
     * @return \Toit\Api\ConfigChange\SDK|null
     */
    public function getSdk()
    {
        return $this->readOneof(1);
    }

    public function hasSdk()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.SDK sdk = 1;</code>
     * @param \Toit\Api\ConfigChange\SDK $var
     * @return $this
     */
    public function setSdk($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ConfigChange\SDK::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.Name name = 2;</code>
     * @return \Toit\Api\ConfigChange\Name|null
     */
    public function getName()
    {
        return $this->readOneof(2);
    }

    public function hasName()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.Name name = 2;</code>
     * @param \Toit\Api\ConfigChange\Name $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ConfigChange\Name::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.SDKModel sdk_model = 3;</code>
     * @return \Toit\Api\ConfigChange\SDKModel|null
     */
    public function getSdkModel()
    {
        return $this->readOneof(3);
    }

    public function hasSdkModel()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.SDKModel sdk_model = 3;</code>
     * @param \Toit\Api\ConfigChange\SDKModel $var
     * @return $this
     */
    public function setSdkModel($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ConfigChange\SDKModel::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.Broker broker = 4;</code>
     * @return \Toit\Api\ConfigChange\Broker|null
     */
    public function getBroker()
    {
        return $this->readOneof(4);
    }

    public function hasBroker()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.Broker broker = 4;</code>
     * @param \Toit\Api\ConfigChange\Broker $var
     * @return $this
     */
    public function setBroker($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ConfigChange\Broker::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.MaxOffline max_offline = 5;</code>
     * @return \Toit\Api\ConfigChange\MaxOffline|null
     */
    public function getMaxOffline()
    {
        return $this->readOneof(5);
    }

    public function hasMaxOffline()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.MaxOffline max_offline = 5;</code>
     * @param \Toit\Api\ConfigChange\MaxOffline $var
     * @return $this
     */
    public function setMaxOffline($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ConfigChange\MaxOffline::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.Connections connections = 6;</code>
     * @return \Toit\Api\ConfigChange\Connections|null
     */
    public function getConnections()
    {
        return $this->readOneof(6);
    }

    public function hasConnections()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.Connections connections = 6;</code>
     * @param \Toit\Api\ConfigChange\Connections $var
     * @return $this
     */
    public function setConnections($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ConfigChange\Connections::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.Reboot reboot = 9;</code>
     * @return \Toit\Api\ConfigChange\Reboot|null
     */
    public function getReboot()
    {
        return $this->readOneof(9);
    }

    public function hasReboot()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.Reboot reboot = 9;</code>
     * @param \Toit\Api\ConfigChange\Reboot $var
     * @return $this
     */
    public function setReboot($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ConfigChange\Reboot::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.FactoryReset factory_reset = 10;</code>
     * @return \Toit\Api\ConfigChange\FactoryReset|null
     */
    public function getFactoryReset()
    {
        return $this->readOneof(10);
    }

    public function hasFactoryReset()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.FactoryReset factory_reset = 10;</code>
     * @param \Toit\Api\ConfigChange\FactoryReset $var
     * @return $this
     */
    public function setFactoryReset($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ConfigChange\FactoryReset::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.EventQueueThreshold event_queue_threshold = 11;</code>
     * @return \Toit\Api\ConfigChange\EventQueueThreshold|null
     */
    public function getEventQueueThreshold()
    {
        return $this->readOneof(11);
    }

    public function hasEventQueueThreshold()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.EventQueueThreshold event_queue_threshold = 11;</code>
     * @param \Toit\Api\ConfigChange\EventQueueThreshold $var
     * @return $this
     */
    public function setEventQueueThreshold($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ConfigChange\EventQueueThreshold::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.LoggingLevel logging_level = 12;</code>
     * @return \Toit\Api\ConfigChange\LoggingLevel|null
     */
    public function getLoggingLevel()
    {
        return $this->readOneof(12);
    }

    public function hasLoggingLevel()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.LoggingLevel logging_level = 12;</code>
     * @param \Toit\Api\ConfigChange\LoggingLevel $var
     * @return $this
     */
    public function setLoggingLevel($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ConfigChange\LoggingLevel::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.MetricsLevel metrics_level = 13;</code>
     * @return \Toit\Api\ConfigChange\MetricsLevel|null
     */
    public function getMetricsLevel()
    {
        return $this->readOneof(13);
    }

    public function hasMetricsLevel()
    {
        return $this->hasOneof(13);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.MetricsLevel metrics_level = 13;</code>
     * @param \Toit\Api\ConfigChange\MetricsLevel $var
     * @return $this
     */
    public function setMetricsLevel($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ConfigChange\MetricsLevel::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.ReportModules report_modules = 14;</code>
     * @return \Toit\Api\ConfigChange\ReportModules|null
     */
    public function getReportModules()
    {
        return $this->readOneof(14);
    }

    public function hasReportModules()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.ReportModules report_modules = 14;</code>
     * @param \Toit\Api\ConfigChange\ReportModules $var
     * @return $this
     */
    public function setReportModules($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ConfigChange\ReportModules::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.UpdateModule update_module = 15;</code>
     * @return \Toit\Api\ConfigChange\UpdateModule|null
     */
    public function getUpdateModule()
    {
        return $this->readOneof(15);
    }

    public function hasUpdateModule()
    {
        return $this->hasOneof(15);
    }

    /**
     * Generated from protobuf field <code>.toit.api.ConfigChange.UpdateModule update_module = 15;</code>
     * @param \Toit\Api\ConfigChange\UpdateModule $var
     * @return $this
     */
    public function setUpdateModule($var)
    {
        GPBUtil::checkMessage($var, \Toit\Api\ConfigChange\UpdateModule::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConfig()
    {
        return $this->whichOneof("config");
    }

}

