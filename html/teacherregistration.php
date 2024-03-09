<!DOCTYPE html>

<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/registration.css">
    <!-- favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
     
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
            const maxAge = 60 * 365.25 * 24 * 60 * 60 * 1000; // 60 years in milliseconds
            const minAge = 18 * 365.25 * 24 * 60 * 60 * 1000; // 18 years in milliseconds
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
    <div class="form-container">
        <header> Registration Form</header>

        <!-- Customer Information -->
        <form name ="myform" action="insertteacher.php" enctype="multipart/form-data" method="POST" onsubmit="return validateform()">
            <div class="form first">
                <div class="details personal">
                    <span class="title"> Teacher Details</span>
 
                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter your first name" name="cfn" required onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" placeholder="Enter your middle name" name="cmn"  onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="cln" placeholder="Enter your last name" required onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Date of Birth(B.S)</label>
                            <input type="date" id="birthdate" name="dob" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter your email">
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mob" id ="number" placeholder="Enter mobile number">
                        </div>

                        <div class="input-field">
                            <label>Citizenship Number</label>
                            <input type="number" name="cno" placeholder="Enter your citizen no">
                        </div>

                        <div class="input-field">
                            <label>Citizenship Issue Date</label>
                            <input type="date" name="idate" placeholder="Enter your citizenship issue date">
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" >
                                <option disabled selected >Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" name="nat" placeholder="Your Nationality" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>
                     
                        <div class="input-field">
                            <label>Short Description</label>
                            <input type="text" name="des" placeholder="Your Elevator description" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"> 
                            <!-- to validate input for alphabetic characters -->
                        </div>


                        <div class="input-field">
                            <label>Status</label>
                            <select name="acctype">
                                <option disabled selected>Select type</option>
                                <option value="Believing in Luck">Believing in Luck</option>
                                <option value="Having a Quiet Time">Having a Quiet time</option>
                                <option value="Working Hard to Reach">Working Hard to reach</option>
                            </select>    
                        </div> 


                        <div class="input-field">
                            <label>Password</label>
                            <input type="text" name="pw" placeholder="Enter Password" >
                        </div>

                        <div class="input-field">
                            <label>Confirm Password</label>
                            <input type="text" name="cpw" placeholder="Enter Password" >
                        </div>




                        <div class="input-field">
                            <label>Subject Taught</label>
                            <select name="subtype">
                                <option disabled selected>Select Subject</option>
                                <option value="math">Maths</option>
                                <option value="account">Account</option>
                                <option value="optmath">Opt Math</option>
                                <option value="social">Social</option>
                                <option value="science">Science</option>
                            </select>    
                        </div> 

                        <div class="input-field">
                            <label>Subject Taught (optional)</label>
                            <select name="subtype2">
                                <option disabled selected>Select Subject</option>
                                <option value="math">Maths</option>
                                <option value="account">Account</option>
                                <option value="optmath">Opt Math</option>
                                <option value="social">Social</option>
                                <option value="science">Science</option>
                            </select>    
                        </div> 


                        <!-- <div class="input-field">
                            <label>Subject Taught (optional)</label>
                            <select name="subtype3">
                                <option disabled selected>Select Subject</option>
                                <option value="math">Maths</option>
                                <option value="account">Account</option>
                                <option value="optmath">Opt Math</option>
                                <option value="social">Social</option>
                                <option value="science">Science</option>
                            </select>    
                        </div>  -->











                        

                        <!-- UPLOAD IMG  -->
                        <div class="input-field">
                            <label>Upload Your Image</label>
                            <input type="file" name="ppimg" style="padding-top: 9px;" placeholder="Your Image" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="input-field">
                            <label>Upload Your CV</label>
                            <input type="file" name="cvimg" style="padding-top: 9px;" placeholder="Your Image" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="input-field">
                            <label>Upload Your Citizenship Photo</label>
                            <input type="file" name="cimg" style="padding-top: 9px;" placeholder="Your Image" accept=".jpg, .jpeg, .png">
                        </div>


                    </div>






              <br><br>      
                    <!-- Address Information  -->

                    <span class="title">Address Details</span> 
                    <div class="fields"> 
                        <div class="input-field">
                            <label>Street/Tole</label>
                            <input type="text" name="street" placeholder="Enter your resident address" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Municipality</label>
                            <input type="text" name="mun" placeholder="Enter your municipality" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                        </div>
                      
                        <div class="input-field">
                            <label>Ward Number</label>
                            <input type="number" name="wno" placeholder="Enter your ward no" >
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <select name="district">
                                <option value="">Select a district</option>
                                <option value="Achham">Achham</option>
                                <option value="Arghakhanchi">Arghakhanchi</option>
                                <option value="Baglung">Baglung</option>
                                <option value="Baitadi">Baitadi</option>
                                <option value="Bajhang">Bajhang</option>
                                <option value="Bajura">Bajura</option>
                                <option value="Banke">Banke</option>
                                <option value="Bara">Bara</option>
                                <option value="Bardiya">Bardiya</option>
                                <option value="Bhaktapur">Bhaktapur</option>
                                <option value="Bhojpur">Bhojpur</option>
                                <option value="Chitwan">Chitwan</option>
                                <option value="Dadeldhura">Dadeldhura</option>
                                <option value="Dailekh">Dailekh</option>
                                <option value="Dang">Dang</option>
                                <option value="Darchula">Darchula</option>
                                <option value="Dhading">Dhading</option>
                                <option value="Dhankuta">Dhankuta</option>
                                <option value="Dhanusa">Dhanusa</option>
                                <option value="Dholkha">Dholkha</option>
                                <option value="Dolpa">Dolpa</option>
                                <option value="Doti">Doti</option>
                                <option value="Gorkha">Gorkha</option>
                                <option value="Gulmi">Gulmi</option>
                                <option value="Humla">Humla</option>
                                <option value="Ilam">Ilam</option>
                                <option value="Jajarkot">Jajarkot</option>
                                <option value="Jhapa">Jhapa</option>
                                <option value="Jumla">Jumla</option>
                                <option value="Kailali">Kailali</option>
                                <option value="Kalikot">Kalikot</option>
                                <option value="Kanchanpur">Kanchanpur</option>
                                <option value="Kapilvastu">Kapilvastu</option>
                                <option value="Kaski">Kaski</option>
                                <option value="Kathmandu">Kathmandu</option>
                                <option value="Kavrepalanchok">Kavrepalanchok</option>
                                <option value="Lalitpur">Lalitpur</option>
                                <option value="Lamjung">Lamjung</option>
                                <option value="Mahottari">Mahottari</option>
                                <option value="Makawanpur">Makawanpur</option>
                                <option value="Manang">Manang</option>
                                <option value="Morang">Morang</option>
                                <option value="Mugu">Mugu</option>
                                <option value="Mustang">Mustang</option>
                                <option value="Myagdi">Myagdi</option>
                                <option value="Nawalparasi">Nawalparasi</option>
                                <option value="Nuwakot">Nuwakot</option>
                                <option value="Okhaldhunga">Okhaldhunga</option>
                                <option value="Palpa">Palpa</option>
                                <option value="Panchthar">Panchthar</option>
                                <option value="Parbat">Parbat</option>
                                <option value="Parsa">Parsa</option>
                                <option value="Pyuthan">Pyuthan</option>
                                <option value="Ramechhap">Ramechhap</option>
                                <option value="Rasuwa">Rasuwa</option>
                                <option value="Rautahat">Rautahat</option>
                                <option value="Rolpa">Rolpa</option>
                                <option value="Rukum">Rukum</option>
                                <option value="Rupandehi">Rupandehi</option>
                                <option value="Salyan">Salyan</option>
                                <option value="Sankhuwasabha">Sankhuwasabha</option>
                                <option value="Saptari">Saptari</option>
                                <option value="Siraha">Siraha</option>
                                <option value="SoluKhumbu">SoluKhumbu</option>
                                <option value="Sunsari">Sunsari</option>
                                <option value="Surkhet">Surkhet</option>
                                <option value="Syangja">Syangja</option>
                                <option value="Tanahu">Tanahu</option>
                                <option value="Taplejung">Taplejung</option>
                                <option value="Terhathum">Terhathum</option>
                                <option value="Udayapur">Udayapur</option>
                              </select>
                        </div>

                    </div>


<br><br>

                    <!-- Education Information  -->

                    <span class="title">Education Details in increasing order</span> 
                    <div class="fields"> 
                        <div class="input-field">
                            <label>Secondary Level</label>
                            <input type="text" name="slevel" placeholder="Enter your  Secondary Qualification Level" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Completed Year</label>
                            <input type="number" name="scompletedyr" placeholder="Enter your year of completion" >
                        </div>

                        <div class="input-field">
                            <label>Description</label>
                            <input type="text" name="sdes" placeholder="Some Achievements" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                        </div>




                        <div class="input-field">
                            <label>Higher Secondary Level</label>
                            <input type="text" name="hslevel" placeholder="Enter your higher secondary Qualification Level" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Completed Year</label>
                            <input type="number" name="hscompletedyr" placeholder="Enter your year of completion" >
                        </div>

                        <div class="input-field">
                            <label>Description</label>
                            <input type="text" name="hsdes" placeholder="Some Achievements" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                        </div>




                        <div class="input-field">
                            <label>Graduation Level</label>
                            <input type="text" name="glevel" placeholder="Enter your Bachelor Qualification Level" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Completed Year</label>
                            <input type="number" name="gcompletedyr" placeholder="Enter your year of graduation" >
                        </div>

                        <div class="input-field">
                            <label>Description</label>
                            <input type="text" name="gdes" placeholder="Some Achievements" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                        </div>



                        <!-- <div class="input-field">
                            <label>Post Graduation Level</label>
                            <input type="text" name="pglevel" placeholder="Enter your Qualification Level" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                        </div>

                        <div class="input-field">
                            <label>Completed Year</label>
                            <input type="number" name="pgcompletedyr" placeholder="Enter your year of graduation" >
                        </div>

                        <div class="input-field">
                            <label>Description</label>
                            <input type="text" name="pgdes" placeholder="Some Achievements" onkeypress="return (event.charCode > 64 && 
                            event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                        </div> -->
                               
                    </div>



<br><br>
                        <!-- Parents Information -->
                        <span class="title"> Parentary Details</span> 

                        <div class="fields"> 

                            <div class="input-field" >
                                <label>Father's  Name</label>
                                <input type="text" placeholder="First name" name="ffn" required onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>
                            <div class="input-field">
                                <label>  Middle Name</label>
                                <input type="text" placeholder="Middle name" name="fmn" onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                            </div>
                            <div class="input-field">
                                <label> Last Name</label>
                                <input type="text" placeholder="Last name" name="fln" required onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>
    
                            <div class="input-field">
                                <label>Mother's  Name</label>
                                <input type="text" placeholder="First name" name="mfn" required onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>
    
                            <div class="input-field">
                                <label> Middle Name</label>
                                <input type="text" placeholder="Middle name" name="mmn" onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>
    
                            <div class="input-field">
                                <label> Last Name</label>
                                <input type="text" placeholder="Last name" name="mln" required onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>

                            <div class="input-field">
                                <label>Grandfather's Name</label>
                                <input type="text" placeholder="First name" name="gfn" required onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>
    
                            <div class="input-field">
                                <label> Middle Name</label>
                                <input type="text" placeholder="Middle name" name="gmn" onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>
    
                            <div class="input-field">
                                <label> Last Name</label>
                                <input type="text" placeholder="Last name" name="gln" required onkeypress="return (event.charCode > 64 && 
                                event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                            </div>

                        </div>

                       
                    </div>
                        <button class="sumbit" name="submit" >
                            <span class="btnText">REGISTER</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>


</body>

</html>