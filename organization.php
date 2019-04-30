<?php

require 'vendor/autoload.php';

$isMerchant = true;
$type = strtoupper(substr('Hospital', 0, 3)) . '-';

$oldOrganization = 'HOS-001'; // Last Organization

if ($isMerchant) {
    $number = (int) substr($oldOrganization, 4, 7);
    $number++;
    $organization = "{$type}" . str_pad($number, 3, '0', STR_PAD_LEFT);
} else {
    $organization = "{$type}001";
}

var_dump($organization);