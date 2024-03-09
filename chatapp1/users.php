<?php 
  session_start(); 
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    // header("location: login.php");
    header("location: ../user/loginforstudent.php");

  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>          
          <!-- <img src="php/images/<?php echo $row['ppimg']; ?>" alt=""> -->
          <img src="php/images/user1.jpg" alt="">
          <div class="details">
            <span><?php echo $row['cfn']. " " . $row['cln'] ?></span>
            <!-- <p><?php echo $row['status']; ?></p> -->
          </div>
        </div>
        <a href="../user/index.php?moving_id=<?php echo $row['unique_id']; ?>" class="logout">Home</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
