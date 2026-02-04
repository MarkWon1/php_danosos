<?php
include "../config/includes.php";

$list = retriveALLusers();
?>





<!DOCTYPE html>
<html lang="en">
<?php
include "resources/header.php";

?>

<body>
      <?php
      include "resources/navigation.php";

      ?>

      <h1>This Is Retrieve Page!!!</h1>

      <table>
            <tr>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Address</th>
                  <th>Username</th>
                  <th>Action</th>
            </tr>



            <?php
            foreach ($list as $item) {

            ?>


                  <tr>
                        <td><?= $item["name"] ?></td>
                        <td><?= $item["age"] ?></td>
                        <td><?= $item["address"] ?></td>
                        <td><?= $item["username"] ?></td>
                        <td><button>View</button></td>
                  </tr>


            <?php
            }
            ?>



      </table>

      

      <table>
            <tr>
                  <th>name</th>
                  <th>quantity</th>
                  <th>type</th>
                  <th>price</th>
                  <th>date added</th>
                  <th>Action</th>
            </tr>



            <?php
            foreach ($productslist as $products) {

            ?>


                  <tr>
                        <td><?= $item["prod_name"] ?></td>
                        <td><?= $item["prod_quantity"] ?></td>
                        <td><?= $item["prod_type"] ?></td>
                        <td><?= $item["prod_price"] ?></td>
                        <td><?= $item["prod_date_added"] ?></td>
                        <td><a href="viewpage.php?prod_id=<?= $products['prod_id'] ?>">View</a></td>
                  </tr>


            <?php
            }
            ?>



      </table>
</body>

</html>