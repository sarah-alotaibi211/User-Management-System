<?php
$servername = "sql303.infinityfree.com";
$username = "if0_42429404";
$password = "SaraSoso7777";
$dbname = "if0_42429404_task_db";



$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection Failed");
}
?>
