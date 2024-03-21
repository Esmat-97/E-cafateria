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
</head>
<body>


<?php include "nav.php" ?>

<div class="container">
  <h2>Table of users</h2>

  
      <!-- Sample data, you can replace this with your actual data -->

  <?php include 'connection.php' ?>

<?php

if(isset($_POST['more'])){

$selectedmail=$_POST['productToDel'];

/* select table */

$sql="SELECT * FROM MyGuests where email='$selectedmail'";
$data=mysqli_query($conn,$sql);

if ($data) {
  ?>

  
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <?php echo "getting data successfully"; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


  <?php
}


if(mysqli_num_rows($data) > 0){

    while($fetchedUsers=mysqli_fetch_array($data)) {
      ?>

<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title"><?php echo $fetchedUsers['firstName'];?></h5>
    <p class="card-text"><?php echo $fetchedUsers['lastName'];?></p>
    <p class="card-text"><?php echo $fetchedUsers['role'];?></p>
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


