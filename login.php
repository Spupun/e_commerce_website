<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>

   
</head>

<body>

    <form action="login_action.php" method="post">
        <b>Username:</b><input type="text" name="email" placeholder="enter your name" required><br>
        <b>Password:</b><input type="password" name="password" placeholder="enter your password" required><br>
        <input type="submit" name="submit" value="submit"><br>
        <span>Don't have accout ?</span>
        <span><a href="signup.php">Sign Up here</a></span>
    </form>
</body>

</html>



<?php
