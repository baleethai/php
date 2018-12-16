<?php

require 'vendor/autoload.php';
$data = [
	'name' => 'Tum',
	'age'  => 30
];

setcookie('name', json_encode($data), time() + (86400 * 30), "/"); // 86400 = 1 day

s($_COOKIE['name']);