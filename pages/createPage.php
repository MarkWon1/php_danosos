<!DOCTYPE html>
<html lang="en">
      <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../createPage.css">

</head>
<?php
include "resources/header.php";
 

?>

<body>
      <?php
      include "resources/navigation.php";

      ?>
      <div>

            <h1>Facebook!!</h1>
            <form action="facebookMe/facebook.php" method="POST">
                  <label for=""> Username </label>
                  <input type="text" name="prod_name">
                  <br><br>
                  <label for=""> Email </label>
                  <input type="text" name="prod_quantity">
                  <br><br>
                  <label for=""> Firstname </label>
                  <input type="text" name="prod_type">
                  <br><br>
                  <label for=""> Lastname</label>
                  <input type="text" name="prod_price">
                  <br><br>
                  <label for=""> Mobile Number </label>
                  <input type="number" name="prod_date_added">
                  <br><br>
                  <label for=""> Birthday </label>
                  <input type="date" name="user_name">
                  <br><br>
                  <label for=""> Gender </label>
                  <input type="text" name="user_age">
                  <br><br>
                  <label for=""> Password </label>
                  <input type="password" name="user_address">
                  <br><br>
                  <label for=""> Confirm Password </label>
                  <input type="password" name="user_address">

                  <button>Submit</button>
            </form>
      </div>
</body>

</html>