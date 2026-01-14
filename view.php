<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect.php";

$result = $conn->query("SELECT * FROM registration");

if (!$result) {
    die("QUERY ERROR: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>View Records</title>
  <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

<div class="container">
  <h2 class="text-center">All Registered Users</h2>

  <a href="index.html" class="btn btn-primary" style="margin-bottom:15px;">
    + Add New Entry
  </a>

  <table class="table table-bordered table-striped">
    <tr>
      <th>ID</th>
      <th>First</th>
      <th>Last</th>
      <th>Gender</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Action</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= htmlspecialchars($row['firstName']) ?></td>
      <td><?= htmlspecialchars($row['lastName']) ?></td>
      <td><?= htmlspecialchars($row['gender']) ?></td>
      <td><?= htmlspecialchars($row['email']) ?></td>
      <td><?= htmlspecialchars($row['number']) ?></td>
      <td>

        <!-- EDIT BUTTON -->
        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-xs">
          Edit
        </a>

        <!-- DELETE FORM (SAFE) -->
        <form action="delete.php" method="post" style="display:inline;"
              onsubmit="return confirm('Are you sure you want to delete this record?');">
          <input type="hidden" name="id" value="<?= $row['id'] ?>">
          <button type="submit" class="btn btn-danger btn-xs">
            Delete
          </button>
        </form>

      </td>
    </tr>
    <?php } ?>

  </table>
</div>

</body>
</html>
