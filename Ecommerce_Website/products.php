<?php
	include("connection.php");
	$sql= "SELECT * FROM product";
	$result= mysqli_query($conn,$sql);
	
	
?>



<html>
<head>
	<title>E-Commerce</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<style>
		.block{
			width: 295px;
			margin-left: 443px;
			margin-top: 76px;
			text-align: center;
		}
	</style>
</head>


<body background="images/1234.jpg">

	<div class="header-top">
		
		</div>

		<div class="header">

			<div class="header-left">
			<h1 style="margin-left:42px">Welcome</h1>
			</div>
						<nav>
					<div class="header_right">
						
							<ul>
								<li><a href="home.php">Home</a></li>
									<li>
									<a href="#">About</a>
										
								</li>
						<li>
							<a href="#">Products</a>
						</li>
						<li><a href="login.php">Sign IN</a></li>
						<?php if(isset($_SESSION ['role']) && empty($_SESSION ['role'])) {
							?>						)
						<li><a href="logout.php">Sign OUT</a></li>
						<?php } 
						else{?>
						
						
						<li><a href="register.php">Sign UP</a></li>
						<?php }?>
					</ul>
				  </nav>

		</div>
		</div>
		
			
	<div class="block">
		<img src = "images/asus1.jpg"  style="width:304px;height:228px;"><br>
		<h3>Laptop & Accessories</h3>
		<a href="login.php"><input type="submit" value="View Products" name="laptop" ></a><br><br>
	</div>
	
	<div class = "block">
		<img src = "images/peri.jpg" alt="Mountain Viewwww" style="width:304px;height:228px;"><br>
		<h3>Computer Peripherals</h3>
		<a href="login.php"><input type="submit" value="View Products" name="desktop" ><a>
	</div>
			
		
</div>	
		
		
</body>
<html>