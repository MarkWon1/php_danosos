<?php
include "../config/includes.php";

$list = retriveALLusers();
$productlist = retriveALLproducts();



if($_GET['status'] == 'ok'){
      echo "<script> alert('Value Deleted Successfully') </script>";
}else if ($_GET['status'] == 'no'){
      echo "<script> alert('Value Deleted Unsuccessfully') </script>";
}
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
                        <td>
                              <a href="viewpage.php?user_id=<?= $item['user_id'] ?>">View</a>
                              <a href="functions/deletefunction.php?deleteFrom=user&id=<?= $item['user_id']?>">Delete</a>
                        </td>
                  </tr>


            <?php
            }
            ?>



      </table>

      <br><br>

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
            foreach ($productlist as $product) {

            ?>


                  <tr>
                        <td><?= $product["prod_name"] ?></td>
                        <td><?= $product["prod_quantity"] ?></td>
                        <td><?= $product["prod_type"] ?></td>
                        <td><?= $product["prod_price"] ?></td>
                        <td><?= $product["prod_date_added"] ?></td>
                        <td><a href="viewpage.php?prod_id=<?= $product['prod_id'] ?>">View</a>
                        <a href="functions/deletefunction.php?deleteFrom=product&id=<?= $product['prod_id']?>">Delete</a>
                  </td>
                  </tr>


            <?php
            }
            ?>



      </table>
</body>

</html>