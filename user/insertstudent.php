<?php
        $host="localhost";
        $user="root";
        $password="";
        $database="academicaid";
        $con = mysqli_connect($host,$user,$password,$database);

        if(!$con){
            die('Could not Connect My Sql:');
        }

        if(isset($_POST['register']))
        {	
            // variable for customer
            
            $cfn = $_POST['cfn'];
            $cmn = $_POST['cmn'];
            $cln = $_POST['cln'];
            $email = $_POST['email'];
            $pw = $_POST['pw'];
            $cpw = $_POST['cpw'];
            $gender = $_POST['gender'];
            $addr = $_POST['street'];
            $dob = $_POST['dob'];
            $elevel = $_POST['glevel'];
            $mob = $_POST['mob'];
            $gfn = $_POST['gfn'];
            $ffn = $_POST['ffn'];
            $mfn = $_POST['mfn'];

            $filename = $_FILES["ppimg"]["name"];
            $tempname = $_FILES["ppimg"]["tmp_name"];
            $folder = "images/".$filename;
            move_uploaded_file($tempname,$folder);
           
            $type = "s";


           

            $sql = "INSERT INTO `student`(`cfn`, `cmn`, `cln`,`email`,`pw`, `cpw`, `gender`, `street`, `dob`, `glevel`, `mob`, `gfn`, `ffn`,`mfn`,`ppimg`) VALUES ( '$cfn','$cmn','$cln','$email','$pw','$cpw','$gender','$addr','$dob','$elevel','$mob','$gfn','$ffn','$mfn','$folder')";






                if (mysqli_query($con, $sql)) {
                    // header('location:../html/profile.php');
                    header('location:loginforstudent.php');
                    echo "success";
                }else {

                    
                        echo 'Error: ' . mysqli_error($con);
                   
                    // echo 'teacher registration failed';
                }





// to insert in userstable





            $filenamechat = $_FILES["ppimg"]["name"];
            $tempnamechat = $_FILES["ppimg"]["tmp_name"];
            $folderchat = "../chatapp/php/images/".$filenamechat;
            move_uploaded_file($tempnamechat,$folderchat);





$result = mysqli_query($con, "SELECT * FROM `student`") or die('query failed');
if(mysqli_num_rows($result) > 0){
   while($fetch_product = mysqli_fetch_assoc($result)){
      $chatuserid = $fetch_product['id'];

   }
}


$ran_id = rand(time(), 100000000);


$sqll = "INSERT INTO `users`(`unique_id`,`user_id`, `cfn`,`cmn`, `cln`,`dob`,`email`, `mob`, `gender`,`pw`,`cpw`,`street`,
`ffn`, `mfn`,`gfn`,`ppimg`,`type`) VALUES ('$ran_id','$chatuserid',


'$cfn','$cmn','$cln','$dob','$email','$mob','$gender','$pw','$cpw','$addr','$ffn','$mfn','$gfn'

,'$folderchat','$type'
)";

// $result = mysqli_query($con, $sqll);

if (mysqli_query($con, $sqll)) {
// $sql = "DELETE FROM `teachertemp` WHERE id = $id";
// if (mysqli_query($con, $sql)) {
// header('location:admindashboard.php');
echo "success.....";
header('location:loginforstudent.php');

}
else {
// echo 'Customer registration failed';
echo 'Error.....: ' . mysqli_error($con);
}








	        mysqli_close($con);
        }
?>









