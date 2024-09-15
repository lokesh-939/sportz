<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sportz";
define('ROOT_URL','http//localhost/dbms mini/');

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Error: " . mysqli_connect_error());
} 
?>