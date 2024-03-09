<?php

include 'dbconfig.php';

session_start();

$username = $_SESSION['username'];

if(!isset($username)){
   header('location:../html/login.php');
};

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="success.css"> 

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

		<script>
                function myFunction() {
        location.replace("../admin/admindashboard.php");
    };
        </script>

	</head>
	<body>
    <div class="container">
        <div id="alert-additional-content-5" class="alert-box" role="alert">
            <div class="img">
                <img class="img" src="image/869563.png">
            </div>
            <div class="alert">
                <i class="fa-solid fa-circle-check ico"></i>
                <h3>Registration Successful !!!</h3>
            </div>
            <div class="alert-content alert">
                Payment has successfully been send to the user by esewa. 
            </div>
            <div class="alert">
      
                <a href="loginforteacher.php">
                <!-- <button type="button" class="button" onclick = "myFunction()"> <i class="fa-solid fa-eye"></i>Dismiss</button> -->



            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>