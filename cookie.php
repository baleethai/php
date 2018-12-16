<?php

require 'vendor/autoload.php';
$data = [
	'name' => 'Tum',
	'age'  => 30
];

setcookie('data', json_encode($data), time() + (86400 * 30), "/"); // 86400 = 1 day

s(json_decode($_COOKIE['data']));