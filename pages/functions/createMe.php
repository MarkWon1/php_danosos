<?php

include "../../config/includes.php";


if (isset($_POST['user_name']) && isset($_POST['email']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['mobile_num']) && isset($_POST['birthdate']) && isset($_POST['gender']) && isset($_POST['password'])) {
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $mobilenum = $_POST['mobile_num'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($password !== $confirm) {
    echo "<script> alert('Passwords do not match. Please try again.')</script>";
    exit();
}

    $sql = "INSERT INTO facebook_users (username, email, first_name, last_name, mobile_num, birthdate, gender, password)
            VALUES (
                :username,
                :email,
                :first_name,
                :last_name,
                :mobile_num,
                :birthdate,
                :gender,
                :password)";

    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "username" => $user_name,
        "email" => $email,
        "first_name" => $first_name,
        "last_name" => $last_name,
        "mobile_num" => $mobile_num,
        "birthdate" => $birthdate,
        "gender" => $gender,
        "password" => $password
    ]);

    if ($stmnt) {
        echo "<script> window.location.href = '../login.php'</script>";
    } else {
        echo "not save";
    }
}