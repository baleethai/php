<?php
$myfile = fopen("2c2p.txt", "w") or die("Unable to open file!");
$txt = "2c2p-" . date('Y-m-d H:i:s');
fwrite($myfile, $txt);
fclose($myfile);
?>