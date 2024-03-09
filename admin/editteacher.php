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
        /* border:10px solid red; */
    }
</style>

</head>
<body>
    <?php

    include 'db.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM teacher WHERE id = $id "; // Employee_ID  = ".$id;

    $result = mysqli_query($conn, $sql);

    if($result){

        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
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
        <header>Teacher's Registration Edit</header>

        <form action="updateteacher.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Details</span>

                    <!-- Add a hidden input field to pass the id value -->
                    <input type="hidden" name="id" value="<?php echo $id; ?>">


                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="Enter your first name" value=" <?php global $fname; echo $fname ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" name="mname" placeholder="Enter your middle name" value=" <?php global $mname; echo $mname ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text"  name="lname" placeholder="Enter your last name" value=" <?php global $lname; echo $lname ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text"  name="no" placeholder="Enter mobile number" min="9000000000" max="9999999999"  value=" <?php global $mobileno; echo $mobileno ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text"  name="email" placeholder="Enter your email" value=" <?php global $email; echo $email ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Subject To Teach</label>
                            <input type="text"  name="subtype" placeholder="Enter the subject 1" value=" <?php global $subtype; echo $subtype ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Subject To Teach  (Optional)</label>
                            <input type="text"  name="subtype2" placeholder="Enter the subject 2 (optional)" value=" <?php global $subtype2; echo $subtype2 ?>" >
                        </div>

                        <div class="input-field">
                            <label>Salary</label>
                            <input type="text"  name="amount" placeholder="Enter the salary"  >
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
