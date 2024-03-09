<?php
include 'config.php';
if(isset($_GET['id'])) {
    // Retrieve the value of 'subject'
    $id = $_GET['id'];
    
    // echo "id: " . $id;
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
    <link rel="stylesheet" href="css/t-profile.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- <link rel="stylesheet" href="css/t-profile.js"> -->
<!-- <script src="t-profile.js"></script> -->

<script>
function redirectToChat() {
    // Redirect to the chat page
    window.location.href = '../chatapp1/users.php';
}


function redirectToRequest() {
    // Redirect to the chat page
    window.location.href = 'request.php';
}



</script>



</head>
<body>
    <div class="blocks">
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
    <div class="container">
    <div class="box">


    <?php 
           $results = mysqli_query($conn, "SELECT * FROM `teacher` where id='$id'") or die('query failed');

           if(mysqli_num_rows($results)>0){//need to close the bracket
            while($fetch_teacher = mysqli_fetch_assoc($results)){
     ?> 


        <div class="left-side">
            <img src="images/teach.jpg" >
            <h3><?php echo $fetch_teacher['cfn'].' '. $fetch_teacher['cmn'].' '.$fetch_teacher['cln'];?></h3>
            <p><?php echo $fetch_teacher['subtype'];?> Tutor</p>

            <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>  
                    <i class="fas fa-star"></i>  
                    <i class="fas fa-star"></i>  
                    <i class="fas fa-star"></i>
                </div>


        </div>

        <div class="right-side">
            <div class="info">
                <div class="t-name">
                    <h2><?php echo $fetch_teacher['cfn'].' '. $fetch_teacher['cmn'].' '.$fetch_teacher['cln'];?></h2>
                </div>
                <div class="status">
                    <h6><?php echo $fetch_teacher['acctype'];?></h6>
                    <i class="far fa-face-smile"></i>
                    <i class="far fa-face-smile"></i>
                    <i class="far fa-face-smile"></i>
                </div>
                <div class="description">
                    <p><?php echo $fetch_teacher['des'];?></p>
                </div>
                
                <!-- <a href="../.php?id=<?php echo $fetch_teacher['id']?>" > -->
                <div class="chat-box">
                    <!-- <input type="button" value="Message" class="chat"> -->
                    <input type="button" value="Message" class="chat" onclick="redirectToChat()">
                    <input type="button" value="Book Tutor" class="chat" onclick="redirectToRequest()">

                </div>
                <hr>
                <div class="datas">
                    <!-- <button class="button">Qualification</button>
                    <button class="button">Bio-data</button> -->
                    <ul>
                        <li>District: <?php echo $fetch_teacher['district'];?></li>
                        <li>Address: <?php echo $fetch_teacher['street'];?></li>
                        <li>Qualification: <?php echo $fetch_teacher['glevel'];?></li>

                    </ul>

                </div>
                <ul class="social-media">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php
            }
        }
        ?>
</div>
</div>

<!-- 
<div class="information">
    <div class="switch-box">
        <div class="switch">
        <div class="description">Description</div>
        <div class="reviews">Reviews</div>
        </div>
</div>

    <div class="info-box">
        <div class="description-box">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores atque iste iusto aut in pariatur. Molestias dicta quibusdam maiores aliquam labore a hic. Possimus, aliquid animi. Commodi, inventore debitis.</p>
    </div>
    <div class="review-box">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatum, odit voluptatibus illum quisquam laudantium at excepturi in dolorem eveniet. Alias molestiae nulla eaque soluta? Nesciunt perspiciatis hic recusandae dolorem.</p>
    </div>
    </div>

</div> -->





</body>
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
</html>