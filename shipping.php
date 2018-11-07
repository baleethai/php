<?php

require 'vendor/autoload.php';
// result : cost, description boxes
$boxes = [
	['title' => '3kg', 'price' => '100', 'weight' => '3'],
	['title' => '10kg', 'price' => '200', 'weight' => '10'],
	['title' => '20kg', 'price' => '300', 'weight' => '20'],
];

$weight = isset($_GET['weight']) ? $_GET['weight'] : 0; // kg.

$useBoxs = [];
foreach ($boxes as $box) {
    $countBox = ceil($weight / $box['weight']);
    $useBoxes[] = [
        'title' => $box['title'],
        'box' => $countBox,
        'price' => $box['price'] * $countBox
    ];
}
s($useBoxes); exit;

$maxWeight = max($useBoxs);
//  s(is_float($weight/30));
s($weight%30);
s($weight/30);

/**
Shipping
    - Belucky Express
        - Weight 30Kg > by Zone
        - Zone
        - setting: shipping_belucky:status,shipping_belucky:rate:1000:50,2000:80,3000:150,4000:200,shipping_sort:1
        - shipping:belucky
    - Inter Express
        - Weight
    - SCG Express
        - Box + Weight
        - 3 Kg. / 10 Kg. / 20 Kg.
------------------------------------
Boxs
    - title
    - price
    - kg
weight = 20kg
* use box ? :3
* max(3kg,10kg,20kg)
* weight/20kg
**/ 