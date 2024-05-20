<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/registerpage.css') ?>"> 
  <script src="<?php echo base_url('assets/javascript/jquery.js') ?>"> </script>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.0.0/backbone-min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Register</h1>
    <form id="register-form" method="POST" enctype="multipart/form-data">
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
      </div>
      <div class="button-container">
        <button type="submit" value="create" id="create">Submit</button>
      </div>
    </form>
    <div id="data"></div>
    <div id="error-message" style="color: red; display: none;"></div>
    <div id="success-message" style="color: green; display: none;"></div>
    <div class="login-account">
      <a href="<?php echo base_url('login'); ?>">Already have an account? Login</a>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $("#create").click(function(event) {
        event.preventDefault();
        var firstname = $("input#firstname").val();
        var lastname = $("input#lastname").val();
        var email = $("input#email").val();
        var username = $("input#username").val();
        var password = $("input#password").val();

        $.ajax({
          method: "POST",
          url: "<?php echo base_url(); ?>index.php/Welcome/register",
          dataType: 'JSON',
          data: {
            firstname: firstname,
            lastname: lastname,
            email: email,
            username: username,
            password: password
          },
          success: function(data) {
            if (data.status === 'error') {
              $("#error-message").text(data.message).show();
              $("#success-message").hide();
            } else {
              // console.log(data);
              // $("#data").load(location.href + " #data");
              // $("#register-form")[0].reset(); // Clear the form fields
              // $("#error-message").hide();
              // $("#success-message").text(data.message).show();
              

              window.location.href = "<?php echo base_url('login'); ?>";
              alert('Registration successful');
            }
          }
        });
      });
    });
  </script>
</body>
</html>
