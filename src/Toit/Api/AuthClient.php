<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api;

/**
 */
class AuthClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Toit\Api\LoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Login(\Toit\Api\LoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.Auth/Login',
        $argument,
        ['\Toit\Api\AuthResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\RefreshRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Refresh(\Toit\Api\RefreshRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.Auth/Refresh',
        $argument,
        ['\Toit\Api\AuthResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ChangeOrganizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChangeOrganization(\Toit\Api\ChangeOrganizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.Auth/ChangeOrganization',
        $argument,
        ['\Toit\Api\AuthResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\LogoutRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Logout(\Toit\Api\LogoutRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.Auth/Logout',
        $argument,
        ['\Toit\Api\LogoutResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\CreateOrganizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateOrganization(\Toit\Api\CreateOrganizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.Auth/CreateOrganization',
        $argument,
        ['\Toit\Api\CreateOrganizationResponse', 'decode'],
        $metadata, $options);
    }

}
