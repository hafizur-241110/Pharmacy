
<?php 
  $conn = mysqli_connect('localhost','root','','pharmacy');

$medi_name 	    = $_POST['medi_name'];
$genatic_name   = $_POST['genatic_name'];
$strength       = $_POST['strength'];
$medi_type      = $_POST['medi_type'];
$category       = $_POST['category'];
$company_name	  = $_POST['company_name'];
$quantity 	  	= $_POST['quantity'];
$cost_price 		= $_POST['cost_price'];
 $total_price    = $quantity*$cost_price;
  

$sql = "INSERT INTO medicine_tbl VALUES(NULL,'$medi_name', '$genatic_name', 
'$strength', '$medi_type', '$category', '$company_name', '$quantity',
'$cost_price','$total_price')";
  	
 if(mysqli_query($conn, $sql)){
 		
    header("Location:index_medi.php");
 
 }else{
 	echo " Data Not Inserted";
 }

 ?>