<?php 
function retriveALLusers(){
    include "connection.php";

    $sql = "SELECT * FROM user";
    $stmt = $conn -> prepare($sql);
    $stmt->execute();

    return $stmt->fetchALL(PDO::FETCH_ASSOC);
}

function loginAuth($username, $password){

    $sql = "SELECT * FROM user WHERE username = :username AND password = :password ";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute([
        "username" => $username,
        "password" => $password
    ]);

    $count = $stmt -> rowCount();

    return $count;

}
 
?>