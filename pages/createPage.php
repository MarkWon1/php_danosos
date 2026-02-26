<!DOCTYPE html>
<html lang="en">
<?php
include "resources/header.php"
?>

<body>
    <?php
    include "resources/navigation.php"
    ?>

    <div class="">
        <h1 class="createuser">Create User</h1>
        <form action="functions/createMe.php" method="POST">
            <label for="" class="usna">Username</label>
            <input type="text" name="user name" class="usnas" placeholder="Username">
            <label for="" class="email">email</label>
            <input type="text" name="email" class="emails" placeholder="Email">
            <label for="" class="fname">first_name</label>
            <input type="text" name="first name" class="fnames" placeholder="First Name">
            <label for="" class="lname">last_name</label>
            <input type="text" name="last name" class="lnames" placeholder="Last Name">
            <label for="" class="mnum">mobile_num</label>
            <input type="text" name="mobile num" class="mnums" placeholder="Mobile Number">
            <label for="" class="bdate">birthdate</label>
            <input type="date" name="bithday" class="bdates" placeholder="Birthdate">
            <label for="" class="gender">gender</label>
            <input type="text" name="gender" class="genders" placeholder="Gender">
            <label for="" class="password">password</label>
            <input type="text" name="password" class="passwords" required placeholder="Password">
            <input type="password" name="confirm_password" placeholder="Confirm Password" class="passwords" required>
            <button type="submit" class="savebutton">Save</button>
        </form>
    </div>
</body>

</html>