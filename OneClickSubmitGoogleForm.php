<?php

require 'vendor/autoload.php';

use Goutte\Client;

$client = new Client();

$guzzleclient = new \GuzzleHttp\Client([
    'timeout' => 600,
    'verify' => false,
]);

$client->setClient($guzzleclient);

$crawler = $client->request('GET', 'https://docs.google.com/forms/d/e/1FAIpQLScJqX5YrRP8Q6sQsx3dCvTjwkv0byizdD2_IvJM5i2CAz-GPw/viewform');

$crawler->filter('input')->each(function ($node) {

});
