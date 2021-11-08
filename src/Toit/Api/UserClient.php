<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api;

/**
 */
class UserClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Toit\Api\SetPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetPassword(\Toit\Api\SetPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.User/SetPassword',
        $argument,
        ['\Toit\Api\SetPasswordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\InitiateResetPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function InitiateResetPassword(\Toit\Api\InitiateResetPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.User/InitiateResetPassword',
        $argument,
        ['\Toit\Api\InitiateResetPasswordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ChangePasswordWithRPTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChangePasswordWithRPToken(\Toit\Api\ChangePasswordWithRPTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.User/ChangePasswordWithRPToken',
        $argument,
        ['\Toit\Api\ChangePasswordWithRPTokenResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\GetCurrentUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCurrentUser(\Toit\Api\GetCurrentUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.User/GetCurrentUser',
        $argument,
        ['\Toit\Api\GetCurrentUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ListOrganizationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrganizations(\Toit\Api\ListOrganizationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.User/ListOrganizations',
        $argument,
        ['\Toit\Api\ListOrganizationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\GetOrganizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrganization(\Toit\Api\GetOrganizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.User/GetOrganization',
        $argument,
        ['\Toit\Api\GetOrganizationResponse', 'decode'],
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
        return $this->_simpleRequest('/toit.api.User/ListUsers',
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
        return $this->_simpleRequest('/toit.api.User/CreateUser',
        $argument,
        ['\Toit\Api\CreateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\CreatePaymentSubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreatePaymentSubscription(\Toit\Api\CreatePaymentSubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.User/CreatePaymentSubscription',
        $argument,
        ['\Toit\Api\CreatePaymentSubscriptionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ListPaymentInvoicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListPaymentInvoices(\Toit\Api\ListPaymentInvoicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/toit.api.User/ListPaymentInvoices',
        $argument,
        ['\Toit\Api\ListPaymentInvoicesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\CancelPaymentSubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CancelPaymentSubscription(\Toit\Api\CancelPaymentSubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.User/CancelPaymentSubscription',
        $argument,
        ['\Toit\Api\CancelPaymentSubscriptionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\UpdateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateUser(\Toit\Api\UpdateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.User/UpdateUser',
        $argument,
        ['\Toit\Api\UpdateUserResponse', 'decode'],
        $metadata, $options);
    }

}
