<?php
$list =['Leo', 'Sangwon', 'Arno', 'Anxin', 'Heli', 'Solon', 'Shion', 'Niki', 'Markwon', 'Dex', 'Shade'];

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
<ul>
<?php
      foreach($list as $item){

?>


      <li> <?= $item?> </li>


<?php
      }
?>
</ul>

      <table>
            <tr>
                  <th>Name</th>
                  <th>Action</th>
            </tr>

      
     
<?php
      foreach($list as $item){

?>


      <tr>
            <td><?=  $item ?></td>
            <td><button>View</button></td>
      </tr>


<?php
      }
?>



      </table>
</body>
</html>