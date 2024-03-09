<?php
$host="localhost";
$user="root";
$pass = "";
$dbname= "academicaid";

$conn = mysqli_connect($host, $user, $pass, $dbname) or die();


// $conn = new mysqli($host, $user, $password, $db);
// if( $conn ->connect_error)
// {
// 	echo "Failed to connect to MySQL". $conn->connect_error;
// 	exit;
// }