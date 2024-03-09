
<!-- //   include("connection.php");
//   include("function.php");

  // $user_data = check_login($conn); -->





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
<html>
<head>
  <title>Show History</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="cssfile/sidebar.css"> -->
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="../css/header.css">

<link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
<link rel="manifest" href="../favicon_io/site.webmanifest">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../js/nav.js" defer></script>

<script src="https://kit.fontawesome.com/50aa9099eb.js" crossorigin="anonymous"></script>



 
</head>


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
    
    






<body style="
background-color:#b9cbd7
; height:100vh">





  

 
<div class="sidebar2" >

<h1 class="adminTopic" style="margin-top: 5%;">Current Student List</h1>

   

<table class="table">
            <thead>
              <tr>
                <!-- <th>TeacherName</th> -->
                <!-- <th>TeacherEmail</th> -->
                <th>StudentFirstName</th>
                <th>StudentlastName</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>StartingTime</th>
                <th>EndingTime</th>
                <th>Subject Taught</th>
         
              </tr>
            </thead>
            <tbody>
                <!-- update & delete teacher info-->
            <?php

              $host="localhost";
              $user="root";
              $password="";
              $database="academicaid";
              $con = mysqli_connect($host,$user,$password,$database);

              if(!$con){
                  die('Could not Connect My Sql:');
              }
              $sql = "SELECT * FROM assignteacher  where tfn='$username'";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['id'];
                //   $tname = $row['tfn'];
                //   $temail = $row['temail'];
                  $sname = $row['sfn'];
                  $lname = $row['sln'];
                  $address = $row['address'];
                  $semail = $row['semail'];
                  $sgender = $row['sgender'];
                  $stime = $row['stime'];
                  $etime = $row['etime'];
                  $subtype = $row['subtype'];
                  // $level = $row['level'];
              ?>

              <tr>
              <!-- <td><?php echo $tname ?></td> -->
              <!-- <td><?php echo $temail  ?></td> -->
              <td><mark><?php echo $sname ?></mark></td>
              <td><?php echo $lname  ?></td>
              <td><?php echo $semail  ?></td>
              <td><?php echo $sgender  ?></td>
              <td><?php echo $address  ?></td>
              <td><?php echo $stime  ?></td>
              <td><?php echo $etime ?></td>
              <td><?php echo $subtype ?></td>
           
          
       
              </tr>
              <?php

                }
              }
              ?>
              </tbody>

          </table>













<!-- <?php

    $email = $_SESSION['email'];
    
    $sqlget="SELECT * FROM ticket where email = '$email' ";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
    <th>Email</th>
    <th>Booked Movie Name</th>
    <th>Show Timing</th>
    <th>Cost</th>
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        // echo $row['user_id'];
        // echo "</td><td>";
        echo $row['email'];
        echo "</td><td>";
        echo $row['movie'];
        echo "</td><td>";
        echo $row['timing'];
        echo "</td><td>";
        echo "Rs. 150";
        echo "</td>";

          
        ?>

    

<?php
       }

       echo "</table>";


?>
 -->





</div>




</body>
</html>