<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="css/register.css">
</head>
<body>
    
<div class="form">

<form action="" method="post">
    <p><input type="text" name="firstName" placeholder="firstName"></p>
    <p><input type="text" name="lastName" placeholder="lastName"></p>
    <p><input type="email" name="email" placeholder="email"></p>
    <p><input type="text" name="password" placeholder="password"></p>
    <input type="submit" name="submit" value="submit">
</form>

</div>

</body>
</html>

<?php

if(isset($_POST['submit'])){
 
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $reg_date = date("Y-m-d H:i:s");



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="cafateria_php";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password , $dbname);

    // Check connection
    if (!$conn) {
        echo "Error: Unable to connect to MySQL." ;
    
    }
    echo "Connected successfully";


    



    $sql="INSERT INTO MyGuests (firstName, lastName, email, password ,reg_date)
    VALUES ('$firstName', '$lastName', '$email', '$pass','$reg_date')";
    
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>
