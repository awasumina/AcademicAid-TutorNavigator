<?php
session_start();
include 'config.php';
if(!$conn){
    die('Could not Connect My Sql:');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Tuition</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="counter.js" defer></script>
    <link rel="stylesheet" href="css/footer.css">
    <!-- for icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <label class="logo">
                <img src="images/academic-logoo1.png" style="width: 130px;height: 90px;">
            </label>
            <ul>
            <li> <a href="index.php">Home</a> </li>
                <li> <a href="../chatapp1/users.php">Messaging</a> </li>
                <li> <a href="about.php">About Us</a> </li>
                <li> <a href="faqs.php">FAQs</a> </li>
                <li> <a href="contact.php">Contact Us</a> </li>
                <li> <a href="request.php">Request a teacher</a></li>

                <?php
                    if (!isset($_SESSION['user_id'])) {
                ?>  
                    <li> <a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a> </li> 
                <?php
                    } else {
                ?>
                    <li> <a href="logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <?php echo $_SESSION['name']?>
                    </a> </li> 
                <?php
                }
            ?>

            </ul>
        </nav>
    
        <div class="main">
          
                <div class="lside" style="background-image: url(images/tutoring.jpg);">
                    
                        <h1>Build Your <span id="text">Future</span>,Choose your <span id="text">Course</span></h1> 
                           <!-- <h2>Choose your Course</h2> -->
                           <p>" Academic aid makes sure everyone gets a good education and chances to<br> keep learning throughout their lives. We aim to connect students with <br>qualified tutors "</p>
                           <button>Get Started</button>
                   
                </div>
           
        </div>
      

    
 <div class="section">
    <div class="heading">
        <h1>How It Works?</h1>
    </div>
    
    <div class="block">
        <div class="block1">
            <div class="image">
                <img src="images/submitt.jpg">
            </div>
            <div class="text">
              <h5>Step 01</h5>
              <h1>Submit the tuition request</h1>
              <p>Fill out the form and submit it to Academic Aid.(Your personal infrmation is kept cofidential)</p>
            </div>
        </div>

        <div class="block1">
            <div class="image">
                <img src="images/handshake.jpg">
            </div>
            <div class="text">
              <h5>Step 02</h5>
              <h1>Meet the tutor for free</h1>
              <p>After the submission,you will be contacted by your administrator,  schedule a FREE "Meet the tutor"call which usually lasts for 25-30 minutes.</p>
            </div>
        </div>

        <div class="block1">
            <div class="image">
                <img src="images/timee.jpg">
            </div>
            <div class="text">
              <h5>Step 03</h5>
              <h1>Enjoy your sessions</h1>
              <p>Once you meet the tutor and are completely satisfied, you can make the payment and you tutoring will commence</p>
            </div>
        </div>
    </div>
 </div>


 <!-- <div class="slider">
    <figure>
    <div class="slide">
        <img src="images/index1.jpg" >
    </div>
    <div class="slide">
        <img src="images/index5.jpg">
    </div>
        <div class="slide">
        <img src="images/index2.webp">
    </div>
        <div class="slide">
        <img src="images/index4.jpg">
    </div>
</figure>
</div> -->


    <!-- <div class="subject">
        <div class="sub">
        <div class="sub-name">
            <img src="images/bo6.png!sw800" >
            <h3>Physics</h3>
        </div>
        <div class="sub-name">
            <img src="images/bo.png">
            <h3>Chemistry</h3>
        </div>

        <a href="profile.php?subject=math" style="color:black; text-decoration:none">
            <div class="sub-name">
            <img src="images/bo13.jpg">
            <h3 style="text-align:center">Math</h3>
            </div>
        </a>

        <a href="profile.php?subject=account" style="color:black; text-decoration:none">
            <div class="sub-name">
            <img src="images/bo4.png">
            <h3 style="text-align:center">Account</h3>
            </div>
        </a>

        </div>

        <div class="sub">
        <div class="sub-name">
            <img src="images/bo5.png">
            <h3>English</h3>
        </div>
        <div class="sub-name">
            <img src="images/bo10.png">
            <h3>SEE</h3>
        </div>
        <div class="sub-name">
            <img src="images/bo11.png!w700wp">
            <h3>Grade 11</h3>
        </div>
        <div class="sub-name">
            <img src="images/bo12.png!w700wp">
            <h3>Grade 12</h3>
        </div>
        </div>
    </div> -->

    <div class="course-stn">
        <div class="courses">
            <div class="side-1">
                <h3>Find your course</h3>
                <hr>
                <!-- <div class="ckbox">
                <input type="checkbox" id="id-box">
                <label for="id-box">by ID</label>
                <input type="checkbox" id="name-box">
                <label for="name-box">by name</label>
            </div> -->

        </div>
            <div class="side-2">
                <div class="row-box">
                
                    <div class="c-box">
                        <img src="images/11.jpg">
                        <h6>11</h6>
                    </div>

                    <div class="c-box">
                        <img src="images/12.jpg">
                        <h6>12</h6>
                    </div>
                    <div class="c-box">
                        <img src="images/Computer.jpg">
                        <h6>Computer</h6>
                    </div>

                    <a href="profile.php?subject=math" style="color:black; text-decoration:none">
                    <div class="c-box">
                    <img src="images/smath.jpg">
                    <h3 style="text-align:center">Math</h3>
                    </div>
                    </a>

                    <!-- <a href="profile.php?subject=optmath" style="color:black; text-decoration:none">
                    <div class="sub-name">
                     <img src="images/bo13.jpg">
                    <h3 style="text-align:center">OPT Math</h3>
                    </div>
                    </a> -->

                    <!-- <div class="c-box">
                        <img src="images/math.jpg">
                        <h6>Math</h6>
                    </div> -->
                </div>
                <div class="row2-box">
                    <div class="c-box">
                        <img src="images/schemistry.jpg">
                        <h6>Chemistry</h6>
                    </div>
                    <div class="c-box">
                        <img src="images/phy.jpg">
                        <h6>Physics</h6>
                    </div>
                    <div class="c-box">
                        <img src="images/senglish.jpg" > 
                        <h6>English</h6>
                    </div>


                    <a href="profile.php?subject=account" style="color:black; text-decoration:none">
                    <div class="c-box">
                    <img src="images/eco.jpg">
                    <h3 style="text-align:center">Account</h3>
                    </div>
                    </a>


                    <!-- <div class="c-box">
                        <img src="images/eco.jpg">
                        <h6>Economics</h6>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

<div class="tutor-class">TUTOR BY CLASS</div>
    <div class="class-scroll">
        <div class="class">Grade 1-8</div>
        <div class="class">Grade 8-10</div>
        <div class="class">+2 Science</div>
        <div class="class">+2 Management</div>
        <div class="class">A level</div>
        <div class="class">Bachelor</div>
        <div class="class">Diploma</div>
        <div class="class">Master</div>
        <div class="class">Art Class</div>
    </div>
    
    <div class="tutor-subject">TUTOR BY SUBJECT</div>
    <div class="subject-scroll">
        <div class="sub-1"><img src="images/physics.jpg"><h3>Physics</h3></div>
        <div class="sub-1"><img src="images/schemistry.jpg"><h3>Chemistry</h3></div>
        <div class="sub-1"><img src="images/smath.jpg"><h3>Mathematics</h3></div>
        <div class="sub-1"><img src="images/senglish.jpg"><h3>English</h3></div>
        <div class="sub-1"><img src="images/nepali.jpg"><h3>Nepali</h3></div>
        <div class="sub-1"><img src="images/computer.webp"><h3>Computer</h3></div>
        <div class="sub-1"><img src="images/health.png"><h3>Health</h3></div>
    </div>

    <div class="tutor-city">TUTOR BY CITY</div>
    <div class="city-scroll">
        <div class="city-name"><img src="images/ktm.jpeg"><h3 class="city">Kathmandu</h3></div>
        <div class="city-name"><img src="images/bkt.jpg"><h3 class="city">Bhaktapur</h3></div>
        <div class="city-name"><img src="images/lalitpur.jpg"><h3 class="city">Lalitpur</h3></div>
        <div class="city-name"><img src="images/biratnagar.jpg"><h3 class="city">Biratnagar</h3></div>
        <div class="city-name"><img src="images/palpa.jpg"><h3 class="city">Palpa</h3></div>
        <div class="city-name"><img src="images/lumbini.jpg"><h3 class="city">Lumbini</h3></div>
        <div class="city-name"><img src="images/pokhara.jpg"><h3 class="city">Pokhara</h3></div>
        <div class="city-name"><img src="images/chitwan.jpg"><h3 class="city">Chitwan</h3></div>
    </div>

    <div class="tutor">TUTOR BY GENDER</div>
    <div class="tutor-gender">
        <div class="gender">
            <img src="images/male-icon.png">
            <h2>Male</h2>
        </div>
        <div class="gender">
            <img src="images/female-icon.png">
            <h2>Female</h2>
        </div>

   <!-- <div class="button-group">
        <button class><i class="fa-regular fa-registered"></i> Register as a Tutor</button>
        <button class> <i class="fa-solid fa-phone"></i>Call Us</button>
        <button class> <i class="fa-solid fa-map-location" style="padding-left: 10px;"></i>Map</button>
    </div> -->

    
    </div>



    <div class="perfect-tutor">
        <div class="part">
            <div class="hname">
                <h2>Why Perfect Tutor?</h2>
            </div>
            <div class="box-part">
                <div class="part">
                <button class="button">One-On-One Learning</button>
                </div>

                <div class="part">
                    <button class="button">One-On-One Learning</button>
                </div>

                <div class="part">
                    <button class="button">One-On-One Learning</button>
                </div>
            </div>

                <div class="detail">
                    <h4>When you choose Perfect Tutor,you can be confident for investing in the most reliable tutoring services available in your area </h4>
                    <input type="submit" value="Know More...." class="k-more"></button>
                </div>
        </div>
    </div>

   

    <section class=" number-generator">
        <!-- single number -->
       <article class="article1">
           <span class="number" data-id="7000">0</span>
           <p>STUDENT SIGN UPS</p>
       </article>
       <!-- end of single number -->

       <article class="article1">
           <span class="number" data-id="2000">0</span>
           <p>TEACHER SIGN UPS</p>
       </article>

       <article class="article1">
           <span class="number" data-id="100">0</span>
           <p>HOURS TAUGHT</p>
       </article>
   </section>


    </div>
     
    <footer> 
        <div class="footer-container">
             <div class="about-us">
                 <h3>About Us</h3>
                 <p>Tutors and students connect through online platforms, typically using video conferencing tools. Lessons are conducted in real-time, and materials may be shared electronically.</p>
            
             <ul class="social-media">
                 <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
             </ul>
         </div>
         <div class="subscribe">
             <h2>Subscribe our newsletters</h2>
             <p>Intersted in Home Tution Nepal? <br> Subscribe here Now!</p>
             <form>
                 <input type="email" placeholder="Enter your email address">
             </form>
         </div>
         <div class="links">
             <h2>Useful links</h2>
             <a href="#">Dashboard</a>
             <a href="#">FAQs</a>
             <a href="#">Privacy Policy</a>
             <a href="#">Request Tutor</a>
             <a href="#">Contact</a>
         </div>
         <div class="app">
             <h2> Get Our App</h2>
             <button type="button">GET IT ON <br><i class="fa-brands fa-google-play"></i><span>Play store</span></button>
         </div>
         
         </div>
         
     </footer> 
     
</body>


</html>