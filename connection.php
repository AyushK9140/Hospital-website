<?php
$hostname="localhost";	$user="root";	$pass="";
$conn = mysqli_connect($hostname,$user,$pass) or die("Server connection could not be established.");
mysqli_select_db($conn,"project1")  or die("Database connection could not be established.");
?>
