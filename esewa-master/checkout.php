<?php
include 'dbconfig.php';

session_start();

$username = $_SESSION['username'];

if(!isset($username)){
   header('location:../html/login.php');
};



if( $_SERVER['REQUEST_METHOD'] == 'POST')
{
	$product_id = $_POST['product_id'];
	// $amount =  $_POST['amount'];
	$tid = $product_id;
	// echo $tid;
	// echo $amount;
	$sql = "SELECT * FROM teacher WHERE id='$tid'";
	$result = mysqli_query($conn, $sql);
	if($result)
	{
		if ( mysqli_num_rows($result) == 1)
		{
			$product = mysqli_fetch_assoc($result);
			$invoice_no = $product['id'] . time();
			$total  = $product['amount'];
			$created_at = date('Y-m-d H:i:s');
			$query = "INSERT INTO esewa(tid,invoice_no, total, status, created_at )
					VALUES( '$tid','$invoice_no', '$total', 0, '$created_at')";
			if( !mysqli_query($conn, $query))
			{
				die('Error!');
			}
		}
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Checkout Page</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<div class="pt-md-5">
				<div class="col-md-12">
					<h2>Pay to</h2>
					<div class="row">
						
						
						<div class="col-md-4">
							<div class="card" style="width: 18rem;">
								<!-- <div class="imagecontainer" style="height: 400px;">
									<img src="image/<?php echo $product['image']?>" class="card-img-top" alt="..." style="width: 100%; height: 100%;">
								</div> -->
								<div class="card-body">
									<h5 class="card-title"><?php echo $product['cfn']. ' '. $product['cmn']. ' '.$product['cln'];?></h5>

									<h6 class="card-title">Rs. <?php echo $product['amount'];?></h6>

									<p class="card-text">Email :<?php echo $product['email'];?></p>
									<p class="card-text">Phone no :<?php echo $product['mob'];?></p>
									<p class="card-text">Gender :<?php echo $product['gender'];?></p>
									<p class="card-text">Subject :<?php echo $product['subtype']. ' '.$product['subtype2'];?></p>

								
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<h3>Pay With</h3>
							<ul class="list-group">
								<li class="list-group-item">
									<form action="https://uat.esewa.com.np/epay/main" method="POST">
										<input value="<?php echo $total;?>" name="tAmt" type="hidden">
										<input value="<?php echo $total;?>" name="amt" type="hidden">
										<input value="0" name="txAmt" type="hidden">
										<input value="0" name="psc" type="hidden">
										<input value="0" name="pdc" type="hidden">
										<input value="epay_payment" name="scd" type="hidden">
										<input value="<?php echo $invoice_no;?>" name="pid" type="hidden">
										<input value="http://localhost/academicaid/esewa-master/esewa_payment_success.php" type="hidden" name="su">
										<input value="http://localhost/academicaid/esewa-master/esewa_payment_failed.php" type="hidden" name="fu">
										<input type="image" src="image/esewa.png">
										</li>
										<li class="list-group-item"><input type="image" src="image/fonepay.png"></li>
										<li class="list-group-item"><input type="image" src="image/khalti.png"></li>
										<li class="list-group-item"><input type="image" src="image/connectips.png"></li>
										<li class="list-group-item"><input type="image" src="image/hbl.png"></li>
									</ul>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</body>
		</html>