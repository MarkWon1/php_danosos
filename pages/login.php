<?php

    if(isset($_GET['status']) && $_GET['status'] == "false"){
        echo "<script> alert('Username And Password is Incorrect') </script>";
    }



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php 
    include "functions/createPage.php"
    ?>
    <h1>Login</h1>
    <form action="functions/loginFunction.php" method="POST">
       <div class="div1"> <input type="text" id="username" class="username" name="username" placeholder="username">
        <input type="password" id="password" class="password" name="password" placeholder="password">
        <button type="submit">Log in</button></div>
        </div>
    </form>
    
  <div> <button type="submit">Creat New Account</button></div>
   <a href="createPage.php" class="fogetlink">Forget Password</a>
</body>
</html>