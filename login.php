<?php include('process1.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="login-box">
    <h1>Login</h1>
    <form  method="POST">
        <label>Email</label>
            <input type="email" name="Email" placeholder="Enter your email">
            <label>Password</label>
            <input type="text" name="Password" placeholder="password">
            <input type="submit" value="LOGIN">
    </form>
    <p class="para-2">Forget Password? <a href="forget.php">Get new password</a></p>
    <p class="para-2">Not have a account? <a href="singup.php">Sign up here</a></p>
   </div> 
</body>
</html>