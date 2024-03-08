<?php
include("review_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST["nameInput"];
    $email = $_POST["emailInput"];
    $logo_filename = $_FILES["logoInput"]["name"];
    $sign_filename = $_FILES["signatureInput"]["name"];
    $background_color = $_POST['backgroundColor'];
    $card_type = $_POST['cardType'];

    $sql = $conn->prepare("INSERT INTO user_cards (names, email, logo_filename, signature_filename, background_color, card_type) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssss", $names, $email, $logo_filename, $sign_filename, $background_color, $card_type);

    if ($sql->execute()) {
        echo '<script>alert("Your Card will be created within 15 days.");</script>';
        echo '<script>setTimeout(function() { window.location.href = "new.html"; }, 1000);</script>';
        exit();
    } else {
        echo '<script>alert("Error: ' . $sql->error . '");</script>';
    }

    $conn->close();

}