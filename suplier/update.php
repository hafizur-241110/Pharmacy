<?php 
  $conn = mysqli_connect('localhost','root','','pharmacy');
 	$id = $_GET['id'];
 
 
 $supplier_id 	= $_POST['supplier_id'];
 $name 		= $_POST['name'];
 $email 		= $_POST['email'];
 $company_name = $_POST['company_name'];
 $address 	= $_POST['address'];
 $mobile 		= $_POST['mobile'];
 
 $c_image= $_FILES['picture']['name'];

$c_image_temp=$_FILES['picture']['tmp_name'];

if($c_image_temp != "")
{
    move_uploaded_file($c_image_temp , "../image/$c_image");

 $sql = "UPDATE  supplier_tbl SET supplier_id='$supplier_id', name='$name', email='$email', company_name= '$company_name',  address='$address', mobile='$mobile', picture= '../image/$c_image' WHERE id = $id";
  
}else
{
     $sql = "UPDATE  supplier_tbl SET supplier_id='$supplier_id',name='$name', email='$email', company_name= '$company_name',  address='$address', mobile='$mobile' WHERE id = $id";
}

 
 if(mysqli_query($conn, $sql)){
 	header("Location:veiw-select-show.php?id=" .$id);
 }else{
 	echo " Data Not Updated";
 }

 ?>


