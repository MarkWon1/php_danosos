<?php 
include "../../config/includes.php";

if(isset($_POST['user_name']) && isset ($_POST['user_age']) && isset($_POST['user_address'])){
    $user_name = $_POST['user_name'];
    $user_age = $_POST['user_age'];
    $user_address = $_POST['user_address'];

    $sql = "INSERT INTO user (name, age, address) VALUES (:name, :age, :address)";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute([
        "name" => $user_name,
        "age" => $user_age,
        "address" => $user_address
    ]);

    if($stmt){
        echo "<script> window.location.href = '../dashboard.php' </script>";
    }else{
        echo "not saved";
    }
}
?>