<?php

include 'db.php';

session_start();

$username = $_SESSION['username'];

if(!isset($username)){
   header('location:../html/login.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" type="text/css" href="dashboard.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <!-- favicon  -->
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
  
  <script>
        function myFunction0 () {
        location.replace("search_page_student.php");
    };

    function myFunction1 () {
        location.replace("../user/studentregistration.php");
    };
   
    function myFunction2 () {
        location.replace("../html/teacherregistration.php");
    };

    function myFunction3 () {
        location.replace("assignteacher.php");
    };


    function myFunction4 () {
        location.replace("search_page.php");
    };
 
    function myFunction6 () {
        location.replace("assignteacher.php");
    };
</script>
  <style>        
  #u{
            padding: 10px 35px 10px 30px;
            background-color: #2c415a;
            border: 1px #0e2650 solid;
            border-radius: 10px;
            color: white;
            margin-bottom: 10px;
            width: 120px;
        }
        #uu{
            padding: 10px 35px 10px 30px;
            background-color: #003566;
            border: 1px #003566 solid;
            border-radius: 10px;
            color: white;
            margin-bottom: 10px;
            width: 120px;
        }

        #d{
            padding: 10px 35px 10px 40px;
            /* background-color: rgb(96, 109, 74);
            border: 1px rgb(99, 107, 71) solid; */
            background-color: rgb(85, 99, 62);
            border: 1px rgb(85, 99, 62) solid;
            
            border-radius: 10px;
            color: white;
            width: 120px;
        }
   .butt{

  color: #fff !important;



}
        
        th{
          background-color: #003566;

        }
/* 
        .main-top #box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(33rem, 1fr));
   gap:2.5rem;
   max-width: 1200px;
   margin:0 auto;
   align-items: flex-start;
}

        #box{
   border-radius: .5rem;
   padding:2rem;
   height:20rem;
   width: 35rem;
    background-color:#b4d4dc; 
   box-shadow: var(--box-shadow);
   border:var(--border);
   text-align: center;
} */

 h3{
   font-size: 5rem;
   color:var(--black); 
}
/*
.cards p{
   margin-top: 1.5rem;
   padding:1.5rem;
    background-color: var(--white); 
   color:var(--green);
   font-size: 5rem;
   border-radius: .5rem;
   border:var(--border);
} */

  </style>
</head>
<body>
  <div class="container" id="section1">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="../images/admin.png">
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="#section1">
          <i class="fa fa-folder-open"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="#section2">
          <i class="fa-solid fa-user-secret"></i> 
          <span class="nav-item">Manage Student</span>
        </a></li>
        <li><a href="#section3">
          <i class="fa-solid fa-users"></i> 
           <span class="nav-item">Manage Teacher</span>
        </a></li>
        <li><a href="#section4">
          <i class="fa fa-credit-card-alt"></i>
          <span class="nav-item">Teacher Form Pending</span>
        </a></li>
        <li><a href="#section5">
        <i class="fa fa-user-cog"></i>
          <span class="nav-item">Assign Teacher</span>
        </a></li>
        <li><a href="#section6">
        <i class="fa fa-user-cog"></i>
          <span class="nav-item">Requested Teacher</span>
        </a></li>

        <li><a href="../esewa-master">
        <i class="fa fa-sack-dollar"></i>
          <span class="nav-item">Pay to Teachers</span>
        </a></li>
        

        <li><a href="../html/logout.php" class="logout">
          <i class="fa fa-sign-out"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>Founders</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
          <img src="../images/admin/admin1.jpg">
          <h4>Roji Prajapati</h4>
          <p>Founder</p>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="../images/admin/admin2.jpg">
          <h4>Shreeya Shrestha</h4>
          <p>Founder</p>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="../images/admin/admin3.jpg">
          <h4>Sumina Awa</h4>
          <p>Founder</p>
          <button>Profile</button>
        </div>
      </div>


<br><br>
<hr style="border:4px solid white;">
      <section class="main">
      <div class="main-top" >
        <h1 style="font-size:1.75rem;">Statistics</h1>
      </div>
      <div class="users">
<?php
            $conn = mysqli_connect('localhost','root','','academicaid') or die('connection failed');
?>

      <div class="card" style="border:none;   ">
         <?php 

            $select_users = mysqli_query($conn, "SELECT * FROM `teacher`") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         
         <p style="border:none;font-size: 1.25rem;">Total Teacher</p>
      </div>




      <div  class="card" style="border:none;   ">
         <?php 

            $select_users = mysqli_query($conn, "SELECT * FROM `teachertemp`") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         <p style="border:none;font-size: 1.25rem;">Total Pending Teacher Request</p> 
      </div>


      <div class="card" style="border:none;   ">
         <?php 

            $select_users = mysqli_query($conn, "SELECT * FROM `student`") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         <p style="border:none;font-size: 1.25rem;">Total Student</p>
      </div>

</div>
</section>


      

      <section class="teachers" id ="section2">
        <div class="teachers-list">
          <h1>Student List</h1>
          <table class="table">
          <thead>
              <tr> 
                <th>ID</th>
                <th>FirstName</th>
                <th>MiddleName</th>
                <th>LastName</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th colspan="2"> 
                  <button class="butt"  onclick = "myFunction1()" >ADD +</button> 
                  <button class="butt" style="width:9rem;height:2.7rem; " onclick = "myFunction0()" style="color:white; width:2.7rem;">🔍Search</button> 
                 </th>
           
              </tr>
            </thead>
           
            <tbody>

            <!-- update & reject customer info -->
            <?php

              $host="localhost";
              $user="root";
              $password="";
              $database="academicaid";
              $con = mysqli_connect($host,$user,$password,$database);

              if(!$con){
                  die('Could not Connect My Sql:');
              }
              $sql = "SELECT * FROM student";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['id'];
                  $fname = $row['cfn'];
                  $mname = $row['cmn'];
                  $lname = $row['cln'];
                  $mobileno = $row['mob'];
                  $email = $row['email'];
                  ?>

              <tr>
              <td><?php echo $id  ?></td>
              <td><?php echo $fname ?></td>
              <td><?php echo $mname  ?></td>
              <td><?php echo $lname  ?></td>
              <td><?php echo $mobileno ?></td>
              <td><?php echo $email ?></td>
           
              <!-- <td><?php echo $level  ?></td> -->
              <td>
              <!-- <a href="editteacher.php?id=<?php echo $id ?>"><input type="button" value="Update" id="u" class="edit"></a> -->
              <a href="deletestudent.php?id=<?php echo $id ?>"><input type="button" value="Delete" id="d"></a>
              </td>
              </tr>
                  <?php

                }
              }
              ?>
              </tbody>
          </table>
        </div>
      </section>

      <!-- Teacher section -->
      
      <section class="teachers" id="section3">
        <div class="teachers-list">
          <h1>Teacher List</h1>
          <table class="table">
            <thead>
              <tr> 
                <th>ID</th>
                <th>FirstName</th>
                <th>MiddleName</th>
                <th>LastName</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Subject Taught</th>
                <th colspan="2"> 
                  <button class="butt"  onclick = "myFunction2()" >ADD +</button> 
                  <button class="butt" style="width:9rem;height:2.7rem; " onclick = "myFunction4()" style="color:white; width:2.7rem;">🔍Search</button> 
                <!-- <button><a href="search_page.php" class="fas fa-search" style="color:white; width:2rem;" ></a>Search</button> -->
              </th>
           
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
              $sql = "SELECT * FROM teacher";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['id'];
                  $fname = $row['cfn'];
                  $mname = $row['cmn'];
                  $lname = $row['cln'];
                  $mobileno = $row['mob'];
                  $email = $row['email'];
                  $subtype = $row['subtype'];
                  $subtype2 = $row['subtype2'];
                  // $level = $row['level'];
              ?>

              <tr>
              <td><?php echo $id  ?></td>
              <td><?php echo $fname ?></td>
              <td><?php echo $mname  ?></td>
              <td><?php echo $lname  ?></td>
              <td><?php echo $mobileno ?></td>
              <td><?php echo $email ?></td>
              <td><?php echo $subtype.' , ' . $subtype2 ?></td>
           
              <!-- <td><?php echo $level  ?></td> -->
              <td>
              <a href="editteacher.php?id=<?php echo $id ?>"><input type="button" value="Update" id="u" class="edit"></a>
              <a href="deleteteacher.php?id=<?php echo $id ?>"><input type="button" value="Delete" id="d"></a>
              </td>
              </tr>
              <?php

                }
              }
              ?>
              </tbody>

          </table>
        </div>
      </section>
      <section class="teachers" id="section4">
        <div class="teachers-list">
          <h1>Teacher Pending Forms</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>MiddleName</th>
                <th>LastName</th>
                <th>Phone Number</th>
                <th>Email</th>
                <!-- <th>Subject Taught</th> -->
                <th colspan="2">Customize</th>

              </tr>
              
            </thead>
            <tbody>

            <!-- update & reject teacher info -->
            <?php

              $host="localhost";
              $user="root";
              $password="";
              $database="academicaid";
              $con = mysqli_connect($host,$user,$password,$database);

              if(!$con){
                  die('Could not Connect My Sql:');
              }
              $sql = "SELECT * FROM teachertemp";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['id'];
                  $cfn = $row['cfn'];
                  $cmn = $row['cmn'];
                  $cln = $row['cln'];
                  $mob = $row['mob'];
                  $email = $row['email'];
                  ?>

                  <tr> 
                  <td><?php echo $id  ?></td>
                  <td><?php echo $cfn ?></td>
                  <td><?php echo $cmn ?></td>
                  <td><?php echo $cln ?></td>
                  <td><?php echo $mob  ?></td>
                  <td><?php echo $email  ?></td>
                  <td>
                  <a href="edittempteacher.php?id=<?php echo $id ?>"><input type="button" value="Validate" id="u" class="edit"></a>
                  <a href="deletetempteacher.php?id=<?php echo $id?>"><input type="button" value="Reject" id="d"></a>
                  </td>
                  </tr>
                  <?php

                }
              }
              ?>
              </tbody>
          </table>
        </div>
      <!-- </section> -->
    </section>






   <!-- Assign Teacher section -->
      
   <section class="teachers" id="section5">
        <div class="teachers-list">
          <h1>Assign Teacher To</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>TeacherName</th>
                <th>TeacherEmail</th>
                <th>StudentName</th>
                <th>Address</th>
                <th>StartingTime</th>
                <th>EndingTime</th>
                <th>Subject Taught</th>
                <!-- <th colspan="2"> Assign</th> -->
                <th colspan="2"> <button class="butt"  onclick = "myFunction3()" >ASSIGN +</button> 
                </th>
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
              $sql = "SELECT * FROM assignteacher";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['id'];
                  $tname = $row['tfn'];
                  $temail = $row['temail'];
                  $sname = $row['sfn'];
                  $address = $row['address'];
                  $stime = $row['stime'];
                  $etime = $row['etime'];
                  $subtype = $row['subtype'];
                  // $level = $row['level'];
              ?>

              <tr>
              <td><?php echo $id  ?></td>
              <td><?php echo $tname ?></td>
              <td><?php echo $temail  ?></td>
              <td><?php echo $sname ?></td>
              <td><?php echo $address  ?></td>
              <td><?php echo $stime  ?></td>
              <td><?php echo $etime ?></td>
              <td><?php echo $subtype ?></td>
           
          
              <td>
              <a href="editassignteacher.php?id=<?php echo $id ?>"><input type="button" value="Edit" id="u" class="edit"></a>
              <a href="deleteassignteacher.php?id=<?php echo $id ?>"><input type="button" value="Delete" id="d"></a>
              
              </td>
              </tr>
              <?php

                }
              }
              ?>
              </tbody>

          </table>
        </div>
      </section>




      
   <!-- Requested Teacher section -->
      
   <section class="teachers" id="section6">
        <div class="teachers-list">
          <h1>Requested Teacher</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>TID</th>
                <!-- <th>Tname</th> -->
                <!-- <th>Temail</th> -->
                <!-- <th>Taddress</th> -->
                <th>SID</th>
                <th>sName</th>
                <th>sEmail</th>
                <th>sTime</th>
                <th>eTime</th>
                <th>Subject</th>
                <!-- <th colspan="2"> Assign</th> -->
                <th colspan="2"> 
                  <!-- <button class="butt"  onclick ="myFunction6()" >APPROVE -->
              </button> 
                </th>
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
              $sql = "SELECT * FROM requestteacher";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  $tid = $row['tid'];
                  $id = $row['id'];
                  // $tid = $row['tid'];
                  // $tname = $row['tfn'];
                  // $temail = $row['temail'];
                  // $tstreet = $row['tstreet'];
                  $sid = $row['sid'];
                  $sname = $row['sfn'];
                  $semail = $row['semail'];
                  // $tstreet = $row['saddr'];
                  $stime = $row['stime'];
                  $etime = $row['etime'];
                  $subtype = $row['subtype'];
                  // $level = $row['level'];

              //     $tsql = "SELECT * FROM teacher";
              //     $tresult = mysqli_query($con, $tsql);
                  
              //     if ($tresult && $trow = mysqli_fetch_assoc($tresult)) {
              //         // Retrieve teacher details
              //         $tname = $trow['tfn'];
              //         $temail = $trow['temail'];
              //         $tstreet = $trow['tstreet'];
              // ?>

              <tr>
              <td><?php echo $id  ?></td>
              <td><?php echo $tid  ?></td>
              <!-- <td><?php echo $tname ?></td> -->
              <!-- <td><?php echo $temail ?></td> -->
              <!-- <td><?php echo $tstreet ?></td> -->

              <td><?php echo $sid  ?></td>
              <td><?php echo $sname ?></td>
              <td><?php echo $semail ?></td>
              <td><?php echo $stime  ?></td>
              <td><?php echo $etime ?></td>
              <td><?php echo $subtype ?></td>
           
          
              <td>
              <a href="approveteacher.php?tid=<?php echo $tid ?>&sid=<?php echo $sid ?>&id=<?php echo $id ?>"><input type="button" value="Approve" id="u" class="edit"></a>

              <a href="deleterequestedteacher.php?id=<?php echo $id ?>"><input type="button" value="Delete" id="d"></a>
              
              </td>
              </tr>
              <?php

                  // }
                }
                }
              
              ?>
              </tbody>

          </table>
        </div>
      </section>
  </div>

  

</body>
</html>
