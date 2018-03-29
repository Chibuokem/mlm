<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<title>Password Reset</title>
</head>

<body>
     <h3 class="alert alert-success text-center">Password Reset</h3>
		 <div class='container'>
					<form class="form-horizontal" id='form-reset'>
					     
                    <div id="error" style="color:red; font-weight:bold;"></div>
                    <div id="success" style="color:green; font-weight:bold;"></div>
                    
					<div class="form-group">
					     <div class="col-md-9">
                           <label class="col-md-3 control-label" for="email"><!--Contact E-mail--></label>
									
										<input id="email" name="email"  class="form-control" type="email" placeholder="Please Enter the email corresponding to your  account" class="form-control">
                                </div>        
						
                        </div>
                        </form>
                        
							<div class="form-group">
									<div class="col-md-12 widget-right">
										<button id='reset' class="btn btn-primary">Send</button>
									</div>
								</div>
								<!-- Contact input-->
								
									
                                       
                                  
								
								<!-- Form actions -->
							
</body>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.js"></script>
<script type="text/javascript">

$( document ).ready(function(){

 $("#reset").click(function(x){	
	 x.preventDefault();
	 
	     var email=$("#email").val();
	     var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		var emailcheck=email.match(pattern);
	  
	   
		
		
		
		 
		
		   if(email==""){
		  	 $("#error").html("Please enter your Email ");
		  }
		  else if(emailcheck==null){
			 $("#error").html("Please enter a valid email "); 
		  }
		  
		  else{
		  
		  var data = $("#form-reset").serialize();
		   $.ajax({
		   type: "POST",
		  
		    url: "<?php echo base_url();?>user/reset_password",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			  $("#success").html("Link to reset your password has been successfully sent to youe email");
		
			$("#reset").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Message sent  ');
			 
			}
			else    {
			
			 $("#error").html(data);
			  $("#reset").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending  Failed!');


			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#reset").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending message ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
		 
	});
	//contact ends here

});
</script>
</html>