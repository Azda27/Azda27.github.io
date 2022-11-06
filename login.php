<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="dwoowk.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"rel="stylesheet"/>
   </head>
<body>
  <div class="container">
    <div class="title">Login</div>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Paswword</span>
            <input type="password" name="paswword" id="paswword" placeholder="Enter your paswword" required>
            <i class='bx bxs-hide show-hide' ></i>
          </div>
        <div class="button">
          <input type="submit" name="login" value="Login">
        </div>
        <div class="register">
          <span>Don't have an account? <a href="register">Register</a></span>
        </div>
      </form>
    </div>
  </div>
  
<script src="script.js"></script>
</script>
</body>
</html>
