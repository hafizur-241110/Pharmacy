<?php
 //ডাটা বেস কানেকশন
 $conn = mysqli_connect('localhost','root','','pharmacy');

//ডাটা সিলেকট
 $sql = "SELECT * FROM purchase_tbl";
 
 //নিচের ভেরিয়বলে ডাটার কোয়েরি রেজাল্ট আনা
 
 $result = mysqli_query($conn, $sql);
 
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Company List</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

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
          <a class="btn btn-info" href="insert_pur.php"> Add New Medicine  </a>
        </div>
        <div class="col-md-12">
          <h2 class="text-center "> Medicine List </h2>
          <br>
          <table class="table table-bordered " id="myTable">
            <thead>
              <th>SL No</th>
              <th>Purchase Date</th>
              <th>Medi_Name</th>
              <th>Medicine Category</th>
              <th>Store Box</th>
              <th>Purchase Price</th>
              <th>Quantity</th>
              <th>Suplier</th>
              <th>Expire Date</th>
              <th class="text-center">Action</th>
            </thead>

            <tbody>
            
            <?php 
            $l=1; 
            while($row = mysqli_fetch_assoc($result)){ ?>

            
            <tr> <!-- TR এর ভিতরে থাকা TD গুলোকে  WHILE LOOP দিয়ে পুনরাবৃত্তি করা -->
              <td><?php echo $l++;?></td>
   
              <td><?php echo $row['purchase_date']?></td>
              <td><?php echo $row['medi_name']?></td>
              <td><?php echo $row['medicine_category']?></td>
             
             
              <td  class="list-group-item list-group-item-info">
                <a class="btn btn-sm btn-info" href="veiw-select-show_com.php?id=<?php echo $row['id'];?>" >View</a>
                <a class="btn btn-sm btn-warning" href="edit_com.php?id=<?php echo $row['id'];?>">Edit</a>
                <a class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure Delete It?')" href="delete_com.php?id=<?php echo $row['id'];?>">Delete</a>
              </td>

            </tr>  <!-- TR এর ভিতরে থাকা TD গুলোকে WHILE LOOP দিয়ে পুনরাবৃত্তি করা শেষ-->
            <?php } ?>

            </tbody>
          </table>
        </div>

      </div> <!-- Row শেষ -->
    </div> <!-- কনটেনট শেষ -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript"> $('#myTable').DataTable(); </script>
  </body>
</html>