<?php

require 'vendor/autoload.php';

use Vimeo\Exceptions\VimeoRequestException;
use Vimeo\Exceptions\VimeoUploadException;

$clientId = '9de2d5dab60d55b19a99a279ff84b3e1c9dce61a';
$clientSecret = 's7Yp8w0P3fJDlP++r9uV/xhs8LR+JCEgTTmmd/xA+wSsUjaYmlxlUYstOACESe7OMZ+T1CE14W/akr1K7vx4kpDbFTwE/qRO3ZzD5+b0xVlFeIrso3hyHH7Boi2qQw8b';

$lib = new \Vimeo\Vimeo($clientId, $clientSecret);

//try {
//    // code
//    $response = $lib->upload('how-you-like-that.mp4');
//    var_dump($response);
//} catch (VimeoRequestException $e) {
//    var_dump($e->getMessage());
//} catch (VimeoUploadException $e) {
//    var_dump($e->getMessage());
//} catch (Exception $e) {
//    var_dump($e->getMessage());
//}


