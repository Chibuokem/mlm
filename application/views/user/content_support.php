
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
								<h2 class="inner-tittle">Contact Support</h2>
												<div class="graph">
											 <div class="block-page">
                                             
                                             
                                             
                                             <div class='container'>
					
					       <div class="col-md-11">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Contact Form</div>          
                    <div id="error" style="color:red; font-weight:bold;"></div>
                    <div id="success" style="color:green; font-weight:bold;"></div>
                    
					<div class="panel-body">
					
						<form class="form-horizontal" id='form-support'>
							<fieldset>
								<!-- Contact input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email"><!--Contact E-mail--></label>
									<div class="col-md-9">
										<input id="email" name="email"  class="form-control" type="hidden" value="<?php echo $details['email'][0];?>" type="hidden">
                                       
                                        <input id="name" name="name"   type="hidden" value="<?php echo $details['name'][0];?>">
                                        <input id="phone" name="phone"   type="hidden" value="<?php echo $details['phone'][0];?>">
									</div>
								</div>
								<!-- Subject input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="subject">Subject</label>
									<div class="col-md-9">
										<input id="subject" name="subject" placeholder="Message Subject" class="form-control" type="text">
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Your message</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
									</div>
								</div>
								<!-- Attachment --
								<div class="form-group">
									<label class="col-md-3 control-label" for="attachment">Your Attachment</label>
									<div class="col-md-9">
										<input type="file" class="form-control" id="attach" name="attach" placeholder="Upload necessary attachment here..." />
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button id='contactsupport' class="btn btn-primary  pull-right">Send</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!--/.col-->
                                        
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

 $("#contactsupport").click(function(x){	
	 x.preventDefault();
	 
	   //   var email=$("#email").val();
	    // var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		//var emailcheck=email.match(pattern);
	  
	   
		var subject=$("#subject").val();
		
		var messagee=$("#message").val();
		
		
		 
		
		   if(subject==""){
		  	 $("#error").html("Please enter your subject ");
		  }
		   else if(messagee==""){
		  	 $("#error").html("Please enter your message ");
		  }
		  
		  
		  else{
		  
		  var data = $("#form-support").serialize();
		   $.ajax({
		   type: "POST",
		  
		    url: "<?php echo base_url();?>user/support",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			  $("#success").html("Message sent. Reply will be sent soon to your inbox.");
		
			$("#contactsupport").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Message sent  ');
			 
			}
			else    {
			
			 $("#error").html(data);
			  $("#contactsupport").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending  Failed!');


			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#contactsupport").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending message ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
		 
	});
	//contact ends here

});
</script>
 