<?php

include 'db.php';

session_start();

$username = $_SESSION['username'];

if(!isset($username)){
   header('location:../html/login.php');
};

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

    // $id = $_GET['id'];

    $sql = "SELECT * FROM teacher 
   
     "; // Employee_ID  = ".$id;

    $result = mysqli_query($conn, $sql);

    if($result){

        while($row = mysqli_fetch_assoc($result)){
            // $id = $row['id'];
            $fname = $row['cfn'];
            $mname = $row['cmn'];
            $lname = $row['cln'];
            $mobileno = $row['mob'];
            $email = $row['email'];
            $subtype = $row['subtype'];
            $subtype2 = $row['subtype2'];
        }
    }
    ?>
    
    <div class="container">
        <header>Assign Teacher to Student</header>

        <form action="assignteacher2.php" method="POST" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Details</span>

                    <!-- Add a hidden input field to pass the id value -->
                    <input type="hidden" name="id" value="<?php echo $id; ?>">


                    <div class="fields">
                        <div class="input-field">
                            <label>Teacher's First Name</label>
                            <input type="text" placeholder="Enter Teacher first name" name="tfn" required onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Teacher's Middle Name</label>
                            <input type="text" placeholder="Enter Teacher middle name" name="tmn"  onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Teacher's Last Name</label>
                            <input type="text" name="tln" placeholder="Enter Teacher last name" required onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>


                        <div class="input-field">
                            <label>Teacher's Email</label>
                            <input type="email" name="temail" placeholder="Enter Teacher email">
                        </div>
                        
                        <div class="input-field">
                            <label>Teacher Gender</label>
                            <select name="tgender" >
                                <option disabled selected >Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>


                        <div class="input-field">
                            <label>Student's First Name</label>
                            <input type="text" placeholder="Enter Student first name" name="sfn" required onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Student's Middle Name</label>
                            <input type="text" placeholder="Enter Student middle name" name="smn"  onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Student's Last Name</label>
                            <input type="text" name="sln" placeholder="Enter Student last name" required onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>


                        <div class="input-field">
                            <label>Student's Email</label>
                            <input type="email" name="semail" placeholder="Enter Student email">
                        </div>
                        
                        <div class="input-field">
                            <label>Student Gender</label>
                            <select name="gender" >
                                <option disabled selected >Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Starting Time</label>
                            <input type="time" name="stime" placeholder="Enter starting time">
                        </div>

                        <div class="input-field">
                            <label>Ending Time</label>
                            <input type="time" name="etime" placeholder="Enter ending time">
                        </div>

        
                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter student resident address" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>



                        <div class="input-field">
                            <label>Subject to Teach</label>
                            <select name="subtype">
                                <option disabled selected>Select Subject</option>
                                <option value="math">Maths</option>
                                <option value="account">Account</option>
                                <option value="optmath">Opt Math</option>
                                <option value="social">Social</option>
                                <option value="science">Science</option>
                            </select>    
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
