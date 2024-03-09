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

$fname = $_POST['fname'];
$mname = $_POST['mname']; // Corrected from $_POST['fname']
$lname = $_POST['lname'];
$mobileno = $_POST['no']; // Corrected from $_POST['no']
$email = $_POST['email'];
$subtype = $_POST['subtype']; // Assuming you want to update 'subtype' column with 'level' input
$subtype2 = $_POST['subtype2']; // Assuming you want to update 'subtype2' column with 'level2' input
$amount = $_POST['amount']; 
// $hash = password_hash($mobileno, PASSWORD_DEFAULT); // Not recommended to hash mobile number

$sql = "UPDATE teacher SET cfn ='$fname', cmn ='$mname', cln='$lname', mob = '$mobileno', email ='$email', subtype ='$subtype', subtype2 ='$subtype2',amount ='$amount'
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