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




<?php include 'connection.php' ?>


<?php

/* select table */

$sql="SELECT * FROM products ";
$data=mysqli_query($conn,$sql);

if ($data) {
  echo "getting data successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
        <div class="row row-cols-1 row-cols-md-3 g-4">

<?php

if(mysqli_num_rows($data) > 0){

    $i = 1; 

    while($fetcheddata=mysqli_fetch_array($data)) {
 ?>

  <div class="col-1">
    <div class="card ">
      <img src="../upload/<?php echo $fetcheddata['image'] ?>" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><?php echo $fetcheddata['product_name'] ?></h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>

 <?php

      $i++; 
     
    }

}
        
    ?>

</div>


  
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


