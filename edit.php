<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect.php";

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM registration WHERE id=$id");

if (!$result) {
    die("QUERY ERROR: " . $conn->error);
}

$row = $result->fetch_assoc();

if (!$row) {
    die("No record found");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit User</title>
  <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

<div class="container">
  <h2>Edit User</h2>

  <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <div class="form-group">
      <label>First Name</label>
      <input type="text" name="firstName" class="form-control" value="<?= $row['firstName'] ?>" required>
    </div>

    <div class="form-group">
      <label>Last Name</label>
      <input type="text" name="lastName" class="form-control" value="<?= $row['lastName'] ?>" required>
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>" required>
    </div>

    <div class="form-group">
      <label>Phone</label>
      <input type="text" name="number" class="form-control" value="<?= $row['number'] ?>" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="view.php" class="btn btn-default">Cancel</a>
  </form>
</div>

</body>
</html>
