<?php 
  session_start(); 
  include_once "config.php";
  if(!isset($_SESSION['user_id'])){
    // header("location: login.php");
    header("location: loginforstudent.php");

  }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="css/request.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
   




    <script>
    function fetchTeachers(subject) {
        // Make an AJAX request to fetch teachers based on the subject
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `fetch_teachers.php?subject=${subject}`, true);
        xhr.onload = function() {
            console.log('Response received:', this.responseText);
            if (this.status === 200) {
                const teachers = JSON.parse(this.responseText);

                const dropdown = document.getElementById('teacherDropdown');
                dropdown.innerHTML = '<option value="">Select Teacher</option>';
                teachers.forEach(teacher => {
                    dropdown.innerHTML += `<option value="${teacher.id}">${teacher.cfn} ${teacher.cln}</option>`;
                });

                // Add dropdown for teacher email
                const dropdownEmail = document.getElementById('teacherDropdownEmail');
                dropdownEmail.innerHTML = '<option value="">Select Teacher Email</option>';
                teachers.forEach(teacher => {
                    dropdownEmail.innerHTML += `<option value="${teacher.id}">${teacher.email}</option>`;
                });
            }
        }
        xhr.send();
    }
</script>




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

      
  <div class="header">
    <div class="title">
        <h1>High Quality Home Tutoring For Students in NEPAL</h1>
        <p>Submit the tuition request form below. We will send a highly experienced and quality home tutor at your doorstep. After submitting the form below, our administrators will get in  
              touch with you (via Email or WhatsApp#) within 6 hours. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus, totam Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo laborum ipsam fugiat laudantium aut sit perferendis repudiandae quidem amet temporibus.?</p><br>
    </div>
</div>
   <div class="contain">


   <!-- <form id="requestForm" action="requestvalidate.php" method="post">
    <h1>Request a Teacher</h1>
    
    <input type="text" id="subject" placeholder="Subject" name="subtype" required oninput="fetchTeachers(this.value)">
    
    <input type="text" id="class" placeholder="Student's Current Class" name="sclass" required>

    <select name="teacher_id" id="teacherDropdown" required>
        <option value="">Select Teacher</option>
    </select>

    <select name="teacher_email" id="teacherDropdownEmail" required>
        <option value="">Select Teacher Email</option>
    </select>

    
    <input type="time" id="teacher-shift" placeholder="Starting time" name="stime" required>
    <input type="time" id="teacher-shift1" placeholder="Ending time" name="etime" required>
    <span>Any queries</span>
    <textarea name="queries"></textarea>
    <input type="submit" value="Send" id="button" name="submit">
</form> -->

<form id="requestForm" action="requestvalidate.php" method="post">
    <h1>Request a Teacher</h1>
    <div class="input-text">
    <label for="subject">Subject:</label>
    <input type="text" id="subject" placeholder="Subject" name="subtype" required oninput="fetchTeachers(this.value)">
    <label for="class" >Class:</label>
    <input type="text" id="class" placeholder="Student's Current Class" name="sclass" required style="margin-bottom: 50px;">
</div>
<br>
<label for="teacherDropdown" style="margin-left: -50px; padding-bottom: 30px;" >Teacher name:</label>
    <select name="teacher_id" id="teacherDropdown" required style="height: 35px;width: 530px; text-align: center; font-size: 18px;font-weight: 200;border-radius: 10px; ">
        <option value="">Select Teacher</option>
    </select>
<br>

<label for="teacherDropdown" style="margin-left: -50px;">Teacher Email:</label>
    <select name="teacher_email" id="teacherDropdownEmail" required style="height:35px;width: 530px; text-align: center; font-size: 18px;font-weight: 200;border-radius: 10px;">
        <option value="">Select Teacher Email</option>
    </select>


    <!-- <input type="text" id="firstname" placeholder="Teacher First-name" name="cfn" required> -->
    <!-- <input type="text" id="middlename" placeholder="Teacher Middle-name" name="cmn"> -->
    <!-- <input type="text" id="lastname" placeholder="Teacher Last-name" name="cln" required> -->
  <!-- <input type="email" id="teacher-id" placeholder="Teacher Email" name="email" required> -->
  <div class="input-text">  
  <label for="subject" style="margin-left: -33px;">Starting Time:</label>
    <input type="time" id="teacher-shift" placeholder="Starting time" name="stime"  style="width: 170px;">
    <label for="subject">EndingTime:</label>
    <input type="time" id="teacher-shift1" placeholder="Ending time" name="etime" required style="width: 170px; ">
  </div>
    <span>Any queries</span>
    <textarea name="queries"></textarea>
    <input type="submit" value="Send" id="button" name="submit">
</form>



   </div> 
    
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