
<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="<?php echo base_url();?>user/">Home</a></li>
											<!--<li class="active">Blank Page</li>-->
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual tables-main">
								<h2 class="inner-tittle">Compose Message</h2>
												<div class="graph">
											 <div class="block-page">
                                             <div id="error" style="color:red; font-weight:bold;"></div>
                                             <div id="success" style="color:green; font-weight:bold;"></div>
                                             <form id="compose" class="form-group" role="form">
                                             <div class="col-md-12 col-sm-12" class="form-group text-center">
                <input type="email" class="form-control text-center" name="email" id="email" value ="<?php echo $email;?>"  placeholder="Recievers Email"/>
                                             </div>
                                            <div class="col-md-12" class="form-group">
                                             <textarea id="message" name="message" class="form-control" placeholder="Your Message"></textarea>
                                             </div>
                                             
                                             </form>
                                             <button class="btn btn-success" id="send">Send Message</button>
                                        
                                                            		<!--body starts here-->
                                                                  
                                               
                                               
                                               <!--stat row starts here-->
                                               
                                                <!--profile details ends here-->
                                                </div>
                                                 
                                               <!-- <div class="flex-row">
                                                    <a class="card-link">Card link</a>
                                                    <a class="card-link">Another link</a>
                                                </div>-->
                                            </div>
                                       
                                       <!-- card ends here-->
                                                           
                                            </div>
                                            
                                            
                                          
                                       
                                       
                                      
							    
                                	
                                
                                                                   <!-- body ends here -->
																</div>
												
										        </div>
											
										</div>
										<!--//graph-visual-->
									</div>
                                    
 
 <script type="text/javascript">
$( document ).ready(function(){

 $("#send").click(function(u){	
	 u.preventDefault();
	 
	   var email=$("#email").val();
	   var message=$("#message").val();
	    var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		var emailcheck=email.match(pattern);
		
		if(email==""){
		   	 $("#error").html("Please enter Recievers  email ");
			
		}
		  
		  
		else if(emailcheck==null){
		   	 $("#error").html("Please enter a valid email address ");
			
		}
		else if(message==""){
		   	 $("#error").html("Please enter your message ");
			
		}
		
		 else{
		  
		  var data = $("#compose").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>user/send",
		   data : data,
			  
		   success:function(data){
			  
			if (data==true) {
			  $("#success").html("Message sent successfully");
			   $("#send").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sent ');
			 
			}
			else    {
			
			 $("#error").html(data);
			  $("#send").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending  Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#Send").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	 //message sending function ends here 
	 });

});
</script>
