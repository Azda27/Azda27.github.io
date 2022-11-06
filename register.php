<?php
require 'reg-func.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="wdoe.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"rel="stylesheet"/>
    <style>input::-webkit-outer-spin-button,input::-webkit-inner-spin-button{-webkit-appearance: none;margin: 0;}</style>
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" name="phone_number" id="phone_number" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            <i class='bx bxs-hide show-hide'></i>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="password2" id="password2" placeholder="Confirm your password" required>
            <i class='bx bxs-hide show-hide' ></i>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="register" value="Register">
        </div>
        <div class="login">
          <span>Don't have an account? <a href="login">login</a></span>
        </div>
    </div>
      </form>
    </div>
  </div>
  
<script src="script.js"></script>
</script>
</body>
</html>
