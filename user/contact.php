<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>

    <link rel="stylesheet" href="css/contact.css" >
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/50aa9099eb.js" crossorigin="anonymous"></script> 
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
    
    <section class="contact">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28266.32840609563!2d85.42446664999999!3d27.67739795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1aae42806ba1%3A0x5449e079404e5e82!2sBhaktapur!5e0!3m2!1sen!2snp!4v1654691753378!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    </section>

    <section class="contact-us">

        <div class="main">

            <div class="contact-div">
                    
                <i class="fa fa-home" ></i>
                <div class="mydiv">
                <h4>Academic-Aid </h4>
                <p>Libali -6,Bhaktapur</p>
                </div>
<br><br>
           
                <i class="fa fa-phone" ></i>
                 <div class="mydiv">
                <h4>+977 9861488545<br>
                    +977 9810052055<br>
                    01-6617014

                </h4><br>
                 </div><br>
           
                <i class="fa fa-envelope-o"></i>
                <div class="mydiv">
                <h4>Home-Tuition@gmail.com</h4>
                <p>Email us your query</p>
                 </div>
            </div>
            
            
            
            <div class="contact-form" >
                <form action="" method="POST">
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    <input type="text" id="subject" name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" placeholder="Message" id="message" name="message" required></textarea>
                    <button type="submit" class="press" >Send Message</button>
                </form>
            </div>

        </div>     
    </section>

</body>
</html>