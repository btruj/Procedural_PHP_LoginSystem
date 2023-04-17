<?php

$dbServername = "localhost";
$dbUsername = "admin";
$dbPassword = "1234";
$dbName = "phpproject01";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}