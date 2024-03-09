<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>

    <link rel="stylesheet" href="css/about.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <script src="/js/nav.js" defer></script> -->
    <script src="about.js" defer></script>

    <script src="https://kit.fontawesome.com/50aa9099eb.js" crossorigin="anonymous"></script>
</head>
<body>
 
    <nav class="navbar" style="margin-top:0;padding-top:0;">
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
                    <li> <a href="login.php">Login</a> </li> 
                <?php
                    } else {
                ?>
                    <li> <a href="logout.php">Logout</a> </li> 
                <?php
                }
            ?>

            </ul>
        </nav>
    </nav>


    <!-- about us top section -->
    <section class="section1">            
       
        <div class="title">
            <h2>ABOUT US</h2>
        </div>

        <div class="section-center center2" >
           <article class=" about-des">
           </article>

           <div class="fullsection">
            
           </div>
           <article class="about" style="border:1px solid grey";>
        
            <div class="btn-container" style="border-bottom:1px solid grey";>
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



    <div class="gallery">
        <div class="title">
            <h3>OUR GALLERY</h3>
        </div>
        <section class="galleryarea">
        <div class="scope">
            <span style="--i:1;"><img src="images/bo2.png" alt="not found"></span>
            <span style="--i:2;"><img src="images/bo13.jpg" alt="not found"></span>
            <span style="--i:3;"><img src="images/bo.png" alt="not found"></span>
            <span style="--i:4;"><img src="images/bo10.png" alt="not found"></span>
            <span style="--i:5;"><img src="images/bo12.png!w700wp" alt="not found"></span>
            <span style="--i:6;"><img src="images/bo2.png" alt="not found"></span>
            <span style="--i:7;"><img src="images/bo4.png" alt="not found"></span>
            <span style="--i:8;"><img src="images/bo5.png" alt="not found"></span>
            <span style="--i:8;"><img src="images/bo10.png" alt="not found"></span>
        </div>
        </section>
        </div>

 
        <?php include 'bot.php'; ?>

  

    <!-- <div class="icon">
        <i class="fa fa-commenting" aria-hidden="true"></i>
     </div> -->


    <!-- <section class="footer" id="footer">
        <div class="chat">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-36525e30-9837-423b-b380-1ee612ef690d"></div>
        </div>
    </section> -->


    <footer> 
        <div class="footer-container">
             <div class="about-us">
                 <h3>About Us</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At iste excepturi voluptates id harum, nobis laborum laudantium fugiat maxime mollitia facere optio rem explicabo saepe aut architecto vel? A, nemo.</p>
            
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