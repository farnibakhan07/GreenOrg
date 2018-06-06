<?php 
			session_start();
		    include_once('dbconfig.php');
?>				



<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Bobsled</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div class="main-wrapper-first">
			<div class="hero-area relative">
				<header>
					<div class="container">
						<div class="header-wrap">
							<div class="header-top d-flex justify-content-between align-items-center">
								<div class="logo">
								
							<!--		<a href="index.html"><img src="img/logo.png" alt=""></a>  -->
								</div>
								<div class="main-menubar d-flex align-items-center" style="color: white !important;">
									
								<nav class="">
								<a href="index.php">Home</a>
									<?php
										if(isset($_SESSION['username'])){
											//$variable = $_SESSION['username'];
									
											echo "Hi " . $_SESSION['username'] . "";
										   echo "<a href='logout.php'>Logout</a>";
										}
										else
										{
											echo "<a href='login.php'>Login/Register</a>";	
										}
									?>
								</nav>
								<div class="menu-bar"></div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<div class="banner-area">
					<div class="container">
						<div class="row justify-content-center generic-height align-items-center">
							<!--<div class="col-lg-8">-->
								<div class="banner-content text-center">
									<h1 class="text-white text-uppercase mb-10"><font size = "10">GREENIFY YOUR ORGANIZATION</font> <br> </h1><h5 class ="text-white text-uppercase mb-10">A tool for assessment of Green ICT practice level of organization & guidelines for improvement</h5> 
									<p class="text-white mb-30"></p>
									<br>;
									<a href="question.php" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Take the test</span><span class="lnr lnr-arrow-right"></span></a>
									<a href="currentLevelDetails.php" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">See previous result</span><span class="lnr lnr-arrow-right"></span></a>
									<a href="https://docs.google.com/forms/d/e/1FAIpQLSdU-V7o1x77PqoGuEbxiXLmAhG4vqT0WXheENBtrr-nJk4keg/viewform?usp=sf_link" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Give your feedback</span><span class="lnr lnr-arrow-right"></span></a>
								
								<!--</div>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-wrapper">
			<div class="working-process-area">
				<div class="container">
				<div class="section-title text-center">
								<h2>What is Green ICT Practice Level?</h2>
								<p><strong>Green ICT is a combination of practices that minimise the negative impact and optimise the positive impact of ICT on environment. In this system, Green ICT practice level is categorized into level 0-4, where level 0 indicates the lowest level and level 4 indicates the highest level.</strong> </p>
							</div>
				
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="section-title text-center">
								<h2>How the tool works?</h2>
								<p><strong>The tool is very easy to use. It works in the following 4 steps....</strong></p>
							</div>
						</div>
					</div>
					<div class="total-work-process d-flex flex-wrap justify-content-around align-items-center">
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-funnel"></span>
							</div>
							<h4 class="caption">Login/ <br/> Register <br/> Organization</h4>
						</div>
						<div class="work-arrow">
							<img src="img/elements/work-arrow.png" alt="">
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-layers"></span>
							</div>
							<h4 class="caption">Participate <br/>in <br/> Questionnaires</h4>
						</div>
						<div class="work-arrow">
							<img src="img/elements/work-arrow.png" alt="">
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-paw"></span>
							</div>
							<h4 class="caption">Visualize<br/>current Green<br/>ICT Practice Level</h4>
						</div>
						<div class="work-arrow">
							<img src="img/elements/work-arrow.png" alt="">
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-smile"></span>
							</div>
							<h4 class="caption">Get suggestions<br/> for<br/> improvement</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-wrapper">
			<!-- Start Feature Area -->
			
			<!-- End Feature Area -->
			<!-- Start Remarkable Wroks Area -->
		
			<!-- End Remarkable Wroks Area -->
			<!-- Start Story Area -->
			
			<!-- End Story Area -->


			<!-- Start Subscription Area -->
			
			<!-- End Subscription Area -->
			<!-- Start Contact Form -->
		
			<!-- End Contact Form -->
			<!-- Start Footer Widget Area -->
			<section class="footer-widget-area">
				
			<footer>
					<div class="container">
						<div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
							<div class="logo">
							
							</div>
							<div class="copy-right-text">Copyright &copy; 2018  |  All rights reserved to Farniba Khan</div>
							<div class="footer-social">
							
							</div>
						</div>
					</div>
				</footer>
			</section>
			<!-- End Footer Widget Area -->

		</div>




		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>

