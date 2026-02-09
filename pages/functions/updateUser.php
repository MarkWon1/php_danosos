<?php 
include "../../config/includes.php";

if(isset($_POST['user_id'])){

    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $userID = $_POST['user_id'];

    $result = updateUser($userID, $name, $age, $address, $user_name, $password);

     if($result){
         echo "<script> window.location.href = '../retrievePage.php' </script>";
     }else{
         echo "<script> window.location.href = '../viewpage.php?user_id = '".$userID."'</script>'";
     }
 } else {
     echo "<script> window.location.href = '../retrievePage.php </script>";
}


?>