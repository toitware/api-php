<?php
require __DIR__ . '/vendor/autoload.php';

$client = new Toit\Api\DeviceServiceClient('localhost:8723', [
    'credentials' => Grpc\ChannelCredentials::createInsecure(),
]);

$resp = $client->ListDevices(new Toit\Api\ListDevicesRequest());
foreach ($resp->GetDevices() as $device) {
    print $device->GetConfig()->GetName();
}
?>
