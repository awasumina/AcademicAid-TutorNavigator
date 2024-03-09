<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

if(!isset($username)){
   header('location:../user/loginforstudent.php');
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration completed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/teacherrequesttoregister.css">


    <style type="text/css">
        body{/*
            background-image: url(image/3.jpg);
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;*/
        }
    </style>


</head>

<body>
    <div class="container">
        <div id="alert-additional-content-5" class="alert-box" role="alert">
            <div class="img">
                <img class="img" src="../images/869563.png">
            </div>
            <div class="alert">
                <i class="fa-solid fa-circle-check ico"></i>
                <h3>Request send successfully !!!</h3>
            </div>
            <div class="alert-content alert">
                Please wait till the request gets approved by admin 
            </div>
            <div class="alert">
                <!-- <a href="home.php">
                <button type="button" class="button">
                    <i class="fa-solid fa-eye"></i>
                    Ok
                </button></a> -->

                <a href="index.php">
                <button type="button" class="button" onclick="closeWindow()"> <i class="fa-solid fa-eye"></i>Dismiss</button>




                <!-- <a href="home.php">
                <button type="button" onclick="Close()" class="dismiss-btn" id="close">Dismiss</button></a> -->
            </div>
        </div>
    </div>
    <!-- <script>
    function closeWindow() {
        window.close(); // Close the current browser window
    }
</script> -->
    <script src="js/main.js"></script>
</body>
</html>