<?php
	include("connection.php");
	$sql = "SELECT * FROM category WHERE parent_id=0";
	$result = mysqli_query($conn, $sql);		
?>


<html>
<head>
	<title>Product Page</title>
	<style>
		form{
			line-height:200%;
		}
		
		select{
			width:120px;
		}
	</style>
</head>

<body>
<h3>Add Category</h3>
<table border="1px">
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
 <h3>Add Product</h3>
  <table border="1px">
   <form name="add_product" action="process.php" method="post" enctype="multipart/form-data">
    <?php
     $sqli = "SELECT * FROM category WHERE parent_id!=0";
     $result1=mysqli_query($conn,$sqli);?>
     <tr><td>CATEGORY:
      <select name="select2" value="">
      <option value="0">Select</option>
      <?php
     while($row1=mysqli_fetch_assoc($result1)){
    ?>
    <option value="<?php echo $row1['id'];?>"><?php echo $row1['category_name'];?></option>
    <?php
     }
    ?>
    </select></td></tr>
    <tr><td>Add Products:<input type="text" name="ap" ></td></tr>
    <tr><td>Description:<textarea name="description" value="" rows="4" col"5" ></textarea></td></tr>
    <tr><td>Cost:<input type="number" value="" name="cost" step="any" >
    <tr><td>Upload Image: 
    
    			<input type="file" name="files[]" accept="image/*" value="" multiple=""><br> 
				<input type="button" name="upload" value="Upload"></td></tr>
				<tr><td><input type="submit" name="submit3" value="submit">
				
    </td></tr>
   </form>
  </table>
</body>
</head>