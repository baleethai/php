<?php

require '../vendor/autoload.php';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=php', 'root', '');
    foreach($dbh->query('SELECT * FROM demo') as $row) {
        s($row);
    }
    $dbh = null;
} catch (\PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}