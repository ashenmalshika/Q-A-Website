<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/homepage.css') ?>">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="logo.png" alt="Logo" class="logo">
            <h1>Q & A</h1>
            <p>Find solutions, share knowledge, and connect with tech Experts.</p>
        </div>
        <form action="#" method="post">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Log In</button>
            </div>
            <span class="psw">Forgot password?</span>
        </form>
        <div class="create-account">
            <a href="<?php echo base_url('register'); ?>" > Create an account</a>
        </div>
    </div>
</body>
</html>
