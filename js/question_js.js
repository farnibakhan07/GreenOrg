/*global $*/
/*function func2() { 
	document.getElementById("abc").style.display="none"; 
	document.getElementById("pcQ1").style.display="block"; 
}*/
var ans1, ans2, ans3, ans4, ans5, ans6, ans7, ans8, ans9, ans10, ans11;

function elecout()
{
    	document.getElementById("elecOut").style.display="block";
}

 function q1levelDetection()
            {
                if((document.getElementById('default-radio1').checked)||(document.getElementById('default-radio2').checked)||
                (document.getElementById('default-radio3').checked)||(document.getElementById('default-radio4').checked))
                {
                    
              
                if((document.getElementById('default-radio1').checked)&&(document.getElementById('default-radio3').checked))
                {
                    ans1 = 2;
                
                   
                }
                else if((document.getElementById('default-radio1').checked)&&(document.getElementById('default-radio4').checked))
                {
                    ans1 = 1;
                    
                }
                
                 else if((document.getElementById('default-radio2').checked)&&(document.getElementById('default-radio3').checked))
                {
                    ans1 = 0;
                   
                }
                
                else if((document.getElementById('default-radio2').checked)&&(document.getElementById('default-radio4').checked))
                {
                    ans1 = 0;
                   
                }
                
                
               document.getElementById("pcQ1").style.display="none"; 
            	document.getElementById("pcQ2").style.display="block";
           
            }
            else
            {
                alert('Please answer all the questions');
            }
            }
            
            

 function q2levelDetection()
            {
                if((document.getElementById('default-radio5').checked)||(document.getElementById('default-radio9').checked)||(document.getElementById('default-radio10').checked)||(document.getElementById('default-radio6').checked)||(document.getElementById('default-radio7').checked)||(document.getElementById('default-radio11').checked)||(document.getElementById('default-radio12').checked)||(document.getElementById('default-radio13').checked)||(document.getElementById('default-radio14').checked)||(document.getElementById('default-radio15').checked))
                {
                if((document.getElementById('default-radio5').checked)&&(document.getElementById('default-radio9').checked))
                {
                    ans2 = 4;
                    
                   
                }
                
                else if((document.getElementById('default-radio5').checked)&&(document.getElementById('default-radio10').checked))
                {
                    ans2 = 3;
                    
                   
                }
                
                else if((document.getElementById('default-radio6').checked))
                {
                    ans2 = 1;
                    
                   
                }
                
                 else if((document.getElementById('default-radio7').checked)&&(document.getElementById('default-radio11').checked))
                {
                    ans2 = 3;
                 
                   
                }
                
                 else if((document.getElementById('default-radio7').checked)&&(document.getElementById('default-radio12').checked))
                {
                    ans2 = 3;
                    
                   
                }
                
                else if((document.getElementById('default-radio7').checked)&&(document.getElementById('default-radio13').checked))
                {
                    ans2 = 4;
                    
                   
                }
                
                 else if((document.getElementById('default-radio7').checked)&&(document.getElementById('default-radio14').checked))
                {
                    ans2 = 3;
                    
                   
                }
                
                 else if((document.getElementById('default-radio7').checked)&&(document.getElementById('default-radio15').checked))
                {
                    ans2 = 2;
                  
                   
                }
                
                	document.getElementById("pcQ2").style.display="none"; 
	                document.getElementById("pcQ4").style.display="block"; 
            }
            else
            {
                alert('Please answer all the questions');
            }
            }
            
function vanishserver()
{
    document.getElementById("serverQ2").style.display="none";
    document.getElementById("serverQ3").style.display="none";
    document.getElementById("serverQ4").style.display="none";
}
            
function back1()
{
    document.getElementById("pcQ2").style.display="none";
    document.getElementById("pcQ1").style.display="block";
}

function back2()
{
    document.getElementById("pcQ4").style.display="none";
    document.getElementById("pcQ2").style.display="block";
}

function back3()
{
    document.getElementById("printerQ5").style.display="none";
    document.getElementById("pcQ4").style.display="block";
    
}

function back4()
{
    document.getElementById("printerQ6").style.display="none";
    document.getElementById("printerQ5").style.display="block";
    
}

function back5()
{
    document.getElementById("paperSavingQ7").style.display="none";
    document.getElementById("printerQ6").style.display="block";
    
}

function back6()
{
    document.getElementById("videoQ8").style.display="none";
    document.getElementById("paperSavingQ7").style.display="block";
    
}

function back7()
{
     document.getElementById("serverQ10").style.display="none";
    document.getElementById("videoQ8").style.display="block";
}

function back8()
{
     document.getElementById("coolingQ11").style.display="none";
    document.getElementById("serverQ10").style.display="block";
}

function back9()
{
     document.getElementById("wasteQ10").style.display="none";
    document.getElementById("coolingQ11").style.display="block";
}

function q5levelDetection()
{
    if((document.getElementById('default-radio18').checked)||(document.getElementById('default-radio19').checked)||(document.getElementById('default-radio20').checked)||(document.getElementById('default-radio21').checked)||(document.getElementById('default-radio22').checked))
    {
     if(document.getElementById('default-radio18').checked)
                {
                    ans3 = 1;
                    
                   
                }
                
                else if(document.getElementById('default-radio19').checked)
                {
                     ans3 = 2;
                    
                   
                }
                
                 else if((document.getElementById('default-radio20').checked)&&(document.getElementById('default-radio21').checked))
                {
                     ans3 = 4;
                    
                   
                }
        
                else if((document.getElementById('default-radio20').checked)&&(document.getElementById('default-radio22').checked))
                {
                     ans3 = 3;
                    
                   
                }
                
                else if((document.getElementById('default-radio20').checked)&&(document.getElementById('default-radio97').checked))
                {
                     ans3 = 3;
                    
                   
                }
        
    	           document.getElementById("pcQ4").style.display = "none";
    	           document.getElementById("printerQ5").style.display = "block"; 
    }
    else
    {
        alert('Please answer all the questions');
    }
}



function q4levelDetection()
{
    	            document.getElementById("pcQ2").style.display="none"; 
	                document.getElementById("pcQ3opta").style.display="none"; 
	                document.getElementById("pcQ3optc").style.display="none";
	                document.getElementById("pcQ4").style.display="block";
}

function q6levelDetection()
{
    if((document.getElementById('default-radio23').checked)||(document.getElementById('default-radio24').checked)||(document.getElementById('default-radio25').checked)||(document.getElementById('default-radio26').checked))
    {
         if((document.getElementById('default-radio23').checked)&&(document.getElementById('default-radio25').checked))
                {
                     ans4 = 2;
                    
                   
                }
        
                else if((document.getElementById('default-radio23').checked)&&(document.getElementById('default-radio26').checked))
                {
                     ans4 = 1;
                    
                   
                }
                
                 else if((document.getElementById('default-radio24').checked)&&(document.getElementById('default-radio25').checked))
                {
                     ans4 = 0;
                    
                   
                }
                
                else if((document.getElementById('default-radio24').checked)&&(document.getElementById('default-radio26').checked))
                {
                     ans4 = 0;
                    
                   
                }
    
    
    
    	           document.getElementById("printerQ5").style.display = "none";
    	           document.getElementById("printerQ6").style.display = "block"; 
}
else
{
    alert('Please answer all the questions');
}
}




function q7levelDetection()
{
    if((document.getElementById('default-radio27').checked)||(document.getElementById('default-radio28').checked)||(document.getElementById('default-radio29').checked)||(document.getElementById('default-radio30').checked)||(document.getElementById('default-radio31').checked)||(document.getElementById('default-radio32').checked)||(document.getElementById('default-radio33').checked))
    {
    	            if((document.getElementById('default-radio27').checked)&&(document.getElementById('default-radio31').checked))
                {
                     ans5 = 3;
                    
                   
                }
        
                else if((document.getElementById('default-radio27').checked)&&(document.getElementById('default-radio32').checked))
                {
                     ans5 = 4;
                    
                   
                }
                
                 else if((document.getElementById('default-radio27').checked)&&(document.getElementById('default-radio33').checked))
                {
                    ans5 = 2;
                    
                   
                }
                
                else if((document.getElementById('default-radio28').checked)&&(document.getElementById('default-radio29').checked)&&(document.getElementById('default-radio31').checked))
                {
                    ans5 = 3;
                    
                   
                }
                
                else if((document.getElementById('default-radio28').checked)&&(document.getElementById('default-radio30').checked)&&(document.getElementById('default-radio31').checked))
                {
                    ans5 = 2;
                    
                   
                }
                
                else if((document.getElementById('default-radio28').checked)&&(document.getElementById('default-radio29').checked)&&(document.getElementById('default-radio32').checked))
                {
                    ans5 = 4;
                    
                   
                }
                
                else if((document.getElementById('default-radio28').checked)&&(document.getElementById('default-radio30').checked)&&(document.getElementById('default-radio32').checked))
                {
                    ans5 = 2;
                    
                   
                }
                
                else if((document.getElementById('default-radio28').checked)&&(document.getElementById('default-radio29').checked)&&(document.getElementById('default-radio33').checked))
                {
                    ans5 = 2;
                    
                   
                }
                
                else if((document.getElementById('default-radio28').checked)&&(document.getElementById('default-radio30').checked)&&(document.getElementById('default-radio33').checked))
                {
                    ans5 = 2;
                   
                   
                }
    	           
    	           document.getElementById("printerQ6").style.display = "none";
    	           document.getElementById("paperSavingQ7").style.display = "block"; 
    }
    else
    {
        alert('Please answer all the questions');
    }
}



function q8levelDetection()
{
    if((document.getElementById('default-radio34').checked)||(document.getElementById('default-radio35').checked)||(document.getElementById('default-radio36').checked)||(document.getElementById('default-radio37').checked)||(document.getElementById('default-radio38').checked)||(document.getElementById('default-radio39').checked)||(document.getElementById('default-radio40').checked)||(document.getElementById('default-radio41').checked)||(document.getElementById('default-radio42').checked)||(document.getElementById('default-radio43').checked)||(document.getElementById('default-radio44').checked)||(document.getElementById('default-radio99').checked))
    {
    	           if(document.getElementById('default-radio34').checked)
                {
                     ans6 = 0;
                    
                   
                }
        
                else if((document.getElementById('default-radio35').checked)&&(document.getElementById('default-radio37').checked))
                {
                     ans6 = 1;
                    
                   
                }
                
                else if((document.getElementById('default-radio35').checked)&&(document.getElementById('default-radio38').checked))
                {
                     ans6 = 1;
                    
                   
                }
                
                else if((document.getElementById('default-radio36').checked)&&(document.getElementById('default-radio37').checked))
                {
                     ans6 = 2;
                   
                   
                }
                
                 else if((document.getElementById('default-radio36').checked)&&(document.getElementById('default-radio38').checked))
                {
                     ans6 = 3;
                    
                   
                }
                
                else if((document.getElementById('default-radio36').checked)&&(document.getElementById('default-radio38').checked)&&((document.getElementById('default-radio39').checked)&&(document.getElementById('default-radio41').checked)&&(document.getElementById('default-radio43').checked)))
                {
                     ans6 = 4;
                    
                   
                }
                
                else if((document.getElementById('default-radio36').checked)&&(document.getElementById('default-radio38').checked)&&((document.getElementById('default-radio40').checked)||(document.getElementById('default-radio42').checked)||(document.getElementById('default-radio44').checked)))
                {
                     ans6 = 3;
                    
                   
                }
                
                else if((document.getElementById('default-radio36').checked)&&(document.getElementById('default-radio38').checked)&&((document.getElementById('default-radio40').checked)||(document.getElementById('default-radio96').checked)||(document.getElementById('default-radio44').checked)))
                {
                     ans6 = 3;
                    
                   
                }
                
                else if((document.getElementById('default-radio99').checked)&&(document.getElementById('default-radio37').checked))
                {
                     ans6 = 2;
                    
                }
                
                else if((document.getElementById('default-radio99').checked)&&(document.getElementById('default-radio38').checked)&&((document.getElementById('default-radio39').checked)&&(document.getElementById('default-radio41').checked)&&(document.getElementById('default-radio43').checked)))
                {
                     ans6 = 4;
                   
                   
                }
                
                else if((document.getElementById('default-radio99').checked)&&(document.getElementById('default-radio38').checked)&&((document.getElementById('default-radio40').checked)||(document.getElementById('default-radio42').checked)||(document.getElementById('default-radio44').checked)))
                {
                     ans6 = 3;
                    
                   
                }
                
                else if((document.getElementById('default-radio99').checked)&&(document.getElementById('default-radio38').checked)&&((document.getElementById('default-radio40').checked)||(document.getElementById('default-radio96').checked)||(document.getElementById('default-radio44').checked)))
                {
                     ans6 = 3;
                    
                   
                }
                
                document.getElementById("paperSavingQ7").style.display = "none";
    	       document.getElementById("videoQ8").style.display = "block";
    }  
    else
    {
        alert('Please answer all the questions');
    }
}

function q9levelDetection()
{
    if((document.getElementById('default-radio45').checked)||(document.getElementById('default-radio46').checked)||(document.getElementById('default-radio47').checked)||(document.getElementById('default-radio48').checked)||(document.getElementById('default-radio49').checked)||(document.getElementById('default-radio50').checked)||(document.getElementById('default-radio51').checked)||(document.getElementById('default-radio52').checked)||(document.getElementById('default-radio53').checked)||(document.getElementById('default-radio54').checked))
    {
                    if((document.getElementById('default-radio45').checked)&&(document.getElementById('default-radio47').checked)&&(document.getElementById('default-radio51').checked)&&(document.getElementById('default-radio53').checked))
                {
                     ans7 = 2;
                    
                   
                   
                }
        
                else if((document.getElementById('default-radio45').checked)&&(document.getElementById('default-radio47').checked)&&(document.getElementById('default-radio52').checked)&&(document.getElementById('default-radio53').checked))
                {
                     ans7 = 4 ;
                     
                    
                   
                }
                
                else if((document.getElementById('default-radio45').checked)&&(document.getElementById('default-radio47').checked)&&(document.getElementById('default-radio52').checked)&&(document.getElementById('default-radio54').checked))
                {
                     ans7 = 3 ;
                     
                    
                   
                }
                
                else if((document.getElementById('default-radio45').checked)&&(document.getElementById('default-radio47').checked)&&(document.getElementById('default-radio51').checked)&&(document.getElementById('default-radio54').checked))
                {
                     ans7 = 2 ;
                     
                }
                
                else if((document.getElementById('default-radio46').checked))
                {
                     ans7 = 0 ;
                     
                }
                
                else if(((document.getElementById('default-radio45').checked)&&(document.getElementById('default-radio48').checked)&&(document.getElementById('default-radio49').checked))||((document.getElementById('default-radio51').checked)&&(document.getElementById('default-radio53').checked)))
                {
                     ans7 = 1 ;
                     
                }
                
                else if(((document.getElementById('default-radio45').checked)&&(document.getElementById('default-radio48').checked)&&(document.getElementById('default-radio49').checked))||((document.getElementById('default-radio52').checked)&&(document.getElementById('default-radio53').checked)))
                {
                     ans7 = 1 ;
                     
                }
                
                else if(((document.getElementById('default-radio45').checked)&&(document.getElementById('default-radio48').checked)&&(document.getElementById('default-radio49').checked))||((document.getElementById('default-radio52').checked)&&(document.getElementById('default-radio54').checked)))
                {
                     ans7 = 1 ;
                     
                }
                
                else if(((document.getElementById('default-radio45').checked)&&(document.getElementById('default-radio48').checked)&&(document.getElementById('default-radio49').checked))||((document.getElementById('default-radio51').checked)&&(document.getElementById('default-radio54').checked)))
                {
                     ans7 = 1 ;
                     
                }
                
                else if(((document.getElementById('default-radio45').checked)&&(document.getElementById('default-radio48').checked)&&(document.getElementById('default-radio50').checked))||((document.getElementById('default-radio51').checked)&&(document.getElementById('default-radio53').checked)))
                {
                     ans7 = 0 ;
                     
                }
                
                 else if(((document.getElementById('default-radio45').checked)&&(document.getElementById('default-radio48').checked)&&(document.getElementById('default-radio50').checked))||((document.getElementById('default-radio52').checked)&&(document.getElementById('default-radio53').checked)))
                {
                     ans7 = 0 ;
                     
                }
                
                 else if(((document.getElementById('default-radio45').checked)&&(document.getElementById('default-radio48').checked)&&(document.getElementById('default-radio50').checked))||((document.getElementById('default-radio52').checked)&&(document.getElementById('default-radio54').checked)))
                {
                     ans7 = 0 ;
                     
                }
                
                else if(((document.getElementById('default-radio45').checked)&&(document.getElementById('default-radio48').checked)&&(document.getElementById('default-radio50').checked))||((document.getElementById('default-radio51').checked)&&(document.getElementById('default-radio54').checked)))
                {
                     ans7 = 0 ;
                     
                }
                 document.getElementById("videoQ8").style.display = "none";
    	       document.getElementById("serverQ10").style.display = "block";
    }
    else
    {
        alert('Please answer all the questions');
    }
             
}


function q12levelDetection()
{
    if((document.getElementById('default-radio55').checked)||(document.getElementById('default-radio56').checked)||(document.getElementById('default-radio57').checked)||(document.getElementById('default-radio58').checked)||(document.getElementById('default-radio59').checked)||(document.getElementById('default-radio60').checked)||(document.getElementById('default-radio61').checked)||(document.getElementById('default-radio62').checked)||(document.getElementById('default-radio63').checked))
    {
             if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio60').checked)&&(document.getElementById('default-radio57').checked)&&(document.getElementById('default-radio62').checked))
                {
                     ans9 = 2;
                   // alert(ans9);
                   
                }
        
                else if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio60').checked)&&(document.getElementById('default-radio57').checked)&&(document.getElementById('default-radio63').checked))
                {
                     ans9 = 2 ;
                  //  alert(ans9);
                   
                }
                
                 else if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio60').checked)&&(document.getElementById('default-radio58').checked)&&(document.getElementById('default-radio62').checked))
                {
                     ans9 = 4 ;
                   // alert(ans9);
                   
                }
                
                else if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio60').checked)&&(document.getElementById('default-radio58').checked)&&(document.getElementById('default-radio63').checked))
                {
                     ans9 = 3 ;
                  //  alert(ans9);
                   
                }
                
                else if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio60').checked)&&(document.getElementById('default-radio58').checked)&&(document.getElementById('default-radio98').checked))
                {
                     ans9 = 3 ;
                    //alert(ans9);
                   
                }
                
                else if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio60').checked)&&(document.getElementById('default-radio57').checked)&&(document.getElementById('default-radio98').checked))
                {
                     ans9 = 2 ;
                   // alert(ans9);
                   
                }
                
                else if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio60').checked)&&(document.getElementById('default-radio59').checked)&&(document.getElementById('default-radio98').checked))
                {
                     ans9 = 1 ;
                   // alert(ans9);
                   
                }
                
                //
                if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio61').checked)&&(document.getElementById('default-radio57').checked)&&(document.getElementById('default-radio62').checked))
                {
                     ans9 = 1;
                   // alert(ans9);
                   
                }
        
                else if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio61').checked)&&(document.getElementById('default-radio57').checked)&&(document.getElementById('default-radio63').checked))
                {
                     ans9 = 1 ;
                  //  alert(ans9);
                   
                }
                
                 else if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio61').checked)&&(document.getElementById('default-radio58').checked)&&(document.getElementById('default-radio62').checked))
                {
                     ans9 = 1 ;
                   // alert(ans9);
                   
                }
                
                else if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio61').checked)&&(document.getElementById('default-radio58').checked)&&(document.getElementById('default-radio63').checked))
                {
                     ans9 = 1;
                  //  alert(ans9);
                   
                }
                
                else if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio61').checked)&&(document.getElementById('default-radio58').checked)&&(document.getElementById('default-radio98').checked))
                {
                     ans9 = 1 ;
                    //alert(ans9);
                   
                }
                
                else if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio61').checked)&&(document.getElementById('default-radio57').checked)&&(document.getElementById('default-radio98').checked))
                {
                     ans9 = 1 ;
                   // alert(ans9);
                   
                }
                
                else if((document.getElementById('default-radio55').checked)&&(document.getElementById('default-radio61').checked)&&(document.getElementById('default-radio59').checked)&&(document.getElementById('default-radio98').checked))
                {
                     ans9 = 1 ;
                   // alert(ans9);
                   
                }
                
                
                
                // else if((document.getElementById('default-radio55').checked))
                // {
                //      ans9 = 0 ;
                //   //  alert(ans9);
                    
                   
                // }
                
    	           document.getElementById("serverQ10").style.display = "none";
    	           document.getElementById("coolingQ11").style.display = "block"; 
    	           
    
}
else 
{
    alert('Please answer all the questions');
}
}

function q13levelDetection()
{
        if((document.getElementById('default-radio64').checked)||(document.getElementById('default-radio65').checked)||(document.getElementById('default-radio66').checked)||(document.getElementById('default-radio67').checked)||(document.getElementById('default-radio68').checked)||(document.getElementById('default-radio69').checked))
        {
             if((document.getElementById('default-radio66').checked))
                {
                     ans10 = 0;
                    
                   
                }
                
                else if((document.getElementById('default-radio64').checked))
                {
                     ans10 = 1;
                    
                   
                }
        
                else if((document.getElementById('default-radio65').checked)&&(document.getElementById('default-radio67').checked))
                {
                     ans10 = 2 ;
                    
                   
                }
                
                else if((document.getElementById('default-radio65').checked)&&(document.getElementById('default-radio68').checked))
                {
                     ans10 = 3 ;
                    
                   
                }
                
                else if((document.getElementById('default-radio65').checked)&&(document.getElementById('default-radio69').checked))
                {
                     ans10 = 4 ;
                    
                   
                }
                
                else if((document.getElementById('default-radio65').checked)&&(document.getElementById('default-radio95').checked))
                {
                     ans10 = 1 ;
                    
                   
                }
                
        
        document.getElementById("coolingQ11").style.display = "none"; 
            document.getElementById("wasteQ10").style.display = "block";
}
else
{alert('Please answer all the questions');
}
}

function que3a()
{
   document.getElementById('pcQ3optc').style.display = "none";  
   document.getElementById('pcQ3opta').style.display = "block";
}

function que3b()
{
   document.getElementById('pcQ3opta').style.display = "none";  
    document.getElementById('pcQ3optc').style.display = "none";
}

function que3c()
{
   document.getElementById('pcQ3opta').style.display = "none"; 
   document.getElementById('pcQ3optc').style.display = "block";
}

function que3d()
{
   document.getElementById('pcQ3opta').style.display = "none";  
   document.getElementById('pcQ3optc').style.display = "none";
}



function reduceOptab()
{
   
   document.getElementById("pcQ4optab").style.display = "block";

}

function reduceOptabc()
{
   
   document.getElementById("pcQ4optabc").style.display = "block";

}

function reduceOptaba()
{
   
   document.getElementById("pcQ4optabc").style.display = "none";

}

function reduceOptabb()
{
   
   document.getElementById("pcQ4optabc").style.display = "none";

}



function unplugprinter()
{
    document.getElementById("unplugPrinter").style.display = "block"; 
}

function powerSaving()
{
    document.getElementById("printerQ6optb").style.display = "block"; 
}

function turnoff()
{   
    // document.getElementById("printerQ6optb").style.display = "none"; 
    document.getElementById("printerQ6opta").style.display = "block"; 
}

function papersavingq2()
{
    document.getElementById("paperQ2").style.display = "block";
}

function papersavingq3()
{
    document.getElementById("paperQ3").style.display = "block";
    document.getElementById("paperQ4").style.display = "block";
    document.getElementById("paperQ5").style.display = "block";
}

 function videostandby()
{
     document.getElementById("videoStandby").style.display = "block";
}

function videoq2()
{
    document.getElementById("videoQ2").style.display = "block";
}



function papersavingvanish()
{
    document.getElementById("paperQ3").style.display = "none";
     document.getElementById("paperQ4").style.display = "none";
     document.getElementById("paperQ5").style.display = "none";
}

function papervanish1()
{
    document.getElementById("paperQ2").style.display = "none";
    document.getElementById("paperQ3").style.display = "none";
     document.getElementById("paperQ4").style.display = "none";
     document.getElementById("paperQ5").style.display = "none";
}






function nextvideo()
{
     document.getElementById("videoQ91").style.display = "block"; 
}


function videovanish()
{
     document.getElementById("videoQ2").style.display = "none";
     document.getElementById("videoStandby").style.display = "none";
    //  document.getElementById("videoQ9").style.display = "none";
    //  document.getElementById("serverQ10").style.display = "block";
}

function videovanish2()
{
    
     document.getElementById("videoStandby").style.display = "none";
     document.getElementById("videoQ9").style.display = "block";
}

function afterstandby()
{
    
     
     document.getElementById("videoQ9").style.display = "block";
}

function cooling()
{
    document.getElementById("coolingQ2").style.display = "none";
}

function coolingq2()
{
    document.getElementById("coolingQ2").style.display = "block";
}

function serverq3()
{
                document.getElementById("serverQ2").style.display = "none";
                document.getElementById("serverQ4").style.display = "none";
               document.getElementById("serverQ3").style.display = "block"; 
             
}
    	       
    	       
function serverq2()
{
            document.getElementById("serverQ2").style.display = "block"; 
            document.getElementById("serverQ3").style.display = "block";
            document.getElementById("serverQ4").style.display = "none"; 
            
}

function serverq4()
{
            document.getElementById("serverQ2").style.display = "block"; 
            document.getElementById("serverQ3").style.display = "block"; 
            document.getElementById("serverQ4").style.display = "block"; 
    
}

function functionPC()
{
alert('PC');
}


function q10levelDetection()
            {
                 
              if((document.getElementById('default-radio70').checked)||(document.getElementById('default-radio71').checked)||(document.getElementById('default-radio72').checked)||(document.getElementById('default-radio73').checked)||(document.getElementById('default-radio74').checked))       
                    
            {	
                
            	
                if((document.getElementById('default-radio70').checked))
                {
                     ans11 = 0;
                   
                   
                }
                
                else if((document.getElementById('default-radio71').checked))
                {
                     ans11 = 1;
                   
                   
                }
                
                else if((document.getElementById('default-radio72').checked))
                {
                     ans11 = 2;
                    
                   
                }
                
                else if((document.getElementById('default-radio73').checked))
                {
                     ans11 = 3;
                    
                   
                }
                
                else if((document.getElementById('default-radio74').checked))
                {
                     ans11 = 4;
                   
                   
                }
                
                
                //document.getElementById("wasteQ10").style.display="none";
               // window.location.href = "levelInfo.php";
                
                
                //var message_pri = $(".message_pri:checked").val();
                    $.ajax({    
                      type: "POST",
                      url: "levelInfo.php", //- action form
                      
                      data: {myRadio1:(ans1),
                             myRadio2:(ans2),
                             myRadio3:(ans3),
                             myRadio4:(ans4),
                             myRadio5:(ans5),
                             myRadio6:(ans6),
                             myRadio7:(ans7),
                            //  myRadio8:(ans8),
                             myRadio9:(ans9),
                             myRadio10:(ans10),
                             myRadio11:(ans11),
                             
                             },
                             success: function(){
                            
                                window.location.href = "finalLevel.php";
                            }
                            });
                            }
                            else
            {
             alert('Please answer all the questions');
            }
            }
            
            
            
$("#sub").click( function() {
 $.post( $("#myForm").attr("action"),
         $("#myForm :radio").serializeArray(),
         function(info){ $("#result").html(info);
       });
});

$("#myForm").submit( function() {
    return false;
});
 
function clearInput() {
    $("#myForm :input").each( function() {
       $(this).val('');
        
    });
}