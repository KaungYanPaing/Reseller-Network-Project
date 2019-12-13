<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>

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
        <form class="signup-form" action="signup.php" method="post">
          <h1>User Sign Up</h1>
          <br>
          <hr>
          <br>
          <label for="username"><i class="fas fa-user"></i> Username</label>
          <br>
          <input type="text" name="username" placeholder="Username">
          <br><br>

          <label for="email"><i class="fas fa-envelope"></i> Email</label>
          <br>
          <input type="text" name="email" placeholder="Email">
          <br><br>

          <label for="phone"><i class="fas fa-phone-alt"></i> Phone</label>
          <br>
          <input type="text" name="phone" placeholder="09-xxx-xxx-xx">
          <br><br>

          <label for="address"><i class="fas fa-map-marker-alt"></i> Address</label>
          <br>
          <input type="text" name="address" placeholder="Your Address">
          <br><br>

          <label for="password"><i class="fas fa-key"></i> Password</label>
          <br>
          <input id="txtPassword" type="password" name="password" placeholder="Password">
          <br><br>

          <label for="confirm-password"><i class="fas fa-key"></i> Confirm Password</label>
          <br>
          <input id="txtConfirmPassword" type="password" name="confirm-password" placeholder="Confirm Password">
          <br><br>

          <input onclick="return Validate()" id="login-form-bottom" type="submit" value="Sign Up">
          <br><br>

          <a href="./index.php"><i class="fas fa-backward"></i> back</a>
        </form>
      </div>
    </div>
    <script type="text/javascript">
      function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
      }
    </script>
  </body>
</html>
