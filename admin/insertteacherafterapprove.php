

<?php

include 'db.php';

session_start();  

$username = $_SESSION['username'];

if(!isset($username)){
   header('location:../html/login.php');
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
            $id = $_GET['id'];          
            $cfn = $_POST['cfn'];
            $cmn = $_POST['cmn'];
            $cln = $_POST['cln'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $mob = $_POST['mob'];
            $cno = $_POST['cno'];
            $idate = $_POST['idate'];
            $gender = $_POST['gender'];
            $nat = $_POST['nat'];
            $des = $_POST['des'];
            $acctype = $_POST['acctype'];
           $subtype = $_POST['subtype'];
           $subtype2 = $_POST['subtype2'];
           $pw = $_POST['pw'];
           $cpw = $_POST['cpw'];



//address
            $street = $_POST['street'];
            $mun = $_POST['mun'];
            $wno = $_POST['wno'];
            $district = $_POST['district'];

//education
            $slevel = $_POST['slevel'];
            $scompletedyr = $_POST['scompletedyr'];
            $sdes = $_POST['sdes'];
            $hslevel = $_POST['hslevel'];
            $hscompletedyr = $_POST['hscompletedyr'];
            $hsdes = $_POST['hsdes'];
            $glevel = $_POST['glevel'];
            $gcompletedyr = $_POST['gcompletedyr'];
            $gdes = $_POST['gdes'];
            // $pglevel = $_POST['pglevel'];
            // $pgcompletedyr = $_POST['pgcompletedyr'];
            // $pgdes = $_POST['pgdes'];
            

//parent info
            $ffn = $_POST['ffn'];
            $fmn = $_POST['fmn'];
            $fln = $_POST['fln'];
            $mfn = $_POST['mfn'];
            $mmn = $_POST['mmn'];
            $mln = $_POST['mln'];
            $gfn = $_POST['gfn'];
            $gmn = $_POST['gmn'];
            $gln = $_POST['gln'];

            //image upload

            $filename = $_FILES["ppimg"]["name"];
            $tempname = $_FILES["ppimg"]["tmp_name"];
            $folder = "../images/".$filename;
            move_uploaded_file($tempname,$folder);

            $filenamechat = $_FILES["ppimg"]["name"];
            $tempnamechat = $_FILES["ppimg"]["tmp_name"];
            $folderchat = "../chatapp/php/images/".$filenamechat;
            move_uploaded_file($tempnamechat,$folderchat);





            // $filename = $_FILES["ppimg"]["name"];
            // $tempname = $_FILES["ppimg"]["tmp_name"];
            // $folder = "../images/" . $filename;
            // $folderchat = "../chatapp/php/images/" . $filename; // Chat image path
            // move_uploaded_file($tempname, $folder);
            // copy($folder, $folderchat); // Copy image to chat folder
            
            // if ($_FILES['ppimg']['error'] === UPLOAD_ERR_OK) {
            //     echo 'profile File upload was successful, proceed with processing';
            // } else {
            //     echo 'profile File upload failed, handle the error';
            //           }



//             $filename = $_FILES["ppimg"]["name"];
// $tempname = $_FILES["ppimg"]["tmp_name"];
// $folder = "../images/" . $filename;
// $folderchat = "../chatapp/php/images/" . $filename; // Chat image path

// // Upload image to folder
// if (move_uploaded_file($tempname, $folder)) {
//     // Copy image to chat folder
//     if (copy($folder, $folderchat)) {
//         echo "Image uploaded successfully.";
//     } else {
//         echo "Failed to copy image to chat folder.";
//     }
// } else {
//     echo "Failed to upload image to main folder.";
// }





            $filename1 = $_FILES["cimg"]["name"];
            $tempname1 = $_FILES["cimg"]["tmp_name"];
            $folder1 = "../images/".$filename1;
            move_uploaded_file($tempname1,$folder1);

            $filename2 = $_FILES["cvimg"]["name"];
            $tempname2 = $_FILES["cvimg"]["tmp_name"];
            $folder2 = "../images/".$filename2;
            move_uploaded_file($tempname2,$folder2);

            if ($_FILES['cvimg']['error'] === UPLOAD_ERR_OK) {
                echo 'File upload was successful, proceed with processing';
            } else {
                echo 'File upload failed, handle the error';
            }


            $type = "t";


            

            $sql = "INSERT INTO `teacher`(`cfn`, `cmn`, `cln`,`dob`,`email`, `mob`, `cno`, `idate`, `gender`, `nat`, `des`, `acctype`, `subtype`,`subtype2`,`pw`,`cpw`,          
            
            `ppimg`, `cimg`,`cvimg`, 
            
            
            `street`, `mun`, `wno`, `district`, 
            
            `slevel`,`scompletedyr`,`sdes`,`hslevel`,`hscompletedyr`,`hsdes`,`glevel`,`gcompletedyr`,`gdes`,
            
            
            `ffn`, `fmn`, `fln`, `mfn`, `mmn`, `mln`, `gfn`, `gmn`, `gln`) VALUES (
                
                
                '$cfn','$cmn','$cln','$dob','$email','$mob','$cno','$idate','$gender','$nat','$des','$acctype','$subtype','$subtype2','$pw','$cpw',
                
                
                 
                '$folder','$folder1','$folder2',
                
                
                '$street','$mun','$wno','$district',
                
                '$slevel','$scompletedyr','$sdes','$hslevel','$hscompletedyr','$hsdes','$glevel','$gcompletedyr','$gdes',
                
              


                '$ffn','$fmn','$fln','$mfn','$mmn','$mln','$gfn','$gmn','$gln')";
                
                
                if (mysqli_query($con, $sql)) {
                    $sql = "DELETE FROM `teachertemp` WHERE id = $id";
                    if (mysqli_query($con, $sql)) {
                    header('location:admindashboard.php');
                    // echo "deleted from teacher temp and inserted in teacher table";
                    }
                }else {
                    echo 'Customer registration failed';
                    echo 'Error: ' . mysqli_error($con);
                }



                $result = mysqli_query($conn, "SELECT * FROM `teacher`") or die('query failed');
                if(mysqli_num_rows($result) > 0){
                   while($fetch_product = mysqli_fetch_assoc($result)){
                      $chatuserid = $fetch_product['id'];

                   }
                }

                
                $ran_id = rand(time(), 100000000);

                
$sqll = "INSERT INTO `users`(`unique_id`,`user_id`, `cfn`,`cmn`, `cln`,`dob`,`email`, `mob`, `gender`,`pw`,`cpw`,`street`,
`ffn`, `mfn`,`gfn`,`ppimg`,`type`) VALUES ('$ran_id','$chatuserid',
    
    
    '$cfn','$cmn','$cln','$dob','$email','$mob','$gender','$pw','$cpw','$street','$ffn','$mfn','$gfn'

    ,'$folderchat',
    '$type'
    )";

// $result = mysqli_query($con, $sqll);

if (mysqli_query($con, $sqll)) {
    // $sql = "DELETE FROM `teachertemp` WHERE id = $id";
    // if (mysqli_query($con, $sql)) {
    // header('location:admindashboard.php');
    echo "success";
    }
else {
    // echo 'Customer registration failed';
    echo 'Error: ' . mysqli_error($con);
}





	        mysqli_close($con);
        }
?>


   
  



























