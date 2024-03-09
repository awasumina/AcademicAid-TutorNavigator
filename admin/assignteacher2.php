<?php

include 'db.php';

session_start();

$username = $_SESSION['username'];

if(!isset($username)){
   header('location:../html/login.php');
};

?>


<?php
        $host="localhost";
        $user="root";
        $password="";
        $database="academicaid";
        $con = mysqli_connect($host,$user,$password,$database);

        if(!$con){
            die('Could not Connect My Sql:');
        }

        if(isset($_POST['submit']))
        {	
            // variable for customer
            
            $tfn = $_POST['tfn'];
            $tmn = $_POST['tmn'];
            $tln = $_POST['tln'];
            $temail = $_POST['temail'];
            $tgender = $_POST['tgender'];
            $sfn = $_POST['sfn'];
            $smn = $_POST['smn'];
            $sln = $_POST['sln'];
            $semail = $_POST['semail'];
            $sgender = $_POST['sgender'];
            $stime = $_POST['stime'];
            $etime = $_POST['etime'];
            $address = $_POST['address'];           
           $subtype = $_POST['subtype'];
      

            $sql = "INSERT INTO `assignteacher`(`tfn`, `tmn`, `tln`,`temail`, `tgender`,`sfn`, `smn`, `sln`,`semail`, `sgender`, `stime`,`etime`, `address`, `subtype`) VALUES (
                '$tfn','$tmn','$tln','$temail','$tgender','$sfn','$smn','$sln','$semail','$sgender','$stime','$etime','$address','$subtype')";
                if (mysqli_query($con, $sql)) {
                    // header('location:../html/profile.php');
                    header('location:admindashboard.php');
                }else {

                    
                        echo 'Error: ' . mysqli_error($con);
                   
                    // echo 'teacher registration failed';
                }

	        mysqli_close($con);
        }
?>









