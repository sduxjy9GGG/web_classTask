<?php
$conn = new mysqli(
    "sql100.infinityfree.com",
    "if0_40856168",
    "4RUY7vTGYaKoH7",
    "if0_40856168_test"
);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>
