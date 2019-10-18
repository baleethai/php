<?php

require 'vendor/autoload.php';

use Goutte\Client;

//  Create a new Goutte client instance
$client = new Client();

//  Hackery to allow HTTPS
$guzzleclient = new \GuzzleHttp\Client([
    'timeout' => 60,
    'verify' => false,
]);

//  Hackery to allow HTTPS
$client->setClient($guzzleclient);

$crawler = $client->request('GET', 'https://httpbin.org');

$crawler->filter('li')->each(function ($node) {
    echo $node->text() . '<br>';
});
