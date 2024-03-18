<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
<style>
    a{
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50; /* Green */
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    margin: 10px;
  }
  
  a:hover{
    background-color: #45a049; /* Darker green */
  }
</style>
</head>
<body>
    
<div class="form">

<a href="login.php">Login</a>
<a href="register.php">Register</a>


<form action="" method="post">

    <p><input type="email" name="email" placeholder="email"></p>
    <p><input type="text" name="password" placeholder="password"></p>
    <input type="submit" name="submit" value="submit">

</form>


</div>


</body>

</html>

<?php

if(isset($_POST['submit'])){
 

    $email=$_POST['email'];
    $pass=$_POST['password'];



echo empty($_POST['email']) ? "email is required<br>" : (preg_match('/[a-zA-Z]/', $_POST['email']) ? "email is valid<br>" : "email is not valid<br>");
echo empty($_POST['password']) ? "password is required<br>" : 
    (!preg_match("/[a-z]/",$_POST['password']) ? "password must have lower<br>" : "password valid lower<br>") .
    (!preg_match("/[A-Z]/",$_POST['password']) ? "password must have upper<br>" : "password valid upper<br>") .
    (!preg_match("/[0-9]/",$_POST['password']) ? "password must have numbers<br>" : "password valid number<br>") .
    (!preg_match("/[!@#$%^&*()-_=+{};:,<.>]/",$_POST['password']) ? "password must have special characters<br>" : "password valid special characters<br>").



   

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="cafateria_php";

    $conn = mysqli_connect($servername, $username, $password , $dbname);
    if (!$conn) {
        echo "Error: Unable to connect to MySQL." ;
    }
    echo "Connected successfully";


    

    $sql="SELECT * FROM MyGuests WHERE email='$email' AND  password='$pass' ";
    $data=mysqli_query($conn,$sql);

    if ($data) {
      echo "getting data successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    



    if(mysqli_num_rows($data) > 0){

   $fetcheddata=mysqli_fetch_array($data);

   setcookie('username',$fetcheddata['email'],time() + 60*60);

   header("location:base.php");
}else{
   echo "fail coonection";
}
    }

   

    mysqli_close($conn);

?>
