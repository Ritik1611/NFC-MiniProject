<?php
$servername = "localhost";
$username = "Admin";
$password = "Ritikshetty@16";
$database = "nfcdatabase";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}