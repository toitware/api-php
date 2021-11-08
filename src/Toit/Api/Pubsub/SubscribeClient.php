<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api\Pubsub;

/**
 */
class SubscribeClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Toit\Api\Pubsub\CreateSubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateSubscription(\Toit\Api\Pubsub\CreateSubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.pubsub.Subscribe/CreateSubscription',
        $argument,
        ['\Toit\Api\Pubsub\CreateSubscriptionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\Pubsub\DeleteSubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteSubscription(\Toit\Api\Pubsub\DeleteSubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.pubsub.Subscribe/DeleteSubscription',
        $argument,
        ['\Toit\Api\Pubsub\DeleteSubscriptionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\Pubsub\ListSubscriptionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSubscriptions(\Toit\Api\Pubsub\ListSubscriptionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.pubsub.Subscribe/ListSubscriptions',
        $argument,
        ['\Toit\Api\Pubsub\ListSubscriptionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\Pubsub\FetchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Fetch(\Toit\Api\Pubsub\FetchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.pubsub.Subscribe/Fetch',
        $argument,
        ['\Toit\Api\Pubsub\FetchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\Pubsub\StreamRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function Stream(\Toit\Api\Pubsub\StreamRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/toit.api.pubsub.Subscribe/Stream',
        $argument,
        ['\Toit\Api\Pubsub\StreamResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Toit\Api\Pubsub\AcknowledgeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Acknowledge(\Toit\Api\Pubsub\AcknowledgeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.pubsub.Subscribe/Acknowledge',
        $argument,
        ['\Toit\Api\Pubsub\AcknowledgeResponse', 'decode'],
        $metadata, $options);
    }

}
