<?php
  include("confs/config.php");

  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $password = sha1($_POST['password']);

  $sql = "INSERT INTO user(username, email, phone, address, password, created_date)
          VALUES('$username', '$email', '$phone', '$address', '$password', NOW())";

  mysqli_query($conn, $sql);

  header("location: index.php");
 ?>
