<?php 
  $conn = mysqli_connect('localhost','root','','pharmacy');


$username   = $_POST['username'];
$password       = $_POST['password'];


$sql = "INSERT INTO login_tbl VALUES(NULL,'$username', '$password')";
  	
 if(mysqli_query($conn, $sql)){
 		
    header("Location:veiw-select-show_login.php");
 
 }else{
 	echo " Data Not Inserted";
 }

 ?>