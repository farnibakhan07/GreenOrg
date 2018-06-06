<?php 
			session_start();
			include_once('dbconfig.php');
			if(isset($_REQUEST["Submission"]))
			{
			    
			    $user = $_REQUEST["userName"];
			    $pass =  $_REQUEST["passWord"];
			    $query = "Select * from user_info where user_name = '$user' && password = '$pass'";
			    $result = mysql_query(($query),($conn));
			   
							  if(mysql_num_rows($result) > 0)
							  {
							  	while($row = mysql_fetch_assoc($result))
							  	{
							  		$_SESSION['username'] = $row["user_name"];
			        				$_SESSION['user_id'] = $row["user_id"];
			        				
			        				//header( "Location: index.php" ); 
			        				echo "<script> window.alert('You are successfully logged in. If you want to participate in the test, click on the take the test button.If you want to see your previous result, click on the See previous result button')
    							window.location.href='index.php'</script>";

							  	}
							  	
							  }
			    else
			    {
			        //header( "Location: login.php" );
			    	echo "<script> window.alert('Failed to login')
    							window.location.href='login.php'</script>";
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
										<a href="register.php">Register</a>
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
	                	<!--<div class="col-lg-8 col-md-8" >-->
	                	    
								<h3 class="mb-30">Login</h3>
								
								 <div>Login is required for participating in the test and save result</div> 
								 <br>
								<form action="" method="post">
									<div class="mt-10">
										<input type="text" name="userName" placeholder="User Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Name'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="password" name="passWord" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Type'" required class="single-input">
									</div>
									
								    <div id="wasteQ1111">
							        <br>
							        <br>
						                <input type="submit" type = "submit" name="Submission" value="Login" class="genric-btn primary" id="confirm-btn" style="float: right" />
						                
						                <br>
						                <br>
						                <a style="float: right" href = "register.php"><strong>New to the website? <u><strong> Register</strong> </u><strong></a>
						                
						              
						               
						                
						            </div>
						            
								</form>
							<!--</div>-->
				
			
						
					
			
						
		
						
					
			</section>
		
			
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
			




		</div>
	



	</body>
</html>

