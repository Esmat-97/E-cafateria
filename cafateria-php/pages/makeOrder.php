<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>


    

</body>
</html>


<?php include 'connection.php' ?>


<?php

if(isset($_POST['addtocart'])){
 
    $product=$_POST['product_name'];
    $guests_id=$_POST['guests_id'];
    $order_date = date("Y-m-d H:i:s");


    $sql="INSERT INTO orders (order_date,product_name,guests_id)
                  VALUES ('$order_date','$product','$guests_id')";
    
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


