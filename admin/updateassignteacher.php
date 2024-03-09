<?php

include 'db.php';

session_start();

$username = $_SESSION['username'];

if(!isset($username)){
   header('location:../html/login.php');
};

?>
<?php
include 'db.php';

$id = $_POST['id']; // Assuming you have a hidden input field with name 'id' in your form



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


// $hash = password_hash($mobileno, PASSWORD_DEFAULT); // Not recommended to hash mobile number

$sql = "UPDATE assignteacher SET tfn ='$tfn', tmn ='$tmn', tln='$tln', temail ='$temail',tgender ='$tgender',sfn ='$sfn', smn ='$smn', sln='$sln', semail ='$semail',sgender ='$sgender', stime ='$stime', etime ='$etime', address ='$address', subtype ='$subtype'

-- , password = '$hash' 
WHERE id = $id";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("location: admindashboard.php");
} else {
    echo "Error: " . mysqli_error($conn); // Display error message for debugging
}

mysqli_close($conn);
?>












<!-- error code -->
<!-- <?php
   
   include 'db.php';
   $id = $row['id'];
   $fname = $row['cfn'];
   $mname = $row['cmn'];
   $lname = $row['cln'];
   $mobileno = $row['mob'];
   $email = $row['email'];
   $subtype = $row['subtype'];
   $subtype2 = $row['subtype2'];

    $hash = password_hash($mobileno, PASSWORD_DEFAULT);

   $sql = "UPDATE teacher SET id ='$id', cfn ='$fname', cmn ='$mname', cln='$lname', mob = '$mobileno', email ='$email', subtype ='$subtype', subtype2 ='$subtype2', password = '$hash' WHERE id = $id";

   $result = mysqli_query($conn, $sql);

   if($result){
    header("location:admindashboard.php");
   }
   
?> -->