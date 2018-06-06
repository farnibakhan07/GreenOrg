<?php 
				session_start();
				include_once('dbconfig.php');
				if(!isset($_SESSION['username'])){
			        echo "<script>location.href= 'login.php'</script>";
			    }
				// echo $_SESSION['user_id'];
				// echo $_SESSION['username'];
				
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
					<div class="container border-top-generic" style = "color: black !important;">

	                        <div id="wasteQ12"> 
	                        <h2 class="text-heading">Guidelines for Improvement</h2>
                     			<select id ="sel1" onchange = "myFunction()">
									<option value ="">Select ...</option>
									<option value ="1" >Management of shutting down computers </option>
									<option value ="2" >Power management of computers during inactivity </option>
									<option value ="3" >Reduction of computers for power management </option>
									<option value ="4" >Power Management of Imaging equipment (Printers/scanners/photocopiers)</option>
									<option value ="5" >Reduction of number of Imaging equipment (Printers/scanners/photocopiers)</option>
									<option value ="6" >Paper saving from ICT equipment</option>
									<option value ="7" >Power Management of video conferencing suite</option>
									<option value ="8" >IT Load Reduction Management of Server</option>
									<option value ="9" >Cooling management of ICT equipment</option>
									<option value ="10" >Management of E-waste disposal</option>
									<option value = "11">Overall Improvement suggestions</option>
									
									
								</select>
						 	
		
							</div>
							
							<div id="pc1Improvement" style="display:none;">
							
							<?php
							
							$lvl= $_SESSION['user_id'];
						    // echo $_SESSION['user_id'];
						    
						    $querycheckT = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultcheckT = mysql_query(($querycheckT),($conn));
						   
						    if(mysql_num_rows($resultcheckT) > 0){
							$queryR = "Select * from questionWiseLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total = $row['question1'];
			        				settype($total, "integer");
			        				echo "<br>";
			        				echo "<strong>Current level for management of shutting down computers: </strong>" .$total;
							  	}
							  }
							  $total1 = $total + 1;
							  $queryR = "Select * from improvement where level_num = '$total1'";
							  $resultR = mysql_query(($queryR),($conn));
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total1 = $row['ques1'];
			        				echo "<br>";
			        				echo "<br> <strong>Immediate Recommended Action: </strong><br> " .$total1;
							  	}
							  }
							  
							$queryR = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$totalcurrentLevel = $row['current_level'];
			        				settype($totalcurrentLevel, "integer");
			        				//echo "Your organization is in level:	" .$total;
							  	}
							  	
							  }
							  
							  $totalLevel = $totalcurrentLevel + 1;
							  if($totalLevel == '0')
						    {
						    	$tag = "Immatured";
						    }
						    else if($totalLevel == '1')
						    {
						    	$tag = "Novice";
						    }
						    else if($totalLevel == '2')
						    {
						    	$tag = "Begineer";
						    }
						    else if($totalLevel == '3')
						    {
						    	$tag = "Adequate";
						    }
						    else if($totalLevel== '4')
						    {
						    	$tag = "Expert";
						    }
						    echo "<br>";
						    echo "<br><strong> Guideline to next level(".$tag."&nbsp;level of Green ICT practices):</strong>";
						    
						    
							$queryR = "Select * from improvement where level_num = '$totalLevel'";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$pcImprovementNextLevel = $row['ques1'];
			        				
			        				echo "<br> " .$pcImprovementNextLevel;
							  	}
							  	
							  }
						    }
						    else {
						    	echo "No results yet.";
						    }
							?>
							</div>
							
							
							<div id="pc2Improvement" style="display:none;">
							
							<?php
							
							$lvl= $_SESSION['user_id'];
						    // echo $_SESSION['user_id'];
						    $querycheckT = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultcheckT = mysql_query(($querycheckT),($conn));
						   
						    if(mysql_num_rows($resultcheckT) > 0){
							$queryR = "Select * from questionWiseLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total = $row['question2'];
			        				settype($total, "integer");
			        				echo "<br>";
			        				echo "<strong>Current level for power management of computers during inactivity: </strong>" .$total;
							  	}
							  	
							  }
							  
							  
							  $total1 = $total + 1;
							  
							  $queryR = "Select * from improvement where level_num = '$total1'";
					
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total1 = $row['ques2'];
			        				echo "<br>";
			        				echo "<br> <strong> Immediate Recommended Action: <br> </strong> " .$total1;
							  	}
							  	
							  }
							  
							  $queryR = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";

							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$totalcurrentLevel = $row['current_level'];
			        				settype($totalcurrentLevel, "integer");
			        				//echo "Your organization is in level:	" .$total;
							  	}
							  	
							  }
							  
							  $totalLevel = $totalcurrentLevel + 1;
							  if($totalLevel == '0')
						    {
						    	$tag = "Immatured";
						    }
						    else if($totalLevel == '1')
						    {
						    	$tag = "Novice";
						    }
						    else if($totalLevel == '2')
						    {
						    	$tag = "Begineer";
						    }
						    else if($totalLevel == '3')
						    {
						    	$tag = "Adequate";
						    }
						    else if($totalLevel== '4')
						    {
						    	$tag = "Expert";
						    }
						    echo "<br>";
						    echo "<br> <strong> Guideline to next level(".$tag."&nbsp;level of Green ICT practices):</strong>";
						    
						    
							$queryR = "Select * from improvement where level_num = '$totalLevel'";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$pcImprovementNextLevel = $row['ques2'];
			        				
			        				echo "<br> " .$pcImprovementNextLevel;
							  	}
							  	
							  }
						    }
						    else {
						    	echo "No results yet.";
						    }   
							?>
							</div>
							
							<div id="pc3Improvement" style="display:none;">
							
							<?php
							
							$lvl= $_SESSION['user_id'];
						    // echo $_SESSION['user_id'];
						    $querycheckT = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultcheckT = mysql_query(($querycheckT),($conn));
						   
						    if(mysql_num_rows($resultcheckT) > 0){
							$queryR = "Select * from questionWiseLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total = $row['question3'];
			        				settype($total, "integer");
			        				echo "<br>";
			        				echo "<strong> Current level of reduction of number of computers:</strong> " .$total;
							  	}
							  	
							  }
							  
							  
							  $total1 = $total + 1;
							  
							  $queryR = "Select * from improvement where level_num = '$total1'";
					
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total1 = $row['ques3'];
			        				echo "<br>";
			        				echo "<br> <strong> Immediate Recommended Action: </strong> <br> " .$total1;
							  	}
							  	
							  }
							  
							  $queryR = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";

							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$totalcurrentLevel = $row['current_level'];
			        				settype($totalcurrentLevel, "integer");
			        				//echo "Your organization is in level:	" .$total;
							  	}
							  	
							  }
							  
							  $totalLevel = $totalcurrentLevel + 1;
							  if($totalLevel == '0')
						    {
						    	$tag = "Immatured";
						    }
						    else if($totalLevel == '1')
						    {
						    	$tag = "Novice";
						    }
						    else if($totalLevel == '2')
						    {
						    	$tag = "Begineer";
						    }
						    else if($totalLevel == '3')
						    {
						    	$tag = "Adequate";
						    }
						    else if($totalLevel== '4')
						    {
						    	$tag = "Expert";
						    }
						    echo "<br>";
						    echo "<br> <strong> Guideline to next level(".$tag."&nbsp;level of Green ICT practices): </strong>";
						    
						    
							$queryR = "Select * from improvement where level_num = '$totalLevel'";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$pcImprovementNextLevel = $row['ques3'];
			        				
			        				echo "<br> " .$pcImprovementNextLevel;
							  	}
							  	
							  }
						    }
							else {
								echo "No results yet.";
							}       
							?>
							</div>
							
							<div id="printer1Improvement" style="display:none;">
							<?php
							
							
							$lvl= $_SESSION['user_id'];
						    // echo $_SESSION['user_id'];
						    $querycheckT = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultcheckT = mysql_query(($querycheckT),($conn));
						   
						    if(mysql_num_rows($resultcheckT) > 0){
							$queryR = "Select * from questionWiseLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total = $row['question4'];
			        				settype($total, "integer");
			        				echo "<br>";
			        				echo "<strong>Current level for management of shutting down printers/scanners/photocopiers:</strong> " .$total;
							  	}
							  	
							  }
							  
							  
							  $total1 = $total + 1;
							  
							  $queryR = "Select * from improvement where level_num = '$total1'";
					
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total1 = $row['ques4'];
			        				echo "<br>";
			        				echo "<br> <strong> Immediate Recommended Action:</strong> <br> " .$total1;
							  	}
							  	
							  }
							  
							  $queryR = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";

							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$totalcurrentLevel = $row['current_level'];
			        				settype($totalcurrentLevel, "integer");
			        				//echo "Your organization is in level:	" .$total;
							  	}
							  	
							  }
							  
							  $totalLevel = $totalcurrentLevel + 1;
							  if($totalLevel == '0')
						    {
						    	$tag = "Immatured";
						    }
						    else if($totalLevel == '1')
						    {
						    	$tag = "Novice";
						    }
						    else if($totalLevel == '2')
						    {
						    	$tag = "Begineer";
						    }
						    else if($totalLevel == '3')
						    {
						    	$tag = "Adequate";
						    }
						    else if($totalLevel== '4')
						    {
						    	$tag = "Expert";
						    }
						    echo "<br>";
						    echo "<br> <strong> Guideline to next level(".$tag."&nbsp;level of Green ICT practices):</strong>";
						    
						    
							$queryR = "Select * from improvement where level_num = '$totalLevel'";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$pcImprovementNextLevel = $row['ques4'];
			        				
			        				echo "<br> " .$pcImprovementNextLevel;
							  	}
							  	
							  }
						    }
							else {
								echo "No results yet.";
							}   
							?>
							</div>
							
							<div id="printer2Improvement" style="display:none;">
							<?php
							
								$lvl= $_SESSION['user_id'];
						    // echo $_SESSION['user_id'];
						    $querycheckT = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultcheckT = mysql_query(($querycheckT),($conn));
						   
						    if(mysql_num_rows($resultcheckT) > 0){
							$queryR = "Select * from questionWiseLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total = $row['question5'];
			        				settype($total, "integer");
			        				echo "<br>";
			        				echo "<strong>Current level for reduction of number of printers/scanners/photocopiers:</strong> " .$total;
							  	}
							  	
							  }
							  
							  
							  $total1 = $total + 1;
							  
							  $queryR = "Select * from improvement where level_num = '$total1'";
					
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total1 = $row['ques5'];
			        				echo "<br>";
			        				echo "<br> <strong>Immediate Recommended Action: </strong><br> " .$total1;
							  	}
							  	
							  }
							  
							  $queryR = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";

							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$totalcurrentLevel = $row['current_level'];
			        				settype($totalcurrentLevel, "integer");
			        				//echo "Your organization is in level:	" .$total;
							  	}
							  	
							  }
							  
							  $totalLevel = $totalcurrentLevel + 1;
							  if($totalLevel == '0')
						    {
						    	$tag = "Immatured";
						    }
						    else if($totalLevel == '1')
						    {
						    	$tag = "Novice";
						    }
						    else if($totalLevel == '2')
						    {
						    	$tag = "Begineer";
						    }
						    else if($totalLevel == '3')
						    {
						    	$tag = "Adequate";
						    }
						    else if($totalLevel== '4')
						    {
						    	$tag = "Expert";
						    }
						    echo "<br>";
						    echo "<br><strong> Guideline to next level(".$tag."&nbsp;level of Green ICT practices):</strong>";
						    
						    
							$queryR = "Select * from improvement where level_num = '$totalLevel'";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$pcImprovementNextLevel = $row['ques5'];
			        				
			        				echo "<br> " .$pcImprovementNextLevel;
							  	}
							  	
							  }
						    }
							else {
								echo "No results yet.";
							}    
							?>
							</div>
							
							<div id="paperImprovement" style="display:none;">
							<?php
							
								$lvl= $_SESSION['user_id'];
						    // echo $_SESSION['user_id'];
						    $querycheckT = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultcheckT = mysql_query(($querycheckT),($conn));
						   
						    if(mysql_num_rows($resultcheckT) > 0){
							$queryR = "Select * from questionWiseLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total = $row['question6'];
			        				settype($total, "integer");
			        				echo "<br>";
			        				echo "<strong>Current level for paper saving through ICT equipment: </strong>" .$total;
							  	}
							  	
							  }
							  
							  
							  $total1 = $total + 1;
							  
							  $queryR = "Select * from improvement where level_num = '$total1'";
					
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total1 = $row['ques6'];
			        				echo "<br>";
			        				echo "<br> <strong>Immediate Recommended Action: </strong><br> " .$total1;
							  	}
							  	
							  }
							  
							  $queryR = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";

							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$totalcurrentLevel = $row['current_level'];
			        				settype($totalcurrentLevel, "integer");
			        				//echo "Your organization is in level:	" .$total;
							  	}
							  	
							  }
							  
							  $totalLevel = $totalcurrentLevel + 1;
							  if($totalLevel == '0')
						    {
						    	$tag = "Immatured";
						    }
						    else if($totalLevel == '1')
						    {
						    	$tag = "Novice";
						    }
						    else if($totalLevel == '2')
						    {
						    	$tag = "Begineer";
						    }
						    else if($totalLevel == '3')
						    {
						    	$tag = "Adequate";
						    }
						    else if($totalLevel== '4')
						    {
						    	$tag = "Expert";
						    }
						    echo "<br>";
						    echo "<br> <strong>Guideline to next level(".$tag."&nbsp;level of Green ICT practices):</strong>";
						    
						    
							$queryR = "Select * from improvement where level_num = '$totalLevel'";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$pcImprovementNextLevel = $row['ques6'];
			        				
			        				echo "<br> " .$pcImprovementNextLevel;
							  	}
							  	
							  }
						    }
							else {
								echo "No results yet.";
							}   
							?>
							</div>
							
							<div id="videoImprovement" style="display:none;">
							<?php
							
								$lvl= $_SESSION['user_id'];
						    // echo $_SESSION['user_id'];
						    $querycheckT = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultcheckT = mysql_query(($querycheckT),($conn));
						   
						    if(mysql_num_rows($resultcheckT) > 0){
							$queryR = "Select * from questionWiseLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total = $row['question7'];
			        				settype($total, "integer");
			        				echo "<br>";
			        				echo "<strong>Current level for power management of video conferencing suite: </strong>" .$total;
							  	}
							  	
							  }
							  
							  
							  $total1 = $total + 1;
							  
							  $queryR = "Select * from improvement where level_num = '$total1'";
					
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total1 = $row['ques7'];
			        				echo "<br>";
			        				echo "<br> <strong>Immediate Recommended Action:</strong> <br> " .$total1;
							  	}
							  	
							  }
							  
							  $queryR = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";

							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$totalcurrentLevel = $row['current_level'];
			        				settype($totalcurrentLevel, "integer");
			        				//echo "Your organization is in level:	" .$total;
							  	}
							  	
							  }
							  
							  $totalLevel = $totalcurrentLevel + 1;
							  if($totalLevel == '0')
						    {
						    	$tag = "Immatured";
						    }
						    else if($totalLevel == '1')
						    {
						    	$tag = "Novice";
						    }
						    else if($totalLevel == '2')
						    {
						    	$tag = "Begineer";
						    }
						    else if($totalLevel == '3')
						    {
						    	$tag = "Adequate";
						    }
						    else if($totalLevel== '4')
						    {
						    	$tag = "Expert";
						    }
						    echo "<br>";
						    echo "<br> <strong>Guideline to next level(".$tag."&nbsp;level of Green ICT practices):</strong>";
						    
						    
							$queryR = "Select * from improvement where level_num = '$totalLevel'";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$pcImprovementNextLevel = $row['ques7'];
			        				
			        				echo "<br> " .$pcImprovementNextLevel;
							  	}
							  	
							  }
						    }
							else {
								echo "No results yet.";
							}       
							?>
							</div>
							
							<div id="serverImprovement" style="display:none;">
							<?php
							
							$lvl= $_SESSION['user_id'];
						    // echo $_SESSION['user_id'];
						    $querycheckT = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultcheckT = mysql_query(($querycheckT),($conn));
						   
						    if(mysql_num_rows($resultcheckT) > 0){
							$queryR = "Select * from questionWiseLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total = $row['question8'];
			        				settype($total, "integer");
			        				echo "<br>";
			        				echo "<strong>Current level for management of IT Load management of server:</strong> " .$total;
							  	}
							  	
							  }
							  
							  
							  $total1 = $total + 1;
							  
							  $queryR = "Select * from improvement where level_num = '$total1'";
					
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total1 = $row['ques8'];
			        				echo "<br>";
			        				echo "<br><strong> Immediate Recommended Action:</strong> <br> " .$total1;
							  	}
							  	
							  }
							  
							  $queryR = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";

							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$totalcurrentLevel = $row['current_level'];
			        				settype($totalcurrentLevel, "integer");
			        				//echo "Your organization is in level:	" .$total;
							  	}
							  	
							  }
							  
							  $totalLevel = $totalcurrentLevel + 1;
							  if($totalLevel == '0')
						    {
						    	$tag = "Immatured";
						    }
						    else if($totalLevel == '1')
						    {
						    	$tag = "Novice";
						    }
						    else if($totalLevel == '2')
						    {
						    	$tag = "Begineer";
						    }
						    else if($totalLevel == '3')
						    {
						    	$tag = "Adequate";
						    }
						    else if($totalLevel== '4')
						    {
						    	$tag = "Expert";
						    }
						    echo "<br>";
						    echo "<br><strong> Guideline to next level(".$tag."&nbsp;level of Green ICT practices):</strong>";
						    
						    
							$queryR = "Select * from improvement where level_num = '$totalLevel'";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$pcImprovementNextLevel = $row['ques8'];
			        				
			        				echo "<br> " .$pcImprovementNextLevel;
							  	}
							  	
							  }
						    }
							else {
								echo "No results yet.";
							}       
							    
							?>
							</div>
							
							<div id="coolingImprovement" style="display:none;">
							<?php
							
							$lvl= $_SESSION['user_id'];
						    // echo $_SESSION['user_id'];
						    $querycheckT = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultcheckT = mysql_query(($querycheckT),($conn));
						   
						    if(mysql_num_rows($resultcheckT) > 0){
							$queryR = "Select * from questionWiseLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total = $row['question9'];
			        				settype($total, "integer");
			        				echo "<br>";
			        				echo "<strong>Current level for cooling management of ICT equipment:</strong> " .$total;
							  	}
							  	
							  }
							  
							  
							  $total1 = $total + 1;
							  
							  $queryR = "Select * from improvement where level_num = '$total1'";
					
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total1 = $row['ques9'];
			        				echo "<br>";
			        				echo "<br> <strong>Immediate Recommended Action:</strong> <br> " .$total1;
							  	}
							  	
							  }
							  
							  $queryR = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";

							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$totalcurrentLevel = $row['current_level'];
			        				settype($totalcurrentLevel, "integer");
			        				//echo "Your organization is in level:	" .$total;
							  	}
							  	
							  }
							  
							  $totalLevel = $totalcurrentLevel + 1;
							  if($totalLevel == '0')
						    {
						    	$tag = "Immatured";
						    }
						    else if($totalLevel == '1')
						    {
						    	$tag = "Novice";
						    }
						    else if($totalLevel == '2')
						    {
						    	$tag = "Begineer";
						    }
						    else if($totalLevel == '3')
						    {
						    	$tag = "Adequate";
						    }
						    else if($totalLevel== '4')
						    {
						    	$tag = "Expert";
						    }
						    echo "<br>";
						    echo "<br> <strong> Guideline to next level(".$tag."&nbsp;level of Green ICT practices):</strong>";
						    
						    
							$queryR = "Select * from improvement where level_num = '$totalLevel'";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$pcImprovementNextLevel = $row['ques9'];
			        				
			        				echo "<br> " .$pcImprovementNextLevel;
							  	}
							  	
							  }
						    }
							else {
								echo "No results yet.";
							}       
							    
							?>
							</div>
							
							<div id="ewasteImprovement" style="display:none;">
							<?php
							
							$lvl= $_SESSION['user_id'];
						    // echo $_SESSION['user_id'];
						    $querycheckT = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultcheckT = mysql_query(($querycheckT),($conn));
						   
						    if(mysql_num_rows($resultcheckT) > 0){
							$queryR = "Select * from questionWiseLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total = $row['question10'];
			        				settype($total, "integer");
			        				echo "<br>";
			        				echo "<strong>Current level for management of e-waste disposal: </strong> " .$total;
							  	}
							  	
							  }
							  
							  
							  $total1 = $total + 1;
							  
							  $queryR = "Select * from improvement where level_num = '$total1'";
					
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total1 = $row['ques10'];
			        				echo "<br>";
			        				echo "<br><strong> Immediate Recommended Action:</strong> <br> " .$total1;
							  	}
							  	
							  }
							  
							  $queryR = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";

							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$totalcurrentLevel = $row['current_level'];
			        				settype($totalcurrentLevel, "integer");
			        				//echo "Your organization is in level:	" .$total;
							  	}
							  	
							  }
							  
							  $totalLevel = $totalcurrentLevel + 1;
							  if($totalLevel == '0')
						    {
						    	$tag = "Immatured";
						    }
						    else if($totalLevel == '1')
						    {
						    	$tag = "Novice";
						    }
						    else if($totalLevel == '2')
						    {
						    	$tag = "Begineer";
						    }
						    else if($totalLevel == '3')
						    {
						    	$tag = "Adequate";
						    }
						    else if($totalLevel== '4')
						    {
						    	$tag = "Expert";
						    }
						    echo "<br>";
						    echo "<br> <strong>Guideline to next level(".$tag."&nbsp;level of Green ICT practices):</strong>";
						    
						    
							$queryR = "Select * from improvement where level_num = '$totalLevel'";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$pcImprovementNextLevel = $row['ques10'];
			        				
			        				echo "<br> " .$pcImprovementNextLevel;
							  	}
							  	
							  }
						    }
							else {
								echo "No results yet.";
							}    
							    
							?>
							</div>
							
						    <div id="overallImprovement" style="display:none;">
							<?php
							
							$lvl= $_SESSION['user_id'];
						    // echo $_SESSION['user_id'];
						    
						    $queryR = "Select * from overallLevel where user_id = '$lvl'";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$totalcurrentLevel = $row['current_level'];
			        				settype($totalcurrentLevel, "integer");
			        				//echo "Your organization is in level:	" .$total;
							  	}
							  	
							 
							  
							  	if($totalLevel == '0')
						    {
						    	$tag = "Immatured";
						    }
						    else if($totalLevel == '1')
						    {
						    	$tag = "Novice";
						    }
						    else if($totalLevel == '2')
						    {
						    	$tag = "Begineer";
						    }
						    else if($totalLevel == '3')
						    {
						    	$tag = "Adequate";
						    }
						    else if($totalLevel== '4')
						    {
						    	$tag = "Expert";
						    }
						    echo "<br>";
						    
						    $totalLevel = $totalcurrentLevel + 1;
						    
						    echo "<br><strong> Guideline to level&nbsp;".$totalLevel."(".$tag."&nbsp;level of Green ICT practices):</strong>";
						    echo "<br>";
						    
							  $totalLevel = $totalcurrentLevel + 1;
							  
							  
							$queryR = "Select * from improvement where level_num = '$totalLevel'";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				echo "<br> 1: ". $row["ques1"]. "<br> 2: ". $row["ques2"].  "<br> 3: ". $row["ques3"]. 
							  		 "<br> 4: ". $row["ques4"]. "<br> 5: ". $row["ques5"]. "<br> 6: ". $row["ques6"].
							  		  "<br> 7: ". $row["ques7"]. "<br> 8: ". $row["ques8"]. "<br> 9: ". $row["ques9"].
							  		   "<br> 10: ". $row["ques10"]."<br>";
							  		 ;
							  	}
							  	
							  }
							  
							  
							  else {
							  	echo "No results yet";
							  }
							  }
							  
							?>
							</div>
							<br>
							<br>
							<input type="button" name="Submit" value="Back" class="genric-btn primary" id="confirm-btn" style="float: left"; onclick="window.location.href='currentLevelDetails.php'"/>
								<input type="button" name="Submit" value="Give your feedback about the system" class="genric-btn primary" id="confirm-btn" style="float: right"; onclick="window.location.href='https://docs.google.com/forms/d/e/1FAIpQLSdU-V7o1x77PqoGuEbxiXLmAhG4vqT0WXheENBtrr-nJk4keg/viewform?usp=sf_link'"/>
							</div>
								</section>
							
							
							<br>
				
						
						
							
								 	
			
							
			
			
				
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
		<script>
							function myFunction(){
								var theSelection = document.getElementById("sel1").value;
								if (theSelection == 1){
										
										document.getElementById("pc1Improvement").style.display = "block";
										document.getElementById("pc2Improvement").style.display = "none";
										document.getElementById("pc3Improvement").style.display = "none";
										document.getElementById("printer1Improvement").style.display = "none";
										document.getElementById("printer2Improvement").style.display = "none";
										document.getElementById("paperImprovement").style.display = "none";
										document.getElementById("videoImprovement").style.display = "none";
										document.getElementById("serverImprovement").style.display = "none";
										document.getElementById("coolingImprovement").style.display = "none";
										document.getElementById("ewasteImprovement").style.display = "none";
										document.getElementById("overallImprovement").style.display = "none";
									}
								if (theSelection == 2){
										
										document.getElementById("pc2Improvement").style.display = "block";
										document.getElementById("pc1Improvement").style.display = "none";
										document.getElementById("pc3Improvement").style.display = "none";
										document.getElementById("printer1Improvement").style.display = "none";
										document.getElementById("printer2Improvement").style.display = "none";
										document.getElementById("paperImprovement").style.display = "none";
										document.getElementById("videoImprovement").style.display = "none";
										document.getElementById("serverImprovement").style.display = "none";
										document.getElementById("coolingImprovement").style.display = "none";
										document.getElementById("ewasteImprovement").style.display = "none";
										document.getElementById("overallImprovement").style.display = "none";
									}
								if (theSelection == 3){
										document.getElementById("pc3Improvement").style.display = "block";
										document.getElementById("pc1Improvement").style.display = "none";
										document.getElementById("pc2Improvement").style.display = "none";
										document.getElementById("printer1Improvement").style.display = "none";
										document.getElementById("printer2Improvement").style.display = "none";
										document.getElementById("paperImprovement").style.display = "none";
										document.getElementById("videoImprovement").style.display = "none";
										document.getElementById("serverImprovement").style.display = "none";
										document.getElementById("coolingImprovement").style.display = "none";
										document.getElementById("ewasteImprovement").style.display = "none";
										document.getElementById("overallImprovement").style.display = "none";
										
									}
								if (theSelection == 4){
										document.getElementById("printer1Improvement").style.display = "block";
										document.getElementById("pc3Improvement").style.display = "none";
										document.getElementById("pc1Improvement").style.display = "none";
										document.getElementById("pc2Improvement").style.display = "none";
										document.getElementById("printer2Improvement").style.display = "none";
										document.getElementById("paperImprovement").style.display = "none";
										document.getElementById("videoImprovement").style.display = "none";
										document.getElementById("serverImprovement").style.display = "none";
										document.getElementById("coolingImprovement").style.display = "none";
										document.getElementById("ewasteImprovement").style.display = "none";
										document.getElementById("overallImprovement").style.display = "none";
										
										
									}
								if (theSelection == 5){
										document.getElementById("printer2Improvement").style.display = "block";
										document.getElementById("pc1Improvement").style.display = "none";
										document.getElementById("pc2Improvement").style.display = "none";
										document.getElementById("pc3Improvement").style.display = "none";
										document.getElementById("printer1Improvement").style.display = "none";
										document.getElementById("paperImprovement").style.display = "none";
										document.getElementById("videoImprovement").style.display = "none";
										document.getElementById("serverImprovement").style.display = "none";
										document.getElementById("coolingImprovement").style.display = "none";
										document.getElementById("ewasteImprovement").style.display = "none";
										document.getElementById("overallImprovement").style.display = "none";
										
									}
								if (theSelection == 6){
										document.getElementById("paperImprovement").style.display = "block";
										document.getElementById("printer2Improvement").style.display = "none";
										document.getElementById("pc1Improvement").style.display = "none";
										document.getElementById("pc2Improvement").style.display = "none";
										document.getElementById("pc3Improvement").style.display = "none";
										document.getElementById("printer1Improvement").style.display = "none";
										document.getElementById("videoImprovement").style.display = "none";
										document.getElementById("serverImprovement").style.display = "none";
										document.getElementById("coolingImprovement").style.display = "none";
										document.getElementById("ewasteImprovement").style.display = "none";
										document.getElementById("overallImprovement").style.display = "none";
										
									}
								if (theSelection == 7){
										document.getElementById("videoImprovement").style.display = "block";
										document.getElementById("paperImprovement").style.display = "none";
										document.getElementById("printer2Improvement").style.display = "none";
										document.getElementById("pc1Improvement").style.display = "none";
										document.getElementById("pc2Improvement").style.display = "none";
										document.getElementById("pc3Improvement").style.display = "none";
										document.getElementById("printer1Improvement").style.display = "none";
										document.getElementById("serverImprovement").style.display = "none";
										document.getElementById("coolingImprovement").style.display = "none";
										document.getElementById("ewasteImprovement").style.display = "none";
										document.getElementById("overallImprovement").style.display = "none";
										
									}
								if (theSelection == 8){
										document.getElementById("serverImprovement").style.display = "block";
										document.getElementById("videoImprovement").style.display = "none";
										document.getElementById("paperImprovement").style.display = "none";
										document.getElementById("printer2Improvement").style.display = "none";
										document.getElementById("pc1Improvement").style.display = "none";
										document.getElementById("pc2Improvement").style.display = "none";
										document.getElementById("pc3Improvement").style.display = "none";
										document.getElementById("printer1Improvement").style.display = "none";
										document.getElementById("coolingImprovement").style.display = "none";
										document.getElementById("ewasteImprovement").style.display = "none";
										document.getElementById("overallImprovement").style.display = "none";
										
									}
								if (theSelection == 9){
										document.getElementById("coolingImprovement").style.display = "block";
										document.getElementById("serverImprovement").style.display = "none";
										document.getElementById("videoImprovement").style.display = "none";
										document.getElementById("paperImprovement").style.display = "none";
										document.getElementById("printer2Improvement").style.display = "none";
										document.getElementById("pc1Improvement").style.display = "none";
										document.getElementById("pc2Improvement").style.display = "none";
										document.getElementById("pc3Improvement").style.display = "none";
										document.getElementById("printer1Improvement").style.display = "none";
										document.getElementById("ewasteImprovement").style.display = "none";
										document.getElementById("overallImprovement").style.display = "none";
										
									}
								if (theSelection == 10){
										document.getElementById("ewasteImprovement").style.display = "block";
										document.getElementById("coolingImprovement").style.display = "none";
										document.getElementById("serverImprovement").style.display = "none";
										document.getElementById("videoImprovement").style.display = "none";
										document.getElementById("paperImprovement").style.display = "none";
										document.getElementById("printer2Improvement").style.display = "none";
										document.getElementById("pc1Improvement").style.display = "none";
										document.getElementById("pc2Improvement").style.display = "none";
										document.getElementById("pc3Improvement").style.display = "none";
										document.getElementById("printer1Improvement").style.display = "none";
										document.getElementById("overallImprovement").style.display = "none";
										
									}
									
									if (theSelection == 11){
										document.getElementById("ewasteImprovement").style.display = "none";
										document.getElementById("coolingImprovement").style.display = "none";
										document.getElementById("serverImprovement").style.display = "none";
										document.getElementById("videoImprovement").style.display = "none";
										document.getElementById("paperImprovement").style.display = "none";
										document.getElementById("printer2Improvement").style.display = "none";
										document.getElementById("pc1Improvement").style.display = "none";
										document.getElementById("pc2Improvement").style.display = "none";
										document.getElementById("pc3Improvement").style.display = "none";
										document.getElementById("printer1Improvement").style.display = "none";
										document.getElementById("overallImprovement").style.display = "block";
										
									}
								}
								

							</script>
	
	
		
		
	
		</body>
	</html>
	
	