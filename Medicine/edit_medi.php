<?php
 
 $id = $_GET['id'];

 $conn = mysqli_connect('localhost','root','','pharmacy');
 
 $sql = "SELECT * FROM medicine_tbl WHERE id = $id";
 
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
          <a class="btn btn-info" href="index_medi.php"> Udate Supplier</a>
        </div>
        <div class="col-md-9">
          <h2> Edit Medicine </h2>
          
         <form action="update_medi.php?id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
          
         <div class="form-group">
            <label for="Medicine Name" class="label-primary"> Medicine Name : </label>
            <input type="text" class="form-control" name ="medi_name" value="<?php echo $std['medi_name']?>" >
          </div>

          <div class="form-group">
            <label for="Genatic Name" class="label-primary"> Genatic Name : </label>
            <input type="text" class="form-control" name ="genatic_name" value="<?php echo $std['genatic_name']?>">
          </div>

          <div class="form-group">
            <label for="Strength" class="label-primary">Strength: </label>
            <input type="text" class="form-control" name ="strength" value="<?php echo $std['strength']?>">
          </div>

          <div class="form-group">
            <label for="Medicine Type" class="label-primary">Medicine Type : </label>
              <select required="" type="option" class="form-control" name ="medi_type"> 
                <option value="Tablet">Tablet</option>
                <option value="Capsole">Capsole</option>
                <option value="Syrup">Syrup</option>
                <option value="Suspension">Suspension</option>
           
               </select> 
 
          </div>

          <div class="form-group">
            <label for="Category" class="label-primary">Category: </label>
            <input type="text" class="form-control" name ="category" value="<?php echo $std['category']?>">
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
            <label for="Quantity" class="label-success" >Quantity : </label>
            <input type="number" class="form-control" name ="quantity" value="<?php echo $std['quantity']?>">
          </div>
          
          <div class="form-group">
            <label for="Cost Price">Cost Price : </label>
            <input type="number" class="form-control" name ="cost_price" value="<?php echo $std['cost_price']?>">
          </div>  
<!--           
          <div class="form-group">
            <label for="Total Price">Total Price : </label>
            <input type="number" class="form-control" name ="total_price" value="<?php echo $std['total_price']?>">
             
          </div>  -->

          <button type="submit" class="btn btn-danger lg">Update Medicine</button>
        
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