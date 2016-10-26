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
	#menu{
		float:left;
	}
	</style>
</head>

<body background="images/12.jpg">

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


	<h2 align="center">Product List</h2>
	<?php
	if($_SESSION ['role'] == 1){
		?>
	<a href="home.php"><input type="button" value="Home Page"></a>
	<a href="add_category.php"><input type="button" value="Add new Category"></a>
	<a href="add_product.php"><input type="button" value="Add new Product"></a>
	<?php }?>
	<table border="1px solid" width="100%">
		<thead>
			<tr>
				<td>ID</td>
				<td>Company Name</td>
				<td>Cost</td>
				<td>Description</td>
				<td>Image</td>
				<td>Action</td>
				
			</tr>
			
		<tbody>
			
			<?php
				if(mysqli_num_rows($result)>0){
					while($row= mysqli_fetch_assoc($result)){
							
			?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['cost'];?></td>
				<td><?php echo $row['description'];?></td>
			<td>	
			<?php
				$imgid = $row['id'];
				$sql1 = "SELECT * FROM product_image WHERE product_id='$imgid'";
				$result1 = mysqli_query($conn,$sql1);
				$row1= mysqli_fetch_assoc($result1);
				$image_name = $row1["images"];
			?>
			
			
			
			<img width="200px" height="200px" src="<?php echo "uploadingg"."/"."$image_name"?>">
			</td>
				
			<td align="center">
			<?php
			if($_SESSION ['role'] == 1){
			?>
			<a href="#"><input type="submit" name="edit" value="Edit">
			<a href="#"><input type="submit" name="delete" value="Delete">
			<?php } 
			else{?>
				
				<a href="cart.php?action=add&id=<?php echo $row['product_id'] ?>">
				<input type="submit" name="addcart" value="Buy Now"</a> 
			<?php } ?>
			</td>
			</tr>
			<?php
			}}
				mysqli_free_result($result);
				mysqli_free_result($result1);
			?>
		
		
		</tbody>
		</thead>
		
	</table>
</body>
</html>

<?php mysqli_close($conn);?>

