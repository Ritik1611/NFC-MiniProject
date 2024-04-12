<?php
include("review_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST["nameInput"];
    $email = $_POST["emailInput"];
    $background_color = $_POST['backgroundColor'];
    $card_type = $_POST['cardType'];

    // File upload handling for logo
    $logo_target_dir = "uploads/";
    $logo_filename = basename($_FILES["logoInput"]["name"]);
    $logo_target_file = $logo_target_dir . $logo_filename;
    $logo_uploadOk = 1;
    $logo_imageFileType = strtolower(pathinfo($logo_target_file, PATHINFO_EXTENSION));

    // Check if file was uploaded successfully
    if (move_uploaded_file($_FILES["logoInput"]["tmp_name"], $logo_target_file)) {
        // File uploaded successfully, proceed with inserting data into the database
    } else {
        echo "Sorry, there was an error uploading your logo file.";
        exit();
    }

    // File upload handling for signature
    $signature_target_dir = "uploads/";
    $signature_filename = basename($_FILES["signatureInput"]["name"]);
    $signature_target_file = $signature_target_dir . $signature_filename;
    $signature_uploadOk = 1;
    $signature_imageFileType = strtolower(pathinfo($signature_target_file, PATHINFO_EXTENSION));

    // Check if file was uploaded successfully
    if (move_uploaded_file($_FILES["signatureInput"]["tmp_name"], $signature_target_file)) {
        // File uploaded successfully, proceed with inserting data into the database
    } else {
        echo "Sorry, there was an error uploading your signature file.";
        exit();
    }

    // Insert data into the database
    $sql = $conn->prepare("INSERT INTO user_cards (names, email, logo_filename, signature_filename, background_color, card_type) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssss", $names, $email, $logo_filename, $signature_filename, $background_color, $card_type);

    if ($sql->execute()) {
        header('Location: shop.html');
        exit();
    } else {
        echo '<script>alert("Error: ' . $sql->error . '");</script>';
    }

    $conn->close();
}
?>
