<?php

$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$conn = mysqli_connect("localhost", "root", "", "database_form") or die("connection failed");
$sql = "INSERT INTO database_table(Name, Email, Mobile) VALUES ('{$name}','{$email}','{$mobile}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location:http://localhost/Contact%20Us/contact.php");
mysqli_close($conn);
?>