<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>

<?php
$comming1=$_COOKIE['usermail'];
$comming2=$_COOKIE['userrole'];

?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">


        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../auth/base.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">about</a>
        </li>

        <?php

        if($comming2 === 'admin'){
          ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin list
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../pages/users.php">users</a></li>
            <li><a class="dropdown-item" href="../pages/orders.php">orders</a></li>
            <li><a class="dropdown-item" href="../pages/addproduct.php">Add products</a></li>
            <li><a class="dropdown-item" href="../pages/addusers.php">Add users</a></li>
           
          </ul>
        </li>


        <?php
        }
        ?>

      </ul>

    </div>


<!-- rigth list -->



    <div class="btn-group dropstart">
  <a type="button" class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
  <img
            src="images.png"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
      </a>
  <ul class="dropdown-menu">
  <li><a class="dropdown-item" href="logout.php">logout</a></li>
  <li><a class="dropdown-item" href="../pages/myaccount.php">MyAccount</a></li>
  <li><a class="dropdown-item" href="#">

   <?php
   $comming1=$_COOKIE['usermail'];
   echo  $comming1 ."<br>";
   ?>

</a></li>
  </ul>
</div>


    </div>



</nav>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>