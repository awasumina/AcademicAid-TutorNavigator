<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link rel="stylesheet" href="css/faqs.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body>
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
   <ul id="accordion">
    <li>
        <label for="first">What is  Online Home Tution? <span>&#x3e;</span></label>
        <input type="radio" name="accordion" id="first" checked>
        <div class="content">
            <p>Online home tuition is a form of tutoring where the tutor provides academic assistance to a student through virtual platforms, allowing for remote learning from the comfort of the student's home.</p>
        </div>
    </li>

    <li>
        <label for="second">How does online home tuition work? <span>&#x3e;</span></label>
        <input type="radio" name="accordion" id="second">
        <div class="content">
            <p>Tutors and students connect through online platforms, typically using video conferencing tools. Lessons are conducted in real-time, and materials may be shared electronically. </p>
        </div>
    </li>

    <li>
        <label for="third">How do I find a suitable online home tutor? <span>&#x3e;</span></label>
        <input type="radio" name="accordion" id="third">
        <div class="content">
            <p>Online tutoring platforms, educational websites, and tutoring agencies often provide databases of qualified online tutors. Consider the tutor's qualifications, experience, and reviews from other students.</p>
        </div>
    </li>

    <li>
        <label for="fourth">Is online home tuition as effective as in-person tuition?<span>&#x3e;</span></label>
        <input type="radio" name="accordion" id="fourth">
        <div class="content">
            <p>Online home tuition can be highly effective, offering flexibility and personalized attention. The effectiveness depends on the student's engagement and the quality of the tutor.</p>
        </div>
    </li>

    <li>
        <label for="fifth">How are payments handled for online home tuition?<span>&#x3e;</span></label>
        <input type="radio" name="accordion" id="fifth">
        <div class="content">
            <p>Payment methods vary, but online platforms often provide secure payment gateways. Discuss payment details, rates, and schedules with the tutor before starting the sessions.</p>
        </div>
    </li>
   </ul>
    
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