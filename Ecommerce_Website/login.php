<?php
	include("connection.php");
?>


<html>
<head>
	<title>E-Commerce</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<style>
		#form{
			border: solid 1px #000000;
			width: 50%;
			margin-left: 303px;
			margin-top: 71px;
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
<h2 align="center">Log In To Your Account </h2>
<div id="form">
			
				<form action="process.php" name="myform" method="post">

				<div class="form_str">

				Email: <input type="text" name="email"><span id="val3"></span><br>
				password: <input type="password" name="password"><span id="val4"></span><br>
				<input type="submit" name="login_submit" value="Login" ></div><br>
					</div>
					</form>
					</div>
					
</body>
</html>
