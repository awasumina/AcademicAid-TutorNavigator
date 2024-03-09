
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
        //    $subtype3 = $_POST['subtype3'];
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
            $filename2 = $_FILES["cvimg"]["name"];
            $tempname2 = $_FILES["cvimg"]["tmp_name"];
            $folder2 = "../images/".$filename2;
            move_uploaded_file($tempname2,$folder2);

            $filename = $_FILES["ppimg"]["name"];
            $tempname = $_FILES["ppimg"]["tmp_name"];
            $folder = "../images/".$filename;
            move_uploaded_file($tempname,$folder);

            $filename1 = $_FILES["cimg"]["name"];
            $tempname1 = $_FILES["cimg"]["tmp_name"];
            $folder1 = "../images/".$filename1;
            move_uploaded_file($tempname1,$folder1);

            $sql = "INSERT INTO `teachertemp`(`cfn`, `cmn`, `cln`,`dob`,`email`, `mob`, `cno`, `idate`, `gender`, `nat`, `des`, `acctype`, `subtype`,`subtype2`,`pw`,`cpw`,          
            `ppimg`, `cimg`,`cvimg`,                   
            `street`, `mun`, `wno`, `district`,      
            `slevel`,`scompletedyr`,`sdes`,`hslevel`,`hscompletedyr`,`hsdes`,`glevel`,`gcompletedyr`,`gdes`,
                      -- `pglevel`,`pgcompletedyr`,`pgdes`,

            `ffn`, `fmn`, `fln`, `mfn`, `mmn`, `mln`, `gfn`, `gmn`, `gln`) VALUES (
                
                
                '$cfn','$cmn','$cln','$dob','$email','$mob','$cno','$idate','$gender','$nat','$des','$acctype','$subtype','$subtype2','$pw','$cpw',
                
                
                
                '$folder','$folder1','$folder2',
                
                
                '$street','$mun','$wno','$district',
                
                '$slevel','$scompletedyr','$sdes','$hslevel','$hscompletedyr','$hsdes','$glevel','$gcompletedyr','$gdes',
                
                
                -- '$pglevel','$pgcompletedyr','$pgdes',


                '$ffn','$fmn','$fln','$mfn','$mmn','$mln','$gfn','$gmn','$gln')";


 



                if (mysqli_query($con, $sql)) {
                    // header('location:../html/profile.php');
                    header('location:teacherrequesttoregister.php');
                }else {

                    
                        echo 'Error: ' . mysqli_error($con);
                   
                    // echo 'teacher registration failed';
                }

	        mysqli_close($con);
        }
?>









