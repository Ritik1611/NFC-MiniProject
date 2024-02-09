<?php
include("login_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST["names"];
    $passwords = $_POST["passwords"];
    $username = $_POST["username"];

    $sql = "INSERT INTO login_page VALUES ('$username', '$passwords', '$names')";

        if ($conn->query($sql) === TRUE) {
            header('Location: land.html');
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    $conn->close();
}