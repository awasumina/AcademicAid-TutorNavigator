

<?php

include 'db.php';

session_start();

// $user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

if(!isset($username)){
   header('location:../html/login.php');
};

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>search page</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" type="text/css" href="dashboard.css">



<style>
   
input[type="button"]{
  width: 40%;
  margin-top: 8px;
  padding: 7px;
  cursor: pointer;
  border-radius: 10px;
  background: transparent;
  border: 1px solid #4AD489;
}
input[type="button"]:hover{
  background: #4AD489;
  color: #fff;
  transition: 0.5s;
}


.search-form input[type="text"]{
   /* border:1px solid red; */
width: 60%;
  margin-top: 28px;
  padding: 8px;
  cursor: pointer;
  border-radius: 10px;
  background: white;
  border: 1px solid #4AD489;
  font-size:20px;
  margin-left:20px;
}
input[type="submit"]{
  width: 10%;
  /* height:15%; */
  margin-top: 8px;
  
  padding: 14px 7px;
  cursor: pointer;
  border-radius: 10px;
  background: grey;
  border: 1px solid #4AD489;
}
input[type="submit"]:hover{
  background: #4AD489;
  color: #fff;
  transition: 0.5s;
}
</style>
 
<!--  
<style>
   body{
    background-color:#fae3e1 ;
   }

   .products{
   background-color:#fae3e1 ;

 }
.products .box-container{
   max-width: 1200px;
   gap:6.5rem;
}
.products .box-container .box{
   border:none;
   background-image: linear-gradient(#ec9790, #fac9c4,#f5d2cf );
}
.products .box-container .box .image{
   opacity:1;
}
.products .box-container .box .price{
   background-color:#753939;
   border: 2px dotted white;
}

.products .box-container .box .qty{
   border:none;
   color:#ec9790;
}

.products .option-btn{
   background-color:  rgb(51, 3, 3);
}

.products .option-btn:hover{
   color:  rgb(51, 3, 3);
   background-color:#e09898;

   
} 

</style> -->
</head>
<body>
   


<?php include 'db.php'; ?>


<section class="search-form">
   <form action="" method="post">
      <input type="text" name="search" placeholder="Search Teacher..." class="box">
      <input type="submit" name="submit" value="search" class="btn">
   </form>
</section>

<section class="teachers" id="section3">

<div class="teachers-list">
<!-- <h1>Teacher List</h1> -->
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
                  <button  >EDIT</button> <!--
                  <button style="width:9rem;height:2.7rem; " onclick = "myFunction4()" style="color:white; width:2.7rem;">🔍Search</button>  -->
                <!-- <button><a href="search_page.php" class="fas fa-search" style="color:white; width:2rem;" ></a>Search</button> -->
              <!-- </th> -->
           
              </tr>
            </thead>
  
            <tbody>


   <?php
      if(isset($_POST['submit'])){
         $search_item = $_POST['search'];
         $result = mysqli_query($conn, "SELECT * FROM `teacher` WHERE cfn LIKE '%{$search_item}%'") or die('query failed');
         if(mysqli_num_rows($result) > 0){
            while($fetch_product = mysqli_fetch_assoc($result)){
               $id = $fetch_product['id'];
              $fname = $fetch_product['cfn'];
              $mname = $fetch_product['cmn'];
              $lname = $fetch_product['cln'];
              $mobileno = $fetch_product['mob'];
              $email = $fetch_product['email'];
              $subtype = $fetch_product['subtype'];
              $subtype2 = $fetch_product['subtype2'];
?>

   <form action="" method="post" class="box">
      <tr>
         <td><?php echo $fetch_product['id']; ?></td>
         <td><?php echo $fetch_product['cfn']; ?></td>
         <td><?php echo $fetch_product['cmn']; ?></td>
         <td><?php echo $fetch_product['cln']; ?></td>
         <td><?php echo $fetch_product['mob']; ?></td>
         <td><?php echo $fetch_product['email']; ?></td>
         <td><?php echo $fetch_product['subtype'].  $fetch_product['subtype2']; ?></td>

         <td>
          <a href="editteacher.php?id=<?php echo $id ?>"><input type="button" value="Update" id="u" class="edit"></a>
          <a href="deleteteacher.php?id=<?php echo $id ?>"><input type="button" value="Delete" id="d"></a>
          </td>


            </tr>
      </form>

      <?php
            }
         }else{
            echo '<p class="empty">no result found!</p>';
         }
      }else{
         echo '<p style="background-color:grey   ; color:white; border-radius:20px" class="empty">Please, Search Something!</p>';
      }
   ?>



              </tbody>

          </table>
        </div>
      </section>


</section>











<!-- custom js file link  -->
<!-- <script src="js/script.js"></script> -->

</body>
</html>