<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function psdMatch() {
            let a = document.getElementById('psd1').value;
            let b = document.getElementById('psd2').value;
            if (a != b) {
                alert("Passwords did not match! Please try again !!");
                return false;
            }
            // alert("You have successfully create your account !");

        }
    </script>
</head>
<body>
    <form action="signup_action.php" method="post" onsubmit="return psdMatch()">
        Name: <input type="text" name="name" placeholder="enter your name" required><br><br>
        Phone: <input type="number" name="phone" placeholder="enter your mobile" required><br><br>
        Email: <input type="email" name="email" placeholder="enter your email" required><br><br>
        Password: <input type="password" id="psd1" name="password" placeholder="enter your password" required><br><br>
        Confirm Password: <input type="password" name="confirm_password" id="psd2" placeholder="confirm your password" required><br><br>

        <input type="submit" name="send" value="Submit">
        <span>Alerady have account ? <span><a href="login.php">Login</a> here</span></span>
    </form>
</body>

</html>