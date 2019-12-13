<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <!-- Favicon Icon -->
      <link rel="shortcut icon" type="image/png" href="../assets/icon/1.png">

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Font Awsome -->
      <link rel="stylesheet" href="../assets/icon/fontawesome/css/all.css">

    <!-- Font Style -->
      <link href="https://fonts.googleapis.com/css?family=Share&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">

  </head>
  <body>
    <div class="login-container">
      <div class="login">
        <form class="login-form" action="login.php" method="post">
          <h1>User Login</h1>
          <br>
          <hr>
          <br>
          <label for="username"><i class="fas fa-user"></i> Username</label>
          <br>
          <input type="text" name="username" placeholder="Enter Your Username">

          <br><br>

          <label for="password"><i class="fas fa-key"></i> Password</label>
          <br>
          <input type="password" name="password" placeholder="Enter Your Password">

          <br><br>
          <input id="login-form-bottom" type="submit" value="Login">
          <br><br>
          <a href="./index.php"><i class="fas fa-backward"></i> back</a>
        </form>
      </div>
    </div>
  </body>
</html>
