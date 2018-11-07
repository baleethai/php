<?php

require 'vendor/autoload.php';

function compare_price($a, $b)
{
    return strnatcmp($a['price'], $b['price']);
}
function compare_box($a, $b)
{
    return strnatcmp($a['sort'], $b['sort']);
}

// result : cost, description boxes
$boxes = [
	['title' => '3kg', 'price' => '100', 'weight' => '3'],
    ['title' => '10kg', 'price' => '200', 'weight' => '10'],
    ['title' => '20kg', 'price' => '300', 'weight' => '20'],
];

$weight = isset($_GET['weight']) ? $_GET['weight'] : 0; // kg.

$useBoxs = [];
foreach ($boxes as $key => $box) {
    $countBox = ceil($weight / $box['weight']);
    $useBoxes[] = [
        'title' => $box['title'],
        'box'   => $countBox,
        'price' => $box['price'] * $countBox,
        'sort' => $key
    ];
}
usort($useBoxes, 'compare_price');
usort($useBoxes, 'compare_box');
s($useBoxes);