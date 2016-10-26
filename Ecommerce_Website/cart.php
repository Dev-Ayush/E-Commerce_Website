<?php 
	include("connection.php");
	//if(isset($_GET['action'])){
	if ($_GET['action'] == 'add') {
		$id = $_GET['id'];
		
	$sql = 'SELECT * FROM ecommerce.product WHERE product_id = '.$id;
	$result= mysqli_query($conn,$sql);
			
	}
?>
  
<h1>Order Summary</h1> 

<table border="1px solid" width="100%">
<thead>
	<tr>	
		<td>Name</td>
		<td>Description</td>
		<td>Cost</td>
		<td>Image</td>
		
	</tr>
</thead>

<tbody>
	<?php 
	$total =0;
	if(mysqli_num_rows($result)>0){
	
	while($row_s= mysqli_fetch_assoc($result)){
		?>
	<tr>
		
		<td>
			<?php 
				//$json['name'] = $row_s['name'];
				$_SESSION['name'] = $row_s['name'];
				echo $row_s['name'];
			?>
		</td>
		<td>
			<?php 
				$_SESSION['description'] = $row_s['description'];
				echo $row_s['description'];
			?>
		</td>
		<td><?php echo $row_s['cost'];?></td>
		
		
		
	</tr>
	<?php 
	$total+=$row_s['cost'];
	
	//$_SESSION['prod']
	}}
	?>
</tbody>



</table>
<form action="bill.php" method="post">
Quantity: <input type="number" name="quantity" id="quantity" value="1" align="center" onChange="calculateTotal()">

<br>Total is: <input type="text" readonly="true" id="sum" name="sum" value=<?php echo $total;?> >
<input id="rate" type="hidden" name="Language" value= <?php echo $total; ?> >
<script>
	function calculateTotal(){
		var rate = document.getElementById("rate");
		var quantity = document.getElementById("quantity");
		
		
		
		
		document.getElementById("sum").value = parseInt(rate.value) * parseInt(quantity.value);
		
	}
</script>

<a href="bill.php?action=addd&id=<?php echo $row_s['product_id']; ?>">
<input type="submit" value="Proceed To Pay"/></a>
</form>

