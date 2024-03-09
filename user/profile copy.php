<?php
include 'config.php';
if(isset($_GET['subject'])) {
    // Retrieve the value of 'subject'
    $subject = $_GET['subject'];
    
    // Echo the value of 'subject'
    // echo "Subject: " . $subject;
} else {
    // If 'subject' is not set in the URL, display a message
    echo "No subject specified.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
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
                <li> <a href="logout.php">Logout</a> </li> 
       

            </ul>
    </nav>

    <?php 
           $results = mysqli_query($conn, "SELECT * FROM `teacher` where subtype='$subject' OR subtype2='$subject'") or die('query failed');

           if(mysqli_num_rows($results)>0){//need to close the bracket
            while($fetch_teacher = mysqli_fetch_assoc($results)){
     ?> 


    <div class="profile-container">
        <div class="profile-1">
            <h2>PROFILE</h2>
            <div class="border"></div>

            <div class="row-1">
            <div class="block">
            <div class="profile">
                <img src="images/bo4.png" alt="">
               
                <div class="name"><?php echo $fetch_teacher['cfn'];?></div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>
                </div>
            
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non ab nesciunt reprehenderit, natus quas, suscipit aperiam praesentium sit explicabo laudantium quis nihil sequi voluptatum at ex mollitia nemo, repudiandae illum!</p>
            </div>
        </div>

        <div class="block">
            <div class="profile">
                <img src="images/bo4.png" alt="">
               
                <div class="name">Hari</div>
                <div class="rating">
                    <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non ab nesciunt reprehenderit, natus quas, suscipit aperiam praesentium sit explicabo laudantium quis nihil sequi voluptatum at ex mollitia nemo, repudiandae illum!</p>
            </div>
        </div>
    </div>
    <div class="row-2">
        <div class="block">
            <div class="profile">
                <img src="images/bo4.png" alt="">
               
                <div class="name">Gita</div>
                <div class="rating">
                    <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="far fa-star"></i>
                </div>
                
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non ab nesciunt reprehenderit, natus quas, suscipit aperiam praesentium sit explicabo laudantium quis nihil sequi voluptatum at ex mollitia nemo, repudiandae illum!</p>
            
            </div>
        </div>

        <div class="block">
            <div class="profile">
                <img src="images/bo4.png" alt="">
               
                <div class="name">Gita</div>
                <div class="rating">
                    <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="far fa-star"></i>
                </div>
                
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non ab nesciunt reprehenderit, natus quas, suscipit aperiam praesentium sit explicabo laudantium quis nihil sequi voluptatum at ex mollitia nemo, repudiandae illum!</p>
            
            </div>
        </div>

        <div class="block">
            <div class="profile">
                <img src="images/bo4.png" alt="">
               
                <div class="name">Rita</div>
                <div class="rating">
                    <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="fas fa-star"></i>  <i class="far fa-star"></i>
                </div>
                
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non ab nesciunt reprehenderit, natus quas, suscipit aperiam praesentium sit explicabo laudantium quis nihil sequi voluptatum at ex mollitia nemo, repudiandae illum!</p>
            
            </div>
        </div>
    </div>

    </div>

    </div>

<?php
            }
        }
        ?>


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
    </div>
</body>
</html>