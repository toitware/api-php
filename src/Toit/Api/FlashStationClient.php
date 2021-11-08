<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api;

/**
 */
class FlashStationClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Toit\Api\ClaimHardwareIdentityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ClaimHardwareIdentity(\Toit\Api\ClaimHardwareIdentityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.FlashStation/ClaimHardwareIdentity',
        $argument,
        ['\Toit\Api\ClaimHardwareIdentityResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\SetHardwareIdentityInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetHardwareIdentityInfo(\Toit\Api\SetHardwareIdentityInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.FlashStation/SetHardwareIdentityInfo',
        $argument,
        ['\Toit\Api\SetHardwareIdentityInfoResponse', 'decode'],
        $metadata, $options);
    }

}
