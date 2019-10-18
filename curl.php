<?php

//require 'vendor/autoload.php';

// $client = new GuzzleHttp\Client();
////$res = $client->request('GET', 'https://www.pakpatcha.com/', [
////    'auth' => ['user', 'pass']
////]);
//
//
//// Send an asynchronous request.
//$request = new \GuzzleHttp\Psr7\Request('GET', 'https://www.pakpatcha.com/signin2-member.php?t=1569201942');
//$promise = $client->sendAsync($request)->then(function ($response) {
//    echo 'I completed! ' . $response->getBody();
//});
//$promise->wait();


define("DOC_ROOT","./path/to/html");
//username and password of account
$username = 'pakpatchar@gmail.com';
$password = '@pakpatcha062620170';

//set the directory for the cookie using defined document root var
$path = DOC_ROOT."/ctemp";
//build a unique path with every request to store. the info per user with custom func. I used this function to build unique paths based on member ID, that was for my use case. It can be a regular dir.
//$path = build_unique_path($path); // this was for my use case

//login form action url
$url="https://www.pakpatcha.com/signin2-member.php?t=1569201942";
$postinfo = "email=".$username."&password=".$password;

$cookie_file_path = $path."/cookie.txt";

$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_NOBODY, false);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
//set the cookie the site has for certain features, this is optional
curl_setopt($ch, CURLOPT_COOKIE, "cookiename=0");
curl_setopt($ch, CURLOPT_USERAGENT,
    "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, '/curl.php');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
curl_exec($ch);

//page with the content I want to grab
curl_setopt($ch, CURLOPT_URL, "https://www.pakpatcha.com/mc.php?id=505&job=product&page=1&order=d");
//do stuff with the info with DomDocument() etc
$html = curl_exec($ch);
print_r($html);
curl_close($ch);
