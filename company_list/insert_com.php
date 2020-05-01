<?php
 //ডাটা বেস কানেকশন
 $conn = mysqli_connect('localhost','root','','pharmacy');

//ডাটা সিলেকট
 $sql = "SELECT * FROM company_tbl";
 
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
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-info" href="index_com.php"> Insert Company Details </a>
        </div>
        <div class="col-md-9">
          <h2 class="text-center text-white bg-dark">Company Information</h2>
          <br>
         <form action="store_com.php" method="POST"  enctype="multipart/form-data" >
          
          <div class="form-group">
            <label for="Company name" class="label label-primary lg"> Company Name : </label>
            <input required="" type="text" class="form-control" name ="company_name" placeholder="Company Name" >
          </div>

                              
          <div class="form-group">
            <label for="Address" class="label label-warning" >Address : </label>
            <input type="text" class="form-control" name ="address" placeholder="Address">
          </div>
          
          <div class="form-group">
            <label for="District" class="label label-success">District : </label>
            <input type="text" class="form-control" name ="district" placeholder="District Name">
          </div>  

        <button type="submit" class="btn btn-default">Submit</button>
        
        </form>
        
        </div>

      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


     
  </body>
</html>