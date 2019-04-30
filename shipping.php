<?php

require 'vendor/autoload.php';

$boxes = [
	[
        'title'     => '500 กรัม', 
        'price'     => '160', 
        'weight'    => '500', 
        'dimension' => '500'
    ],
    [
        'title'     => '1000 กรัม', 
        'price'     => '180', 
        'weight'    => '1000', 
        'dimension' => '1000'
    ],
    [
        'title'     => '2000 กรัม',
        'price'     => '230', 
        'weight'    => '2000', 
        'dimension' => '2000'
    ],
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
    s($listBox);

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
    if (is_float($dimension/2000)) {
        // 2000
        $useBoxes[] = [
            'title'     => $box['title'],
            'box'       => floor($dimension/2000),
            'price'     => $box['price'] * floor($dimension/2000),
            'dimension' => $box['dimension']
        ];
        $leftBox = $dimension%2000;
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
            'box'       => $weight/2000,
            'price'     => $box['price'] * $weight/2000,
            'dimension' => $box['dimension']
        ];
    }

    return $useBoxes;
}

