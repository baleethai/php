<?php

$filename = date("Y-m-d-H-i-s");

$path = fopen("data/cron/" . $filename . ".txt", "w") or die("Unable to open file!");
$data = date("Y-m-d H:i:s");
fwrite($path, $data);
fclose($path);