<?php

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'loginbase';

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
   die("Database connection fail");
}


?>