<?php

use OSS\OssClient;

require_once __DIR__ . '/vendor/autoload.php';

$accessKeyId = "LTAI4FeymoZgZ93k9KomFkdf";
$accessKeySecret = "JwfdMA5bKI5Ig9XXKIcUBNzA4GYxNz";
$endpoint = "oss-cn-hongkong.aliyuncs.com";

//try {
//    $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
//} catch (OssException $e) {
//    print $e->getMessage();
//}



$bucket= "rubikhealth.oss-cn-hongkong.aliyuncs.com";
$object = "ironman.jpg";
$content = "Hello, OSS!"; // Content of the uploaded file

try {
    $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);

    $bucketListInfo = $ossClient->listBuckets();
    $bucketList = $bucketListInfo->getBucketList();
    foreach($bucketList as $bucket) {
        print_r($bucket->getLocation() . "\t" . $bucket->getName() . "\t" . $bucket->getCreatedate() . "\n");
        echo '<br>';
    }

} catch (OssException $e) {
    print $e->getMessage();
}
