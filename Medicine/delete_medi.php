<?php 
$id = $_GET['id'];

$conn = mysqli_connect('localhost','root','', 'pharmacy');


	$sql = "DELETE FROM medicine_tbl  where id=$id";
	
	if(mysqli_query($conn, $sql)){

		header("Location: index_medi.php");
	} else{

	echo "Data Not Deleted";
}

?>
