<?php
if (isset ($_GET['name'])){
    $name = $_GET['name'];
}else{
    $name = "NO Name";
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
    <h1>Welcome <?= $name ?> Have A Nice Day! </h1>
</body>

</html>