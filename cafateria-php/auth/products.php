<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Table Pagination</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-L7tAs72o7myjNEkMPSFVrVvk3v0PL2R+k0EMC7RPVaXXh3bwjXO3Kl/Kg9BqlTcH" crossorigin="anonymous">

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
        <button type="submit" name="delP"  class="btn btn-danger">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg>
      </button>
        </form>
      

      
      <form  method="post" action="../operations/showMoreProduct.php">
        <input type="hidden"   name="showProducts" value="<?php  echo $fetcheddata['product_name']  ?>">
        <button type="submit" name="moreP"  class="btn btn-primary"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
</svg>
       </button> 
        </form>

 
        <form  method="post" action="../operations/updateproduct.php">
        <input type="hidden"   name="showProducts" value="<?php  echo $fetcheddata['product_name']  ?>">
        <button type="submit" name="updateP" class="btn btn-primary"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
</svg>
     </button> 
        </form>



</form>


  <?php
}
  ?>



<form method="post" action="" >
 <p><input type="hidden" name="product_name"  value="<?php echo $fetcheddata['product_name'] ?>" ></p>
<p><input type="hidden" name="guests_id"      value="<?php  echo $comming2 ?>"></p>

<button type="submit" name="addtocart"  class="btn btn-primary">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z"/>
</svg>
buy
</button>

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


