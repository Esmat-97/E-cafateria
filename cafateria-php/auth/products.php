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




<?php include '../operations/connection.php' ?>


<?php

/* select table */

$sql="SELECT *
FROM products
INNER JOIN MyGuests ON products.guests_id = MyGuests.guests_id; ";

$data=mysqli_query($conn,$sql);

if ($data) {


?>

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
<?php  echo "getting data successfully"; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
 
} 

?>
        <div class="row row-cols-1 row-cols-md-3 g-4">

<?php

if(mysqli_num_rows($data) > 0){

 while( $fetcheddata=mysqli_fetch_array($data) ){
 ?>

  <div class="col-1">
    <div class="card ">
      <img src="../upload/<?php echo $fetcheddata['image'] ?>" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><?php echo $fetcheddata['product_name'] ?></h5>
        <p class="card-text"><?php echo $fetcheddata['price'] ."$" ?></p> 


        <?php
$comming=$_COOKIE['userrole'];
$comming2=$_COOKIE['guests_id'];
if($comming ==="admin"){
?>

<p class="card-text"><?php echo $fetcheddata['email']; ?></p> 
        
         <form  method="post" action="">
        <input type="hidden"   name="productToDel" value="<?php  echo $fetcheddata['product_name']  ?>">
        <button type="submit" name="delP"  class="btn btn-danger">delete</button>
        </form>
      

      
      <form  method="post" action="../operations/showMoreProduct.php">
        <input type="hidden"   name="showProducts" value="<?php  echo $fetcheddata['product_name']  ?>">
        <button type="submit" name="moreP" class="btn btn-primary"> show more </button> 
        </form>

 
        <form  method="post" action="../operations/updateproduct.php">
        <input type="hidden"   name="showProducts" value="<?php  echo $fetcheddata['product_name']  ?>">
        <button type="submit" name="updateP" class="btn btn-primary"> update </button> 
        </form>



</form>


  <?php
}
  ?>



<form method="post" action="" >
 <p><input type="hidden" name="product_name"  value="<?php echo $fetcheddata['product_name'] ?>" ></p>
<p><input type="hidden" name="guests_id"      value="<?php  echo $comming2 ?>"></p>
    <input type="submit" name="addtocart" class="btn btn-primary" value="Add to cart">  
</form>

      </div>
    </div>
  </div>

 <?php

    
     
    }

  }
        
    ?>

</div>




    




<?php include '../operations/showMoreProduct.php' ?>
<?php include '../operations/deleteProduct.php' ?>
<?php include '../pages/makeOrder.php' ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


