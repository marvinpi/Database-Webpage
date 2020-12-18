<?php

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'votingsystem';

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die ('Whoops! Could not connect to the database: ' . mysqli_error($conn));
}

 ?>
