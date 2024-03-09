
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>

    <link rel="stylesheet" href="../css/aboutus.css">
    <link rel="stylesheet" href="../css/header.css">

    <!-- favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <script src="/js/nav.js" defer></script> -->
    <script src="../js/nav.js" defer></script>

    <script src="https://kit.fontawesome.com/50aa9099eb.js" crossorigin="anonymous"></script>

    <style>
        body{
            background: #b9cbd7;
        }
    </style>
</head>
<body>
 
                    
                    <div class="nav-header">
                        <button id="btn" class="nav-toggle" style="visibility: hidden;">
                            <!-- <i class="fas fa-bars" ></i> -->
                        </button>
                    </div>
                
              




   
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
    
    

















    <!-- about us top section -->
    <section class="section1"  >            
       
        <div class="title">
            <h2>ABOUT US</h2>
        </div>

        <div class="section-center center2" >
           <article class=" about-des">
           </article>

           <div class="fullsection">
            
           </div>
           <article class="about">
        
            <div class="btn-container">
                <button class="btn active" data-id="history">Intro</button>
                <button class="btn" data-id="vision">Vision</button>
                <button class="btn" data-id="goals">Goals</button>
            </div>

            <div class="about-content">
                <div class="content active" id="history">
                    <h4>Introduction</h4>
                    <p>
                        Tuition, often referred to as private instruction or coaching, is a supplementary educational service that provides personalized learning experiences to students outside of their regular classroom settings. These sessions are typically conducted one-on-one or in small groups and are aimed at addressing specific academic needs, reinforcing concepts, and enhancing overall understanding of subjects. Tuition can cover a wide range of academic disciplines, from mathematics and science to language arts and test preparation. Many students and parents turn to tuition as a means of gaining additional support, particularly when facing challenges in grasping certain topics or aiming to excel in competitive exams.
                    </p>
                </div>
            
                 

                 <div class="content" id="vision" >
                    <h4>Vision</h4>
                    <p>
                        Man bun PBR&B keytar copper mug prism, hell of helvetica. Synth crucifix offal deep v hella biodiesel. Church-key listicle polaroid put a bird on it chillwave palo santo enamel pin,tattooed meggings franzen la croix cray. Reaesthetic four loko tbh helvetica air plant, neutra palo santo tofu mumblecore.Hoodie bushwick pour-over jean shorts chartre shabby chic.roof party hammock master cleanse pop-up truffaut, bicycle rights skateboard affogato readymade sustainable deep v live-edge schlitz narwhal.test preparation. Many students and parents turn to tuition as a means of gaining additional support, particularly when facing challenges in grasping certain topics or aiming to excel in competitive exams.
        
                
                    </p>
           
                 </div>

                 <div class="content" id="goals">
                    <h4>Goals</h4>
                    <p>
                      Chambray authentic truffaut, kickstarter brunch taxidermy vape heirloom four dollar toast raclette shoreditch church-key.   Poutine etsy tote bag, cred fingerstache leggings cornhole everyday carry blog gastropub. Brunch biodiesel sartorial mlkshk swag, mixtape hashtag marfa readymade direct trade man braid cold-pressed roof party. Small batch adaptogen coloring book  heirloom. Letterpress food truck hammock literally hell of wolfbeard adaptogen everyday carry. Dreamcatcher pitchfork uccie,
                      banh mi salvia venmo photo booth quinoa chicharrones.Many students and parents turn to tuition as a means of gaining additional support, facing challenges in grasping certain topics or aiming to excel in competitive exams.
        
                    </p>
                  </div>
           </article>

        </div>

    </section>



        <section class="galleryarea">
    <div class="gallery" >
        <div class="title">
            <h3>OUR GALLERY</h3>
        </div>
        <div class="scope">
            <span style="--i:1;"><img src="../images/gallery/aa (1).jpg" alt="not found"></span>
            <span style="--i:2;"><img src="../images/gallery/aa (1).png" alt="not found"></span>
            <span style="--i:3;"><img src="../images/gallery/aa (2).jpg" alt="not found"></span>
            <span style="--i:4;"><img src="../images/gallery/aa (3).jpg" alt="not found"></span>
            <span style="--i:5;"><img src="../images/gallery/aa (4).jpg" alt="not found"></span>
            <span style="--i:6;"><img src="../images/gallery/aa (5).jpg" alt="not found"></span>
            <span style="--i:7;"><img src="../images/gallery/aa (6).jpg" alt="not found"></span>
            <span style="--i:8;"><img src="../images/gallery/aa (7).jpg" alt="not found"></span>
            <span style="--i:8;"><img src="../images/gallery/aa (8).jpg" alt="not found"></span>
        </div>
        </section>
        </div>

 

  

    <!-- <div class="icon">
        <i class="fa fa-commenting" aria-hidden="true"></i>
     </div> -->


    <!-- <section class="footer" id="footer">
        <div class="chat">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-36525e30-9837-423b-b380-1ee612ef690d"></div>
        </div>
    </section> -->




    <?php include 'bot.php'; ?>


   






     
   <!-- *******************footer section***********************  -->

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
                    <!-- <div class="t4">
                        <div class="greater-icon">
                           <p> <i class="fa-solid fa-greater-than fa-xs"></i> </p>
                        </div>
                        <div class="t4-info">
                            <h5><a href="#" style="text-decoration:none; color:aliceblue;">Insurance</a></h5>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="fourth">
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
                </div> -->
                <!-- <div class="image-right">
                    <img src="/images/footer 2.png" alt="">
                </div> -->
            </div>
        </div>
        <!-- <div class="chat">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-36525e30-9837-423b-b380-1ee612ef690d"></div>
        </div> -->
    </section>
       







</body>
</html>