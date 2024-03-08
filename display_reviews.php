<?php
include("review_connection.php");

$sql = "SELECT names, email, messages, rating FROM review";
$result = $conn->query($sql);

$reviews = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
}

$conn->close();

header('Content-Type: application/json');

echo json_encode($reviews);

