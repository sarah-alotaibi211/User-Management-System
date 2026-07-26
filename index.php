<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Task</title>
<h1>User Management System</h1>
<h2>Add a new user</h2>
<link rel="stylesheet" href="style.css?v=2">
</head>
<body>

<form action="insert.php" method="POST">

<input type="text" name="name" placeholder="Name" required>

<input type="number" name="age" placeholder="Age" required>

<button type="submit">Submit</button>

</form>

<br>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM users");

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?= $row['id']; ?></td>

<td><?= $row['name']; ?></td>

<td><?= $row['age']; ?></td>

<td id="status<?= $row['id']; ?>">
<?= $row['status']; ?>
</td>

<td>
<button type="button" onclick="toggleStatus(<?= $row['id']; ?>)">
    Toggle
</button>
</td>

</tr>

<?php } ?>

</table>

<script src="scriptt.js"></script>

</body>
</html>

