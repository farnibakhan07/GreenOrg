

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
								
				// 					echo '<a href="login.php?action=logout" style="text-decoration:none">logout</a>';
				// 					}
				// 	 else
			 //   {
			 //       //header( "Location: login.php" ); 
			 //       //echo "<script>location.href= 'login.php'</script>";
			 //       echo '<a class="link" href="index.php" style="text-decoration:none">login</a>';
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
			<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
transform-origin: top right;
-ms-transform-origin: top right;
-webkit-transform-origin: top right;
-moz-transform-origin:  top right;
-webkit-transform-origin: top right;
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
					      <form>
	                        <div id="wasteQ11" style="text-align: right; color: black !important;"> 
	                        <div class="fb-share-button" data-href="https://greenorg-farniba.c9users.io/finalLevel.php" data-size="large" data-mobile-iframe="true" width="88" height="0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share Result</a></div>
	                        <!--<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=size=small&mobile_iframe=true&width=88&height=20&appId" width="88" height="50" style="border:0;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>-->
	                        
	                        <br>
	                  		<br>
	                  		<br>
                     <?php
							
							$lvl= $_SESSION['user_id'];
						    // echo $_SESSION['user_id'];
							$queryR = "Select * from overallLevel where user_id = '$lvl' ORDER BY id DESC LIMIT 1";
							
							$resultR = mysql_query(($queryR),($conn));
							
							 if(mysql_num_rows($resultR) > 0)
							  {
							  	while($row = mysql_fetch_assoc($resultR))
							  	{
			        				$total = $row['current_level'];
			        				settype($total, "integer");
			        				// echo "Your organization is in level:	" .$total;
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
							  
							// echo " ".$tag."&nbsp;in Green ICT practices" ;
							  
			$sqlAvg = mysql_query(("SELECT current_level FROM overallLevel GROUP BY current_level ORDER BY COUNT( current_level ) DESC LIMIT 1"), $conn);
			//echo "Average of other companies:	" .$sqlAvg;
			//$resultAvg = mysql_query(($sqlAvg),($conn));
			//echo $resultAvg;
			$row = mysql_fetch_array($sqlAvg);
			$round = $row['current_level'];
			//$round = round($result_old_ip);
			//settype($round, "integer");
			// echo "<br>Most of the companies are in level:	".$round;
		
		
		

				?>
				
<div id="chartContainer" style="height: 370px; width: 100%;"></div>		
				</div>
				<br>
				
				<!--<input type="button" name="Submit" value="Details of current Green ICT level" class="genric-btn primary" id="confirm-btn" style="margin:auto;display:block"; onclick="return q13levelDetection();"/>-->
				<input type="button" name="Submit" value="Details of current Green ICT level" class="genric-btn primary" id="confirm-btn" style="float: left"; onclick="window.location.href='currentLevelDetails.php'"/>
			
			
				
					<input type="button" name="Submit" value="Guidelines for improvement" class="genric-btn primary" id="confirm-btn" style="float: right"; onclick="window.location.href='improvement.php'"/>
					
						
					
					<br>
					<br>
					<br>
				<!--<input type="button" name="Submit" value="Details of current Green ICT level" class="genric-btn primary" id="confirm-btn" style="margin:auto;display:block"; onclick="return q13levelDetection();"/>-->
			
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

		
<script type="text/javascript">
window.onload = function () {
	
	var clientlevel= <?php echo $total ?>;
	var otherComLevel = <?php echo $round ?>;
	var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
	title:{
		text: "Green ICT practice Level of Organizations"
	},
	 
	axisY: {
		 title: "Level",
		maximum: 4,
		startValue: 0,
		endValue: 4,
		interval: 1
	},
	
	legend: {
		cursor: "pointer",
		itemclick : toggleDataSeries,
		 horizontalAlign: "center" 
	},
	 toolTip: {
	 	shared: true,
	 	content: toolTipFormatter
	 },
	data: [
	{
		type: "bar",
	    showInLegend: true,
		name: "Green ICT practice level of your organization:",
		color: "#db7527",
		dataPoints: [
			 { y: clientlevel, label: "Organizations"
			
			}
			
		]
	},
	{
		type: "bar",
		showInLegend: true,
		name: "Green ICT practice level of most of the other organizations",
		color: "green",
		dataPoints: [
			{ y: otherComLevel, label: "Organizations",
			
			
		},
		
		]
	}]
});
chart.render();

 function toolTipFormatter(e) {
	var str = "";
	var total = 0 ;
	var str3;
	var str2 ;
	for (var i = 0; i < e.entries.length; i++){
		var str1 = "<span style= \"color:"+e.entries[i].dataSeries.color + "\">" + e.entries[i].dataSeries.name + "</span>: <strong>"+  e.entries[i].dataPoint.y + "</strong> <br/>" ;
		//total = e.entries[i].dataPoint.y + total;
		str = str.concat(str1);
	}
	str2 = "<strong>" + e.entries[0].dataPoint.label + "</strong> <br/>";
//	str3 = "<span style = \"color:Tomato\">Total: </span><strong>" + total + "</strong><br/>";
//	return (str2.concat(str)).concat(str3);
	return (str2.concat(str));
}
 function toggleDataSeries(e) {
 	if (typeof (e.dataSeries.visible) === "" || e.dataSeries.visible) {
 		e.dataSeries.visible = false;
 	}
 	else {
 		e.dataSeries.visible = true;
 	}
chart.render();
 }

}
</script>
	
		
	



        
        
