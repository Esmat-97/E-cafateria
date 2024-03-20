<?php include "nav.php" ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">

<!-- row -->
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputEmail4">product_name</label>
      <input type="text" class="form-control" id="inputEmail4" name="product_name" >
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">description</label>
      <input type="text" class="form-control" id="inputPassword4" name="description" >
    </div>
  </div>


  <div class="form-group">
    <label for="inputAddress">price</label>
    <input type="text" class="form-control" id="inputAddress" name="price" >
  </div>

  <div class="form-group">
    <label for="inputAddress2">stock_quantity </label>
    <input type="text" class="form-control" id="inputAddress2" name="stock_quantity">
  </div>


  <div class="form-group">
    <label for="inputAddress2">image </label>
    <input type="file" class="form-control" id="inputAddress2" name="image">
  </div>

  <!-- another row -->

  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputState">Admin id</label>

      <select id="inputState" class="form-control" name="selected_option">


      <?php

/* connect database*/    

$servername = "localhost";
$username = "root";
$password = "";
$dbname="cafateria_php";

$conn = mysqli_connect($servername, $username, $password , $dbname);
if (!$conn) {
    echo "Error: Unable to connect to MySQL." ;
}
echo "Connected successfully";




/* display IDs */
      $sql="SELECT * FROM Admins ";
$data=mysqli_query($conn,$sql);

if ($data) {
  echo "getting data successfully";
} else {
  echo "Error: ";
}




if(mysqli_num_rows($data) > 0){

    $i = 1; 
    while($fetcheddata=mysqli_fetch_array($data)) {
      echo " <option>{$fetcheddata['guests_id']}</option> ";
      $i++; 
    }

}
        
      ?> 
       
      </select>
    </div>

  </div>

  <button type="submit" class="btn btn-primary" name="insert">insert</button>
</form>
</body>
</html>













<?php

if(isset($_POST['insert'])){
 
    $product_name=$_POST['product_name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $stock_quantity=$_POST['stock_quantity'];
    $image=$_POST['image'];
    $selected_option=$_POST['selected_option'];
    $reg_date = date("Y-m-d H:i:s");

echo $product_name ."<br>";
echo $description ."<br>";
echo $price ."<br>";
echo $stock_quantity ."<br>";
echo $image ."<br>";
echo $selected_option ."<br>";
echo $reg_date ."<br>";

    
$servername = "localhost";
$username = "root";
$password = "";
$dbname="cafateria_php";

$conn = mysqli_connect($servername, $username, $password , $dbname);
if (!$conn) {
    echo "Error: Unable to connect to MySQL." ;
}
echo "Connected successfully";




/*insert data*/    


    $sql="INSERT INTO MyGuests (product_name,description, price, stock_quantity,  image,  guests_id ,reg_date)
                      VALUES ('$product_name','$description','$price','$stock_quantity', '$image', '$selected_option','$reg_date')";
    
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>

<?php include "footer.php" ?>