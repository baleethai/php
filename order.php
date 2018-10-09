<?php

require 'vendor/autoload.php';

$lastOrderId = '0910201800012';
if ($lastOrderId)
{
    $lastDate = substr($lastOrderId, 0, 8);
    $lastNumber = substr($lastOrderId, 8);

    $newDay = \Carbon\Carbon::now()->format('Y-m-d') > \Carbon\Carbon::parse(substr($lastDate, 4).'-'.substr($lastDate, 2, 2).'-'.substr($lastDate, 0, 2));
    if ($newDay)
    {
        $orderId = \Carbon\Carbon::now()->format('dmY').'00001';
    } else {
        $orderId = \Carbon\Carbon::now()->format('dmY').str_pad(++$lastNumber, 5, '0', STR_PAD_LEFT);
    }
} else {
    $orderId = \Carbon\Carbon::now()->format('dmY').'00001';
}