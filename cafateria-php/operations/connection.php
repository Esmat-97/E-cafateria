<?php
/* connect to database */

$servername = "localhost";
$username = "root";
$password = "";
$dbname="cafateria_php";

$conn = mysqli_connect($servername, $username, $password , $dbname);
if ($conn) {
  ?>
       <div class="alert alert-secondary alert-dismissible fade show" role="alert">
      <?php  echo "Connected successfully"; ?>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>

          <?php

    }


?>