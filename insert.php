<?php

include "db.php";

$name=$_POST['name'];
$age=$_POST['age'];

mysqli_query($conn,
"INSERT INTO users(name,age)
VALUES('$name','$age')");

header("Location:index.php");

?>