<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/model/app.proto

namespace GPBMetadata\Toit\Model;

class App
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Toit\Model\Pubsub\Topic::initOnce();
        \GPBMetadata\Toit\Model\Job::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
toit/model/app.proto
toit.modeltoit/model/pubsub/topic.prototoit/model/job.proto"�
App
app_id (
name (	
	namespace (	
revision (
	source_id (\'
jobs (2.toit.model.App.JobsEntry.

created_at (2.google.protobuf.Timestamp

created_by (@
	JobsEntry
key (	"
value (2.toit.model.JobSpec:8"�
JobSpec
name (	

entrypoint (	+
	resources (2.toit.model.JobResources)
triggers (2.toit.model.JobTriggers*
pubsub (2.toit.model.JobSpec.PubSub"
files (2.toit.model.JobFile9
PubSub/
subscriptions (2.toit.model.pubsub.TopicBb
io.toit.proto.toit.modelBAppProtoZ)github.com/toitware/api/golang/toit/model�Toit.Proto.Modelbproto3'
        , true);

        static::$is_initialized = true;
    }
}

