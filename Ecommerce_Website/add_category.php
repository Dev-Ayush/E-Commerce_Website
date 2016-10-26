<?php
	include("connection.php");
	$sql = "SELECT * FROM category WHERE parent_id=0";
	$result = mysqli_query($conn, $sql);		
?>

<html>
<head>
	<title>Product Page</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<style>
		form{
			line-height:200%;
		}
		
		select{
			width:120px;
		}
		h1{
			    text-align: center;
			    padding-top: 72px;
			    margin-top: 76px;
			    margin-right: 68px;
			}
			
		#formm{
			padding-top: 175px;
			padding-left: 447px;
		}
	</style>
</head>

<body background="images/56.jpg">

<div class="header-top">
		
		</div>

		<div class="header">

			<div class="header-left">
			<h2 style="margin-left:42px">Welcome</h2>
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

<h1>Add Category</h1>
<div id="formm">
<table border="1px" width="100%">
	<form name="category" action="process.php" method="post">
		<tr><td>Select:
			<select name="select1" value="">
				<option value="0">Select</option>
				<?php
					while($row= mysqli_fetch_assoc($result)){
				?>
				<option value = "<?php echo $row['id'];?>"><?php echo $row['category_name'];?></option>
				<?php
					}
					?>
				</select></td></tr>
				<tr><td>CATEGORY: <input type="text" name="category" ></td></tr>
				
				<tr><td>DESCRIPTION: <textarea name="desc" value="" rows="4" col"5" ></textarea></td><tr>
				<tr><td><input type="submit" name="submit2" value="Submit"></td></tr>
		
	</form>
 </table>
 </div>
 </body>
</head>