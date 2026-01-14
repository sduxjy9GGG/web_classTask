<?php
$conn = new mysqli(
    "sql100.infinityfree.com",
    "if0_40901610",
    "7c9Ixxgwu6HaJoc",
    "if0_40901610_test"
);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>
