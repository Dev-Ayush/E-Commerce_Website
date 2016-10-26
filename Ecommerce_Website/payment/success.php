<?php
include("../connection.php");

$myfile = fopen("success.txt", "w") or die("Unable to open file!");

	$txt = json_encode($_REQUEST) ;
	fwrite($myfile, $txt);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Success !</title>
</head>
<body>
	<h1 align="center">Transaction Summary</h1>
		<table border="1px solid" width="100%"  cellspacing="5" cellpadding="5">
				<h2>Order Summary</h2>
			<thead>
					<tr>
							<th>Product Name</th>
							<th>Product Description</th>
							<th>Product quantity</th>
							<th>Product Price</th>

					</tr>
			</thead>

			<tbody>
					<tr>
							<td><?php echo $_SESSION['name'];?></td>
							<td><?php echo $_SESSION['description'];?></td>
							<td><?php echo $_SESSION['quantity'];?></td>
							<td><?php echo $_SESSION['cost'];?></td>
					</tr>
			</tbody>
		</table>


		<table border="1px solid" width="100%" cellspacing="5" cellpadding="5">
				<h2>Billing Address</h2>

				<thead>
					<tr>
							<th>Buyer Name</th>
							<th>Buyer Address</th>
							<th>Buyer Phone Number</th>
					</tr>
			</thead>

			<tbody>
					<tr>
							<td><?php echo $_SESSION['bill_name'];?></td>
							<td><?php echo $_SESSION['bill_address'];?></td>
							<td><?php echo $_SESSION['bill_phone'];?></td>
					</tr>
			</tbody>
		</table>

</body>
</html>
