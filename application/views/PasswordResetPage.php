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
        </div>
        <form action="#" method="post">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" value="<?php echo set_value('username');?>">
            </div>
            <p>Enter your username to reset password</p>
            <div class="form-group">
                <button type="submit">Send OTP</button>
            </div>
        </form>
        <div class="create-account">
            <a href="<?php echo base_url('login'); ?>" > Back to Login</a>
        </div>
    </div>
</body>
</html>
