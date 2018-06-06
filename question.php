<?php 
				session_start();
				include_once('dbconfig.php');
			
				if(!isset($_SESSION['username'])){
			        echo "<script>location.href= 'login.php'</script>";
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
	
				
				<!-- Start Button -->
				<section class="button-area">
					<div class="container border-top-generic">
						
						<div id="pcQ1">
							<form id = "myForm">	
							<h2 class="text-heading">Section 1 of 10: Power management strategies for Computers</h2> 
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">Do you have practices to turn off computers after office hour? 
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio1" id="default-radio1" name="myRadio1" value="1" onclick = "elecout()"; />
												<label for="default-radio1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio" >
												<input type="radio" class="myRadio1" id="default-radio2" name="myRadio1" value="0"   onclick = "elecout()"; />
												<label for="default-radio2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
									
										<br>
										<div id = "elecOut" style="display:none;">
										<h5 class="mb-30">Do you unplug computers from electrical outlets after office hour? 
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio2" id="default-radio3" name="myRadio2" value="2"  > 
												<label for="default-radio3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio2" id="default-radio4" name="myRadio2" value="1" > 
												<label for="default-radio4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
										
									
									
						
							<!--<input type="button" name="Submit" value="Next" class="genric-btn primary" id="confirm-btn" style="float: right" onclick="return q1levelDetection();"/>-->
							
							</div>
							</div>
								<input type="button" name="Submit" value="Next" class="genric-btn primary" id="confirm-btn" style="float: right" onclick="return q1levelDetection();"/>
						</form>
						</div>
					
					
						<div id="pcQ2" style="display:none;">
							<form id = "myForm">	
								<h3 class="text-heading">Section 2 of 10: Power management strategies for Computers</h3> 
							
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">Which of the following practices do you have in case of inactivity?
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio3" id="default-radio5" name="myRadio3" value="3" onclick = "que3a()"; /> 
												<label for="default-radio5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Turn&nbsp;off</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio3" id="default-radio6" name="myRadio3" value="1" onclick = "que3b()";> 
												<label for="default-radio6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Screensaver</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio3" id="default-radio7" name="myRadio3" value="2" onclick = "que3c()";> 
												<label for="default-radio7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sleep</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio3" id="default-radio8" name="myRadio3" value="3" onclick = "que3d()";> 
												<label for="default-radio8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>None&nbsp;of&nbsp;the&nbsp;above</strong></label>		
											</div>
										</div>
									
										<br/>
										<br/>
								
							
					
								
							</div>
							
							
								<div id="pcQ3opta" style="display:none;">
							<!--<form id = "myForm">	-->
							
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">Do you use automated software to turn off your computers?
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio4" id="default-radio9" name="myRadio4" value="0"> 
												<label for="default-radio9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
													
											
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio4" id="default-radio10" name="myRadio4" value="1"> 
												<label for="default-radio10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
										
										
										
										<br/>
										<br/>
								
							
						
							
							</div>
							
						
						</div>
						
							<div id="pcQ3optc" style="display:none;">
							<!--<form id = "myForm">	-->
							
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">After how much time do you put display and system of computers into sleep mode respectively?
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio5" id="default-radio11" name="myRadio5" value="0"> 
												<label for="default-radio11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>More&nbsp;than&nbsp;20&nbsp;mintues,&nbsp;more&nbsp;than&nbsp;60&nbsp;minutes</strong></label>		
													
											
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio5" id="default-radio12" name="myRadio5" value="1"> 
												<label for="default-radio12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>More&nbsp;than&nbsp;20&nbsp;minutes,&nbsp;30&nbsp;-&nbsp;60&nbsp;minutes</strong></label>		
											</div>
										</div>
										
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio5" id="default-radio13" name="myRadio5" value="1"> 
												<label for="default-radio13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>5&nbsp;-&nbsp;20&nbsp;minutes,&nbsp;30&nbsp;-&nbsp;60&nbsp;minutes</strong></label>		
											</div>
										</div>
										
										
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio5" id="default-radio14" name="myRadio5" value="1"> 
												<label for="default-radio14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>5&nbsp;-&nbsp;20&nbsp;minutes,&nbsp;More&nbsp;than&nbsp;60&nbsp;minutes</strong></label>		
											</div>
										</div>
										
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio5" id="default-radio15" name="myRadio5" value="1"> 
												<label for="default-radio15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Don't&nbsp;know</strong></label>		
											</div>
										</div>
										
										
										<br/>
										<br/>
							
							</div>
							
					
						</div>
					
							
							
							<input type="button" name="Submit" value="Next" class="genric-btn primary" id="confirm-btn" style="float: right" onclick="return q2levelDetection();"/>
								<input type="button" name="Submit" value="Back" class="genric-btn primary" id="confirm-btn" style="float: left" onclick="return back1();"/> 
						</form>
						</div>	
						
					
						
						
						<div id="pcQ4" style="display:none;">
								<form id = "myForm">	
								
							
							<h3 class="text-heading">Section 3 of 10: Power Management of Computers</h3> 
							
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">Have you taken any consideration to reduce the number of computers in your company?
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio6" id="default-radio16" name="myRadio6" value="0" onclick="reduceOptab()"> 
												<label for="default-radio16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio6" id="default-radio17" name="myRadio6" value="1" onclick="reduceOptab()"> 
												<label for="default-radio17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
										<br/>
										<br/>
								
							
					
						</div>
						
						<div id="pcQ4optab" style="display:none;">
							<!--<form id = "myForm">	-->
							
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">Which of the following situation exists in the company?
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio7" id="default-radio18" name="myRadio7" value="0" onclick="reduceOptaba()"> 
												<label for="default-radio18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Multiple&nbsp;desktop&nbsp;/&nbsp;laptop&nbsp;allocated&nbsp;for&nbsp;each&nbsp;employee</strong></label>		
													
											
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio7" id="default-radio19" name="myRadio7" value="1" onclick="reduceOptabb()"> 
												<label for="default-radio19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Multiple&nbsp;laptops&nbsp;are&nbsp;allocated&nbsp;for&nbsp;each&nbsp;employee&nbsp;but&nbsp;no&nbsp;desktop&nbsp;PC&nbsp;exists</strong></label>		
											</div>
										</div>
										
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio7" id="default-radio20" name="myRadio7" value="1" onclick="reduceOptabc()"> 
												<label for="default-radio20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>One&nbsp;laptop&nbsp;is&nbsp;allocated&nbsp;for&nbsp;each&nbsp;employee</strong></label>		
											</div>
										</div>
										<br/>
										<br/>
								
							
						
							
							</div>
							
					
						</div>
						
							<div id="pcQ4optabc" style="display:none;">
								
							
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">Do you use thin client or energy star rated computers in your company?
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio8" id="default-radio21" name="myRadio8" value="0"> 
												<label for="default-radio21">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
													
											
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio8" id="default-radio22" name="myRadio8" value="1"> 
												<label for="default-radio22">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
										
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio8" id="default-radio97" name="myRadio8" value="1"> 
												<label for="default-radio97">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Don't&nbsp;know</strong></label>		
											</div>
										</div>
									
										<br/>
										<br/>
								
							
						
							</div>
							
							
					
						</div>
						
						
								<input type="button" name="Submit" value="Next" class="genric-btn primary" id="confirm-btn" style="float: right" onclick="return q5levelDetection();"/> 
								<input type="button" name="Submit" value="Back" class="genric-btn primary" id="confirm-btn" style="float: left" onclick="return back2();"/> 
						</form>
							</div>
							
					<div id="printerQ5" style="display:none;">
								<form id = "myForm">	
								
							
							<h3 class="text-heading">Section 4 of 10: Power Management of Imaging Equipment</h3> 
							
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">Do you have practices to turn off (printers/scanners/photocopiers) after office hour? 
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio9" id="default-radio23" name="myRadio9" value="0"  onclick="unplugprinter()"> 
												<label for="default-radio23">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio9" id="default-radio24" name="myRadio9" value="1"  onclick="unplugprinter()">  
												<label for="default-radio24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
										<br/>
										<br/>
								</div>
							<div id = "unplugPrinter" style="display:none;">
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">Do you unplug (printers/scanners/photocopiers) after office hour? 
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio10" id="default-radio25" name="myRadio10" value="0"> 
												<label for="default-radio25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio10" id="default-radio26" name="myRadio10" value="1"> 
												<label for="default-radio26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
										<br/>
										
										</div>
										</div>
											<input type="button" name="Submit" value="Next" class="genric-btn primary" id="confirm-btn" style="float: right" onclick="return q6levelDetection();"/> 
											<input type="button" name="Submit" value="Back" class="genric-btn primary" id="confirm-btn" style="float: left" onclick="return back3();"/> 
						</form>
							</div>
							
							<div id="printerQ6" style="display:none;">
								<form id = "myForm">	
								
							
							<h3 class="text-heading">Section 5 of 10: Power management of imaging equipment</h3> 
							
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">Which of the following practices do you have when printers/scanners/photocopiers remain inactive? 
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio11" id="default-radio27" name="myRadio11" value="0" onclick = "turnoff()"> 
												<label for="default-radio27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Turn&nbsp;off</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio11" id="default-radio28" name="myRadio11" value="1" onclick = "powerSaving()"> 
												<label for="default-radio28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Power&nbsp;saving&nbsp;mode&nbsp;/&nbsp;low&nbsp;power&nbsp;mode</strong></label>		
											</div>
										</div>
										</div>
										<br/>
										
										<div id="printerQ6optb" style="display:none;">
										<!--<form id = "myForm">	-->
									<div class="single-element-widget mt-30">
									<h5 class="mb-30">Have your (printers/scanners/photocopiers) enabled to sleep mode when idle in power saving mode? 
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio12" id="default-radio29" name="myRadio12" value="0" onclick = "turnoff()" > 
												<label for="default-radio29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio12" id="default-radio30" name="myRadio12" value="1" onclick = "turnoff()"> 
												<label for="default-radio30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
										<br/>
										<br/>
										
										
								
							
					
							
							
							</div>
							</div>
							
									<div id="printerQ6opta" style="display:none;">
										<!--<form id = "myForm">	-->
									<div class="single-element-widget mt-30">
									<h5 class="mb-30">Which of the following do you use to turn off devices/power management of (printers/scanners/photocopiers)? 
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio13" id="default-radio31" name="myRadio13" value="0"> 
												<label for="default-radio31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Timer&nbsp;switch</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio13" id="default-radio32" name="myRadio13" value="1"> 
												<label for="default-radio32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Smart&nbsp;Power&nbsp;Strip</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio13" id="default-radio33" name="myRadio13" value="1"> 
												<label for="default-radio33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>None&nbsp;of&nbsp;the&nbsp;above</strong></label>		
											</div>
										</div>
										<br/>
										<br/>
							</div>
							</div>
							<input type="button" name="Submit" value="Next" class="genric-btn primary" id="confirm-btn" style="float: right" onclick="return q7levelDetection();"/> 
							<input type="button" name="Submit" value="Back" class="genric-btn primary" id="confirm-btn" style="float: left" onclick="return back4();"/> 
						</form>
							
							</div>
					
					<div id="paperSavingQ7" style="display:none;">
								<form id = "myForm">	
								
							
							<h3 class="text-heading">Section 6 of 10: Paper saving from ICT equipment</h3> 
							
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">Which of the following practices do you have for paper saving from ICT equipment?  
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio14" id="default-radio34" name="myRadio14" value="0" onclick = "papervanish1()"> 
												<label for="default-radio34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Do&nbsp;not&nbsp;have&nbsp;any&nbsp;practices&nbsp;yet</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio14" id="default-radio35" name="myRadio14" value="1" onclick = "papersavingq2()"> 
												<label for="default-radio35">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Use&nbsp;recycled&nbsp;paper&nbsp;for&nbsp;printing</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio14" id="default-radio36" name="myRadio14" value="2" onclick = "papersavingq2()"> 
												<label for="default-radio36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Set&nbsp;duplex&nbsp;booklet&nbsp;and&nbsp;grayscale&nbsp;defaults&nbsp;for&nbsp;printing</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio14" id="default-radio99" name="myRadio14" value="2" onclick = "papersavingq2()"> 
												<label for="default-radio99">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Others</strong></label>		
											</div>
										</div>
										<br/>
							</div>
							
								<div id="paperQ2" style="display:none;">
										<!--<form id = "myForm">	-->
									<div class="single-element-widget mt-30">
									<h5 class="mb-30">Which of the following do you maintain for printers? 
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio15" id="default-radio37" name="myRadio15" value="0" onclick = "papersavingvanish()"> 
												<label for="default-radio37">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Private&nbsp;use&nbsp;of&nbsp;printers</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio15" id="default-radio38" name="myRadio15" value="1" onclick = "papersavingq3()"> 
												<label for="default-radio38">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Collect&nbsp;/&nbsp;centralized</strong></label>		
											</div>
										</div>
										
									
										<br/>
									</div>
								</div>
								
									<div id="paperQ3" style="display:none;">
										<!--<form id = "myForm">	-->
									<div class="single-element-widget mt-30">
									<h5 class="mb-30">Do locked printing feature enabled in the imaging equipment (e.g.,printer)?
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio16" id="default-radio39" name="myRadio16" value="0"> 
												<label for="default-radio39">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio16" id="default-radio40" name="myRadio16" value="1"> 
												<label for="default-radio40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
										
									
										<br/>
									</div>
								</div>
							
							<div id="paperQ4" style="display:none;">
										<!--<form id = "myForm">	-->
									<div class="single-element-widget mt-30">
									<h5 class="mb-30">Do you use energy star rated imaging equipment (e.g.,printer)?*
									<span class="more-info">ENERGY STAR® is the government-backed symbol for energy efficiency, providing simple, credible, and unbiased information that consumers and businesses rely on to make well-informed decisions. <a href = "https://www.energystar.gov/"><u>More details</u></a></span>
									</h5>
									
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio17" id="default-radio41" name="myRadio17" value="0"> 
												<label for="default-radio41">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio17" id="default-radio42" name="myRadio17" value="1"> 
												<label for="default-radio42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
										
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio17" id="default-radio96" name="myRadio17" value="1"> 
												<label for="default-radio96">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Don't&nbsp;know</strong></label>		
											</div>
										</div>
									
										<br/>
									</div>
								</div>
					
								<div id="paperQ5" style="display:none;">
										<!--<form id = "myForm">	-->
									<div class="single-element-widget mt-30">
									<h5 class="mb-30">Do you use multifunctinal imaging equipment in your organization (e.g.,printer)?*
									<span class="more-info">Multifunction peripheral devices often have a base function with one or more added capabilities.E.g.,Printer/Scanner/Copier MFP: Performs all three functions and sometimes faxing as well.Cost savings and lower space requirements make multifunctional peripherals a practical choice for many people who would ordinarily have to buy separate devices. </span>
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio18" id="default-radio43" name="myRadio18" value="0"> 
												<label for="default-radio43">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio18" id="default-radio44" name="myRadio18" value="1"> 
												<label for="default-radio44">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
										<br/>
									</div>
								</div>
							
								<input type="button" name="Submit" value="Next" class="genric-btn primary" id="confirm-btn" style="float: right" onclick="return q8levelDetection();"/> 
								<input type="button" name="Submit" value="Back" class="genric-btn primary" id="confirm-btn" style="float: left" onclick="return back5();"/> 
						</form>
							</div>
							
						
							<div id="videoQ8" style="display:none;">
							<form id = "myForm">	
							<h3 class="text-heading">Section 7 of 10: Power Management of Video Conferencing Suite</h3> 
							
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">Do you use video conferencing suite in your organization?
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio19" id="default-radio45" name="myRadio19" value="0"  onclick = "videoq2()"> 
												<label for="default-radio45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio19" id="default-radio46" name="myRadio19" value="1" onclick = "videovanish()"> 
												<label for="default-radio46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
										<br/>
								</div>
							
							
								<div id="videoQ2" style="display:none;">
									
									<div class="single-element-widget mt-30">
										<h5 class="mb-30">Do you have practices to turn off video conferencing suite after office hour?
										</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio21" id="default-radio47" name="myRadio21" value="0" onclick = "videovanish2()"> 
												<label for="default-radio47">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio21" id="default-radio48" name="myRadio21" value="0" onclick = "videostandby()"> 
												<label for="default-radio48">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
										<br/>
										</div>
										</div>
										
										
										<div id="videoStandby" style="display:none;">
									
											<div class="single-element-widget mt-30">
												<h5 class="mb-30">Do you have practices to standby video conferencing suite after office hour?
												</h5>
											<div class="switch-wrap d-flex justify-content-between"> 
												<div class="primary-radio">
													<input type="radio" class="myRadio22" id="default-radio49" name="myRadio22" value="0" onclick = "afterstandby()"> 
													<label for="default-radio49">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
												</div>
											</div>
											<div class="switch-wrap d-flex justify-content-between">
												<div class="primary-radio">
													<input type="radio" class="myRadio22" id="default-radio50" name="myRadio22" value="1" onclick = "afterstandby()"> 
													<label for="default-radio50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
												</div>
											</div>
											<br/>
											</div>
										</div>
										
										<div id="videoQ9" style="display:none;">
								
											
							
											<div class="single-element-widget mt-30">
												<h5 class="mb-30">Which of the following practices do you have in between calls?
												</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio23" id="default-radio51" name="myRadio23" value="0" onclick = "nextvideo()"> 
												<label for="default-radio51">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Static&nbsp;image&nbsp;is&nbsp;displayed</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio23" id="default-radio52" name="myRadio23" value="1" onclick = "nextvideo()">
												<label for="default-radio52">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Screen&nbsp;is&nbsp;switched&nbsp;to&nbsp;standby&nbsp;mode</strong></label>		
											</div>
										</div>
										<br/>
										</div>
										</div>
										
										<div id = "videoQ91" style="display:none;"> 
											<div class="single-element-widget mt-30">
												<h5 class="mb-30">Do you use automated software to power down devices? 
												</h5>
											<div class="switch-wrap d-flex justify-content-between"> 
												<div class="primary-radio">
													<input type="radio" class="myRadio24" id="default-radio53" name="myRadio24" value="0"> 
													<label for="default-radio53">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
												</div>
											</div>
											<div class="switch-wrap d-flex justify-content-between">
												<div class="primary-radio">
													<input type="radio" class="myRadio24" id="default-radio54" name="myRadio24" value="1"> 
													<label for="default-radio54">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
												</div>
											</div>
											<br/>
											</div>
									</div>
										
										<input type="button" name="Submit" value="Next" class="genric-btn primary" id="confirm-btn" style="float: right" onclick="return q9levelDetection();"/> 
										<input type="button" name="Submit" value="Back" class="genric-btn primary" id="confirm-btn" style="float: left" onclick="return back6();"/> 
										</form>
										</div>
										
										
					
							
								
										
									 
										
									
					
							<div id="serverQ10" style="display:none;">
							<form id = "myForm">	
							<h3 class="text-heading">Section 8 of 10: IT Load Management of Server</h3> 
							
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">Do you have several  independent servers with low utilization in your organization? 
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio25" id="default-radio55" name="myRadio25" value="0"  onclick = "serverq3()"> 
												<label for="default-radio55">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio25" id="default-radio56" name="myRadio25" value="1" onclick = "vanishserver()"> 
												<label for="default-radio56">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
											</div>
										</div>
										<br/>
								</div>
							
								<div id="serverQ3" style="display:none;">
									
											<div class="single-element-widget mt-30">
												<h5 class="mb-30">Do you decomposed your unused servers?
												</h5>
											<div class="switch-wrap d-flex justify-content-between"> 
												<div class="primary-radio">
													<input type="radio" class="myRadio27" id="default-radio60" name="myRadio27" value="0" onclick = "serverq2()"> 
													<label for="default-radio60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
												</div>
											</div>
											<div class="switch-wrap d-flex justify-content-between">
												<div class="primary-radio">
													<input type="radio" class="myRadio27" id="default-radio61" name="myRadio27" value="1" onclick = "serverq2()"> 
													<label for="default-radio61">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
												</div>
											</div>
											<br/>
											</div>
										</div>
							
								<div id="serverQ2" style="display:none;">
									
									<div class="single-element-widget mt-30">
										<h5 class="mb-30">Have you implemented virtualization with these servers?
										</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio26" id="default-radio57" name="myRadio26" value="0"> 
												<label for="default-radio57">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Planning&nbsp;but&nbsp;not&nbsp;implemented&nbsp;yet</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio26" id="default-radio58" name="myRadio26" value="1" onclick = "serverq4()"> 
												<label for="default-radio58">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio26" id="default-radio59" name="myRadio26" value="1"> 
												<label for="default-radio59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Do&nbsp;not&nbsp;have&nbsp;plan&nbsp;to&nbsp;virtualize</strong></label>		
											</div>
										</div>
										<br/>
										</div>
										</div>
										
										
										
										
										
										<div id="serverQ4" style="display:none;">
									
											<div class="single-element-widget mt-30">
												<h5 class="mb-30">Do you use energy efficient servers?
												</h5>
											<div class="switch-wrap d-flex justify-content-between"> 
												<div class="primary-radio">
													<input type="radio" class="myRadio28" id="default-radio62" name="myRadio28" value="0"> 
													<label for="default-radio62">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
												</div>
											</div>
											<div class="switch-wrap d-flex justify-content-between">
												<div class="primary-radio">
													<input type="radio" class="myRadio28" id="default-radio63" name="myRadio28" value="1"> 
													<label for="default-radio63">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No</strong></label>		
												</div>
											</div>
												<div class="switch-wrap d-flex justify-content-between">
												<div class="primary-radio">
													<input type="radio" class="myRadio28" id="default-radio98" name="myRadio28" value="1"> 
													<label for="default-radio98">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Don't&nbsp;know</strong></label>		
												</div>
											</div>
											<br/>
											</div>
										</div>
										
										<input type="button" name="Submit" value="Next" class="genric-btn primary" id="confirm-btn" style="float: right" onclick="return q12levelDetection();"/>  
										<input type="button" name="Submit" value="Back" class="genric-btn primary" id="confirm-btn" style="float: left" onclick="return back7();"/> 
										</form>
										</div>
						
							<div id="coolingQ11" style="display:none;">
							<form id = "myForm">	
							<h3 class="text-heading">Section 9 of 10: Cooling Management of ICT equipment</h3> 
							
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">Have you implemented any practices for ICT cooling management? 
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio29" id="default-radio64" name="myRadio29" value="0" onclick = "cooling()"> 
												<label for="default-radio64">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Planning&nbsp;but&nbsp;not&nbsp;implemented&nbsp;yet</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio29" id="default-radio65" name="myRadio29" value="1" onclick = "coolingq2()"> 
												<label for="default-radio65">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Yes</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio29" id="default-radio66" name="myRadio29" value="1" onclick = "cooling()"> 
												<label for="default-radio66">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Do&nbsp;not&nbsp;have&nbsp;any&nbsp;plan</strong></label>		
											</div>
										</div>
										<br/>
								</div>
							
							
								<div id="coolingQ2" style="display:none;">
									
									<div class="single-element-widget mt-30">
										<h5 class="mb-30">Which of the following have you implemented for cooling management of ICT equipment?
										</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio30" id="default-radio67" name="myRadio30" value="0"> 
												<label for="default-radio67">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Enclosures&nbsp;around&nbsp;server&nbsp;racks</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio30" id="default-radio68" name="myRadio30" value="1"> 
												<label for="default-radio68">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Variable&nbsp;speed&nbsp;fan&nbsp;drives&nbsp;in&nbsp;AC&nbsp;units</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio30" id="default-radio69" name="myRadio30" value="1"> 
												<label for="default-radio69">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Airflow&nbsp;management&nbsp;devices&nbsp;(e.g.,structured&nbsp;cabling&nbsp;system,&nbsp;diffiusers&nbsp;and&nbsp;blanking&nbsp;panels</strong></label>		
											</div>
										</div>
										
											<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio30" id="default-radio95" name="myRadio30" value="1"> 
												<label for="default-radio95">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>None&nbsp;of&nbsp;the&nbsp;above</strong></label>		
											</div>
										</div>
										<br/>
										</div>
										</div>
									
										
										<input type="button" name="Submit" value="Next" class="genric-btn primary" id="confirm-btn" style="float: right" onclick="return q13levelDetection();"/>
										<input type="button" name="Submit" value="Back" class="genric-btn primary" id="confirm-btn" style="float: left" onclick="return back8();"/> 
										</form>
										</div>
					
					
					<div id="wasteQ10" style="display:none;">
								<form id = "myForm">	
								
							
							<h3 class="text-heading">Section 10 of 10: Management of E-waste disposal</h3> 
							
								<div class="single-element-widget mt-30">
									<h5 class="mb-30">How do you dispose e-wastes produced in your company?
									
									</h5>
										<div class="switch-wrap d-flex justify-content-between"> 
											<div class="primary-radio">
												<input type="radio" class="myRadio31" id="default-radio70" name="myRadio31" value="0"> 
												<label for="default-radio70">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Dispose&nbsp;with&nbsp;regular&nbsp;trash</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio31" id="default-radio71" name="myRadio31" value="1"> 
												<label for="default-radio71">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Dispose&nbsp;to&nbsp;appropriate&nbsp;container,&nbsp;separating&nbsp;from&nbsp;regular&nbsp;waste</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio31" id="default-radio72" name="myRadio31" value="2"> 
												<label for="default-radio72">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sell&nbsp;to&nbsp;second&nbsp;hand&nbsp;shop&nbsp;or&nbsp;donate</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio31" id="default-radio73" name="myRadio31" value="3"> 
												<label for="default-radio73">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Return&nbsp;to&nbsp;the&nbsp;producer/supplier</strong></label>		
											</div>
										</div>
										<div class="switch-wrap d-flex justify-content-between">
											<div class="primary-radio">
												<input type="radio" class="myRadio31" id="default-radio74" name="myRadio31" value="4"> 
												<label for="default-radio74">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Recycling&nbsp;through&nbsp;WEEE&nbsp;business&nbsp;organization&nbsp;in&nbsp;the&nbsp;locality</strong></label>		
											</div>
										</div>
										<br/>
										<br/>
								
							
						<!--	<button onclick="levelDetection()" class="genric-btn primary" id="confirm-btn" style="float: right";>Next</button> -->
							<input type="button" name="Submit" value="Finish" class="genric-btn primary" id="confirm-btn" style="float: right" onclick="return q10levelDetection();"/>
							<input type="button" name="Submit" value="Back" class="genric-btn primary" id="confirm-btn" style="float: left" onclick="return back9();"/> 
							</div>
							
						</form>
							</div>
							
						
							
								 	
			
							
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
		
	
	
	
		</body>
	</html>

