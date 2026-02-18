<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="facebook.css">

</head>

<body>
    <?php 
    include "functions/createPage.php";
    ?>
    <div class="container">
        <div class="left">
            <h1>facebook</h1>
            <p class="p">Connect with friends and the world
                <br> around you on Facebook.
            </p>
        </div>
    </div>
    <div class="loginbox">
        <input id="Email" type="text" class="side" placeholder="Email or phone number">
        <input id="password" type="password" class="side" placeholder="password">
        <button class="loginbutton" onclick="loginfunction()">Log In</button>
        <a href="#" class="forgotlink">Forgot password?</a>
        <hr>
        <button class="createbutton">Create a new account</button>
    </div>

    <div class="createpage"><a href="">Create a Page</a> for a celebrity,brand or business.</div>
    </div>
</body>
<script src="facebook.js"></script>

</html>