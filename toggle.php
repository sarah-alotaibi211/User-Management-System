<?php
include "db.php";

$id = $_POST['id'];

$q = mysqli_query($conn, "SELECT status FROM users WHERE id=$id");

$row = mysqli_fetch_assoc($q);

$newStatus = ($row['status'] == 0) ? 1 : 0;

mysqli_query($conn, "UPDATE users SET status=$newStatus WHERE id=$id");

echo $newStatus;
?>
