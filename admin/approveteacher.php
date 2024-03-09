<?php

include 'db.php';

session_start();

$username = $_SESSION['username'];

if(!isset($username)){
   header('location:../html/login.php');
};



if(isset($_GET['tid'])) {
    // Retrieve the value of 'subject'
    $tid = $_GET['tid'];

} else {
    echo "No id specified.";
}

if(isset($_GET['sid'])) {
    // Retrieve the value of 'subject'
    $sid = $_GET['sid'];

} else {
    echo "No sid specified.";
}



if(isset($_GET['id'])) {
    // Retrieve the value of 'subject'
    $id = $_GET['id'];

} else {
    echo "No sid specified.";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/admineditteacherform.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<style>
.container{
    /* width:2000px; */
    max-width: 500px;

}
/* .container form .fields{
        border:10px solid yellow;
        width:100%;
        display:flex;


    }
    .input-field{
        border:10px solid red;
    }

    .input-field input{
        border:10px solid blue;
        width:100%;
        
    } */


</style>

</head>
<body>
    <?php

    include 'db.php';


    $result = mysqli_query($conn, "SELECT * FROM `teacher` WHERE id= $tid") or die('query failed');
    if(mysqli_num_rows($result) > 0){
       while($fetch_product = mysqli_fetch_assoc($result)){
          $tfn = $fetch_product['cfn'];
          $tmn = $fetch_product['cmn'];
          $tln = $fetch_product['cln'];
          $temail = $fetch_product['email'];
          $tgender = $fetch_product['gender'];

       }
    }


    $sresult = mysqli_query($conn, "SELECT * FROM `student` WHERE id= $sid") or die('query failed');
    if(mysqli_num_rows($sresult) > 0){
       while($fetch_product = mysqli_fetch_assoc($sresult)){
          $sfn = $fetch_product['cfn'];
          $smn = $fetch_product['cmn'];
          $sln = $fetch_product['cln'];
          $semail = $fetch_product['email'];
          $sgender = $fetch_product['gender'];
          $saddr = $fetch_product['street'];

       }
    }





    $sql = "SELECT * FROM requestteacher WHERE id=$id; 
   
     "; // Employee_ID  = ".$id;

    $requestresult = mysqli_query($conn, $sql);

    if($requestresult){

        while($row = mysqli_fetch_assoc($requestresult)){
            $stime = $row['stime'];
            $etime = $row['etime'];
            $subtype = $row['subtype'];
  
        }
    }
    ?>
    
    <div class="container">
        <header>Assign Teacher to Student</header>

        <form action="assignteacheranddeletefromrequest.php" method="POST" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Details</span>

                    <!-- Add a hidden input field to pass the id value -->
                    <input type="hidden" name="id" value="<?php echo $id; ?>">


                    <div class="fields">
                        <div class="input-field">
                            <label>Teacher's First Name</label>
                            <input type="text" placeholder="Enter Teacher first name" name="tfn" value="<?php echo $tfn; ?>">
                        </div>

                        <div class="input-field">
                            <label>Teacher's Middle Name</label>
                            <input type="text" placeholder="Enter Teacher middle name" name="tmn"value="<?php echo $tmn; ?>">
                        </div>

                        <div class="input-field">
                            <label>Teacher's Last Name</label>
                            <input type="text" name="tln" placeholder="Enter Teacher last name" value="<?php echo $tln; ?>">
                        </div>


                        <div class="input-field">
                            <label>Teacher's Email</label>
                            <input type="email" name="temail" value="<?php echo $temail; ?>">
                        </div>
                        
                        <div class="input-field">
                            <label>Teacher Gender</label>
                            <input name="tgender" value="<?php echo $tgender; ?>">
                            <!-- <select name="tgender" >
                                <option disabled selected >Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select> -->
                        </div>


                        <div class="input-field">
                            <label>Student's First Name</label>
                            <input type="text" placeholder="Enter Student first name" name="sfn" value="<?php echo $sfn; ?>">
                        </div>

                        <div class="input-field">
                            <label>Student's Middle Name</label>
                            <input type="text" placeholder="Enter Student middle name" name="smn" value="<?php echo $smn; ?>">
                        </div>

                        <div class="input-field">
                            <label>Student's Last Name</label>
                            <input type="text" name="sln" value="<?php echo $sln; ?>">
                        </div>


                        <div class="input-field">
                            <label>Student's Email</label>
                            <input type="email" name="semail" value="<?php echo $semail; ?>">
                        </div>
                        
                        <div class="input-field">
                            <label>Student Gender</label>
                            <input name="sgender" value="<?php echo $sgender; ?>">
                            <!-- <select name="gender" >
                                <option disabled selected >Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select> -->
                        </div>

                        <div class="input-field">
                            <label>Starting Time</label>
                            <input  name="stime" value="<?php echo $stime; ?>">
                        </div>

                        <div class="input-field">
                            <label>Ending Time</label>
                            <input  name="etime" value="<?php echo $etime; ?>">
                        </div>
                        
        
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" value="<?php echo $saddr; ?>">
                        </div>



                        <div class="input-field">
                            <label>Subject to Teach</label>
                            <input type="text" name="address" value="<?php echo $subtype; ?>">

                            <!-- <select name="subtype">
                                <option disabled selected>Select Subject</option>
                                <option value="math">Maths</option>
                                <option value="account">Account</option>
                                <option value="optmath">Opt Math</option>
                                <option value="social">Social</option>
                                <option value="science">Science</option>
                            </select>     -->
                        </div> 

                </div>
                       
                        <button class="sumbit" name="submit">
                            <span class="btnText">ASSIGN</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>


</body>
</html>
