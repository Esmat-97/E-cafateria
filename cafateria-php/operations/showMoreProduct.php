<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>




<div class="container">


  
   

  <?php include 'connection.php' ?>

<?php

if(isset($_POST['moreP'])){

$selectedmail=$_POST['showProducts'];

/* select table */

$sql="SELECT * FROM products where  product_name='$selectedmail'";
$data=mysqli_query($conn,$sql);

if ($data) {
  ?>

  
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <?php echo "getting data successfully" ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


  <?php
}


if(mysqli_num_rows($data) > 0){

    while($fetchedUsers=mysqli_fetch_array($data)) {
      ?>

<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title"><?php echo $fetchedUsers['product_name'];?></h5>
    <p class="card-text"><?php echo $fetchedUsers['price'];?></p>
  
  </div>
</div>
    
</div>
</body>
</html>


       <?php
    }
  

}
        
}
      ?>


 




</body>
</html>


