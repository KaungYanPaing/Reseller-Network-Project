<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reseller Network</title>

	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/png" href="assets/icon/1.png">

	<!-- Style -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!-- Font Awsome -->
	<link rel="stylesheet" href="assets/icon/fontawesome/css/all.css">

	<!-- Font Style-->
	<link href="https://fonts.googleapis.com/css?family=Share&display=swap" rel="stylesheet"> 

	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
</head>
<body>

<!-- header -->
	<div class="header">
		<div class="container">
			<ul>
				<li><a id="title" href="#">2<span class="small">rd</span> Re-Seller Network</a></li>
				<li><a href="index.php">Home</a></li>	
				<li><a href="Shopping/index.php">Shop</a></li>	
				<li><a href="about.php">About</a></li>	
				<li><a href="contacts.php">Contact</a></li>	
			</ul>
		</div>
	</div>

<!-- banner -->
	<div class="contacts-banner">
		<h1>Contacts Us</h1>
	</div>

<!-- Section -->
<div class="contacts-section">
	<div class="contacts-container">
		<div class="contacts-form">
			<form class="contacts">
				<h1>Contacts Us</h1>
					<br>
					<hr>
					<br>
				<label for="name"><i class="fas fa-user"></i> Your Name</label>
					<br>
				<input type="text" name="name" placeholder="Enter Your Name">
					<br><br>

				<label for="email"><i class="fas fa-envelope"></i> Your Email</label>
					<br>
				<input type="text" name="email" placeholder="Enter Your Email">
					<br><br>

				<label for="message"><i class="fas fa-comment-alt"></i> Message</label>
        			<br>
        		<textarea name="message" placeholder="Message...." id="message"></textarea>
        			<br><br>

				<input id="contacts-form-bottom" type="submit" value="Send Message">
			</form>
		</div>

		<div class="location-form">
			<h2>Our Location</h2>
			<div class="mapouter">
				<div class="gmap_canvas">
					<iframe width="300" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=16.804496%2C%2096.122964&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
				</div>
			</div>

			<div class="info">
				<h1>Contant</h1>
				<h3><i class="fas fa-envelope"></i> Email</h3><p>kaungyanpaing@gmail.com</p>
				<h3><i class="fas fa-phone-alt"></i> Phone</h3><p>09692171853</p>
				<h3><i class="fas fa-map-marker-alt"></i> Address</h3><p>No(35), Obo street, KyeeMyinDaing Township, Yangon</p>
			</div>
		</div>
	</div>
</div>

<!-- footer -->
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