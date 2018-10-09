<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

$date = new Carbon('2014-03-30 00:00:00', 'Asia/Bangkok');       // DST off
echo $date->addRealHours(25)->format('H:i');                      // 02:00 (DST on)
exit;
echo $date->diffInRealHours('2014-03-30 00:00:00');               // 25
echo $date->diffInHours('2014-03-30 00:00:00');                   // 26
echo $date->diffInRealMinutes('2014-03-30 00:00:00');             // 1500
echo $date->diffInMinutes('2014-03-30 00:00:00');                 // 1560
echo $date->diffInRealSeconds('2014-03-30 00:00:00');             // 90000
echo $date->diffInSeconds('2014-03-30 00:00:00');                 // 93600
echo $date->diffInRealMicroseconds('2014-03-30 00:00:00');        // 90000000000
echo $date->diffInMicroseconds('2014-03-30 00:00:00');            // 93600000000
echo $date->subRealHours(25)->format('H:i'); 
