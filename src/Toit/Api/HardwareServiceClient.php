<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api;

/**
 */
class HardwareServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Toit\Api\ClaimRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Claim(\Toit\Api\ClaimRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.HardwareService/Claim',
        $argument,
        ['\Toit\Api\ClaimResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ReplaceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Replace(\Toit\Api\ReplaceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.HardwareService/Replace',
        $argument,
        ['\Toit\Api\ReplaceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\GetActiveDeviceIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetActiveDeviceID(\Toit\Api\GetActiveDeviceIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.HardwareService/GetActiveDeviceID',
        $argument,
        ['\Toit\Api\GetActiveDeviceIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Debug endpoints only available on local console
     * @param \Toit\Api\HardwareEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function HardwareEvents(\Toit\Api\HardwareEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/toit.api.HardwareService/HardwareEvents',
        $argument,
        ['\Toit\Api\HardwareEventsResponse', 'decode'],
        $metadata, $options);
    }

}
