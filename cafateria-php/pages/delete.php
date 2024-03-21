<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    




        <form action="" method="post">
        <input type="hidden" name="productToDel" value="<?php  echo $fetcheddata['product_name'] ?>">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
  delete
</button>
       <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    do you want to delete  <?php  echo $fetcheddata['product_name'] ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="delete">Understood</button>
      </div>
    </div>
  </div>
</div>
        </form>
 

<?php include 'connection.php' ?>

<?php

if(isset($_POST['delete'])){
 
    $product_name=$_POST['productToDel'];

  
     ?>


     <?php
    

/*delete data*/    

    $sql="DELETE FROM  products WHERE product_name ='$product_name' ";
    
    if (mysqli_query($conn, $sql)) {
      ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">
           <?php echo "data deleted successfully";  ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
      

      <?php
    } 
    
    mysqli_close($conn);
}
?>



</body>
</html>