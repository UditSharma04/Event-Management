<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<?php  if (isset($_SESSION['username'])) : ?>
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blissful Events</title>
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assest/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
	<!-- navigation -->
	<nav class="navbar navbar-expand-lg  header " >



		<div class="container-fluid navigation">
			<div class="l">
				<a href="#logo-slide" class="navbar-brand">
					<img src="assest/images/logop.png" width="100px">
				</a>
				<h3 class="title" ><b>
					BLISSFUL EVENTS </b>
				</h3>
			</div>

			<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-traget="#MenuBar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="menubar">
				<div class="collapse navbar-collapse menubar-content" id="MenuBar">
					<ul class="navbar-nav space ">
						<li class="nav-item">
							<a href="#" class="nav-link menu-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="#about-us" class="nav-link menu-link">About Us</a>
						</li>
						<li class="nav-item">
							<a href="#services" class="nav-link menu-link">Services</a>
						</li>
						<li class="nav-item">
							<a href="blog.html" class="nav-link menu-link">Blog</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link menu-link">Events</a>
						</li>
						<li class="nav-item">
							<a href="#contact" class="nav-link menu-link">Contact us</a>
						</li>
					</ul>
					<a href="./register.php" >
						<button type="button" class="button" id="sign-up">
							Sign up <i class="fa fa-user"></i>
						</button></a>
					</div>
				</div>
			</div>
		</div>


	</nav>

	<!-- main section logo and slogan-->
	<div class="container-fluid bg-black section" id="logo-slide">
		<div><img src="assest/images/logotp.png" class="center" id="logo-section">
		</div>
		<p class="slogan-1 mt-5">Event Managing Assistance</p><p class="slogan-2">Celebrating life's special moments with style and elegance</p>
	</div>


	<!-- about section -->
	<div class="about container-fluid bg-black">

		<div class="container-fluid bg-black" id="about-us">
			<h3 class="about-heading"> <B>About</B> </h3>
			<div class="row about-us-row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6  ">


				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-1 p-4">
					<abbr title="feyg feufiaf eief fae ">ffef</abbr>ne advantage of using the Bootstrap 5 CDN:Many users already have downloaded Bootstrap 5 from jsDelivr when visiting another site. As a result, it will be loaded from cache when thee downl<br>ce a user requests a file from it, it will be served from the server closest to them, which also leads to faster loading time.JavaScript?Bootstrap 5 uses JavaScript for different components (like modals, tooltips, popovers etc). However, if you just use the CSS part of Bootstrap, you don't need them.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum h

				</div>


				<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-1 p-4 ">
					them, which also leads to faster loading time.JavaScript?Bootstrap 5 uses JavaScript for different components (like modals, tooltips, popovers etc). However, if you just use the CSS part of Bootstrap, you don't need them.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie

				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6  col-2 ">


				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6  ">


				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-1 p-4 ">
					them, which also leads to faster loading time.JavaScript?Bootstrap 5 uses Jaum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					them, which also leads to faster<br>as popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.




				</div>
			</div>

		</div>
	</div>


	<!-- services-form -->

	<div class="container-fluid bg-black service-form-section p-5">
		<h3 class="one-step-away-heading "> One Step Away from <bR>an Exquisite Celebration </h3>
		<a href="services-form.html"><button type="button" class="btn btn-lg get-start-btn mt-3 ">Get Started</button></a>


	<!-- one step away from a Exquisite celebration -->
	</div>
</div>

		<!-- carousel -->
	<div class="container-fluid bg-black p-5">
		<div class="carousel slide" id="demo" data-bs-ride="carousel">

			<div class="carousel-indicators">
				<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
				<button type="button" data-bs-target="#demo" data-bs-slide-to="1" ></button>
				<button type="button" data-bs-target="#demo" data-bs-slide-to="2" ></button>


			</div>

			<div class="carousel-inner">
				<div class="carousel-item active" >
					<img src="Assest/images/1.jpg" class="d-block w-100"  alt="slider-img">
				</div>
				<div class="carousel-item">
					<img src="assest/images/slider2.jpg" class="d-block w-100"  alt="slider-img">

				</div>
				<div class="carousel-item">
					<img src="assest/images/whit.jpg" class="d-block w-100"  alt="slider-img">

				</div>

			</div>

			<button type="button" class="carousel-control-prev" data-bs-target="#demo" data-bs-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</button>
			<button type="button" class="carousel-control-next" data-bs-target="#demo" data-bs-slide="next">
				<span class="carousel-control-next-icon"></span>
			</button>

		</div>
	</div>
</div>

<!-- contact us -->
<div class="container-fluid bg-black contact-us p-3 " id="contact">
		
	<div class="container-fluid contact-upper">
		<img src="assest/images/contactus-flip.png" class="contact-images">
		<h3 class="contact-heading ">Get In Touch</h3>
		<p class="contact-text">Want to get in touch? We'd love to hear from you.<br> Here's how you can reach us.....</p>
	</div>
	<div class="container-fluid contact-bottom">
		<div class="card crd-c pt-3">
			<span class="icon-contact "><i class="material-icons">&#xe0b0;</i></span>
			<h5 class="contact-card-heading pt-1"><b>Talk to Team</b></h5>
			<p class="contact-card-p p-3">Want to book a meeting with us for planning your event?<br><br> Contact us right now
			<br>+6378977734			
		</div>
		<div class="card crd-c pt-3">
			<span class="icon-contact "><i class="material-icons">&#xe0bf;</i></span>
			<h5 class="contact-card-heading pt-1"><b>Customer Support</b></h5>
			<p class="contact-card-p p-3">Need help or support from us?<br> Don't worry, we're here for you

				<br><br>
				<button type="button" class="contact-us-button btn  btn-md">
					Support
				</button>
			</p>
			
			
		</div>
	</div>
	<!-- services -->


<div class="container-fluid service-section" id="services">
	<pre class="services-text pt-5">E V E N T   P R O D U C T I O N   S E R V I C E S</pre>
	<p class="services-text-2 pt-1"><i>How can we help you make your next<br> better than it was last year?</i></p>

	<div class="card services-card mt-5">
		<a href="file:///C:/Users/H/OneDrive/Desktop/My%20Project/assest/images/services1.png">
			<img src="assest/images/services1.png" class="card-img" >
		</a>
		<h4 class="services-text-card pt-2">FUND RAISING, GALAS, COMPANY EVENTS</h4>
	</div>
	<div class="card services-card mt-5">

		<a href="file:///C:/Users/H/OneDrive/Desktop/My%20Project/assest/images/services2.png">
			<img src="assest/images/services2.png" class="card-img" >
		</a>
		<h4 class="services-text-card pt-2">LIVE PUBLIC EVENTS</h4>
		<!-- <p class="hidden-text">jdfhsu</p> -->
	</div>
	<div class="card services-card mt-5">

		<a href="file:///C:/Users/H/OneDrive/Desktop/My%20Project/assest/images/services3.png">
			<img src="assest/images/services3.png" class="card-img" >
		</a>
		<h4 class="services-text-card pt-2">SOCIAL & PERSONAL EVENTS</h4>

	</div>
</div>



</div>


<!-- footer -->


<footer class="container-fluid foot text-black p-5">
	<div class="row gx-5" >
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col-heading">
			<strong>Company</strong>	

		</span>
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col-heading">
			<strong>Get help </strong>	
		</span>
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col-heading">
			<strong>Follow us </strong>	
		</span>
	</div><br>
	<div class="row">
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col">
			<a href="#"><i class="fa fa-paw"></i> About Us</a>
		</span>
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col">
			<a href="#"><i class="fa fa-paw"></i> FAQ's</a>
		</span>
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col">
			<ul class="p-2">
				<li class="p-1">
					<a href=""><i class="fa fa-twitter-square "style="font-size:48px;"></i></a>
				</li>
				<li class="p-1">
					<a href=""><i class="fa fa-facebook-square "style="font-size:48px;"></i></a>
				</li>
				<li class="p-1">
					<a href=""><i class="fa fa-instagram "style="font-size:48px;"></i></a>
				</li>
				<li class="p-1">
					<a href=""><i class="fa fa-linkedin-square "style="font-size:48px;"></i></a>
				</li>
				<li class="p-1">
					<a href=""><i class="fa fa-pinterest "style="font-size:48px;"></i></a>
				</li>
				<li class="p-1">
					<a href=""><i class="fa fa-whatsapp "style="font-size:48px;"></i></a>
				</li>
				<li class="p-1">
					<a href=""><i class="fa fa-youtube-play "style="font-size:48px;"></i></a>
				</li>
			</ul>	

		</span>
	</div>
	<div class="row">
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col">
			<a href="#"><i class="fa fa-paw"></i> Our services</a>
		</span>
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col">
			<a href="#"><i class="fa fa-paw"></i> Online Portfolio</a>
		</span>
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col">

		</span>
	</div>
	<div class="row">
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col">
			<a href="#"><i class="fa fa-paw"></i> Privacy Policies</a>
		</span>
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col">
			<a href="#"><i class="fa fa-paw"></i> Online Payment</a>
		</span>
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col">
			<strong>Review </strong><i class="fa fa-thumbs-o-up"></i>

		</span>
	</div>
	<div class="row">
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col">
			<a href="#"><i class="fa fa-paw"></i> Affiliate Program</a>
		</span>
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col" style="color:darkslategrey; font-size: 20px;
	font-family: 'Noir Et Blanc';">
			<i class="fa fa-paw"></i> Contact us:<br>
			 +91 90348070<br>

		</span>
		<span class="col-sm-4 col-md-4 col-lg-4 footer-col">
			<textarea placeholder="  Write us feedback for our improvement." class="footer-feedback"></textarea>

		</span>
	</div>
</footer>



</body>
</html>

	<?php endif ?>

