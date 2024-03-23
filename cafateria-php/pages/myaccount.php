
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
   
        <h1>My Account</h1>

        <img
            src="images.png"
            class="rounded-circle"
            height="120"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        <form>

        <?php
   $comming1=$_COOKIE['usermail'];
   $comming2=$_COOKIE['userrole'];
   $comming3=$_COOKIE['userfname'];
   $comming4=$_COOKIE['userlname'];
   $comming5=$_COOKIE['reg_date'];
   $comming6=$_COOKIE['guests_id'];
   
   ?>
   
            <div class="form-group">
                <label for="name">first Name:</label>
                <input type="text" id="name" name="name" disabled value="<?php echo $comming3; ?>" >
            </div>
            <div class="form-group">
                <label for="email">last Name:</label>
                <input type="email" id="email" name="email" disabled value="<?php echo $comming4; ?>">
            </div>
            <div class="form-group">
                <label for="phone">email:</label>
                <input type="tel" id="phone" name="phone" disabled value="<?php echo $comming1; ?>">
            </div>
            <div class="form-group">
                <label for="address">role:</label>
                <input type="text" id="address" name="address" disabled value="<?php echo $comming2; ?>">
            </div>
         
        </form>

        



<?php include 'connection.php' 

?>

<?php
if($comming2 === "customer"){
?>

<div class="container">
  <h2>Table of orders</h2>

  <table class="table">
    <thead>
      <tr>
        <th>product</th>
        <th>status</th>
        <th>date</th>
      </tr>
    </thead>


    <tbody>
      <!-- Sample data, you can replace this with your actual data -->


<?php

/* select table */

$sql="SELECT * FROM orders where guests_id = $comming6 ";
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

    while($fetchedorders=mysqli_fetch_array($data)) {
      ?>

      <tr>

        <td><?php echo $fetchedorders['product_name'];?> </td>
      <td><?php echo $fetchedorders['status']; ?> </td> 
      <td><?php echo $fetchedorders['order_date']; ?> </td> 
     
    
</div>
</body>
</html>






       <?php
    }
  

}
}
      ?>

