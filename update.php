<?php
include "connect.php";

$id        = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$email     = $_POST['email'];
$number    = $_POST['number'];

$stmt = $conn->prepare(
    "UPDATE registration 
     SET firstName=?, lastName=?, email=?, number=? 
     WHERE id=?"
);

$stmt->bind_param("ssssi", $firstName, $lastName, $email, $number, $id);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: view.php");
exit;
?>
