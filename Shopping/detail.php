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
  <div class="userbar">
    <div class="container">
      <ul>
        <li><a id="title" href="#">2<span class="small">rd</span> Re-Seller Network</a></li>
        <li><a id="back" href="home.php"><i class="fas fa-backward"></i> back</a></li> 
      </ul>
    </div>
  </div>
    <?php
      include("confs/config.php");
      $id = $_GET['id'];
      $items = mysqli_query( $conn, "SELECT * FROM items WHERE id = $id");
      $row = mysqli_fetch_assoc($items);
     ?>
    <div class="detail">
      <div class="container">
        <div class="detail-content">
         <img src="photo/<?php echo $row['photo1'] ?>" width="200" height="200">
         <img src="photo/<?php echo $row['photo2'] ?>" width="200" height="200">
         <img src="photo/<?php echo $row['photo3'] ?>" width="200" height="200">

          <h2><?php echo $row['name'] ?></h2>
          <b id="price">$<?php echo $row['price'] ?></b>
          <p><?php echo $row['description'] ?></p>
          <hr>
          <?php
            $user_id = $row['user_id'];
          ?>
          <h2>Seller Infomation</h2>
          <?php
            $users = mysqli_query( $conn, "SELECT * FROM user WHERE id = $user_id");
            $row1 = mysqli_fetch_assoc($users);
          ?>
          <b>Name - </b><i><?php echo $row1['username'] ?></i><br>
          <b>Email - </b><i><?php echo $row1['email'] ?></i><br>
          <b>Phone - </b><i><?php echo $row1['phone'] ?></i><br>
          <b>Address - </b><i><?php echo $row1['address'] ?></i></b>
        </div>
      </div>
    </div>

    <!-- Footer -->
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
