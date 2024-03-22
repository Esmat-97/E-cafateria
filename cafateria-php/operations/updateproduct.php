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




  
   



        
<?php 
include 'connection.php'; 

if(isset($_POST['doneUpdate'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $id = $_POST['id'];
    
    // UPDATE query
    $sql = "UPDATE products
            SET product_name = '$name',
                price = '$price'
            WHERE product_id = $id";
    
    $data = mysqli_query($conn, $sql);
    
    if ($data) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Update data successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
}
?>

<?php
if(isset($_POST['updateP'])){
    $selectedmail = $_POST['showProducts'];

    // SELECT query
    $sql = "SELECT * FROM products WHERE product_name='$selectedmail'";
    $data = mysqli_query($conn, $sql);

    if ($data) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Getting data successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }

    if(mysqli_num_rows($data) > 0){
        while($fetchedUsers = mysqli_fetch_array($data)) {
?>
<form action="" method="post">
    <input type="text" name="name" value="<?php echo $fetchedUsers['product_name']; ?>" >
    <br>
    <br>
    <input type="text" name="price" value="<?php echo $fetchedUsers['price']; ?>">
    <br>
    <br>
    <input type="hidden" name="id" value="<?php echo $fetchedUsers['product_id']; ?>">
    <input type="submit" name="doneUpdate" value="done">
</form>
<?php
        }
    }
}
?>

    


</body>
</html>


