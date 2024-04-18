<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Q & A</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css') ?>">
</head>
<body>
  <div class="container">
    <header>
      <h1>Q & A</h1>
      <div class="profile">
        <img src="profile_picture.jpg" alt="Profile Picture">
        <span>Ashen Kadawathage</span>
      </div>
    </header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Search Question</a></li>
        <li><a href="#">Post a Question</a></li>
        <li><a href="#">View my Questions</a></li>
        <li><a href="#">Profile</a></li>
      </ul>
    </nav>
    <section id="search-section">
      <h2>About Us</h2>
      <input type="text" placeholder="Search a Question ?">
      <div class="search-result">
        <p>Search result 1 display here</p>
        <p>Search result 2 display here</p>
      </div>
    </section>
    <button id="logout-btn">Logout</button>
  </div>
  <script src="script.js"></script>
</body>
</html>
