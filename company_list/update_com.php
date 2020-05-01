<?php 
  $conn = mysqli_connect('localhost','root','','pharmacy');
 
 $id = $_GET['id'];
 

 $company_name 	= $_POST['company_name'];
 $address 		= $_POST['address'];
 $district 		= $_POST['district'];
 
 $sql = "UPDATE  company_tbl SET  company_name= '$company_name',  address='$address', district='$district' WHERE id = $id";
  
 
 if(mysqli_query($conn, $sql)){
 	header("Location:veiw-select-show_com.php?id=" .$id);
 }else{
 	echo " Data Not Updated";
 }

 ?>


