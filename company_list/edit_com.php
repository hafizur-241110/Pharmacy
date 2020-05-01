<?php
 
 $id = $_GET['id'];

 $conn = mysqli_connect('localhost','root','','pharmacy');
 
 $sql = "SELECT * FROM company_tbl WHERE id = $id";
 
 $result = mysqli_query($conn, $sql);
 
 $std = mysqli_fetch_assoc($result);
  
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
      <div class="row" >
        <div class="col-md-3">
          <a class="btn btn-info" href="index_com.php">Company List</a>
        </div>
        <div class="col-md-9" >
          <h2> Edit Company List</h2>

                    
         <form action="update_com.php?id=<?php echo $id?>" method="POST" enctype="multipart/form-data" >
          
          <div class="form-group">
            <label for="Company Name"> Company Name : </label>
            <input required="" type="text" class="form-control" name ="company_name" value="<?php echo $std['company_name']?>">
          </div>
             
          <div class="form-group">
            <label for="Address">Address : </label>
            <input type="text" class="form-control" name ="address"  value="<?php echo $std['address'] ?>">
          </div>
          
          <div class="form-group">
            <label for="District">District : </label>
            <input type="text" class="form-control" name ="district"  value="<?php echo $std['district'] ?>">
          </div>            
          
         <button type="submit" class="btn btn-danger lg">Update Company List</button>
        
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