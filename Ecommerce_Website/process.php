<?php
	include("connection.php");
	
	if(isset($_POST['submit'])){
		$sql = "INSERT INTO user(name,email,password,gender,mobile,dob,address)
			VALUES ('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[gender]','$_POST[phone]','$_POST[date]','$_POST[address]')";
		$result= mysqli_query($conn,$sql);
		
		if($conn->query($sql) == TRUE){
			echo("success");
		}
		else{
			echo("fail");
		}
	}
	

//----------------------------------------------------------------------------------------------------------------------------	
	


	session_start();
	if(isset($_POST['login_submit'])){
		if(isset($_POST['email']) && isset($_POST['password'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM user WHERE email='".$email."' and password='".$password."'";
		
		  $result = mysqli_query($conn, $sql);
		  
		  $row = mysqli_num_rows($result);
		  $row1 = mysqli_fetch_assoc($result);	  
		  if ( $row1 > 0)
		  {
		  	  if($row1['role'] == 0){
		  	  	  $_SESSION ['email'] = $email;
		  	  	  $_SESSION ['role'] = 0;
		  	  header('location:product_list.php');
		  	  
		  	  	 }
		  	  	 else{
		  	  	 	 $_SESSION['email']=$email;
					 $_SESSION ['role'] = 1;
		  	  
		  	  header('location:product_list.php');
		  	  	 }
		  }
		  else{
		  	 // header('location:login.php');
		  	 echo("error");
		  }
	}
}
//----------------------------------------------------------------------------------------------------------------------------




if(isset($_POST['submit2'])){		
		if($_POST["select1"]!=0){
			$category= $_POST["category"];			
			$query = 'INSERT INTO category(category_name, description, parent_id) 
			          VALUES("'.$_POST["category"].'","'.$_POST["desc"].'","'.$_POST["select1"].'")';
				$result = mysqli_query($conn, $query);
				//print_r($result);die;
				if($result){
					echo "Inserted Successfully.";
					
				}	
			}
			else{
				                                                                                           
				$category = $_POST["category"];
				$query = 'INSERT INTO category(category_name, description) 
				VALUES("'.$_POST["category"].'","'.$_POST["desc"].'")';
				$result = mysqli_query($conn, $query);
				if($result){
					echo "Inserted 123Successfully.";
					
				}
		}
		}
		if(isset($_POST['submit3'])){
		  if($_POST["select2"]!=0){
		   $add_product=$_POST["ap"];
		   $query1='INSERT INTO product(name,cost,description,product_id)
		       VALUES("'.$_POST["ap"].'","'.$_POST["cost"].'","'.$_POST["description"].'","'.$_POST["select2"].'")';
		       $result=mysqli_query($conn,$query1);
		  }       
		       if(isset($_FILES["files"])){
				//print_r($_FILES["fileToUpload"]);
				$image_name = $_FILES["files"]["name"];
				$image_temp = $_FILES["files"]["tmp_name"];
				$upload_dir = "uploadingg";
				$image_id = mysqli_insert_id($conn);
				//echo $image_id;
				foreach($image_name as $image){
					$image_query = "INSERT into product_image(product_id, images) VALUES('$image_id', '$image')";
					$result_image = mysqli_query($conn, $image_query); 
				}
				
				foreach($image_temp as $key => $tmp_name){
					
					$file_name = $_FILES["files"]["name"][$key];
					$file_temp = $_FILES["files"]["tmp_name"][$key];
					$ext = pathinfo($file_name, PATHINFO_EXTENSION);
					if(!file_exists($upload_dir."/".$file_name)){
						
						move_uploaded_file($file_temp, $upload_dir."/".$file_name);
					}
					
					else{
						echo "hi";
						$filename = basename($file_name, $ext);
						$newFileName = $filename.time().".".$ext;
						move_uploaded_file($file_temp, $upload_dir."/".$newFileName);
						if($result){
		        echo "NEW PRODUCTS";
		       }else{
		          echo "error".$query1."<br>".$conn->error;
		       }
		       }}}
		       	       
		       else{
		   die("SELECT CATEGORY");
		   
		  }
		  
		  
		}
		       
		       	       
//----------------------------------------------------------------------------------------------------------------------------//	



	if(isset($_POST["payment"])){
		
		$order = "INSERT INTO order(name,description,quantity,cost)
			VALUES('$_SESSION[name]','$_SESSION[description]','$_SESSION[quantity]','$_SESSION[cost]')";
		$res = mysqli_query($conn,$order);
		
		$bill = "INSERT INTO billing(user_name,user_address,user_number)
			VALUES('$_POST[bill_name]','$_POST[bill_address]','$_POST[bill_phone]')";
		$res2 = mysqli_query($conn,$bill);
		
		$ship = "INSERT INTO shipping(ship_name,ship_address,ship_number)
			VALUES('$_POST[ship_name]','$_POST[ship_address]','$_POST[ship_phone]')";
		$res3 = mysqli_query($conn,$ship);
		
		//if($res==TRUE && $res2==TRUE && $res3==TRUE){
			header('location:payment/index.php');
		
		//else{
		//	echo("Failed");
		//}
	}



?>
