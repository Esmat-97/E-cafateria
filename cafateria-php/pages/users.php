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
        <th>#</th>
        <th>Email</th>
        <th>firstName</th>
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

    $i = 1; 
    while($fetcheddata=mysqli_fetch_array($data)) {
      echo "<tr><td>$i</td><td>{$fetcheddata['email']}</td><td>{$fetcheddata['firstName']}</td></tr>";
      $i++; 
    }

}
        
      ?>


    </tbody>
  </table>
  


  <!-- Pagination -->
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>

</body>
</html>

<?php include "footer.php" ?>
