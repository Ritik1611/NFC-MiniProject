<?php
include("login_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $passwords = $_POST["passwords"];

    $sql = "SELECT * FROM login_page WHERE username = '$username' AND passwords = '$passwords'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header('Location: land.html');
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
$conn->close();