<?php

require '../vendor/autoload.php';

$mysqli = new mysqli("localhost","root","","php");

// Check connection
if ($mysqli -> connect_errno) {
  	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  	exit();
}

// Perform query
if ($result = $mysqli->query("SELECT * FROM users")) {
	$num = mysqli_num_fields($result);
	
	$c = 0;
	$data = [];

	while($rows = mysqli_fetch_array($result))
	{
		while ($fieldinfo = $result -> fetch_field()) {
		  	$data[$c][$fieldinfo->name] = $rows[$fieldinfo->name];
		}
		$c++;
	}
  	$result -> free_result();
}

$mysqli->close();
print_r($data);




