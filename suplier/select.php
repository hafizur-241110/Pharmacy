<?php 

$conn = mysqli_connect('localhost','root','','pharmacy');

if ($conn) {

	$sql = "SELECT * FROM supplier_tbl;";
	$result=mysqli_query($conn, $sql);
?>
<table border="2px">
	<tr>
		<th>ID</th>
		<th>Supplier ID</th>
		<th>Company Name</th>
		<th>Address</th>
		<th>Mobile</th>
	</tr>

<?php
	while ($row=mysqli_fetch_assoc($result)) {
	?>
	
	<tr>
		<th><?php echo $row['id']; ?></th>
		<th><?php echo $row['supplier_id']; ?></th>
		<th><?php echo $row['phar_name']; ?></th>
		<th><?php echo $row['address']; ?></th>
		<th><?php echo $row['mobile']; ?></th>

	</tr>
	<?php
}
?>

</table>
	
	
<?php


				
}else{
	echo "Data Not Selected";
}


 ?>