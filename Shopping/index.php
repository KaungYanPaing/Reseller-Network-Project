<?php
include("confs/config.php");

$items = mysqli_query($conn, "SELECT name, photo1 FROM items");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reseller Network</title>

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
<!-- header -->
  <div class="header">
    <div class="container">
      <ul>
        <li><a id="title" href="#">2<span class="small">rd</span> Re-Seller Network</a></li>
        <li><a href="../index.php">Home</a></li> 
        <li><a href="#">Shop</a></li>  
        <li><a href="../about.php">About</a></li>  
        <li><a href="../contacts.php">Contact</a></li> 
      </ul>
    </div>
  </div>
    
  <!-- banner -->
  <div class="shop-banner">
    <ul>
      <li><a id="signup" href="user-signup.php">Sign Up <i class="fas fa-user-plus"></i></a></li>
      <li><a id="login" href="user-login.php">Login <i class="fas fa-sign-in-alt"></i></a></li>
    </ul>
  </div>


  <!-- Items -->
    <div class="main">
      <div class="container">
        <ul class="items">
          <?php while ($row = mysqli_fetch_assoc($items)): ?>
            <li>
              <img src="photo/<?php echo $row['photo1'] ?>" style="width: 150px;height: 150px;border-radius: 75px;"><br>
              <br>
              <b><?php echo $row['name'] ?></b>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        <div class="part1">
          <a href="#">About Us</a>
            <p>Life is hard enough already. Let us make it a little easier.</p>
          <a href="#">Contact Us</a>
            <p><i class="fas fa-phone-square-alt"></i> +959254825039</p>
            <p><i class="fas fa-envelope"></i> kaungyanpaing@gmail.com</p>
        </div>
        <div class="part2">
          <a href="#">Information</a>
            <p>About Us</p>
            <p>More Search</p>
            <p>Blog</p>
            <p>Testimonials</p>
            <p>Events</p>
        </div>
        <dir class="part3">
          <a href="#">Helpful Links</a>
            <p>Services</p>
            <p>Supports</p>
            <p>Terms & Condition</p>
            <p>Privacy Policy</p>
        </dir>
        <dir class="part4">
          <a id="facebook" href="#"><i class="fab fa-facebook-square"></i> Facebook</a><br>
          <a id="googleplus" href="#"><i class="fab fa-google-plus"></i> Google+</a><br>
          <a id="twitter" href="#"><i class="fab fa-twitter-square"></i> Twitter</a><br>
          <a id="instagram" href="#"><i class="fab fa-instagram"></i> Instagram</a>
        </dir>
      </div>
      <div class="foot">
        <p>&copy; Copyright <?php echo date("Y"); ?> - Powered By Kaung Yan Paing . All right reserved .</p>
      </div>
    </div>
  </body>
</html>
