<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api;

/**
 */
class DataServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Toit\Api\CreateSubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateSubscription(\Toit\Api\CreateSubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DataService/CreateSubscription',
        $argument,
        ['\Toit\Api\CreateSubscriptionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\DeleteSubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteSubscription(\Toit\Api\DeleteSubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DataService/DeleteSubscription',
        $argument,
        ['\Toit\Api\DeleteSubscriptionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\ListSubscriptionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSubscriptions(\Toit\Api\ListSubscriptionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DataService/ListSubscriptions',
        $argument,
        ['\Toit\Api\ListSubscriptionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Fetch(\Toit\Api\FetchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DataService/Fetch',
        $argument,
        ['\Toit\Api\FetchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\StreamRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function Stream(\Toit\Api\StreamRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/toit.api.DataService/Stream',
        $argument,
        ['\Toit\Api\StreamResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\AcknowledgeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Acknowledge(\Toit\Api\AcknowledgeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.DataService/Acknowledge',
        $argument,
        ['\Toit\Api\AcknowledgeResponse', 'decode'],
        $metadata, $options);
    }

}
