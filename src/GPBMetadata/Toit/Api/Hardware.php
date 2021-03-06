<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: toit/api/hardware.proto

namespace GPBMetadata\Toit\Api;

class Hardware
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Toit\Model\Device::initOnce();
        \GPBMetadata\Toit\Model\Data::initOnce();
        \GPBMetadata\Toit\Model\Pubsub\Message::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
?
toit/api/hardware.prototoit.apitoit/model/data.prototoit/model/pubsub/message.protogoogle/protobuf/timestamp.proto"V
ClaimRequest
hardware_id (
init_device_name (	
organization_id ("?
ClaimResponse/
hardware_info (2.toit.model.HardwareInfo
	device_id (
device_name (	
organization_id ("r
ReplaceRequest
new_hardware_id (
current_hardware_id (
	device_id (
organization_id ("[
ReplaceResponse/
hardware_info (2.toit.model.HardwareInfo
organization_id ("/
GetActiveDeviceIDRequest
hardware_id (".
GetActiveDeviceIDResponse
	device_id ("?
HardwareEvent
hardware_id (
event_id (*
type (2.toit.api.HardwareEvent.Type
job_id (,
received (2.google.protobuf.Timestamp+
created (2.google.protobuf.Timestamp
	device_id (
organization_id ("
log	 (2.toit.model.LogDataH *
metrics
 (2.toit.model.MetricsDataH ,
pubsub (2.toit.model.pubsub.MessageH "6
Type
UNKNOWN 
LOGS
METRICS

PUBSUBB
data"?
HardwareEventsRequest
hardware_id (
job_id (*
type (2.toit.api.HardwareEvent.Type
limit (
reverse (
id (H (
ts (2.google.protobuf.TimestampH B
offset"@
HardwareEventsResponse&
event (2.toit.api.HardwareEvent"<
ClaimHardwareIdentityRequest
flash_station_secret (	"X
ClaimHardwareIdentityResponse7
hardware_identity (2.toit.model.HardwareIdentity"?
SetHardwareIdentityInfoRequest
flash_station_secret (	
hardware_id (.
info (2 .toit.model.HardwareIdentityInfo"!
SetHardwareIdentityInfoResponse2?
HardwareService:
Claim.toit.api.ClaimRequest.toit.api.ClaimResponse" @
Replace.toit.api.ReplaceRequest.toit.api.ReplaceResponse" ^
GetActiveDeviceID".toit.api.GetActiveDeviceIDRequest#.toit.api.GetActiveDeviceIDResponse" W
HardwareEvents.toit.api.HardwareEventsRequest .toit.api.HardwareEventsResponse" 02?
FlashStationj
ClaimHardwareIdentity&.toit.api.ClaimHardwareIdentityRequest\'.toit.api.ClaimHardwareIdentityResponse" p
SetHardwareIdentityInfo(.toit.api.SetHardwareIdentityInfoRequest).toit.api.SetHardwareIdentityInfoResponse" Ba
io.toit.proto.toit.apiBHardwareProtoZ\'github.com/toitware/api/golang/toit/api?Toit.Proto.APIbproto3'
        , true);

        static::$is_initialized = true;
    }
}

