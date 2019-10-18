<?php

require 'vendor/autoload.php';

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

$goutteClient = new Client();
$guzzleClient = new GuzzleClient(array(
    'timeout' => 60,
));
$goutteClient->setClient($guzzleClient);

$crawler = $goutteClient->request('GET', 'https://docs.google.com/forms/d/e/1FAIpQLSfO1_qG2LUbOQJjLWQSrZ60kZzeo5MZgYcyReSCI7Ml0rCEjw/viewform');

    $table[] = $crawler->filter('input[type=''] > tbody')->filter('tr')->each(function ($tr, $i) {

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



 //file_get_contents('https://docs.google.com/forms/d/e/1FAIpQLSfO1_qG2LUbOQJjLWQSrZ60kZzeo5MZgYcyReSCI7Ml0rCEjw/viewform?usp=pp_url&entry.1055864497=Tum&entry.1708690628=09999999999&entry.1177954553=tum@gmail.com&entry.1735931222=tumxx&submit=Submit');


// https://forms.gle/UqFFg63qGf7xcTfF9/viewform?usp=pp_url&entry.1055864497=Tum&entry.1708690628=09999999999&entry.1177954553=tum@gmail.com&entry.1735931222=tumx&submit=Submit
