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
    <form action="#" method="post"> <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" required>
      </div>
      <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <i class="fas fa-eye" id="togglePassword"></i> </div>
      <div class="form-group">
        <label for="profilePic">Attach a Profile Picture</label>
        <input type="file" id="profilePic" name="profilePic">
      </div>
      <button type="submit">Register</button>
    </form>
  </div>
  <script src="https://kit.fontawesome.com/your_fontawesome_kit_id.js" crossorigin="anonymous"></script> </body>
</html>
