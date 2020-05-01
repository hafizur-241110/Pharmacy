<?php 
$id = $_GET['id'];

$conn = mysqli_connect('localhost','root','', 'pharmacy');


	$sql = "DELETE FROM supplier_tbl  where id=$id";
	
	if(mysqli_query($conn, $sql)){

		header("Location: index.php");
	} else{

	echo "Data Not Deleted";
}

?>
