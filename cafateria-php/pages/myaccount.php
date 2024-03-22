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

        <?php

if($comming2 === "admin"){
   
?>
<h1>products history</h1>

<?php include 'connection.php' ?>


<?php

/* select table */

$sql="SELECT * FROM products WHERE guests_id=$comming6 ";
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



<?php

}

?>
<?php include "footer.php" ?>
