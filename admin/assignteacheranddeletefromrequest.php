<?php

include 'db.php';

session_start();

$username = $_SESSION['username'];

if(!isset($username)){
   header('location:../html/login.php');
};

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        echo "The ID is: " . $id;
    } else {
        echo "No ID specified in the form.";
    }
// } else {
    // Handle the case where the form is not submitted
    // echo "Form not submitted.";
// }





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
                    echo 'success';
                }else {

                    
                        echo 'Error: ' . mysqli_error($con);
                   
                    // echo 'teacher registration failed';
                }


                $delsql = "DELETE FROM requestteacher WHERE id = $id";

                $result = mysqli_query($conn,$delsql);
            
                if($result){
                    header("location:admindashboard.php");
                }

                // if (mysqli_query($con, $sql)) {
                //     $sql = "DELETE FROM `teachertemp` WHERE id = $id";
                //     if (mysqli_query($con, $sql)) {
                //     header('location:admindashboard.php');
                //     // echo "deleted from teacher temp and inserted in teacher table";
                //     }
                // }else {
                //     echo 'Customer registration failed';
                //     echo 'Error: ' . mysqli_error($con);
                // }




	        mysqli_close($con);
        }
?>









