<?php

require 'vendor/autoload.php';

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

$goutteClient = new Client();
$guzzleClient = new GuzzleClient(array(
    'timeout' => 60,
));
$goutteClient->setClient($guzzleClient);

// Go to the symfony.com website
$table = [];
for($p = 1; $p <= 1; $p++) {
    $crawler = $goutteClient->request('GET', 'https://www.pakpatcha.com/mc.php?id=505&job=product&page=' . $p . '&order=d');

    // Get the latest post in this category and display the titles
    $table[] = $crawler->filter('table > tbody')->filter('tr')->each(function ($tr, $i) {

        $itemThumb = $tr->filter('td')->eq(1)->filter('.item-thumb')->attr('style');
        $itemThumb = str_replace("background-image: url('", '', $itemThumb);
        $thumb = str_replace("');background-position: center center;background-size: cover;", "", $itemThumb);

        $href = $tr->filter('.textp')->attr('href');

        $data = $tr->filter('td')->each(function ($td, $i) {
            return trim($td->text());
        });
        $data[1] = $thumb;
        $data[10] = $href;
        return $data;
    });

}

foreach ($table[0] as $key => $row) {
    print_r($row);
}







