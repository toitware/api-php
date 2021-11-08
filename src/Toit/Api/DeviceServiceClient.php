<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api;

/**
 */
class DeviceServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Toit\Api\GetDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDevice(\Toit\Api\GetDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DeviceService/GetDevice',
        $argument,
        ['\Toit\Api\GetDeviceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ConfigureDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigureDevice(\Toit\Api\ConfigureDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DeviceService/ConfigureDevice',
        $argument,
        ['\Toit\Api\ConfigureDeviceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\LookupDevicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LookupDevices(\Toit\Api\LookupDevicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DeviceService/LookupDevices',
        $argument,
        ['\Toit\Api\LookupDevicesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ListDevicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDevices(\Toit\Api\ListDevicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DeviceService/ListDevices',
        $argument,
        ['\Toit\Api\ListDevicesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ListJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListJobs(\Toit\Api\ListJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DeviceService/ListJobs',
        $argument,
        ['\Toit\Api\ListJobsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\InstallJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function InstallJob(\Toit\Api\InstallJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DeviceService/InstallJob',
        $argument,
        ['\Toit\Api\InstallJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ConfigureJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigureJob(\Toit\Api\ConfigureJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DeviceService/ConfigureJob',
        $argument,
        ['\Toit\Api\ConfigureJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\RebootDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RebootDevice(\Toit\Api\RebootDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DeviceService/RebootDevice',
        $argument,
        ['\Toit\Api\RebootDeviceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ReadDeviceLogsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReadDeviceLogs(\Toit\Api\ReadDeviceLogsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DeviceService/ReadDeviceLogs',
        $argument,
        ['\Toit\Api\ReadDeviceLogsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ReadDeviceEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReadDeviceEvents(\Toit\Api\ReadDeviceEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DeviceService/ReadDeviceEvents',
        $argument,
        ['\Toit\Api\ReadDeviceEventsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\GetDevicePartitionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDevicePartitions(\Toit\Api\GetDevicePartitionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DeviceService/GetDevicePartitions',
        $argument,
        ['\Toit\Api\GetDevicePartitionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\WatchDeviceChangesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function WatchDeviceChanges(\Toit\Api\WatchDeviceChangesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/toit.api.DeviceService/WatchDeviceChanges',
        $argument,
        ['\Toit\Api\WatchDeviceChangesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\WatchJobChangesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function WatchJobChanges(\Toit\Api\WatchJobChangesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/toit.api.DeviceService/WatchJobChanges',
        $argument,
        ['\Toit\Api\WatchJobChangesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\WatchSessionChangesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function WatchSessionChanges(\Toit\Api\WatchSessionChangesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/toit.api.DeviceService/WatchSessionChanges',
        $argument,
        ['\Toit\Api\WatchSessionChangesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\GetCurrentTimeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCurrentTime(\Toit\Api\GetCurrentTimeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DeviceService/GetCurrentTime',
        $argument,
        ['\Toit\Api\GetCurrentTimeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\UnclaimDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnclaimDevice(\Toit\Api\UnclaimDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DeviceService/UnclaimDevice',
        $argument,
        ['\Toit\Api\UnclaimDeviceResponse', 'decode'],
        $metadata, $options);
    }

}
