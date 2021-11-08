<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api;

/**
 */
class SDKServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Toit\Api\RegisterSDKRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterSDK(\Toit\Api\RegisterSDKRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.SDKService/RegisterSDK',
        $argument,
        ['\Toit\Api\RegisterSDKResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\DeregisterSDKRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeregisterSDK(\Toit\Api\DeregisterSDKRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.SDKService/DeregisterSDK',
        $argument,
        ['\Toit\Api\DeregisterSDKResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\LookupSDKRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LookupSDK(\Toit\Api\LookupSDKRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.SDKService/LookupSDK',
        $argument,
        ['\Toit\Api\LookupSDKResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ValidateModelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ValidateModel(\Toit\Api\ValidateModelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.SDKService/ValidateModel',
        $argument,
        ['\Toit\Api\ValidateModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\SetDefaultSDKRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetDefaultSDK(\Toit\Api\SetDefaultSDKRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.SDKService/SetDefaultSDK',
        $argument,
        ['\Toit\Api\SetDefaultSDKResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\DefaultSDKRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DefaultSDK(\Toit\Api\DefaultSDKRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.SDKService/DefaultSDK',
        $argument,
        ['\Toit\Api\DefaultSDKResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ListSDKsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSDKs(\Toit\Api\ListSDKsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.SDKService/ListSDKs',
        $argument,
        ['\Toit\Api\ListSDKsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Only available on local consoles for debug purposes.
     * @param \Toit\Api\GetFirmwareElfRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetFirmwareElf(\Toit\Api\GetFirmwareElfRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.SDKService/GetFirmwareElf',
        $argument,
        ['\Toit\Api\GetFirmwareElfResponse', 'decode'],
        $metadata, $options);
    }

}
