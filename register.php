<?php 
			session_start();
			include_once('dbconfig.php');

            if((isset($_POST['company_name']))&&(isset($_POST['company_type']))&&(isset($_POST['user_name']))&&(isset($_POST['password']))&& !empty($_POST))
            
			{
			    $company_name =  $_POST['company_name'];
			    $company_type =  $_POST['company_type'];
			    $user_name =  $_POST['user_name'];
			    $password =  $_POST['password'];
			    //check here for duplicate username, send error.
			    
			    (mysql_query("INSERT INTO user_info(org_name,org_type,user_name,password) 
         VALUES('$company_name', '$company_type', '$user_name', '$password')"));
         
         $queryR = "SELECT * from user_info where user_name = '$user_name'";
         
         $result4 = mysql_query(($queryR),($conn));
         
							  if(mysql_num_rows($result4) > 0)
							  {
							  	while($row = mysql_fetch_assoc($result4))
							  	{
							  		
			        				$_SESSION['username'] = $row["user_name"];
			        				$_SESSION['user_id'] = $row["user_id"];
			        				
			        			//	header( "Location: login.php" );
			        			//	echo 'Registration successful, please login for participate in the test or see previous results';
			        			
    							echo "<script> window.alert('Thanks for the registration. Please login for participating in the test or see previous results')
    							window.location.href='index.php'</script>";

			        			
			        				
			        			
							  	}
							  }
								else
							      {
								 header( "Location: register.php" ); 
							 	 //echo "<script type='text/javascript'>alert('Value not inserted');</script>";
							 	 	echo "<script> window.alert('Sorry, Registration failed')
    							</script>";
						     
									}
		}
		
?>

			

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/question_js.js" type="text/javascript"></script>
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
		<div class="main-wrapper-first relative">
			<header>
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
							<!--	<img src="img/logo.png" alt=""> -->
							</div>
							<div class="main-menubar d-flex align-items-center" style="color: white !important;">
								<nav class="">
										<a href="index.php">Home</a>
										<a href="login.php">Login</a>
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
						<div class="col-lg-8">
							<div class="banner-content text-center">
								<h1 class="text-white text-uppercase mb-10">GREENIFY YOUR ORGANIZATION</h1>
								<p class="text-white">Find your Green ICT practice level and improve</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			
			<!-- Start Button -->
			<section class="button-area">
				<div class="container border-top-generic" style = "color: black !important;">
	                	<!--<div class="col-lg-8 col-md-8">-->
								<h3 class="mb-30">Registration</h3>
								<form action="" method="post">
									<div class="mt-10">The values from the below fields will be used for research purpose. Identification of the organization will be kept ananomyous.
									<br>
									<br>
										<input type="text" name="company_name" placeholder="Organization Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Name'" required class="single-input">
									</div>
									<!--<div class="mt-10">-->
									<!--	<input type="text" name="company_type" placeholder="Organization Type (E.g., IT, finance etc...)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Type'" required class="single-input">-->
									<!--</div>-->
									<div class="mt-10">
									      <select name="company_type" required class="single-input">
									      	<option value="">Select Company Type</option>
										    <option value="IT">IT</option>
										    <option value="Finance">Finance</option>
										    <option value="Marketing">Marketing</option>
										    <option value="Educational">Educational</option>
										  </select>
								    </div>
									<div class="mt-10" >
										<input type="text" name="user_name" placeholder="User Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'User Name'" required class="single-input-primary" style= "font-weight: 5">
									</div>
									<div class="mt-10">
										<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input-accent">
									</div>
								
									
								    <div id="wasteQ111">
							        <br>
							        <br>
						                <!--<input type="submit" name="submit" value="Register" class="genric-btn primary" id="confirm-btn" style="float: right" onclick="document.location.href='question.php';"/>-->
						                <input type="submit" value="Register"class="genric-btn primary" id="confirm-btn" style="float: right"/>
									</div>
								</form>
						<!--</div>-->
				
			
						
					
			
						
		
						
					
			</section>
			<!-- End Button -->
			<!-- Start Align Area -->
			
			<!-- End Align Area -->
			<!-- Start Footer Widget Area -->
			
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
	


	<!--// <script src="js/vendor/jquery-2.2.4.min.js"></script>-->
	<!--// 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>-->
	<!--// 	<script src="js/vendor/bootstrap.min.js"></script>-->
	<!--// 	<script src="js/jquery.ajaxchimp.min.js"></script>-->
	<!--// 	<script src="js/owl.carousel.min.js"></script>-->
	<!--// 	<script src="js/jquery.nice-select.min.js"></script>-->
	<!--// 	<script src="js/jquery.magnific-popup.min.js"></script>-->
	<!--// 	<script src="js/main.js"></script> -->
	</body>
</html>

