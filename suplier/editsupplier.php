<?php
 
 $id = $_GET['id'];

 $conn = mysqli_connect('localhost','root','','pharmacy');
 
 $sql = "SELECT * FROM supplier_tbl WHERE id = $id";
 
 $result = mysqli_query($conn, $sql);
 
 $std = mysqli_fetch_assoc($result);

 $company = "SELECT * FROM company_tbl where id";
 $company_result = mysqli_query($conn, $company);
  
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
        <div class="col-md-3">
          <a class="btn btn-info" href="index.php"> Udate Supplier</a>
        </div>
        <div class="col-md-9">
          <h2> Edit Supplier ID</h2>
          
         <form action="update.php?id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
          
          <div class="form-group">
            <label for="Supplier ID">Supplier ID : </label>
            <input type="text" class="form-control" name ="supplier_id" value="<?php echo $std['supplier_id']?>">
          </div>

          <div class="form-group">
            <label for="Name"> Name : </label>
            <input type="text" class="form-control" name ="name" value="<?php echo $std['name']?>">
          </div>

          <div class="form-group">
            <label for="E-mail">E-mail: </label>
            <input type="text" class="form-control" name ="email" value="<?php echo $std['email']?>">
          </div>

         <div class="form-group">
            <label for="Company Name" class="label-primary">Company Name : </label>
              <select required="" type="option" class="form-control" name ="company_name"> 
                <?php
                while($row = mysqli_fetch_assoc($company_result)){ ?>

               
               <option value="<?php echo $row['id'];?>"><?php echo $row['company_name']?>
               -- <?php echo $row['address']?> -- <?php echo $row['district']?></option>
           
            <?php } ?>
              </select> 
 
          </div>
             
          <div class="form-group">
            <label for="Address">Address : </label>
            <input type="text" class="form-control" name ="address"  value="<?php echo $std['address'] ?>">
          </div>
          
          <div class="form-group">
            <label for="Mobile">Mobile : </label>
            <input type="text" class="form-control" name ="mobile"  value="<?php echo $std['mobile'] ?>">
          </div>            
          
          <div class="form-group">
            <label for="picture">Picture : </label>
            <input type="file" class="form-control" name ="picture"  value="<?php echo $std['picture'] ?>">
          </div>

          <button type="submit" class="btn btn-danger lg">Update Supplier</button>
        
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