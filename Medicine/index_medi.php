<?php
 //ডাটা বেস কানেকশন
 $conn = mysqli_connect('localhost','root','','pharmacy');

//ডাটা সিলেকট
 $sql = "SELECT * FROM medicine_tbl";
 $result = mysqli_query($conn, $sql);
 //নিচের ভেরিয়বলে ডাটার কোয়েরি রেজাল্ট আনা
 
 $query = "SELECT SUM(total_price) AS sum FROM medicine_tbl";
$query_result = mysqli_query($conn, $query);
$query_result2 = mysqli_query($conn, "SELECT SUM(cost_price) AS cost FROM medicine_tbl");
while($row2 = mysqli_fetch_assoc($query_result)){
 $output= $row2['sum'];
}
while($row3 = mysqli_fetch_assoc($query_result2)){
  $output2= $row3['cost'];
 }
 
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Medicine</title>

    <!-- Bootstrap -->
   <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<style type="text/css">
  .hafizur tbody tr:nth-child(odd){
   background-color:#00f5f5;
}

</style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
  </head>
  <body>
    <br><br>

    <div class="container"> <!-- কনটেনট শুরু -->
      <div class="row"> <!-- Row শুরু -->
        <div class="col-md-12">
          <a class="btn btn-info" href="insert_medi.php"> Add New Medicine  </a>
        </div>
        <div class="col-md-12">
          <h2 class="text-center "> Medicine List </h2>

          <br>
          <table class="table table-bordered table-striped hafizur" id="example">
            <thead>
              <th>SL No</th>
              <th>Medicine Name</th>
              <th>Genatic Name</th>
              <th>strength</th>
              <th>Medicine Type</th>
              <th>Category</th>
              <th>Company Name</th>
              <th>Quantity</th>
              <th>Cost Price</th>
              <th>Total Price</th>
              <th class="text-center">Action</th>
            </thead>

            <tbody>
            
            <?php 
            $l=1; 
            while($row = mysqli_fetch_assoc($result)){ ?>

            
            <tr> <!-- TR এর ভিতরে থাকা TD গুলোকে  WHILE LOOP দিয়ে পুনরাবৃত্তি করা -->
              <td><?php echo $l++;?></td>
   
              <td><?php echo $row['medi_name']?></td>
              <td><?php echo $row['genatic_name']?></td>
              <td><?php echo $row['strength']?></td>
              <td><?php echo $row['medi_type']?></td>
              <td><?php echo $row['category']?></td>
              <td><?php echo $row['company_name']?></td>
              <td><?php echo $row['quantity']?></td>
              <td><?php echo $row['cost_price']?></td>
              <td><?php echo $row['total_price']?></td>
              
              
              
             <!--  <td> <img src="<?php echo 'image/download.jpg' . $row['picture'] ?>" width="90" height="90" alt=""> </td> -->
             
              <td  class="list-group-item list-group-item-info">
                <a class="btn btn-sm btn-info" href="veiw-select-show.php?id=<?php echo $row['id'];?>" >View</a>
                <a class="btn btn-sm btn-warning" href="editsupplier.php?id=<?php echo $row['id'];?>">Edit</a>
                <a class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure Delete It?')" href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
              </td>

            </tr>  <!-- TR এর ভিতরে থাকা TD গুলোকে WHILE LOOP দিয়ে পুনরাবৃত্তি করা শেষ-->
            <?php } ?>




            </tbody>
            <tfoot>
            <tr>

              <td colspan="8" align="right">Total</td>
              <td  align="right"><?php echo $output2;?></td>
              <td  align="right"><?php echo $output;?></td>
            
           
            <td ></td>
            </tr>

                        
            </tfoot>
          </table>
        </div>

      </div> <!-- Row শেষ -->
    </div> <!-- কনটেনট শেষ -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"> $('#example').DataTable(); </script>

  </body>
</html>