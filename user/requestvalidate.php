<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
// $username = $_SESSION['username'];

if(!isset($user_id)){
   header('location:../user/loginforstudent.php');
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
            // echo "ghgg";
            // $tfn = $_POST['teacher_id'];
            // echo $tfn;
            // $tmn = $_POST['cmn'];
            // $tln = $_POST['cln'];
            // $temail = $_POST['teacher_email'];
            // $taddr = $_POST['street'];
            // $tgender = $_POST['street'];  
            

            $tid = $_POST['teacher_id'];
            $temail = $_POST['teacher_email'];
            


            $subtype = $_POST['subtype'];
            $sclass = $_POST['sclass'];
            $stime = $_POST['stime'];
            $etime = $_POST['etime'];
            $queries = $_POST['queries'];


            $result = mysqli_query($con, "SELECT * FROM `student` WHERE id = {$user_id} ");

            if(mysqli_num_rows($result) > 0){
               while($fetch_product = mysqli_fetch_assoc($result)){
                  
                $sid = $fetch_product['id'];                
                $sfn = $fetch_product['cfn'];
                $smn = $fetch_product['cmn'];
                $sln = $fetch_product['cln'];
                $semail = $fetch_product['email'];   
                $saddr = $fetch_product['street'];   
                }
            }


            $tresult = mysqli_query($con, "SELECT * FROM `teacher` WHERE email = '{$_POST['email']}'");


            if(mysqli_num_rows($tresult) > 0){
               while($fetch_product = mysqli_fetch_assoc($tresult)){
                $tid = $fetch_product['id'];                
                $taddr = $fetch_product['street'];                
                }
            }
            

            $sql = "INSERT INTO `requestteacher`(`tid`, `tstreet`,`sid`,`sfn`, `smn`, `sln`,`semail`, `saddr`,`subtype`,`class`, `stime`,`etime`, `queries`) VALUES (
                '$tid','$taddr','$sid','$sfn','$smn','$sln','$semail','$saddrc','$subtype','$sclass','$stime','$etime','$queries')";
                if (mysqli_query($con, $sql)) {
                    // header('location:../html/profile.php');

                    echo "Teacher ID: " . $tfn . "<br>";
echo "Teacher Email: " . $temail . "<br>";

                    header('location:requestteacherpending.php');
                }else {

                    
                        echo 'Error: ' . mysqli_error($con);
                   
                    // echo 'teacher registration failed';
                }

	        mysqli_close($con);
        }
?>









