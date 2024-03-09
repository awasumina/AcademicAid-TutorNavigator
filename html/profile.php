
<?php 

include 'config.php';

session_start(); 

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

if(!isset($user_id)){
   header('location:loginforteacher.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/profile.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">


    <!-- favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
    
    
    <script src="https://kit.fontawesome.com/50aa9099eb.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/responsiveprofile.css" />
    <link rel="shortcut icon" href="./profile.jpg" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


    <script src="../js/profile.js">

function myFunction() {
        location.replace("../admin/edittempteacher.php");
        echo 'success';
    };



    </script>




</head>
<body>
    

    
   
<header class="header">
                  <nav>
                    <div class="center">
            
                        <!-- <h2 class="text">Navbar</h2> -->
                        
                        <div class="nav-header">
                            <button id="btn" class="nav-toggle">
                                <i class="fas fa-bars" ></i></button>
                        </div>
                    
                        <img src="../images/brlogo.png" width=auto height="76px" alt="theme">
            
                    <ul class="links">
            
                        <li>
                            <a href="profile.php" target="_self">PROFILE</a>
                        </li>
    
                        <li>
                            <a href="../chatapp/users.php" target="_self">MESSAGING</a>
                        </li>
    
                        <li>
                            <a href="dashboard.php" target="_self">DASHBOARD</a>
                        </li>
            
                        <li>
                            <a href="about.php" target="_self">ABOUT US</a>
                        </li>
            
                        <li>
                            <a href="contact.php" target="_self">CONTACT US</a>
                        </li>              
        
                              <li>
                                  <a href="https://www.facebook.com">
                                      <i class="fab fa-facebook" ></i>
                                  </a>
                              </li>
                              <li>
                                  <a href="https://www.twitter.com">
                                      <i class="fab fa-twitter" style="margin-left: -80px;"></i>
                                  </a>
                              </li>
                              <li>
                                <a href="https://www.linkedin.com">
                                    <i class="fab fa-linkedin" style="margin-left: -140px;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com">
                                    <i class="fab fa-instagram" style="margin-left: -210px;"></i>
                                </a>
                            </li>
                            
                            <li>
                                <a href="logout.php">
                                    <i class="fas fa-sign-out-alt" style="margin-left: -210px;"></i>Logout
                                </a>
                            </li>
                     
                            </div>
              
                    </ul>
            
                </div>
    
                
            </nav>
         </header>
    
 





<!-- 
     

         <div class="site">
           <div class="wrapper">
             <div class="sidebar">
               <img src="../images/2.png" alt="" class="logo" />
               <h3 class="hedr">Teacher  1 Name</h3>
               <div class="resp">
                 <ul>
                   <li class="active">
                     <a href="#"><i class="fas fa-home"></i>Introduction</a>
                   </li>
                   <li>
                     <a href="#"><i class="fas fa-user"></i>Education</a>
                   </li>
                   <li>
                     <a href="#"><i class="fas fa-blog"></i>Intro Video</a>
                   </li>
                   <li>
                     <a href="#"><i class="fas fa-paper-plane"></i>Contact</a>
                   </li>
                   <li>
                     <a href="#"><i class="fas fa-briefcase"></i>Some Works</a>
                   </li>
                 </ul>
               </div>
               <div class="social_media">
                 <a href="#" target="new"
                   ><i class="fab fa-facebook-f facebook"></i
                 ></a>
                 <a href="#" target="new"><i class="fab fa-twitter twitter"></i></a>
                 <a href="#" target="new"
                   ><i class="fab fa-instagram instagram"></i
                 ></a>
                 <a href="#" target="new"><i class="fab fa-github instagram"></i></a>
               </div>
     
               <i class="fas fa-bars"></i>
             </div>






             
             <div class="main_content">
              
                <div class="div1">
               <img src="../images/2.png" alt="" class="proficPic" />
               <h2 class="title">Welcome Back <I style="color: rgb(198, 136, 20);"> Teacher 1</i></h2>
               </div>

               <p class="selfDescription" style="width: 49vw;  font-size: 21px; margin: 0 180px 0; text-align: center;">A dynamic individual whose passion for creativity knows no bounds. With a keen eye for detail and a relentless pursuit of excellence, Sarah has carved a unique path in her chosen field. </p>

               <p class="funFact">Fun Fact : I can sing the songs backward wanna try with me?</p>

               <table class="introTable">
                <tr>
                    <td>
                        Name : Teacher1

                    </td>
                </tr>
                <tr>
                    <td>
                        Age : 20 years

                    </td>
                </tr>
                <tr>
                    <td>
                    Gender: Female
                    </td>
                </tr>
                <tr>
                    <td>
                    Email : teacher!@gmail.com
                    </td>
                </tr>
                <tr>
                    <td>
                        Subjects Taught : Math , Science , English
                    </td>
                </tr>
               </table>

               <button class="CV">
                <i class="fa fa-download" aria-hidden="true"></i>
                Download my CV</button>



             </div>


             <div class="education">
                <div class="education"></div>

             </div> -->




             <?php 
           $results = mysqli_query($conn, "SELECT * FROM `teacher` where id='$user_id' ") or die('query failed');

           if(mysqli_num_rows($results)>0){//need to close the bracket
            while($fetch_teacher = mysqli_fetch_assoc($results)){
     ?> 


             <div class="header1">

 
                <div class="user">
                    <!-- <img src="../images/<?php echo $fetch_teacher['ppimg'];?>" alt="profilepic" srcset=""> -->

                    <img src="../images/admin3.png" alt="profilepic" srcset="">
                    <h3 class="name"><?php echo $fetch_teacher['cfn'].'  '. $fetch_teacher['cmn'].'  '. $fetch_teacher['cln']; ?></h3>

                    <p class="post"><?php echo $fetch_teacher['acctype'];?></p>
                </div>
            
                <mav class="navbar">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#education">Education</a></li>
                        <li><a href="#introvdo">Intro Vdo</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </mav>
            
            </div>






             <!-- header ends -->






    <section class="home" id="home">
        

        <div class="introdiv">
            <div class="introdiv1">
                <h3>Hello!</h3>
                <h1>Teacher<span><?php echo ' '.$fetch_teacher['cfn'];?></span></h1>
                <p><?php echo ' '.$fetch_teacher['des'];?> </p>
                <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>
            </div>

            <div class="introdiv2" >
                <!-- <img src="../images/teacher.png" alt="" srcset="" width="750rem"> -->

            </div>
        </div>
    </section>


    <!-- <section class="home" id="home">
        

        <div class="introdiv" style="display:flex;
  justify-content: space-between;width:50%;
  flex-flow: row;">
            <div class="introdiv1" style="padding-top:10rem; border:1px solid red; width:900px;">
                <h3>Hello!</h3>
                <h1>Teacher<span><?php echo ' '.$fetch_teacher['cfn'];?></span></h1>
                <p><?php echo ' '.$fetch_teacher['des'];?> </p>
                <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>
            </div>

            <div class="introdiv2" style="border:1px solid red; width:900px;">
                <img src="../images/teacher.png" alt="" srcset="" width="750rem">

            </div>
        </div>
    </section> -->




    <!-- home starts -->



    <!-- home ends -->



    <!-- <div id="menu" class="fas fa-bars"></div> -->

    
<!-- about section starts -->

<section class="about" id="about">
    <h1 class="heading">
        <span>about</span> me
    </h1>

    <div class="row">
        <div class="info">
            <h3><span>name : </span> <?php echo $fetch_teacher['cfn'].'  '. $fetch_teacher['cmn'].'  '. $fetch_teacher['cln']; ?></h3>
            <h3><span>Date of Birth : </span> <?php echo $fetch_teacher['dob'];?> </h3>



            
            
            <!-- <h3><span>PG Qualification : </span> <?php echo ' '.$fetch_teacher['pglevel'];?> </h3> -->

            <h3><span>Graduation Qualification : </span> <?php echo ' '.$fetch_teacher['glevel'];?> </h3>

            <h3><span>Higher level Qualification : </span> <?php echo ' '.$fetch_teacher['hslevel'];?> </h3>


            <h3><span>subject taught:  </span> <?php echo ' '.$fetch_teacher['subtype']. ' '.$fetch_teacher['subtype2'];?> </h3>
            <!-- <h3><span>name : </span> Teacher 1</h3> -->
            <a href="#"><button class="btn">
                <!-- <img src="../images/<?php echo $fetch_teacher['cvimg'];?>" alt="profilepic" srcset=""> -->
            
            download CV <i class="fas fa-download"></i></button></a>


        </div>


        <div class="counter">
            <div class="box">
                <span>2+</span>
                <h3>years of experience</h3>
            </div>

            <div class="box">
                <span>100+</span>
                <h3>students taught</h3>
            </div>

            <div class="box">
                <span>200+</span>
                <h3>happy clients</h3>
            </div>

            <div class="box">
                <span>10+</span>
                <h3>students</h3>
            </div>


        </div>
    </div>
</section>

<!-- about section ends  -->



<!-- education starts here  -->

<section class="education" id="education">
    <h1 class="heading">
        <span>education</span>
    </h1>

    <div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"> </i>
        <span><?php echo ' '.$fetch_teacher['gcompletedyr'];?></span>
        <h3><?php echo ' '.$fetch_teacher['glevel'];?></h3>
        <p><?php echo ' '.$fetch_teacher['gdes'];?></p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"> </i>
        <span><?php echo ' '.$fetch_teacher['hscompletedyr'];?></span>
        <h3><?php echo ' '.$fetch_teacher['hslevel'];?></h3>
        <p><?php echo ' '.$fetch_teacher['hsdes'];?></p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"> </i>
        <span><?php echo ' '.$fetch_teacher['scompletedyr'];?></span>
        <h3><?php echo ' '.$fetch_teacher['slevel'];?></h3>
        <p><?php echo ' '.$fetch_teacher['sdes'];?></p>
    </div>

    </div>






    


    </div>
</section>


<!-- education ends here  -->



<!-- intro vdo starts here  -->
<section class="portfolio" id="introvdo">
<h1 class="heading">
        <span>Introduction  </span> vdo
    </h1>     

<div>
<video width="auto" height="700" controls>
  <source src="../images/justvdo.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
</div>


</section>
<!-- intro vdo ends her  -->


<!-- contact starts here  -->


<section class="contact" id="contact">
    <h1 class="heading">
        <span>contact</span> me
    </h1>

    <div class="row">
        <div class="content">
            <h3 class="title">contact info</h3>

            <div class="info">
                <h3><i class="fas fa-envelope"></i><?php echo ' '.$fetch_teacher['email'];?></h3>
                <h3><i class="fas fa-phone"></i><?php echo ' '.$fetch_teacher['mob'];?></h3>
                <!-- <h3><i class="fas fa-phone"></i>0011223322</h3> -->
                <h3><i class="fas fa-map-market-alt"></i><?php echo ' '.$fetch_teacher['street'];?></h3>
            </div>
        </div>

        <form action="">

            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="text" placeholder="project" class="box">
            <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
            <button type="submit" class="btn">send <i class="fas fa-paper-plane"></i></button>
        </form>



    </div>





<!-- <button  class="btn" onclick = "myFunction()" >UPDATE</button>  -->
                  





</section>

<!-- contact ends here  -->




<?php 
              }
            }
        ?>











     
   
   <!-- *******************footer section***********************  -->
<!-- 
    <section class="footer" id="footer">
        <div class="footer-main">
            <div class="row">
                <div class="image-left">
                    <img src="../images/footer1.png" alt="">
                </div>
                <div class="first">
                    <h2>Office Address</h2>
                    <div class="footerline"></div>
                    <div class="f1">
                        <div class="location-icon">
                           <p> <i class="fa-solid fa-location-dot fa-lg"></i> </p>
                        </div>
                        <div class="f1-info">
                            <h5>Libali - 6, Bhaktapur</h5>
                        </div>
                    </div>
                    <div class="f2">
                        <div class="phone-icon">
                           <p> <i class="fa-solid fa-phone fa-lg"></i> </p>
                        </div>
                        <div class="f2-info">
                            <h5>9810052055</h5>
                        </div>
                    </div>
                    <div class="f3">
                        <div class="mail-icon">
                           <p> <i class="fa-solid fa-envelope fa-lg"></i> </p>
                        </div>
                        <div class="f3-info">
                            <h5>academicaid@gmail.com</h5>
                        </div>
                    </div>
                </div>
                <div class="second">
                    <h2>Quick Links</h2>
                    <div class="footerline"></div>
                    <div class="s1">
                        <div class="greater-icon">
                           <p> <i class="fa-solid fa-greater-than fa-xs"></i> </p>
                        </div>
                        <div class="s1-info">
                            <h5><a href="#" style="text-decoration:none; color:aliceblue;">Annual Calendar</a></h5>
                        </div>
                    </div>
                    <div class="s2">
                        <div class="greater-icon">
                           <p> <i class="fa-solid fa-greater-than fa-xs"></i> </p>
                        </div>
                        <div class="s2-info">
                            <h5><a href="#" style="text-decoration:none; color:aliceblue;">Important Links</a></h5>
                        </div>
                    </div>
                    <div class="s3">
                        <div class="greater-icon">
                           <p> <i class="fa-solid fa-greater-than fa-xs"></i> </p>
                        </div>
                        <div class="s3-info">
                            <h5><a href="#" style="text-decoration:none; color:aliceblue;">Register</a></h5>
                        </div>
                    </div>
                    <div class="s4">
                        <div class="greater-icon">
                           <p> <i class="fa-solid fa-greater-than fa-xs"></i> </p>
                        </div>
                        <div class="s4-info">
                            <h5><a href="#" style="text-decoration:none; color:aliceblue;">Login</a></h5>
                        </div>
                    </div>
                    <div class="s5">
                        <div class="greater-icon">
                           <p> <i class="fa-solid fa-greater-than fa-xs"></i> </p>
                        </div>
                        <div class="s5-info">
                            <h5><a href="#" style="text-decoration:none; color:aliceblue;">Contact Us</a></h5>
                        </div>
                    </div>
                    
                </div>
                <div class="third">
                    <h2>Speciality</h2>
                    <div class="footerline"></div>
                    <div class="t1">
                        <div class="greater-icon">
                           <p> <i class="fa-solid fa-greater-than fa-xs"></i> </p>
                        </div>
                        <div class="t1-info">
                            <h5><a href="#" style="text-decoration:none; color:aliceblue;">Easy Communication</a></h5>
                        </div>
                    </div>
                    <div class="t2">
                        <div class="greater-icon">
                           <p> <i class="fa-solid fa-greater-than fa-xs"></i> </p>
                        </div>
                        <div class="t2-info">
                            <h5><a href="#" style="text-decoration:none; color:aliceblue;">Security</a></h5>
                        </div>
                    </div>
                    <div class="t3">
                        <div class="greater-icon">
                           <p> <i class="fa-solid fa-greater-than fa-xs"></i> </p>
                        </div>
                        <div class="t3-info">
                            <h5><a href="#" style="text-decoration:none; color:aliceblue;">Payment Schemes</a></h5>
                        </div>
                    </div>
  
                </div>
                <div class="fourth">
                    <h2>Newsletter</h2>
                    <div class="footerline"></div>
                    <div class="email-form">
                        <form action="">
                            <input type="email" name="#" placeholder="Email Address" required>
                            <button type="submit" class="sbutton">Subscribe</button>
                        </form>
                        <div class="ions">
                            <a href="https://www.facebook.com"><i class="fa-brands fa-square-facebook fa-lg"></i></a>
                            <a href="https://www.twitter.com"><i class="fa-brands fa-square-twitter fa-lg"></i></a>
                            <a href="https://www.instagram.com"><i class="fa-brands fa-square-instagram fa-lg"></i></a>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>

    </section> -->
        
</body>
</html>