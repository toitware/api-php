<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/pubsub/message.proto

namespace GPBMetadata\Toit\Model\Pubsub;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
?
toit/model/pubsub/message.prototoit.model.pubsub"C
Envelope

id (+
message (2.toit.model.pubsub.Message"?
	Publisher5
device (2#.toit.model.pubsub.Publisher.DeviceH 9
external (2%.toit.model.pubsub.Publisher.ExternalH 
External
name (	?
Device
hardware_id (
	device_id (
event_id (
job_id (.

written_at (2.google.protobuf.TimestampB
	publisher"?
Message
topic (	/
	publisher (2.toit.model.pubsub.Publisher.

created_at (2.google.protobuf.Timestamp
data (B{
io.toit.proto.toit.model.pubsubBMessageProtoZ0github.com/toitware/api/golang/toit/model/pubsub?Toit.Proto.Model.PubSubbproto3'
        , true);

        static::$is_initialized = true;
    }
}

