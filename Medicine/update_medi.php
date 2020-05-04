<?php 
  $conn = mysqli_connect('localhost','root','','pharmacy');
      
  $id = $_GET['id'];
 
 
 $medi_name 	     = $_POST['medi_name'];
 $genatic_name 	   = $_POST['genatic_name'];
 $strength 		     = $_POST['strength'];
 $medi_type 	     = $_POST['medi_type'];
 $category 		     = $_POST['category'];
 $company_name     = $_POST['company_name'];
 $quantity 		     =$_POST['quantity'];
 $cost_price 		   = $_POST['cost_price'];
 $total_price      = $quantity*$cost_price;
 
 $sql = "UPDATE  medicine_tbl SET medi_name='$medi_name', genatic_name='$genatic_name', 
 strength='$strength', medi_type='$medi_type', category='$category ', company_name= '$company_name',  
 quantity='$quantity', cost_price='$cost_price', total_price='$total_price' WHERE id = $id";
  
 
 if(mysqli_query($conn, $sql)){
 	header("Location:veiw-select-show_medi.php?id=" .$id);
 }else{
 	echo " Data Not Updated";
 }

 ?>


