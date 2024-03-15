<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <p>firstName<input type="text" name="firstName"></p>
    <p>lastName<input type="text" name="lastName"></p>
    <p>email<input type="email" name="email"></p>
    <p>password<input type="text" name="password"></p>
    <input type="submit" name="submit" value="submit">
</form>


</body>
</html>

<?php

if(isset($_POST['submit'])){
 
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $pass=$_POST['password'];


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


    $reg_date = date("Y-m-d H:i:s");

    

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
