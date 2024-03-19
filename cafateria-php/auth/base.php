<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<?php include "../pages/nav.php" ?>



<?php
$comming1=$_COOKIE['username'];
$comming2=$_COOKIE['userrole'];
echo "hello" . $comming1 ."<br>";
echo "you are " . $comming2;
?>


</body>
</html>