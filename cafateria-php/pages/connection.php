<?php
/* connect to database */

$servername = "localhost";
$username = "root";
$password = "";
$dbname="cafateria_php";

$conn = mysqli_connect($servername, $username, $password , $dbname);
if (!$conn) {
    echo "Error: Unable to connect to MySQL." ;
}
echo "Connected successfully";
?>