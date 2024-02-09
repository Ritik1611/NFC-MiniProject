<?php
$username = 'Admin';
$password = 'Ritikshetty@16';
$servername = 'localhost';
$dbname = 'nfcdatabase';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}