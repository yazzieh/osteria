<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="styles.css" rel="stylesheet"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS library -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<!-- set page title -->
	<title>Contact Us | Osteria D'Alaura</title>
</head>
<body>
 	
 	<!-- menu bar -->
  <div id="website_title">	
  <h1 id="restaurant_name">Osteria D'Alaura</h1>
 	<nav class="sitenav">
					<ul id="nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="menu.html">Menu</a></li>
						<li><a href="location.html">Locations</a></li>
						<li><a href="contact.php" class="current">Contact Us</a></li>
            <li id="nav_address">1600 Chester Ave, Bremerton, WA 98337</li>
            <li id="nav_phone">(640) 733-7062</li>
       </div>     
					</ul>
				</nav>

	<!-- page banner -->
	<div class="section-title section-contact">
		<!-- set overlay on section -->
		<div class="overlay">
			<!-- define container -->
			<div class="container">
				<div class="row">
					<!-- set full width -->
					<div class="col-sm-12">
						<!-- main page title -->
						<h1 class="text-center text-white">Contact Us</h1>
						<!-- breadcrumb -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Contact Us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- page content -->
	<section class="section">
		<!-- define container -->
		<div class="container">
			<div class="row">
				<!-- 50% wide section -->
				<div class="col-sm-6">
					<!-- create contact details -->
					<div class="contact-detail">
						<i class="fa fa-user"></i>
						<span>Osteria D'Alaura</span>
					</div>
					<div class="contact-detail">
						<i class="fa fa-map-marker-alt"></i>
						<span>Olympic College</span>
					</div>
					<div class="contact-detail">
						<i class="fa fa-phone"></i>
						<span>(640) 733-7062</span>
					</div>
					<div class="contact-detail">
						<i class="fa fa-envelope"></i>
						<span>john@doe.com</span>
					</div>
					<!-- embed google map -->
					<div class="mapouter mt-4">
						<div class="gmap_canvas">
						<iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Olympic%20College&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0"></iframe>
						</div>
					</div>
				</div>
				<!-- 50% wide -->
				<div class="col-sm-6">
					<?php
	 					// check if form is submitted via POST method
	 					if(isset($_POST['submit'])){
	 						// get submitted data via POST 
	 						$full_name = $_POST['full_name'];
	 						$email = $_POST['email'];
	 						$phone = $_POST['phone'];
	 						$message = $_POST['message'];

	 						// print submitted info
	 						echo '
	 						<h2 class="text-center">Thank you for your message</h2>

	 						<br/>

	 						<p>Here are your submitted details:</p>

	 						<p><strong>Full name: </strong>'.$full_name.'</p>
	 						<p><strong>Email: </strong>'.$email.'</p>
	 						<p><strong>Phone: </strong>'.$phone.'</p>
	 						<p><strong>Message: </strong><br/>'.$message.'</p>

	 						<hr/>

	 						<!-- back button -->
	 						<a class="btn btn-primary" href="contact.php">Go back</a>';
	 					}
	 					else {
	 				?>
	 				<!-- sub title -->
					<h2 class="mb-4">Fill the following form</h2>
					<!-- contact form -->
					<form method="POST" action="" class="contact-form" onSubmit="return validateForm()">
						<!-- user full name -->
						<div class="form-group">
							<fieldset>
						    	<label class="control-label" for="full_name">Enter full name</label>
						    	<input type="text" class="form-control" id="full_name" name="full_name"  />
						  	</fieldset>
						</div>
						<!-- user email -->
						<div class="form-group">
							<fieldset>
						    	<label class="control-label" for="email">Enter email address</label>
						    	<input type="email" class="form-control" id="email" name="email"  />
						  	</fieldset>
						</div>
						<!-- user phone -->
						<div class="form-group">
							<fieldset>
						    	<label class="control-label" for="phone">Enter phone number</label>
						    	<input type="text" class="form-control" id="phone" name="phone"  />
						  	</fieldset>
						</div>
						<!-- user message -->
						<div class="form-group">
							<fieldset>
						    	<label class="control-label" for="message">Enter message</label>
						    	<textarea class="form-control" id="message" name="message" rows="4" ></textarea>
						  	</fieldset>
						</div>
						<!-- form submit button -->
						<button type="submit" name="submit" id="contact-submit" class="btn btn-primary">Send Message</button>
					</form>
					<?php
	 					}
	 				?>
				</div>
			</div>
		</div>
	</section>

	<!-- define page footer -->
	<footer>
Copyright &copy; <?php echo date('Y');?>. All rights are reserved

</footer>

	<!-- jQuery and Bootstrap JS libraries -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

	<!-- include custom js -->
	<script src="script.js"></script>
</body>
</html>