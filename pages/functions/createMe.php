<?php

include "../../config/includes.php";


if (isset($_POST['user_name']) && isset($_POST['email']) && isset($_POST['first_name']) && isset($_POST['last_name'])
     && isset($_POST['mobile_num']) && isset($_POST['bithday']) && isset($_POST['gender']) && isset($_POST['password'])) {
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $mobilenum = $_POST['mobile_num'];
    $birthdate = $_POST['bithday'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($password !== $confirm) {
    echo "<script> alert('Passwords do not match. Please try again.')</script>";
    exit();
}

    $sql = "INSERT INTO account (username, email, first_name, last_name, mobile_num, bithday, gender, password)
            VALUES (
                :username,
                :email,
                :first_name,
                :last_name,
                :mobile_num,
                :bithday,
                :gender,
                :password)";

    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "username" => $username,
        "email" => $email,
        "first_name" => $firstname,
        "last_name" => $lastname,
        "mobile_num" => $mobilenum,
        "bithday" => $birthdate,    
        "gender" => $gender,
        "password" => $password]);

    if ($stmnt) {
        echo "<script> window.location.href = '../login.php'</script>";
    } else {
        echo "not save";
    }
}