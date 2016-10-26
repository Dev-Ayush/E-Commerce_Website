<?php
	include("connection.php");

?>



<html>
<head>
	<title>Courses</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<script type="text/javascript" src="javas.js"></script>
	<style>
		form{
			line-height:200%;
			border-collapse: collapse;
			border: 1px solid black;
		}
		
		select{
			width:120px;
		}
		
	</style>
	
</head>

<body align="center" background="images/1234.jpg">

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
						<li><a href="register.php">Sign UP</a></li>
					</ul>
				  </nav>

		</div>
		</div>

	<h3>New Registration</h3>
	<form action="process.php" method="post" enctype="multipart/form-data">
		<div id="frm_str">
	
		<label>Name: </label>
		<input type="text" name="name" value=""><br>
		
		<label>Email: </label>
		<input type="email" name="email" value=""><br>
		
		<label>Password: </label>
		<input type="password" name="password" value=""><br>
		
		<label>Gender:<label>
		<input type="radio" name="gender" value="Male">Male &nbsp
		<input type="radio" name="gender" value="Female">Female<br>
		
		<label>Phone Number</label>
		<input type="number" name="phone" value=""><br>
		
		<label>Date of Birth :</label>
		<input type="date" name="date" value=""><br>
		
		<label>Address</label>
		<input type="textarea" name="address" value=""><br>
		
		
		<!--
		<label>Select Course</label>
		<select name="course" multiple value="">
			
			<option >B.Tech</option>
			<option >B.com</option>
			<option >B.Sc</option>
			<option >BA</option>
			<option >B.Arch</option>
		</select><br>
		-->
		
		
		<!--
		<label>Upload Your Picture: </label><br>
		<input type='file' id="inputfile" name="photo"  style="display:none;" onchange="PreviewImage()" >
		<img id="image_upload_preview" value="" style="width: 100px; height: 100px; " src="dummy.jpg" alt="dummy" onclick= "imageupload()">
		<div id="imagePreview"  ></div>-->
		<br>
		<input type="submit" value="submit" name="submit">
		</div>
	</form>

</body>
<html>