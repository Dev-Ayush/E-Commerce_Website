<?php
	include("connection.php");
?>


<html>
<head>
	<title>E-Commerce</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<style>
	#menu{
		float:left;
	}
	</style>
</head>

<body background="images/123.jpg">
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
							<a href="products.php">Products</a>
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

</body>
</html>
