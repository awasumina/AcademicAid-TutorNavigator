<?php include 'dbconfig.php';



session_start();

$username = $_SESSION['username'];

if(!isset($username)){
   header('location:../html/login.php');
};



$sql = "SELECT * FROM teacher";
$result = mysqli_query($conn, $sql);
//var_dump($result);
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Esewa Payment</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</head>

	<style>


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
	background: #4AD489;

  /* width: 10%;
  margin-top: 8px;
  
  padding: 14px 7px;
  cursor: pointer;
  border-radius: 10px;
  background: grey;
  border: 1px solid #4AD489; */
} 
input[type="submit"]:hover{
  background: #4AD489;
  color: #fff;
  transition: 0.5s;
}
</style>


		</style>
	<body>


	

<?php include 'dbconfig.php'; ?>


<section class="search-form">
   <form action="" method="post">
      <input type="text" name="search" placeholder="Search Teacher..." class="box">
      <input type="submit" name="submit" value="search" class="btn">
   </form>
</section>



</section>




		<div class="container">
			<div class="pt-md-5">
				<div class="row">
					
					<?php while( $product = mysqli_fetch_assoc($result)) {?>
					<div class="col-md-4">
						<div class="card" style="width: 18rem;">
							<!-- <div class="imagecontainer" style="height: 400px;">
								<img src="image/<?php echo $product['image']?>" class="card-img-top" alt="..." style="width: 100%; height: 100%;">
							</div> -->
							<div class="card-body">
								<h5 class="card-title" style="font-size:1.5rem;color:red"><?php echo $product['cfn']. ' '.$product['cmn'].' ' .$product['cln'];?></h5>
								<h5 class="card-title"><?php echo $product['subtype']. ' '.$product['subtype2'];?></h5>
								<h5 class="card-title">Salary : Rs <?php echo ' '.$product['amount'];?></h5>
								<p class="card-text">Gender : <?php echo $product['gender'];?></p>
								<p class="card-text">Email : <?php echo $product['email'];?></p>
								<p class="card-text">Phone : <?php echo $product['mob'];?></p>
								<p class="card-text">DOB : <?php echo $product['dob'];?></p>
								<p class="card-text">Address : <?php echo $product['street'];?></p>
								<p class="card-text">Description :<?php echo $product['des'];?></p>

								<form method="post" action="checkout.php">
									<input type="hidden" name="product_id" value="<?php echo $product['id'];?>">
									<input type="submit" name="submit" value="Send Money" class="btn btn-success">
								</form>
							</div>
						</div>
					</div>
					<?php }?>
					
				</div>
			</div>
		</div>
	</body>
</html>