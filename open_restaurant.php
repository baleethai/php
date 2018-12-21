<?php

require 'vendor/autoload.php';

$openStart = '08:00';
$openEnd = '19:00';

$closeStart = '12:00';
$closeEnd = '14:00';

$closeTimes = times($closeStart, $closeEnd);
$openTimes = times();

// s(times());
// s(array_diff(times($closeStart, $closeEnd), times()));

function times($start = null, $end = null)
{
    $start = $start ? $start : '00:15';
    $end   = $end ? $end : '23:30';
    while ( strtotime($start) <= strtotime($end) ) {
        $minutes[] = date("H:i", strtotime( "$start" ) );
        $start = date("H:i", strtotime( "$start + 15 mins"));
    }
    return $minutes;
}
