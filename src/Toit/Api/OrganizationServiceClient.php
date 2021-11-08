<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api;

/**
 */
class OrganizationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Toit\Api\GetUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUser(\Toit\Api\GetUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.OrganizationService/GetUser',
        $argument,
        ['\Toit\Api\GetUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ListUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUsers(\Toit\Api\ListUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.OrganizationService/ListUsers',
        $argument,
        ['\Toit\Api\ListUsersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\CreateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateUser(\Toit\Api\CreateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.OrganizationService/CreateUser',
        $argument,
        ['\Toit\Api\CreateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\DeleteUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteUser(\Toit\Api\DeleteUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.OrganizationService/DeleteUser',
        $argument,
        ['\Toit\Api\DeleteUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\CreateAPIKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAPIKey(\Toit\Api\CreateAPIKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.OrganizationService/CreateAPIKey',
        $argument,
        ['\Toit\Api\CreateAPIKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ListAPIKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListAPIKeys(\Toit\Api\ListAPIKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/toit.api.OrganizationService/ListAPIKeys',
        $argument,
        ['\Toit\Api\ListAPIKeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\DeleteAPIKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAPIKey(\Toit\Api\DeleteAPIKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.OrganizationService/DeleteAPIKey',
        $argument,
        ['\Toit\Api\DeleteAPIKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\GetAPIKeySecretRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAPIKeySecret(\Toit\Api\GetAPIKeySecretRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.OrganizationService/GetAPIKeySecret',
        $argument,
        ['\Toit\Api\GetAPIKeySecretResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\UpdateOrganizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOrganization(\Toit\Api\UpdateOrganizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.OrganizationService/UpdateOrganization',
        $argument,
        ['\Toit\Api\UpdateOrganizationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\CreateNewOrganizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateNewOrganization(\Toit\Api\CreateNewOrganizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.OrganizationService/CreateNewOrganization',
        $argument,
        ['\Toit\Api\CreateNewOrganizationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ClaimHardwareIdentityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ClaimHardwareIdentity(\Toit\Api\ClaimHardwareIdentityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.OrganizationService/ClaimHardwareIdentity',
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
        return $this->_simpleRequest('/toit.api.OrganizationService/SetHardwareIdentityInfo',
        $argument,
        ['\Toit\Api\SetHardwareIdentityInfoResponse', 'decode'],
        $metadata, $options);
    }

}
