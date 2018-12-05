<?php

require 'vendor/autoload.php';

$cart = isset($_GET['cart']) ? $_GET['cart'] : 0;
s($cart);
$weight = [
	[
        'start' => '0', 
        'end'   => '19',
        'price' => '32'
    ],
    [
        'start' => '20', 
        'end'   => '99',
        'price' => '37'
    ],
];

foreach ($weight as $key => $value) {
    if ($cart >= $value['start'] && $cart <= $value['end']) {
        s($value['price']);
    }
}
