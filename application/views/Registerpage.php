<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/registerpage.css') ?>"> 
</head>
<body>
  <div class="container">
    <h1>Register</h1>
    <form action="#" method="post"> 
      <div class="form-group">
        <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
      </div>
      <div class="form-group">
        <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
      </div>
      <div class="form-group">
        <input type="text" id="email" name="email" placeholder="E-mail" required>
      </div>
      <div class="form-group">
        <input type="text" id="username" name="username" placeholder="Username" required>
      </div>
      <div class="form-group">
        <input type="password" id="password" name="password" placeholder="Password" required>
        <i class="fas fa-eye" id="togglePassword"></i> </div>
      <div class="form-group">
        <label for="profilePic">Attach a Profile Picture</label>
        <input type="file" id="profilePic" name="profilePic">
      </div>
      <div class="button-container">
        <button type="submit">Submit</button>
      </div>
    </form>
    <div class="login-account">
      <a href="<?php echo base_url('login'); ?>" > Already have an account. Login</a>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/your_fontawesome_kit_id.js" crossorigin="anonymous"></script> </body>
</html>
