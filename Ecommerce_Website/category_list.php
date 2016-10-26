<?php
	include("connection.php");
	$sql= "SELECT * FROM category";
	$result= mysqli_query($conn,$sql);
?>

<html>
<head>
<title></title>
</head>

<body>
	<h2>Category List</h2>
	<table border="1px solid" width="100%">
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Description</td>
				<td>Action</td>
			</tr>
		</thead>
		
		<tbody>
			<?php
				if(mysqli_num_rows($result)>0){
					while($row= mysqli_fetch_assoc($result)){
			?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['category_name'];?></td>
				<td><?php echo $row['description'];?></td>
			</tr>
		</tbody>
	</table>
</body>
</html>