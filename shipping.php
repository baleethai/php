<?php

require 'vendor/autoload.php';

function compare_price($a, $b)
{
    return strnatcmp($a['price'], $b['price']);
}

// result : cost, description boxes
$boxes = [
	['title' => '20kg', 'price' => '300', 'weight' => '20'],
    ['title' => '10kg', 'price' => '200', 'weight' => '10'],
    ['title' => '3kg', 'price' => '100', 'weight' => '3'],
];

$weight = isset($_GET['weight']) ? $_GET['weight'] : 0; // kg.

$useBoxs = [];
foreach ($boxes as $box) {
    $countBox = ceil($weight / $box['weight']);
    $useBoxes[] = [
        'title' => $box['title'],
        'box'   => $countBox,
        'price' => $box['price'] * $countBox
    ];
}
s($useBoxes);
usort($useBoxes, 'compare_price');
s(array_shift($useBoxes));