<?php

require_once __DIR__ . '/vendor/autoload.php';

use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

$client = new Client(HttpClient::create(['timeout' => 60]));

$crawler = $client->request('GET', 'https://github.com/');
$crawler = $client->click($crawler->selectLink('Sign in')->link());
$form = $crawler->selectButton('Sign in')->form();
$crawler = $client->submit($form, array('login' => 'baleethai', 'password' => 'Thinnakorn062620170'));
$crawler->filter('.flash-error')->each(function ($node) {
    print $node->text()."\n";
});

