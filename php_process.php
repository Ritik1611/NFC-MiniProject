<?php
include('profile_connection.php');
require 'vendor/autoload.php';
use Sabre\VObject\Reader;

$vcardFilePath = 'data:text/x-vcard;charset=utf-8,%EF%BB%BFBEGIN:VCARD%0AVERSION:3.0%0AN:Yash%20Doe%0ATEL:8657379424%0AEMAIL:yash.sajda004@gmail.com%0AEND:VCARD';
$vcardData = file_get_contents($vcardFilePath);
$vcard = Reader::read($vcardData);
$name = $vcard->NAME->getValue();
$email_address = $vcard->PERSONAL->getValue();
$organisation = $vcard->COMPANY->getValue();
$mobile_no = $vcard->WORK->getValue();
$gender = isset($vcard->GENDER) ? $vcard->GENDER->getValue() : '';
$post = $vcard->TITLE->getValue();

$sql = "INSERT INTO personal_details(names, organisation, mobile_no, gender, email_address, post) VALUES ($name, $organisation, $mobile_no, $gender, $email_address, $post)";

if ($conn->query($sql) === TRUE) {
    header('Location: index.html');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();