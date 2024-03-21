

<?php

if(isset($_POST['del'])){
 
    $product_name=$_POST['productToDel'];

  
     ?>


     <?php
    

/*delete data*/    

    $sql="DELETE FROM  MyGuests WHERE  email='$product_name' ";
    
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
