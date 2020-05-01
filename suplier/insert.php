<?php
 //ডাটা বেস কানেকশন
 $conn = mysqli_connect('localhost','root','','pharmacy');

//ডাটা সিলেকট
 $sql = "SELECT * FROM supplier_tbl";
 
 //নিচের কোটটি ভেরিয়বলে ডাটার কোয়েরি রেজাল্ট আনা জন্য।
 $result = mysqli_query($conn, $sql);
  $company_result = mysqli_query($conn,"SELECT * FROM company_tbl");
//  print_r($company_result);
//  exit;
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
          <a class="btn btn-info" href="index.php"> Insert Supplier Details </a>
        </div>
        <div class="col-md-9">
          <h2 class="text-center">Supplier Information</h2>
          <br>
         <form action="store.php" method="POST"  enctype="multipart/form-data" >
          
          <div class="form-group">
            <label for="ID" class="label-primary"> Supplier ID : </label>
            <input required="" type="text" class="form-control" name ="supplier_id" placeholder="Supplier_id" >
          </div>

           <div class="form-group">
            <label for="Name" class="label-primary"> Name: </label>
            <input required="" type="text" class="form-control" name ="name" placeholder="name" >
          </div>

           <div class="form-group">
            <label for="E-mail" class="label-primary"> E-mail : </label>
            <input required="" type="text" class="form-control" name ="email" placeholder="E-mail" >
          </div>

          <div class="form-group">
            <label for="Company Name" class="label-primary">Company Name : </label>
              <select required="" type="option" class="form-control" name ="company_name" placeholder="Company Name"> 
                <?php
                while($row = mysqli_fetch_assoc($company_result)){ ?>

               <option value="<?php echo $row['id'];?>"><?php echo $row['company_name']?>-- <?php echo $row['address']?></option>
           
            <?php } ?>
        
              </select> 
 
          </div>
          
          <div class="form-group">
            <label for="Address" class="label-success" >Address : </label>
            <input type="text" class="form-control" name ="address" placeholder="Address">
          </div>
          
          <div class="form-group">
            <label for="Mobile">Mobile : </label>
            <input type="text" class="form-control" name ="mobile" placeholder="Mobile">
          </div>  

          <div class="form-group">
            <label for="Picture">Picture : </label>
            <input type="file" class="form-control" name="picture">
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