<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Toit\Api\Pubsub;

/**
 */
class PublishClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Toit\Api\Pubsub\PublishRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Publish(\Toit\Api\Pubsub\PublishRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/toit.api.pubsub.Publish/Publish',
        $argument,
        ['\Toit\Api\Pubsub\PublishResponse', 'decode'],
        $metadata, $options);
    }

}
