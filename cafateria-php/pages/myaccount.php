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
   

        <h2>Order History</h2>
        <table>
            <thead>
                <tr>
                    <th>Order Number</th>
                    <th>Date</th>
                    <th>Items</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#1234</td>
                    <td>01/01/2023</td>
                    <td>Burger, Fries, Soda</td>
                    <td>$15.99</td>
                    <td>Completed</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php include "footer.php" ?>
