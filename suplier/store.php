company<?php 
  $conn = mysqli_connect('localhost','root','','pharmacy');

$supplier_id 	= $_POST['supplier_id'];
$name         = $_POST['name'];
$email        = $_POST['email'];
$company_name	  = $_POST['company_name'];
$address 	  	= $_POST['address'];
$mobile 		  = $_POST['mobile'];
  	// Get image name
  	$image = $_FILES['picture']['name'];


  	// image file directory
  	$target = "../image/".basename($image);

  	if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
  		 $sql = "INSERT INTO supplier_tbl VALUES(NULL,'$supplier_id', '$name', '$email', '$company_name', '$address','$mobile', '$target')";
  	}else{
  		 $sql = "INSERT INTO supplier_tbl VALUES(NULL,'$supplier_id', '$name', '$email', '$company_name', '$address','$mobile',NULL)";
  	}

 

 

 

 if(mysqli_query($conn, $sql)){
 		header("Location:index.php");
 }else{
 	echo " Data Not Inserted";
 }

 ?>