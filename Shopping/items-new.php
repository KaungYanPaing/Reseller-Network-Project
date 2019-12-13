<?php
  session_start();
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

    <div class="menubar">
      <div class="container">
        <ul>
          <li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
          <li><a href="home.php?id=<?php echo $_SESSION['id'] ?>"><i class="fas fa-user-cog"></i> My Items</a></li>
          <li><a href="items-new.php"><i class="fas fa-cart-plus"></i> Add New Item</a></li>
        </ul>
      </div>
    </div>
    
    <div class="new-items">
      <!-- Add-Items-Form -->
      <div class="add-items-form">
        <form class="signup-form" action="items-add.php" method="post" enctype="multipart/form-data">
          <h1>Add New Items</h1>
          <br>
          <hr>
          <br>

          <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">

          <label for="name"><i class="fas fa-calendar-day"></i> Item Name</label>
          <br>
          <input type="text" name="name" placeholder="Items Name" id="name">
          <br><br>

          <label for="description"><i class="far fa-file-alt"></i> Description</label>
          <br>
          <textarea name="description" placeholder="Description" id="description"></textarea>
          <br><br>

          <label for="price"><i class="fas fa-tag"></i> Price</label>
          <br>
          <input type="text" name="price" placeholder="price" id="price">
          <br><br>

          <label for="photo1"><i class="fas fa-image"></i> Add Photo1</label>
          <br>
          <input type="file" name="photo1">
          <br><br>

          <label for="photo2"><i class="fas fa-image"></i> Add Photo2</label>
          <br>
          <input type="file" name="photo2">
          <br><br>

          <label for="photo3"><i class="fas fa-image"></i> Add Photo3</label>
          <br>
          <input type="file" name="photo3">
          <br><br>

          <input id="add-items-form-bottom" type="submit" value="Add Items">
          <br><br>
          <a href="./home.php"><i class="fas fa-backward"></i> back</a>
        </form>
      </div>

      <div class="items-about-box">
          <h1>2<span class="small">rd</span> Re-Seller Network Rules</h1>
          <br>
          <img src="../assets/img/rules.png" width="200px" height="200px">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>

          <br><br>

          <h1>Online Market</h1>
          <br>
          <img src="../assets/img/section2.png" width="100px" height="100px">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>

    <!-- Footer -->
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
