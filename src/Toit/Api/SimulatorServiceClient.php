<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api;

/**
 */
class SimulatorServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Toit\Api\CreateSimulatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateSimulator(\Toit\Api\CreateSimulatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.SimulatorService/CreateSimulator',
        $argument,
        ['\Toit\Api\CreateSimulatorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\RemoveSimulatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveSimulator(\Toit\Api\RemoveSimulatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.SimulatorService/RemoveSimulator',
        $argument,
        ['\Toit\Api\RemoveSimulatorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ListSimulatorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSimulators(\Toit\Api\ListSimulatorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.SimulatorService/ListSimulators',
        $argument,
        ['\Toit\Api\ListSimulatorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\CreateHardwareIdentityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateHardwareIdentity(\Toit\Api\CreateHardwareIdentityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.SimulatorService/CreateHardwareIdentity',
        $argument,
        ['\Toit\Api\CreateHardwareIdentityResponse', 'decode'],
        $metadata, $options);
    }

}
