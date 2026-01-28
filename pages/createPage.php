<!DOCTYPE html>
<html lang="en">
<?php
include "resources/header.php";

?>

<body>
      <?php
      include "resources/navigation.php";

      ?>
      <div>
            <h1>Create User!!!</h1>
            <form action="functions/createuser.php" method="POST">
                  <label for=""> Name </label>
                  <input type="text" name="user_name">
                  <label for=""> age </label>
                  <input type="number" name="user_age">
                  <label for=""> Address </label>
                  <input type="text" name="user_address">

                  <button>Submit</button>
            </form>
      </div>

      <div>
            <h1>Create Prod!!!</h1>
            <form action="functions/createproducts.php" method="POST">
                  <label for=""> Prod </label>
                  <input type="text" name="prod_name">
                  <label for=""> Quan </label>
                  <input type="number" name="prod_quantity">
                  <label for=""> Type </label>
                  <input type="text" name="prod_type">
                  <label for=""> Price </label>
                  <input type="text" name="prod_price">
                  <label for=""> Date </label>
                  <input type="date" name="prod_date_added">
                  

                  <button>Submit</button>
            </form>
      </div>
</body>

</html>