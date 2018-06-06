<?php 
				session_start();
				include_once('dbconfig.php');
				if(!isset($_SESSION['username'])){
			        echo "<script>location.href= 'login.php'</script>";
			    }
			//	echo $_SESSION['user_id'];
			//	echo $_SESSION['username'];
				// if(isset($_SESSION['username'])){
				// 					//$smsg = "User already logged in";
				// 					//header('location: index.php');
				// 					echo "Hi " . $_SESSION['username'] . "";
								
				// 					echo "<a href='logout.php'>Logout</a>";
				// 					}
				// 	 else
			 //   {
			 //       //header( "Location: login.php" ); 
			 //       echo "<script>location.href= 'login.php'</script>";
			 //   }
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<style>
  .fb-share-button
{
transform: scale(2.0);
/*-ms-transform: scale(3.5);*/
/*-webkit-transform: scale(3.5);*/
/*-o-transform: scale(3.5);*/
/*-moz-transform: scale(3.5);*/
transform-origin: top left;
-ms-transform-origin: top left;
-webkit-transform-origin: top left;;
-moz-transform-origin:  top left;;
-webkit-transform-origin: top left;;
}
  </style>
			<div class="main-wrapper-first relative">
				<header>
					<div class="container">
						<div class="header-wrap">
							<div class="header-top d-flex justify-content-between align-items-center">
								<div class="logo">
									<!--<img src="img/logo.png" alt=""> -->
								</div>
								<div class="main-menubar d-flex align-items-center" style="color: white !important;">
								<nav class="">
									<a href="index.php">Home</a>
									<?php
										if(isset($_SESSION['username'])){
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
							<div class="col-lg-8">
								<div class="banner-content text-center">
									<h1 class="text-white text-uppercase mb-10">GREENIFY YOUR ORGANIZATION</h1>
									<p class="text-white">Find your Green ICT practice level and improve</p>
								</div>
							</div>
						</div>
					</div>
				</div>
	
				
				  
				<section class="button-area">
					<div class="container border-top-generic">
					<h3>Result of Green ICT Practices</h3>
					      <form>
	                        <div id="wasteQ11" style="text-align: left; color: black !important;"> 
	                        <br>
	                        <div class="fb-share-button" data-href="https://greenorg-farniba.c9users.io/finalLevel.php" data-size="large" data-mobile-iframe="true" width="88" height="0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share Result</a></div>
                     <?php
							
							$lvl= $_SESSION['user_id'];
						    // echo $_SESSION['user_id'];
							$queryR = "Select * from questionWiseLevel where user_id = '$lvl'";
							$resultR = mysql_query(($queryR),($conn));
							echo "<script>console.log( 'Debug Objects: " . $resultR . "' );</script>";
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	echo "<script>console.log( 'yep if' );</script>";
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$question1 = $row['question1'];
			        				$question2 = $row['question2'];
			        				$question3 = $row['question3'];
			        				$question4 = $row['question4'];	
			        				$question5 = $row['question5'];
			        				$question6 = $row['question6'];
			        				$question7 = $row['question7'];
			        				$question8 = $row['question8'];
			        				$question9 = $row['question9'];
			        				$question10 = $row['question10'];
			        				settype($total, "integer");
			        			//	echo "Your organization is in level:	" .$total;
							  	}
							  	
							  }
							  else{
							  	echo "<script>console.log( 'yep ifel' );</script>";
							  		$question1 = -1;
			        				$question2 = -1;
			        				$question3 = -1;
			        				$question4 = -1;	
			        				$question5 = -1;
			        				$question6 = -1;
			        				$question7 = -1;
			        				$question8 = -1;
			        				$question9 = -1;
			        				$question10 = -1;
							  }
							  
							  $queryR = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	echo "<script>console.log( 'yep if' );</script>";
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total = $row['current_level'];
			        				settype($total, "integer");
			        				echo "<br>";
			        				echo "<br>";
			        				echo "Your organization is in level:	" .$total;
							  	}
							  	
							  }
							  
							   if($total == '0')
						    {
						    	$tag = "Immatured";
						    }
						    else if($total == '1')
						    {
						    	$tag = "Novice";
						    }
						    else if($total == '2')
						    {
						    	$tag = "Begineer";
						    }
						    else if($total == '3')
						    {
						    	$tag = "Adequate";
						    }
						    else if($total == '4')
						    {
						    	$tag = "Expert";
						    }
						    else {
						    	$tag="No Information";
						    }
							  
							echo "<br><strong> ".$tag."&nbsp;in Green ICT practices</strong>" ;
							  
							  echo "<br>";
							  echo "<br>";
							  
							 echo "Current situation of the Company:";
							   echo "<br>";
							   
		//ifadded to check if no results
							   
							 if(mysql_num_rows($resultR) > 0)
							  {  
							  $sql2 = "Select que1 FROM level_description where level_number = '$question1'";
							  $result2 = mysql_query(($sql2),($conn));
							  
							  if(mysql_num_rows($result2) > 0)
							  {
							  	echo "<script>console.log( 'ewrtwet' );</script>";
							  	while($row = mysql_fetch_assoc($result2))
							  	{
							  		echo "<br> 1: ". $row["que1"]. "<br>";
							  		 ;
							  	}
							  }
							  else 
							  {
							  	echo "no results";
							  }
							  
							  //question 2
							  
							  $sql2 = "Select que2 FROM level_description where level_number = '$question2'";
							  
							  $result2 = mysql_query(($sql2),($conn));
							  if(mysql_num_rows($result2) > 0)
							  {
							  	while($row = mysql_fetch_assoc($result2))
							  	{
							  		echo "2: ". $row["que2"]. "<br>";
							  		 ;
							  	}
							  }
							  else 
							  {
							  	echo "no results";
							  }
							
							//question 3
							$sql2 = "Select que3 FROM level_description where level_number = '$question3'";
							  
							  $result2 = mysql_query(($sql2),($conn));
							  if(mysql_num_rows($result2) > 0)
							  {
							  	while($row = mysql_fetch_assoc($result2))
							  	{
							  		echo "3: ". $row["que3"]. "<br>";
							  		 ;
							  	}
							  }
							  else 
							  {
							  	echo "no results";
							  }
								
							//question 4
							
							$sql2 = "Select que4 FROM level_description where level_number = '$question4'";
							  
							  $result2 = mysql_query(($sql2),($conn));
							  if(mysql_num_rows($result2) > 0)
							  {
							  	while($row = mysql_fetch_assoc($result2))
							  	{
							  		echo "4: ". $row["que4"]. "<br>";
							  		 ;
							  	}
							  }
							  else 
							  {
							  	echo "no results";
							  }
							  
							  //question 5
							  $sql2 = "Select que5 FROM level_description where level_number = '$question5'";
							  
							  $result2 = mysql_query(($sql2),($conn));
							  if(mysql_num_rows($result2) > 0)
							  {
							  	while($row = mysql_fetch_assoc($result2))
							  	{
							  		echo "5: ". $row["que5"]. "<br>";
							  		 ;
							  	}
							  }
							  else 
							  {
							  	echo "no results";
							  }
							  
							  //question 6
							  $sql2 = "Select que6 FROM level_description where level_number = '$question6'";
							  
							  $result2 = mysql_query(($sql2),($conn));
							  if(mysql_num_rows($result2) > 0)
							  {
							  	while($row = mysql_fetch_assoc($result2))
							  	{
							  		echo "6: ". $row["que6"]. "<br>";
							  		 ;
							  	}
							  }
							  else 
							  {
							  	echo "no results";
							  }
							  
							  //question 7
							  $sql2 = "Select que7 FROM level_description where level_number = '$question7'";
							  
							  $result2 = mysql_query(($sql2),($conn));
							  if(mysql_num_rows($result2) > 0)
							  {
							  	while($row = mysql_fetch_assoc($result2))
							  	{
							  		echo "7: ". $row["que7"]. "<br>";
							  		 ;
							  	}
							  }
							  else 
							  {
							  	echo "no results";
							  }
							  
							  //question 8
							  
							  $sql2 = "Select que8 FROM level_description where level_number = '$question8'";
							  
							  $result2 = mysql_query(($sql2),($conn));
							  if(mysql_num_rows($result2) > 0)
							  {
							  	while($row = mysql_fetch_assoc($result2))
							  	{
							  		echo "8: ". $row["que8"]. "<br>";
							  		 ;
							  	}
							  }
							  else 
							  {
							  	echo "no results";
							  }
							  
							  //question 9
							  
							  $sql2 = "Select que9 FROM level_description where level_number = '$question9'";
							  
							  $result2 = mysql_query(($sql2),($conn));
							  if(mysql_num_rows($result2) > 0)
							  {
							  	while($row = mysql_fetch_assoc($result2))
							  	{
							  		echo "9: ". $row["que9"]. "<br>";
							  		 ;
							  	}
							  }
							  else 
							  {
							  	echo "no results";
							  }
							  
							  //question 10
							  $sql2 = "Select que10 FROM level_description where level_number = '$question10'";
							  
							  $result2 = mysql_query(($sql2),($conn));
							  if(mysql_num_rows($result2) > 0)
							  {
							  	while($row = mysql_fetch_assoc($result2))
							  	{
							  		echo "10: ". $row["que10"]. "<br>";
							  		 ;
							  	}
							  }
							  else 
							  {
							  	echo "no results";
							  }
							  }
							  else {
							  	echo "no results";
							  }
							  
				?>
				
		
				</div>
				<br>
				<input type="button" name="Submit" value="Guidelines for improvement" class="genric-btn primary" id="confirm-btn" style="float: right"; onclick="window.location.href='improvement.php'"/>
					<input type="button" name="Submit" value="Give your feedback about the system" class="genric-btn primary" id="confirm-btn" style="float: left"; onclick="window.location.href='https://docs.google.com/forms/d/e/1FAIpQLSdU-V7o1x77PqoGuEbxiXLmAhG4vqT0WXheENBtrr-nJk4keg/viewform?usp=sf_link'"/>
				</form>
						
							
								 	
			
							
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