<?php

//$myfile = fopen("testdata.txt", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("testdata.txt"));
//fclose($myfile);

$handle = fopen("testdata.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
		// echo fread($handle,filesize("testdata.txt"));
    }
    fclose($handle);
} else {
    // error opening the file.
}