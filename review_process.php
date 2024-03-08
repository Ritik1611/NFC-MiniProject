<?php
include("review_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST["names"];
    $email = $_POST["email"];
    $messages = $_POST["messages"];
    $rating = $_POST['rating'];

    $sql = $conn->prepare("INSERT INTO review (names, email, messages, rating) VALUES (?, ?, ?, ?)");
    $sql->bind_param("sssi", $names, $email, $message, $rating);

        if ($sql->execute()) {
            echo '<script>alert("Thankyou for your feedback!");</script>';
            echo '<script>setTimeout(function() { window.location.href = "review.html"; }, 1000);</script>';
            exit();
        } else {
            echo '<script>alert("Error: ' . $sql . ' ' . $conn->error . '");</script>';
        }
        
    $conn->close();
}