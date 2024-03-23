<?php include 'connection.php' 

?>

<?php

if(isset($_POST['deleteOrder'])){
 
    $name=$_POST['name'];
    $id=$_POST['id'];

  
     ?>


     <?php
    

/*delete data*/    

    $sql="DELETE FROM  orders WHERE  product_name='$name' and guests_id='$id' ";
   
    
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