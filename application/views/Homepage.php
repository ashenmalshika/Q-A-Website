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
            <h1>Q & A</h1>
            <p>Find solutions, share knowledge, and connect with tech Experts.</p>
        </div>
        <form action="Login/LoginUser" method="post">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" value="<?php echo set_value('username');?>">
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <?php if ($this->session->flashdata('msg')): ?>
                <div class="msg"><?php echo $this->session->flashdata('msg'); ?></div>
            <?php endif; ?>
            <div class="form-group">
                <button type="submit">Log In</button>
            </div>
            <a class="psw" href="<?php echo base_url('reset_password'); ?>" >Forgot password?</a>
        </form>
        <div class="create-account">
            <a href="<?php echo base_url('register'); ?>" > Create an account</a>
        </div>
    </div>
</body>
</html>
