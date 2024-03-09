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
        max-width:570px;
    }
</style>


</head>
<body>
    <?php

    include 'db.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM assignteacher WHERE id = $id "; // Employee_ID  = ".$id;

    $result = mysqli_query($conn, $sql);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            // echo $id;
            // echo $tfn;
            // echo $temail;
            $id = $row['id'];
            $tfn = $row['tfn'];
            $tmn = $row['tmn'];
            $tln = $row['tln'];
            $temail = $row['temail'];
            $tgender = $row['tgender'];
            $sfn = $row['sfn'];
            $smn = $row['smn'];
            $sln = $row['sln'];
            $semail = $row['semail'];
            $sgender = $row['sgender'];
            $stime = $row['stime'];
            $etime = $row['etime'];
            $address = $row['address'];           
           $subtype = $row['subtype'];
        }
    }
    ?>
    
    <div class="container">
        <header>Assign Teacher Edit</header>

        <form action="updateassignteacher.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Details</span>

                    <!-- Add a hidden input field to pass the id value -->
                    <input type="hidden" name="id" value="<?php echo $id; ?>">


                    <div class="fields">
                        <div class="input-field">
                            <label>Teacher First Name</label>
                            <input type="text" name="tfn" placeholder="Enter teacher first name" value=" <?php global $tfn; echo $tfn ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Teacher Middle Name</label>
                            <input type="text" name="tmn" placeholder="Enter teacher middle name" value=" <?php global $tmn; echo $tmn ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Teacher Last Name</label>
                            <input type="text"  name="tln" placeholder="Enter teacher last name" value=" <?php global $tln; echo $tln ?>" required>
                        </div>

                           <div class="input-field">
                            <label>Teacher Email</label>
                            <input type="email"  name="temail" placeholder="Enter teacher email" value=" <?php global $temail; echo $temail ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Teacher Gender</label>
                            <input type="text"  name="tgender" placeholder="Enter Teacher gender" value=" <?php global $tgender; echo $tgender ?>" required>
                        </div>



                        <div class="input-field">
                            <label>Student First Name</label>
                            <input type="text" name="sfn" placeholder="Enter Student first name" value=" <?php global $sfn; echo $sfn ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Student Middle Name</label>
                            <input type="text" name="smn" placeholder="Enter Student middle name" value=" <?php global $smn; echo $smn ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Student Last Name</label>
                            <input type="text"  name="sln" placeholder="Enter Student last name" value=" <?php global $sln; echo $sln ?>" required>
                        </div>

                           <div class="input-field">
                            <label>Student Email</label>
                            <input type="email"  name="semail" placeholder="Enter Student email" value=" <?php global $semail; echo $semail ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Student Gender</label>
                            <input type="text"  name="sgender" placeholder="Enter Teacher gender" value=" <?php global $sgender; echo $sgender ?>" required>
                        </div>



                        <div class="input-field">
                            <label>Starting Time</label>
                            <input type="text"  name="stime" placeholder="Enter starting time" value=" <?php global $stime; echo $stime ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Ending Time</label>
                            <input type="text"  name="etime" placeholder="Enter ending time" value=" <?php global $etime; echo $etime ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text"  name="address" placeholder="Enter address" value=" <?php global $address; echo $address ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Subject To Teach</label>
                            <input type="text"  name="subtype" placeholder="Enter the subject" value=" <?php global $subtype; echo $subtype ?>" required>
                        </div>

                    </div>
                </div>
                       
                        <button class="sumbit" name="submit">
                            <span class="btnText">UPDATE</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>


</body>
</html>
