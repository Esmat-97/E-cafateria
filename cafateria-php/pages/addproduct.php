<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Table Pagination</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<?php include "nav.php" ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
   $comming1=$_COOKIE['usermail'];
   $comming2=$_COOKIE['userrole'];
   $comming3=$_COOKIE['userfname'];
   $comming4=$_COOKIE['userlname'];
   $comming5=$_COOKIE['reg_date'];
   $comming6=$_COOKIE['guests_id'];
   
   ?>
<body>
<form action="" method="post" enctype="multipart/form-data">

<!-- row -->
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputEmail4">product_name</label>
      <input type="text" class="form-control" id="inputEmail4" name="product_name" >
    </div>

  </div>


  <div class="form-group">
    <label for="inputAddress">price</label>
    <input type="text" class="form-control" id="inputAddress" name="price" >
  </div>

  <div class="form-group">
    <label for="inputAddress2">stock_quantity </label>
    <input type="text" class="form-control" id="inputAddress2" name="stock_quantity">
  </div>


  <div class="form-group">
    <label for="inputAddress2">image </label>
    <input type="file" class="form-control" id="inputAddress2" name="uploadFile">
  </div>

  <!-- another row -->

  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputState">Admin id</label>
      <input type="text" class="form-control" id="inputAddress2" name="selected_option" value='<?php echo $comming6 ?>'>
    </div>

  </div>

  <button type="submit" class="btn btn-primary" name="insert">insert</button>
</form>
</body>
</html>






<?php include 'connection.php' ?>

<?php

if(isset($_POST['insert'])){
 
    $product_name=$_POST['product_name'];
    $price=$_POST['price'];
    $stock_quantity=$_POST['stock_quantity'];
    $selected_option=$_POST['selected_option'];

    $reg_date = date("Y-m-d H:i:s");                           //date

  
     ?>

<?php include 'images.php' ?>

     <?php
    

/*insert data*/    

    $sql="INSERT INTO products (product_name,   price,   stock_quantity,  image,  guests_id ,reg_date)
                      VALUES ('$product_name','$price','$stock_quantity', '$image', '$selected_option','$reg_date')";
    
    if (mysqli_query($conn, $sql)) {
      ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">
           <?php echo "New record created successfully";  ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
      

      <?php
    } 
    
    mysqli_close($conn);
}
?>

<?php include "footer.php" ?>