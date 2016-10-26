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
    
          <input id="imgFiles" type="file" name="files[]" accept="image/*" value="" multiple="" onchange="PreviewImage()"><br> 
        <div id="dvPrev">
        </div>
        </td></tr>
        <tr><td><input type="submit" name="submit3" value="submit">
        
    </td></tr>
   </form>
  </table>
  <script type="text/javascript">
  function PreviewImage() {
       var i = 0;
     var ele = document.getElementById("imgFiles").files;
     var len = ele.length;
     
     while(i < len){
       var oFReader = new FileReader();
       oFReader.readAsDataURL(ele[i]);

       oFReader.onload = function (oFREvent) {
         //document.getElementById("image_upload_preview").src = oFREvent.target.result;
         
         debugger;
         
         var x = document.createElement("IMG");
         x.style.height = '100px';
         x.style.width = '100px';
         
         x.src = oFREvent.target.result;
         
         document.getElementById("dvPrev").appendChild(x);
         
       };
       
       i++;
     }
   };
  </script>
  </body>
</head>