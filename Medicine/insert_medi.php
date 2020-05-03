<?php
 //ডাটা বেস কানেকশন
 $conn = mysqli_connect('localhost','root','','pharmacy');

//ডাটা সিলেকট
 $sql = "SELECT * FROM medicine_tbl";
 
 //নিচের ভেরিয়বলে ডাটার কোয়েরি রেজাল্ট আনা
 $result = mysqli_query($conn, $sql);

 /*$company = "SELECT * FROM company_tbl";
 $company_result = mysqli_query($conn, $company);
 
  $query = "SELECT SUM(quantity)*SUM(cost_price) AS sum quantity,cost_price FROM medicine_tbl";
  $query_result2 = mysqli_query($conn, $query);*/
  
   

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
          <a class="btn btn-info" href="index_medi.php"> Insert Medicine Details </a>
        </div>
        <div class="col-md-9">
          <h2 class="text-center">Medicine Information</h2>
        
          <br>
         <form action="store_medi.php" method="POST"  enctype="multipart/form-data"  >
          
          <div class="form-group">
            <label for="Medicine Name" class="label-primary"> Medicine Name : </label>
            <input required="" type="text" class="form-control" name ="medi_name" placeholder="Medicine Name" >
          </div>

           <div class="form-group">
            <label for="genatic_name" class="label-primary"> Genatice Name: </label>
            <input required="" type="text" class="form-control" name ="genatic_name" placeholder="Genatice Name" >
          </div>

           <div class="form-group">
            <label for="Strength" class="label-primary"> Strength : </label>
            <input required="" type="text" class="form-control" name ="strength" placeholder="Strength" >
          </div>

           <div class="form-group">
            <label for="Medicine Type" class="label-primary">Medicine Type : </label>
              <select required="" type="option" class="form-control" name ="medi_type" placeholder="Medicine Type"> 
                <option value="Tablet">Tablet</option>
                <option value="Capsole">Capsole</option>
                <option value="Syrup">Syrup</option>
                <option value="Suspension">Suspension</option>
           
               </select> 
 
          </div>

          <div class="form-group">
            <label for="Company Name" class="label-primary">Company Name : </label>
              <select required="" type="option" class="form-control" name ="company_name" placeholder="Company Name"> 
                <?php
                while($row = mysqli_fetch_assoc($company_result)){ ?>

                <option value="<?php echo $row['id'];?>"><?php echo $row['company_name']?>
              -- <?php echo $row['address']?> -- <?php echo $row['district']?></option>
           
            <?php } ?>
              </select> 
 
          </div>
          
          <div class="form-group">
            <label for="Quantity" class="label-success" >Quantity : </label>
            <input type="number" class="form-control input-sm text-left amount" name ="quantity" placeholder="Quantity">
          </div>
          
          <div class="form-group">
            <label for="Cost Price">Cost Price : </label>
            <input type="number" class="form-control input-sm text-left amount" name ="cost_price" placeholder="Cost Price">
          </div>  
          
          <!-- <div class="form-group">
            <label for="Total Price">Total Price : </label>
            <input type="number" class="form-control input-sm text-left amount" name ="total_price" value=>
             
          </div>  -->
          
   
          <button type="submit" class="btn btn-default">Submit</button>
        
        </form>
        
        </div>

      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>
    $('.form-group').on('number','.prc',function(){
      var totalSum = 0;
      $('.form-group .prc').each(function(){
        var numberVal = $(this).val();
        if($.isNumeric(numberVal)){
          totalSum+= parseFloat(numberVal);
        }
      });
      $('#result').val(totalSum);
    });
    </script>

  </body>
</html>