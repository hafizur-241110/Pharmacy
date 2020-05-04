<?php
  
 $id = $_GET['id'];

 $conn = mysqli_connect('localhost','root','','pharmacy');
 
 $sql = "SELECT * FROM login_tbl WHERE id = $id";

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
    <title>Supplier</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

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
        <div class="col-md-2">
          <a class="btn btn-info" href="index_login.php">Login</a>
        </div>
        <div class="col-md-10">
          <h2 class="text-white bg-dark" > Login information </h2>
          <br>
        
         <table class="table">
           <tr>
             <th width="150" class="text-right">Login ID : </th>
             <td><?php echo $std['id'];?></td>
           </tr>

           <tr>
             <th width="150" class="text-right">User Name: </th>
             <td><?php echo $std['username'];?></td>
           </tr>

           <tr>
             <th width="150" class="text-right">Password : </th>
             <td><?php echo $std['password'];?></td>
           </tr>

                     
         </table>
        </div>

      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>