<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api;

/**
 */
class DoctorServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Toit\Api\HealthRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function HealthCheck(\Toit\Api\HealthRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DoctorService/HealthCheck',
        $argument,
        ['\Toit\Api\HealthResponse', 'decode'],
        $metadata, $options);
    }

}
