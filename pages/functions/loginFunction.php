<?php

include "../../config/includes.php";

if (isset($_GET['user_name']) && isset($_POST['password'])) {

    $username = $_POST['user_name'];
    $password = $_POST['password'];

    $result = loginAuth($username, $password);

    if ($result == 1) {
        echo "<script> window.location.href = '../dashboard.php'</script>";
    }else  {
        echo "<script> window.location.href = '../login.php?status=false'</script>";
    }
}


