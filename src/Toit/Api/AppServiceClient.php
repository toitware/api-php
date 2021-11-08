<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api;

/**
 */
class AppServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Toit\Api\CreateAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateApp(\Toit\Api\CreateAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.AppService/CreateApp',
        $argument,
        ['\Toit\Api\CreateAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\GetAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetApp(\Toit\Api\GetAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.AppService/GetApp',
        $argument,
        ['\Toit\Api\GetAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\GetAppFilesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAppFiles(\Toit\Api\GetAppFilesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.AppService/GetAppFiles',
        $argument,
        ['\Toit\Api\GetAppFilesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ListAppsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListApps(\Toit\Api\ListAppsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/toit.api.AppService/ListApps',
        $argument,
        ['\Toit\Api\ListAppsResponse', 'decode'],
        $metadata, $options);
    }

}
