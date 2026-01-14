<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect.php";

$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM registration WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: view.php");
exit;
?>
