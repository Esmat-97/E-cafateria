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


<div class="container">
  <h2>Table of orders</h2>

  <table class="table">
    <thead>
      <tr>
        <th>product</th>
        <th>status</th>
        <th>date</th>
        <th>name</th>
        <th>mail</th>
      </tr>
    </thead>


    <tbody>
      <!-- Sample data, you can replace this with your actual data -->

  <?php include 'connection.php' ?>

<?php

/* select table */

$sql="SELECT *
FROM orders
INNER JOIN MyGuests ON orders.guests_id=MyGuests.guests_id;";
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

        <td><?php echo $fetchedUsers['product_name'];?> </td>
      <td><?php echo $fetchedUsers['status']; ?> </td> 
      <td><?php echo $fetchedUsers['order_date']; ?> </td> 
      <td><?php echo $fetchedUsers['firstName']; ?> </td> 
      <td><?php echo $fetchedUsers['email']; ?> </td> 
    
</div>
</body>
</html>






       <?php
    }
  

}
        
      ?>


  