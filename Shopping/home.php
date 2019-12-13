<?php
  include("confs/config.php");

  session_start();
  if(!isset($_SESSION['loggedin'])) {
    header('location: index.php');
    exit();
  }

  $items = mysqli_query($conn, "SELECT * FROM items");

  $cats = mysqli_query($conn, "SELECT * FROM categories");
  if (isset($_GET['cat'])) {
    $cat_id = $_GET['cat'];
    $items = mysqli_query($conn, "SELECT * FROM items WHERE category_id = $cat_id");
  } else {
    $items = mysqli_query($conn, "SELECT * FROM items");
  }

  if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $items = mysqli_query($conn, "SELECT * FROM items WHERE user_id = $user_id");
  }
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
  <div class="userbar">
    <div class="container">
      <ul>
        <li><a id="title" href="#">2<span class="small">rd</span> Re-Seller Network</a></li>
        <li><a id="" href="#"><?php echo $_SESSION['name'] ?> <i class="fas fa-user-circle"></i></a></li> 
        <li><a id="" href="logout.php">Logout <i class="fas fa-sign-out-alt"></i></a></li>   
      </ul>
    </div>
  </div>

    <div class="main">
      <div class="menubar">
        <div class="container">
          <ul>
            <li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="home.php?id=<?php echo $_SESSION['id'] ?>"><i class="fas fa-user-cog"></i> My Items</a></li>
            <li><a href="items-new.php"><i class="fas fa-cart-plus"></i> Add New Item</a></li>
          </ul>
        </div>
      </div>


      <div class="container">
        <ul class="items">
          <?php while ($row = mysqli_fetch_assoc($items)): ?>
          <li>
            <img src="photo/<?php echo $row['photo1'] ?>" style="width: 150px;height: 150px;border-radius: 75px;">
            <b><?php echo $row['name'] ?></b>
            <b id="price">$<?php echo $row['price'] ?></b>
            <a href="detail.php?id=<?php echo $row['id'] ?>">Detail</a>
          </li>
        <?php endwhile; ?>
        </ul>
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
