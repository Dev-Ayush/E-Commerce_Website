<?php 
	include("connection.php");
	if ($_GET['action'] == 'addd') {
		$id = $_GET['id'];
		
	 $sql = "SELECT * FROM ecommerce.product WHERE product_id = ".$id;
	$result= mysqli_query($conn,$sql);
	}
	
	
	
	//$_SESSION['id'] = $id;
	//$_SESSION['name'] = ($_POST['name']);
	
	//$_SESSION['description'] = ($_POST['description']);
	$_SESSION['quantity'] = ($_POST['quantity']);
	$_SESSION['cost'] = htmlspecialchars($_POST['sum']);
	//print_r($_SESSION['name']);
?>

<head>
	<title></title>
	
</head>

<h2>Order Summary</h2>

<table border="1px solid" width="100%">
	<thead>
			<tr>
				<td>Name</td>
				<td>Description</td>
				<td>Quantity</td>
				<td>Cost</td>
				<td>Image</td>
				
				
			</tr>
		</thead>
		
		<tbody>
				<?php 
			
			//if(mysqli_num_rows($result) >0){
			//while($rows= mysqli_fetch_assoc($result)){;
			
				?>
			<tr>
			
				<td><?php echo $_SESSION['name']; ?></td>
				<td><?php echo $_SESSION['description']; ?></td>
				<td><?php echo $_SESSION['quantity']; ?></td>
				<td><?php echo $_SESSION['cost'];?></td>
				
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
				
			</tr>
			<?php ?>
			
			
		</tbody>
</table>

<form action="process.php" method="post" name="myform">
<table border="1 px" cellspacing="5" cellpadding="5">
	<h2>Billing Address</h2>
	<tr>
		<td>Buyer Name:</td>
		<td><input type="text" name="bill_name"></td>
		
	</tr>
	<tr>
		<td>Buyer Address: </td>
		<td><input type="text" name="bill_address"</td>
	</tr>
	<tr>
		<td>Buyer Phone: </td>
		<td><input type="text" name="bill_phone"</td>
	</tr>
</table>

<input type="checkbox" name="copy" id="check" onclick="copyy()">
<label> Check this box if your billing and shipping address are same</label>


<table border="1 px" cellspacing="5" cellpadding="5">
	<h2>Shipping Address</h2>
	<tr>
		<td>Buyer Name:</td>
		<td><input type="text" name="ship_name"></td>
		
	</tr>
	<tr>
		<td>Buyer Address: </td>
		<td><input type="text" name="ship_address"</td>
	</tr>
	<tr>
		<td>Buyer Phone: </td>
		<td><input type="text" name="ship_phone"</td>
	</tr>
</table>

<br><input type="submit" name="payment" value="Make Payment">

</form>

<script>
	function copyy(){
		
		//var check = document.getElementById("check");
		
		if(document.getElementById("check").checked){
		
			document.myform.ship_name.value = document.myform.bill_name.value;
			document.myform.ship_address.value = document.myform.bill_address.value;
			document.myform.ship_phone.value = document.myform.bill_phone.value;
			}}
</script>


