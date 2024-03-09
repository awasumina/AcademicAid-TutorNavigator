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
    <link rel="stylesheet" href="../css/registration.css">
      
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script>
        function validateform() {
            //validation of email
            var x = document.myform.email.value;
            var atposition=x.indexOf("@");  
            var dotposition=x.lastIndexOf(".");  
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
            alert("Please enter a valid e-mail address");  
            }
           
            // //validation of phone number
            // var num = document.myform.number.value;
            // if (isNaN(num)|| num.length< 9 || num.length > 9){  
            // alert("Enter numerical value only & the number must be 10 digits");
            // setTimeout(function() {
            // // Set focus on an input element
            // document.getElementById("number").focus();
            //  }, 500);
            // return false;
            // }  

            //validate birthdate
            const birthdateInput = document.getElementById("birthdate");
            const submitButton = document.querySelector(".submit");

            submitButton.addEventListener("click", function(e) {
            e.preventDefault();
            const birthdate = birthdateInput.value;
            if (!validateBirthdate(birthdate)) {
            alert("Invalid birthdate. Age should be between 5 and 80 years.");
            } else {
            // Continue with form submission
            }
            });

            function validateBirthdate(birthdate) {
            const today = new Date();
            const maxAge = 60 * 365.25 * 24 * 60 * 60 * 1000; // 80 years in milliseconds
            const minAge = 18 * 365.25 * 24 * 60 * 60 * 1000; // 5 years in milliseconds
            const maxBirthdate = new Date(today - maxAge);
            const minBirthdate = new Date(today - minAge);
            if (new Date(birthdate) > maxBirthdate || new Date(birthdate) < minBirthdate) {
            return false;
            }
            return true;
            }


        }
    </script>

</head>
<body>
<?php

include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM teachertemp WHERE id = $id ";
$result = mysqli_query($conn, $sql);
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $cfn = $row['cfn'];
        $cmn = $row['cmn'];
        $cln = $row['cln'];
        $dob = $row['dob']; 
        $email = $row['email'];
        $mob = $row['mob'];
        $cno = $row['cno'];
        $idate = $row['idate'];
        $gender = $row['gender'];
        $nat = $row['nat'];
        $des = $row['des'];
        $acctype = $row['acctype'];
        $subtype = $row['subtype'];
        $subtype2 = $row['subtype2'];
        $pw = $row['pw'];
        $cpw = $row['cpw'];
        $ppimg = $row['ppimg'];
        $cimg = $row['cimg'];
        $cvimg = $row['cvimg'];
        $street = $row['street'];
        $mun = $row['mun'];
        $wno = $row['wno'];
        $district = $row['district'];
        $slevel = $row['slevel'];
        $scompletedyr = $row['scompletedyr'];
        $sdes = $row['sdes'];
        $hslevel = $row['hslevel'];
        $hscompletedyr = $row['hscompletedyr'];
        $hsdes = $row['hsdes'];
        $glevel = $row['glevel'];
        $gcompletedyr = $row['gcompletedyr'];
        $gdes = $row['gdes'];
        $ffn = $row['ffn'];
        $fmn = $row['fmn'];
        $fln = $row['fln'];
        $mfn = $row['mfn'];
        $mmn = $row['mmn'];
        $mln = $row['mln'];
        $gfn = $row['gfn'];
        $gmn = $row['gmn'];
        $gln = $row['gln'];
    }
}
?>
    <div class="form-container">
        <header> Review Teacher Details</header>

        <!-- Customer Information -->
        <form name ="myform" action="insertteacherafterapprove.php?id=<?php echo $id?>" enctype="multipart/form-data" method="POST" onsubmit="return validateform()">
            <div class="form first">
                <div class="details personal">
                    <span class="title"> Teacher Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter your first name" name="cfn" value=" <?php global $cfn; echo $cfn ?>" required onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="Enter your middle name" name="cmn" value=" <?php $cmn; echo $cmn ?>" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="cln" placeholder="Enter your last name" value=" <?php global $cln; echo $cln ?>" required onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" id="birthdate" name="dob" placeholder="Enter birth date" value="<?php global $dob; echo $dob; ?>">
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" value=" <?php global $email; echo $email ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mob" id ="number" placeholder="Enter mobile number" value="<?php global $mob; echo $mob ?>">
                        </div>

                        <div class="input-field">
                            <label>Citizenship Number</label>
                            <input type="number" name="cno" placeholder="Enter your citizen no" value="<?php global $cno; echo $cno ?>">
                        </div>

                        <div class="input-field">
                            <label>Citizenship Issue Date</label>
                            <input type="date" name="idate" placeholder="Enter your citizen issue date" value="<?php global $idate; echo $idate; ?>">
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" >
                                <option disabled>Select gender</option>
                                <option value="male" <?php global $gender; if($gender=="male"){echo 'selected';} ?>>Male</option>
                                <option value="female" <?php global $gender; if($gender=="female"){echo 'selected';} ?>>Female</option>
                                <option value="others" <?php global $gender; if($gender=="others"){echo 'selected';} ?>>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" name="nat" placeholder="Your Nationality" value=" <?php global $nat; echo $nat ?>" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Short Description</label>
                            <input type="text" name="des" placeholder="Your Elevator Description" value=" <?php global $des; echo $des ?>" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                     
                        <div class="input-field">
                            <label>Status Type</label>
                            <select name="acctype" value=" <?php global $acctype; echo $acctype ?>">
                                <option disabled>Select type</option>
                                <option value="Believing in Luck" <?php global $acctype; if($acctype=="Believing in Luck"){echo 'checked';} ?>>Believing in Luck</option>
                                <option value="Having a Quiet Time" <?php global $acctype; if($acctype=="Having a Quiet Time"){echo 'checked';} ?>>Having a Quiet Time</option>
                                <option value="Having a Quiet Timean" <?php global $acctype; if($acctype=="Working Hard to Reach"){echo 'checked';} ?>>Working Hard to Reach</option>

                            </select>    
                        </div> 


                        <div class="input-field">
                            <label>Password</label>
                            <input type="text" name="pw" placeholder="Your Password" value=" <?php global $pw; echo $pw ?>" >
                        </div>

                        <!-- <div class="input-field"> -->
                            <!-- <label>Password</label> -->
                            <input type="hidden" name="cpw" placeholder="Confrimed Password" value=" <?php global $cpw; echo $cpw ?>" >
                        <!-- </div> -->


                        <div class="input-field">
                            <label>Subject Taught</label>
                            <select name="subtype" value="<?php global $subtype ?>">
                                <option disabled>Select subject</option>
                                <option value="math" <?php global $subtype; if($subtype=="math"){echo 'selected';} ?>>Maths</option>
                                <option value="account" <?php global $subtype; if($subtype=="account"){echo 'selected';} ?>>Account</option>
                                <option value="optmath" <?php global $subtype; if($subtype=="optmath"){echo 'selected';} ?>>Opt Math</option>
                                <option value="social" <?php global $subtype; if($subtype=="social"){echo 'selected';} ?>>Social</option>
                                <option value="science" <?php global $subtype; if($subtype=="science"){echo 'selected';} ?>>Science</option>
                            </select>    
                        </div> 

                        <div class="input-field">
                            <label>Subject Taught (Optional)</label>
                            <select name="subtype2" value="<?php global $subtype2 ?>">
                                <option disabled>Select subject</option>
                                <option value="math" <?php global $subtype2; if($subtype2=="math"){echo 'selected';} ?>>Maths</option>
                                <option value="account" <?php global $subtype2; if($subtype2=="account"){echo 'selected';} ?>>Account</option>
                                <option value="optmath" <?php global $subtype2; if($subtype2=="optmath"){echo 'selected';} ?>>Opt Math</option>
                                <option value="social" <?php global $subtype2; if($subtype2=="social"){echo 'selected';} ?>>Social</option>
                                <option value="science" <?php global $subtype2; if($subtype2=="science"){echo 'selected';} ?>>Science</option>
                            </select>    
                        </div> 


                        <!-- UPLOAD IMG  -->
                        <div class="input-field">
                            <label>Upload Your Image</label>
                            <input type="file" name="ppimg" style="padding-top: 9px;" placeholder="Your Image" accept=".jpg, .jpeg, .png" value =" <?php global  $ppimg;  echo $ppimg; ?>">
                        </div>
                        <div class="input-field">
                            <label>Upload Your Citizenship Photo</label>
                            <input type="file" name="cimg" style="padding-top: 9px;" placeholder="Your Image" accept=".jpg, .jpeg, .png" value=" <?php global $cimg; echo $cimg ?>">
                        </div>

                        <div class="input-field">
                            <label>Upload Your CV</label>
                            <input type="file" name="cvimg" style="padding-top: 9px;" placeholder="Your Image" accept=".jpg, .jpeg, .png" value=" <?php global $cvimg; echo $cvimg ?>">
                        </div>







                        <!-- Displaying images -->

<div class="input-field">
    <label>Image</label>
   
</div>
<div class="input-field">
    <label>Citizenship Photo</label>

</div>

<div class="input-field">
    <label>CV</label>

</div>
<?php
?>

<?php 
$id = $_GET['id'];
           $results = mysqli_query($conn, "SELECT * FROM `teachertemp` ") or die('query failed');

           if(mysqli_num_rows($results)>0){//need to close the bracket
            while($fetch_teacher = mysqli_fetch_assoc($results)){
     ?> 
<img src="../images/<?php echo $fetch_teacher['ppimg'];?>" alt="profilepic" srcset="" style=" width:150px; border:1px solid red;">
<img src="../images/<?php echo $fetch_teacher['cimg'];?>" alt="profilepic" srcset=""style=" width:150px;  border:1px solid red;">
<img src="../images/<?php echo $fetch_teacher['cvimg'];?>" alt="profilepic" srcset=""style="width:250px;  border:1px solid red; ">
<!-- <img src="data:images/jpeg;base64,<?php echo base64_encode($ppimg); ?>" alt="Profile Image">
<img src="data:images/jpeg;base64,<?php echo base64_encode($cimg); ?>" alt="Citizenship Photo">
<img src="data:images/jpeg;base64,<?php echo base64_encode($cvimg); ?>" alt="CV Image"> -->

<?php 
              }
            }
        ?>




                  
                    </div>

                    <!-- Address Information  -->

                    <span class="title">Address Details</span> 
                    <div class="fields"> 
                        <div class="input-field">
                            <label>Street/Tole</label>
                            <input type="text" name="street" placeholder="Enter your resident address" value=" <?php global $street; echo $street ?>" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Municipality</label>
                            <input type="text" name="mun" placeholder="Enter your municipality" value=" <?php global $mun; echo $mun ?>" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                        </div>
                      
                        <div class="input-field">
                            <label>Ward Number</label>
                            <input type="number" name="wno" placeholder="Enter your ward no" value="<?php global $wno; echo $wno?>">
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <select name="district">
                                <option disabled>Select a district</option>
                                <option value="Achham" <?php global $district; if($district=="Achham"){echo 'checked';} ?>> Achham</option>
                                <option value="Arghakhanchi" <?php global $district; if($district=="Arghakhanchi"){echo 'checked';} ?>>Arghakhanchi</option>
                                <option value="Baglung" <?php global $district; if($district=="Baglung"){echo 'checked';} ?>>Baglung</option>
                                <option value="Baitadi" <?php global $district; if($district=="Baitadi"){echo 'checked';} ?>>Baitadi</option>
                                <option value="Bajhang" <?php global $district; if($district=="Bajhang"){echo 'checked';} ?>>Bajhang</option>
                                <option value="Bajura" <?php global $district; if($district=="Bajura"){echo 'checked';} ?>>Bajura</option>
                                <option value="Banke" <?php global $district; if($district=="Banke"){echo 'checked';} ?>>Banke</option>
                                <option value="Bara" <?php global $district; if($district=="Bara"){echo 'checked';} ?>>Bara</option>
                                <option value="Bardiya" <?php global $district; if($district=="Bardiya"){echo 'checked';} ?>>Bardiya</option>
                                <option value="Bhaktapur" <?php global $district; if($district=="Bhaktapur"){echo 'checked';} ?>>Bhaktapur</option>
                                <option value="Bhojpur" <?php global $district; if($district=="Bhojpur"){echo 'checked';} ?>>Bhojpur</option>
                                <option value="Chitwan" <?php global $district; if($district=="Chitwan"){echo 'checked';} ?>>Chitwan</option>
                                <option value="Dadeldhura" <?php global $district; if($district=="Dadeldhura"){echo 'checked';} ?>>Dadeldhura</option>
                                <option value="Dailekh" <?php global $district; if($district=="Dailekh"){echo 'checked';} ?>>Dailekh</option>
                                <option value="Dang"<?php global $district; if($district=="Dang"){echo 'checked';} ?>>Dang</option>
                                <option value="Darchula" <?php global $district; if($district=="Darchula"){echo 'checked';} ?>>Darchula</option>
                                <option value="Dhading" <?php global $district; if($district=="Dhading"){echo 'checked';} ?>>Dhading</option>
                                <option value="Dhankuta" <?php global $district; if($district=="Dhankuta"){echo 'checked';} ?>>Dhankuta</option>
                                <option value="Dhanusa" <?php global $district; if($district=="Dhanusa"){echo 'checked';} ?>>Dhanusa</option>
                                <option value="Dholkha" <?php global $district; if($district=="Dholkha"){echo 'checked';} ?>>Dholkha</option>
                                <option value="Dolpa" <?php global $district; if($district=="Dolpa"){echo 'checked';} ?>>Dolpa</option>
                                <option value="Doti" <?php global $district; if($district=="Doti"){echo 'checked';} ?>>Doti</option>
                                <option value="Gorkha" <?php global $district; if($district=="Gorkha"){echo 'checked';} ?>>Gorkha</option>
                                <option value="Gulmi" <?php global $district; if($district=="Gulmi"){echo 'checked';} ?>>Gulmi</option>
                                <option value="Humla" <?php global $district; if($district=="Humla"){echo 'checked';} ?>>Humla</option>
                                <option value="Ilam" <?php global $district; if($district=="Ilam"){echo 'checked';} ?>>Ilam</option>
                                <option value="Jajarkot" <?php global $district; if($district=="Jajarkot"){echo 'checked';} ?>>Jajarkot</option>
                                <option value="Jhapa" <?php global $district; if($district=="Jhapa"){echo 'checked';} ?>>Jhapa</option>
                                <option value="Jumla" <?php global $district; if($district=="Jumla"){echo 'checked';} ?>>Jumla</option>
                                <option value="Kailali" <?php global $district; if($district=="Kailali"){echo 'checked';} ?>>Kailali</option>
                                <option value="Kalikot" <?php global $district; if($district=="Kalikot"){echo 'checked';} ?>>Kalikot</option>
                                <option value="Kanchanpur" <?php global $district; if($district=="Kanchanpur"){echo 'checked';} ?>>Kanchanpur</option>
                                <option value="Kapilvastu" <?php global $district; if($district=="Kapilvastu"){echo 'checked';} ?>>Kapilvastu</option>
                                <option value="Kaski" <?php global $district; if($district=="Kaski"){echo 'checked';} ?>>Kaski</option>
                                <option value="Kathmandu" <?php global $district; if($district=="Kathmandu"){echo 'checked';} ?>>Kathmandu</option>
                                <option value="Kavrepalanchok" <?php global $district; if($district=="Kavrepalanchok"){echo 'checked';} ?>>Kavrepalanchok</option>
                                <option value="Lalitpur" <?php global $district; if($district=="Lalitpur"){echo 'checked';} ?>>Lalitpur</option>
                                <option value="Lamjung" <?php global $district; if($district=="Lamjung"){echo 'checked';} ?>>Lamjung</option>
                                <option value="Mahottari" <?php global $district; if($district=="Mohottari"){echo 'checked';} ?>>Mahottari</option>
                                <option value="Makawanpur" <?php global $district; if($district=="Makawanpur"){echo 'checked';} ?>>Makawanpur</option>
                                <option value="Manang" <?php global $district; if($district=="Manang"){echo 'checked';} ?>>Manang</option>
                                <option value="Morang" <?php global $district; if($district=="Morang"){echo 'checked';} ?>>Morang</option>
                                <option value="Mugu" <?php global $district; if($district=="Mugu"){echo 'checked';} ?>>Mugu</option>
                                <option value="Mustang" <?php global $district; if($district=="Mustang"){echo 'checked';} ?>>Mustang</option>
                                <option value="Myagdi" <?php global $district; if($district=="Myagdi"){echo 'checked';} ?>>Myagdi</option>
                                <option value="Nawalparasi" <?php global $district; if($district=="Nawalparasi"){echo 'checked';} ?>>Nawalparasi</option>
                                <option value="Nuwakot" <?php global $district; if($district=="Nuwakot"){echo 'checked';} ?>>Nuwakot</option>
                                <option value="Okhaldhunga" <?php global $district; if($district=="Okhaldhunga"){echo 'checked';} ?>>Okhaldhunga</option>
                                <option value="Palpa" <?php global $district; if($district=="Palpa"){echo 'checked';} ?>>Palpa</option>
                                <option value="Panchthar" <?php global $district; if($district=="Panchthar"){echo 'checked';} ?>>Panchthar</option>
                                <option value="Parbat" <?php global $district; if($district=="Parbat"){echo 'checked';} ?>>Parbat</option>
                                <option value="Parsa" <?php global $district; if($district=="Parsa"){echo 'checked';} ?>>Parsa</option>
                                <option value="Pyuthan" <?php global $district; if($district=="Pyuthan"){echo 'checked';} ?>>Pyuthan</option>
                                <option value="Ramechhap" <?php global $district; if($district=="Ramechhap"){echo 'checked';} ?>>Ramechhap</option>
                                <option value="Rasuwa" <?php global $district; if($district=="Rasuwa"){echo 'checked';} ?>>Rasuwa</option>
                                <option value="Rautahat" <?php global $district; if($district=="Rautahat"){echo 'checked';} ?>>Rautahat</option>
                                <option value="Rolpa" <?php global $district; if($district=="Rolpa"){echo 'checked';} ?>>Rolpa</option>
                                <option value="Rukum" <?php global $district; if($district=="Rukum"){echo 'checked';} ?>>Rukum</option>
                                <option value="Rupandehi" <?php global $district; if($district=="Rupandehi"){echo 'checked';} ?>>Rupandehi</option>
                                <option value="Salyan" <?php global $district; if($district=="Salyan"){echo 'checked';} ?>>Salyan</option>
                                <option value="Sankhuwasabha" <?php global $district; if($district=="Sankhuwasabha"){echo 'checked';} ?>>Sankhuwasabha</option>
                                <option value="Saptari" <?php global $district; if($district=="Saptari"){echo 'checked';} ?>>Saptari</option>
                                <option value="Siraha" <?php global $district; if($district=="Siraha"){echo 'checked';} ?>>Siraha</option>
                                <option value="SoluKhumbu" <?php global $district; if($district=="Solukhumbu"){echo 'checked';} ?>>SoluKhumbu</option>
                                <option value="Sunsari" <?php global $district; if($district=="Sunsari"){echo 'checked';} ?>>Sunsari</option>
                                <option value="Surkhet" <?php global $district; if($district=="Surkhet"){echo 'checked';} ?>>Surkhet</option>
                                <option value="Syangja" <?php global $district; if($district=="Syangja"){echo 'checked';} ?>>Syangja</option>
                                <option value="Tanahu" <?php global $district; if($district=="Tanahu"){echo 'checked';} ?>>Tanahu</option>
                                <option value="Taplejung" <?php global $district; if($district=="Taplejung"){echo 'checked';} ?>>Taplejung</option>
                                <option value="Terhathum" <?php global $district; if($district=="Terhathum"){echo 'checked';} ?>>Terhathum</option>
                                <option value="Udayapur" <?php global $district; if($district=="Udayapur"){echo 'checked';} ?>>Udayapur</option>
                              </select>
                        </div>

            <!-- Education Information  -->

                <span class="title">Education Details</span> 
                    <div class="fields"> 
                        <div class="input-field">
                            <label>Secondary Level</label>
                            <input type="text" name="slevel" placeholder="Enter your  Secondary Qualification Level" value=" <?php global $slevel; echo $slevel ?>" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Completed year</label>
                            <input type="number" name="scompletedyr" placeholder="Enter your year of completion" value=" <?php global $scompletedyr; echo $scompletedyr ?>" >
                        </div>
                      
                        <div class="input-field">
                            <label>Description</label>
                            <input type="text" name="sdes" placeholder="Some Achievements" value="<?php global $sdes; echo $sdes?>">
                        </div>
    
                        <div class="input-field">
                            <label>Higher Secondary Level</label>
                            <input type="text" name="hslevel" placeholder="Enter your  Higher Secondary Qualification Level" value=" <?php global $hslevel; echo $hslevel ?>" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Completed year</label>
                            <input type="number" name="hscompletedyr" placeholder="Enter your year of completion" value=" <?php global $hscompletedyr; echo $hscompletedyr ?>" >
                        </div>
                      
                        <div class="input-field">
                            <label>Description</label>
                            <input type="text" name="hsdes" placeholder="Some Achievements" value="<?php global $hsdes; echo $sdes?>">
                        </div>

                        <div class="input-field">
                            <label>Graduation Level</label>
                            <input type="text" name="glevel" placeholder="Enter your  Graduation Qualification Level" value=" <?php global $glevel; echo $glevel ?>" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Completed year</label>
                            <input type="number" name="gcompletedyr" placeholder="Enter your year of completion" value=" <?php global $gcompletedyr; echo $gcompletedyr ?>" >
                        </div>
                      
                        <div class="input-field">
                            <label>Description</label>
                            <input type="text" name="gdes" placeholder="Some Achievements" value="<?php global $gdes; echo $gdes?>">
                        </div>
                    </div>



                        <!-- Parents Information -->
                        <span class="title"> Parentary Details</span> 

                        <div class="fields"> 

                            <div class="input-field" >
                                <label>Father's  Name</label>
                                <input type="text" placeholder="First name" name="ffn" value=" <?php global $ffn; echo $ffn ?>" required onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>
                            <div class="input-field">
                                <label>  Middle Name</label>
                                <input type="text" placeholder="Middle name" name="fmn" value=" <?php global $fmn; echo $fmn ?>" onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                            </div>
                            <div class="input-field">
                                <label> Last Name</label>
                                <input type="text" placeholder="Last name" name="fln" value=" <?php global $fln; echo $fln ?>" required onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>
    
                            <div class="input-field">
                                <label>Mother's  Name</label>
                                <input type="text" placeholder="First name" name="mfn" value=" <?php global $mfn; echo $mfn ?>" required onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>
    
                            <div class="input-field">
                                <label> Middle Name</label>
                                <input type="text" placeholder="Middle name" name="mmn" value=" <?php global $mmn; echo $mmn ?>" onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>
    
                            <div class="input-field">
                                <label> Last Name</label>
                                <input type="text" placeholder="Last name" name="mln" value=" <?php global $mln; echo $mln ?>" required onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>

                            <div class="input-field">
                                <label>Grandfather's Name</label>
                                <input type="text" placeholder="First name" name="gfn" value=" <?php global $gfn; echo $gfn ?>" required onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>
    
                            <div class="input-field">
                                <label> Middle Name</label>
                                <input type="text" placeholder="Middle name" name="gmn" value=" <?php global $gmn; echo $gmn ?>" onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>
    
                            <div class="input-field">
                                <label> Last Name</label>
                                <input type="text" placeholder="Last name" name="gln" value=" <?php global $gln; echo $gln ?>" required onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>

                        </div>

                       
                    </div>
                        <button class="sumbit" name="submit" >
                            <span class="btnText">Approve</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>


</body>

</html>