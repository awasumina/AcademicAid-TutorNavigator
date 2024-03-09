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

    if(!$conn){
        die('Could not Connect My Sql:.mysqli_error()');
    }

    $id = $_GET ['id'];

    $sql = "DELETE FROM assignteacher WHERE id = $id";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("location:admindashboard.php");
    }

?>