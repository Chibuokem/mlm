<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<title>Blocked</title>
</head>

<body>
     <h3 class="alert alert-danger text-center">Your account has been blocked write to support</h3>
		 <div class='container'>
					
					       <div class="col-md-11">
				<div class="panel panel-default">
					<div class="panel-heading "><svg class="glyph stroked email "><use xlink:href="#stroked-email"></use></svg> Contact Form</div>          
                    <div id="error" style="color:red; font-weight:bold;"></div>
                    <div id="success" style="color:green; font-weight:bold;"></div>
                    
					<div class="panel-body">
					
						<form class="form-horizontal" id='form-support'>
							<fieldset>
								<!-- Contact input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email"><!--Contact E-mail--></label>
									<div class="col-md-9">
										<input id="email" name="email"  class="form-control" type="email" placeholder="Please Enter the email corresponding to your blocked account">
                                       
                                        <input id="name" name="name" type="text" Placeholder="Enter your name">
                                        <input id="phone" name="phone" type="text" placeholder="Enter phone Number"  >
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
                                        

</body>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">

$( document ).ready(function(){

 $("#contactsupport").click(function(x){	
	 x.preventDefault();
	 
	     var email=$("#email").val();
	     var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		var emailcheck=email.match(pattern);
	  
	   
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
			  $("#success").html("Message sent. Support will take necessary action based on their judgement or contact you via email.");
		
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
</html>