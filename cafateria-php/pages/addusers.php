<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

<?php include 'nav.php' ?>
    
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

<?php include 'connection.php' ?>


<?php

if(isset($_POST['submit'])){
 
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $role=$_POST['role'];
    $reg_date = date("Y-m-d H:i:s");




echo empty($_POST['firstName']) ? "firstName is required<br>" : (preg_match('/[a-zA-Z]/', $_POST['firstName']) ? "firstName is valid<br>" : "firstName is not valid<br>");
echo empty($_POST['lastName']) ? "lastName is required<br>" : (preg_match('/[a-zA-Z]/', $_POST['lastName']) ? "lastName is valid<br>" : "lastName is not valid<br>");
echo empty($_POST['email']) ? "email is required<br>" : (preg_match('/[a-zA-Z]/', $_POST['email']) ? "email is valid<br>" : "email is not valid<br>");
echo empty($_POST['role']) ? "role is required<br>" : (preg_match('/[a-zA-Z]/', $_POST['role']) ? "role is valid<br>" : "role is not valid<br>");
echo empty($_POST['password']) ? "password is required<br>" : 
    (!preg_match("/[a-z]/",$_POST['password']) ? "password must have lower<br>" : "password valid lower<br>") .
    (!preg_match("/[A-Z]/",$_POST['password']) ? "password must have upper<br>" : "password valid upper<br>") .
    (!preg_match("/[0-9]/",$_POST['password']) ? "password must have numbers<br>" : "password valid number<br>") .
    (!preg_match("/[!@#$%^&*()-_=+{};:,<.>]/",$_POST['password']) ? "password must have special characters<br>" : "password valid special characters<br>").






    $sql="INSERT INTO MyGuests (firstName, lastName, email, password ,reg_date)
                  VALUES ('$firstName', '$lastName', '$email', '$pass' ,'$reg_date')";
    
    if (mysqli_query($conn, $sql)) {
        ?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
           <?php echo "New record created successfully";  ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>


      <?php
    } 

    if($role === "admin"){
      $sql="INSERT INTO Admins (firstName, lastName, email, password ,reg_date)
      VALUES ('$firstName', '$lastName', '$email', '$pass','$reg_date')";
      
      if (mysqli_query($conn, $sql)) {
      ?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
           <?php echo "New record created successfully";  ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>

      <?php
      } 

    }
    
    mysqli_close($conn);
}
?>


<?php include 'footer.php' ?>
