<?php 
				session_start();
				include_once('dbconfig.php');
				echo $_SESSION['user_id'];
				echo $_SESSION['username'];
				if(isset($_SESSION['username'])){
									
									echo "Hi " . $_SESSION['username'] . "";
								
									echo "<a href='logout.php'>Logout</a>";
									}
					 else
			    {
			         
			        echo "<script>location.href= 'login.php'</script>";
			    }


            $id = $_SESSION['user_id'];
			$que1 = $_POST['myRadio1'];
            $que2 = $_POST['myRadio2'];
            $que3 = $_POST['myRadio3'];
            $que4 = $_POST['myRadio4'];
            $que5 = $_POST['myRadio5'];
            $que6 = $_POST['myRadio6'];
            $que7 = $_POST['myRadio7'];
            $que9 = $_POST['myRadio9'];
            $que10 = $_POST['myRadio10'];
            $que11 = $_POST['myRadio11'];
            
             // echo '$que1';
         // echo '$que2';
         // echo '$que3';
         // echo '$que4';
         // echo '$que5';
         // echo '$que6';
         // echo '$que7';
         // echo '$que8';
         // echo '$que9';
         // echo '$que10';
         // echo '$que11';
        
        
        
         
         // echo '$avg123';
         // echo '$avg45';
         // echo '$avg78';
        (mysql_query("INSERT INTO questionWiseLevel(user_id,question1,question2,question3,question4,question5,question6,question7,question8,question9,question10) 
         VALUES('$id','$que1', '$que2', '$que3', '$que4', '$que5', '$que6', '$que7', '$que9', '$que10', '$que11')"));
        
        
         $sum = ($que1 + $que2 + $que3 + $que4 + $que5 + $que6 + $que7 + $que9 + $que10 + $que11);
        
         $avgSum = round((($sum)/10));
        
         (mysql_query("INSERT INTO overallLevel(user_id, current_level) 
         VALUES('$id','$avgSum')"));
         
         
         
	?>
