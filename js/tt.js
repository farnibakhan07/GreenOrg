/*global $*/
/*function func2() { 
	document.getElementById("abc").style.display="none"; 
	document.getElementById("pcQ1").style.display="block"; 
}*/

 function q1levelDetection()
            {
               document.getElementById("pcQ1").style.display="none"; 
            	document.getElementById("pcQ2").style.display="block"; 
            }

function q2levelDetection()
            {
                //var message_pri = $(".message_pri:checked").val();
                   
            	document.getElementById("pcQ2").style.display="none"; 
            	document.getElementById("pcQ3").style.display="block"; 
            }

function q3levelDetection()
            {
                //var message_pri = $(".message_pri:checked").val();

            	document.getElementById("pcQ3").style.display="none"; 
            	document.getElementById("printerQ4").style.display="block"; 
            }

function q4levelDetection()
            {
                //var message_pri = $(".message_pri:checked").val();
                    
            	document.getElementById("printerQ4").style.display="none"; 
            	document.getElementById("printerQ5").style.display="block"; 
            }
            
function q5levelDetection()
            {
                //var message_pri = $(".message_pri:checked").val();
                   
            	document.getElementById("printerQ5").style.display="none"; 
            	document.getElementById("paperQ6").style.display="block"; 
            }
            
function q6levelDetection()
            {
                //var message_pri = $(".message_pri:checked").val();
                   
            	document.getElementById("paperQ6").style.display="none"; 
            	document.getElementById("videoQ7").style.display="block"; 
            }
            
function q7levelDetection()
            {
                //var message_pri = $(".message_pri:checked").val();
                   
            	document.getElementById("videoQ7").style.display="none"; 
            	document.getElementById("serverQ8").style.display="block"; 
            }

function q8levelDetection()
            {
                //var message_pri = $(".message_pri:checked").val();
                    
            	document.getElementById("serverQ8").style.display="none"; 
            	document.getElementById("coolingQ9").style.display="block"; 
            }
            
function q9levelDetection()
            {
                //var message_pri = $(".message_pri:checked").val();
                  
            	document.getElementById("coolingQ9").style.display="none"; 
            	document.getElementById("wasteQ10").style.display="block"; 
            }
function q10levelDetection()
            {
                //var message_pri = $(".message_pri:checked").val();
                    $.ajax({    
                      type: "POST",
                      url: "levelInfo.php", //- action form
                      data: {myRadio1:$(".myRadio1:checked").val(),
                      myRadio2:$(".myRadio2:checked").val(),
                      myRadio3:$(".myRadio3:checked").val(),
                      myRadio4:$(".myRadio4:checked").val(),
                      myRadio5:$(".myRadio5:checked").val(),
                      myRadio6:$(".myRadio6:checked").val(),
                      myRadio7:$(".myRadio7:checked").val(),
                      myRadio8:$(".myRadio8:checked").val(),
                      myRadio9:$(".myRadio9:checked").val(),
                      myRadio10:$(".myRadio10:checked").val()}
                      //success: function(){
                        //alert('success');
                     // }
                    });
            	document.getElementById("wasteQ10").style.display="none"; 
            	document.getElementById("wasteQ11").style.display="block"; 
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