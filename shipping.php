<?php

require 'vendor/autoload.php';

$boxes = [
	['title' => '3kg', 'price' => '160', 'weight' => '3', 'dimension' => '300'],
    ['title' => '10kg', 'price' => '180', 'weight' => '10', 'dimension' => '1000'],
    ['title' => '20kg', 'price' => '230', 'weight' => '20', 'dimension' => '2000'],
];

s($boxes);

$weight = isset($_GET['weight']) ? $_GET['weight'] : 0; // kg.
$dimension = isset($_GET['dimension']) ? $_GET['dimension'] : 0; // cm.


$priceCost = dimension($boxes, $dimension);

s($priceCost);

// function cost($boxes = array(), $weight = 0)
// {
//     $listBox = array_filter($boxes, function($box) use($weight) {
//         return $box['weight'] >= $weight;
//     });

//     if ($listBox) {
//         $useBoxes = array();
//         $number = 0;
//         foreach ($listBox as $row) {
//             if ($number == 0) {
//                 $useBoxes = [
//                     'title'  => $row['title'],
//                     'box'    => 1,
//                     'price'  => (float) $row['price'],
//                     'weight' => (float) $row['weight']
//                 ];
//             }
//             $number++;
//         }
//         return $useBoxes;
//     }

//     $box = end($boxes);
//     if (is_float($weight/20)) {
//         // 20
//         $useBoxes[] = [
//             'title'  => $box['title'],
//             'box'    => floor($weight/20),
//             'price'  => $box['price'] * floor($weight/20),
//             'weight' => $box['weight']
//         ];
//         $leftBox = $weight%20;
//         $listLeftBox = array_filter($boxes, function($box) use($leftBox) {
//             return $box['weight'] >= $leftBox;
//         });
//         $no = 0;
//         foreach ($listLeftBox as $row) {
//             if ($no == 0) {
//                 $useBoxes[] = [
//                     'title'  => $row['title'],
//                     'box'    => 1,
//                     'price'  => (float) $row['price'],
//                     'weight' => (float) $row['weight']
//                 ];
//             }
//             $no++;
//         }
//     } else {
//         $useBoxes[] = [
//             'title'  => $box['title'],
//             'box'    => $weight/20,
//             'price'  => $box['price'] * $weight/20,
//             'weight' => $box['weight']
//         ];
//     }

//     return $useBoxes;
// }

function dimension($boxes = array(), $dimension = 0)
{
    $listBox = array_filter($boxes, function($box) use($dimension) {
        return $box['dimension'] >= $dimension;
    });

    if ($listBox) {
        $useBoxes = array();
        $number = 0;
        foreach ($listBox as $row) {
            if ($number == 0) {
                $useBoxes = [
                    'title'     => $row['title'],
                    'box'       => 1,
                    'price'     => (float) $row['price'],
                    'weight'    => (float) $row['weight'],
                    'dimension' => (float) $row['dimension']
                ];
            }
            $number++;
        }
        return $useBoxes;
    }

    $box = end($boxes);
    if (is_float($dimension/20)) {
        // 20
        $useBoxes[] = [
            'title'     => $box['title'],
            'box'       => floor($dimension/20),
            'price'     => $box['price'] * floor($dimension/20),
            'dimension' => $box['dimension']
        ];
        $leftBox = $dimension%20;
        $listLeftBox = array_filter($boxes, function($box) use($leftBox) {
            return $box['dimension'] >= $leftBox;
        });
        $no = 0;
        foreach ($listLeftBox as $row) {
            if ($no == 0) {
                $useBoxes[] = [
                    'title'     => $row['title'],
                    'box'       => 1,
                    'price'     => (float) $row['price'],
                    'dimension' => (float) $row['dimension']
                ];
            }
            $no++;
        }
    } else {
        $useBoxes[] = [
            'title'     => $box['title'],
            'box'       => $weight/20,
            'price'     => $box['price'] * $weight/20,
            'dimension' => $box['dimension']
        ];
    }

    return $useBoxes;
}

