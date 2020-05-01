<?php 
  $conn = mysqli_connect('localhost','root','','pharmacy');


$company_name	    = $_POST['company_name'];
$address 		= $_POST['address'];
$district 		= $_POST['district'];
  
$sql = "INSERT INTO company_tbl VALUES(NULL,'$company_name', '$address','$district')";
  	


 if(mysqli_query($conn, $sql)){
 		header("Location:index_com.php");
 }else{
 	echo " Data Not Inserted";
 }

 ?>