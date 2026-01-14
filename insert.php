<?php
include "connect.php";

$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$gender    = $_POST['gender'];
$email     = $_POST['email'];
$password  = $_POST['password'];
$number    = $_POST['number'];

$stmt = $conn->prepare(
    "INSERT INTO registration 
    (firstName, lastName, gender, email, password, number) 
    VALUES (?, ?, ?, ?, ?, ?)"
);

$stmt->bind_param(
    "sssssi",
    $firstName,
    $lastName,
    $gender,
    $email,
    $password,
    $number
);

$stmt->execute();

$stmt->close();
$conn->close();

header("Location: index.html");
exit;
?>
