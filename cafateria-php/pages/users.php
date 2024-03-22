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

  <table class="table">
    <thead>
      <tr>
        <th>Email</th>
        <th>firstName</th>
        <th>delete</th>
        <th>show more</th>
      </tr>
    </thead>


    <tbody>
      <!-- Sample data, you can replace this with your actual data -->

  <?php include 'connection.php' ?>

<?php

/* select table */

$sql="SELECT * FROM MyGuests ";
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

      <tr>

        <td><?php echo $fetchedUsers['email'];?> </td>
      <td><?php echo $fetchedUsers['firstName']; ?> </td> 
      <td>
         <form  method="post" action="">
        <input type="hidden"   name="productToDel" value="<?php  echo $fetchedUsers['email']  ?>">
        <button type="submit" name="del"  class="btn btn-danger">delete</button>
        </form>
      </td>

      <td>
      <form  method="post" action="../operations/showMoreUsers.php">
        <input type="hidden"   name="productToDel" value="<?php  echo $fetchedUsers['email']  ?>">
        <button type="submit" name="more" class="btn btn-primary">
  show more
    </button>
        </form>
    


        
      </td>
    
</div>
</body>
</html>






       <?php
    }
  

}
        
      ?>


  



<?php include "../operations/deleteUsers.php" ?>

