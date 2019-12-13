<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "myproject";
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
  mysqli_select_db($conn, $dbname);


  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  $photo1 = $_FILES['photo1']['name'];
  $photo2 = $_FILES['photo2']['name'];
  $photo3 = $_FILES['photo3']['name'];

  $tmp1 = $_FILES['photo1']['tmp_name'];
  $tmp2 = $_FILES['photo2']['tmp_name'];
  $tmp3 = $_FILES['photo3']['tmp_name'];

  $type1 = $_FILES['photo1']['type'];
  $type2 = $_FILES['photo2']['type'];
  $type3 = $_FILES['photo3']['type'];

  $user_id = $_POST['id'];

  if ($type1 == "image/jpeg" || $type1 == "image/jpg" || $type1 == "image/png") {
    move_uploaded_file($tmp1, "photo/$photo1");
  } if ($type2 == "image/jpeg" || $type2 == "image/jpg" || $type2 == "image/png") {
    move_uploaded_file($tmp2, "photo/$photo2");
  } if ($type3 == "image/jpeg" || $type3 == "image/jpg" || $type3 == "image/png") {
    move_uploaded_file($tmp3, "photo/$photo3");
  }
  $sql = "INSERT INTO items( name, description, price, photo1, photo2, photo3, user_id,
          created_date, modified_date)VALUES('$name', '$description', '$price', '$photo1',
          '$photo2', '$photo3', '$user_id', NOW(), NOW() )";

  mysqli_query( $conn, $sql );

  header("location: home.php");
?>
