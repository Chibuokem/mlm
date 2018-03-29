// JavaScript Document
$(document).ready(function() {
	
	
	
	
	
	
	
	
	 $("#btn-login").click(function(q){	
	 q.preventDefault();
	 
		var emaill=$("#email").val();
		var passwordd=$("#password").val()
		 var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var emailcheck=emaill.match(pattern);
		 var passwordd=$("#password").val();
		 
		 if(emaill==""){
		   	 $("#errorr").html("Please enter email ");
			
		}
		  
		  
		 else if(emailcheck==null){
		   	 $("#errorr").html("Please enter a valid email address ");
			 /*alert("please enter email")*/;
		}
		  
		  else if (passwordd==""){
			
			   $("#errorr").html("Please enter password ");
		  }
		  
		  else{
		  
		  var data = $("#login-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "login.php",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			 
			$("#btn-login").html('Signing In ...');
      setTimeout(' window.location.href = "user/index.php"; ',4000);
			 
			}
			else    {
			
			 $("#errorr").html(data);
			  $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Login Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	
	
	
	
	//confirm password
	$("#password2").blur(function(){
		
		var passs1=$("#password1").val();
		var passs2=$("#password2").val();
		
		
		
		
		
			$.post("password_validation.php", {pass1: passs1,pass2:passs2} ,{})
			.done(function(data){
				
					
					$("#confirmpassword").html(data);
				
			});
	
	}); //confirm password ends here 
	
	
	
	
	//registration starts here 
	
	 $("#register").click(function(q){	
	 q.preventDefault();
	 
		var emaill=$("#form-email").val();
		var passwordd=$("#password1").val()
		 var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var emailcheck=emaill.match(pattern);
	
		 
		 if(emaill==""){
		   	 $("#message").html("Please enter email ");
			
		}
		  
		  
		 else if(emailcheck==null){
		   	 $("#message").html("Please enter a valid email address ");
			
		}
		  
		  else{
		  
		  var data = $("#register-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "register.php",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			  $("#regerrors").html("Registration sucessful! click on login to enter");
			$("#register").html('Registration successful ...');
      //setTimeout(' window.location.href = "dashboard.php"; ',4000);
			 
			}
			else    {
			
			 $("#regerrors").html(data);
			  $("#register").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Registration  Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#register").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	//registration ends here 
	
	
	
	//profile update starts here 
	 $("#updateprofile").click(function(u){	
	 u.preventDefault();
	   var name=$("#name").val();
	   
		var emailll=$("#email").val();
		var phone=$("#phone").val();
		var bank=$("#bank").val();
		var account=$("#account").val();
		var referrer=$("#referrer").val();
		//var passwordd=$("#password1").val()
		 var patternn = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var emailcheck=emailll.match(patternn);
	
		 
		 if(emailll==""){
		   	 $("#message").html("Please enter email ");
			
		}
		  else if(name==""){
		  	 $("#message").html("Please enter your name ");
		  }
		  
		 else if(emailcheck==null){
		   	 $("#message").html("Please enter a valid email address ");
			 /*alert("please enter email")*/;
		}
		   else if(bank==""){
		   	 $("#message").html("Please enter your bank ");
			 /*alert("please enter email")*/;
		}
		else if(phone==""){
			 $("#message").html("Please enter your phone number  ");
		}
		else if(account==""){
			 $("#message").html("Please enter your account number  ");
		}
		else if(referrer==""){
			 $("#message").html("Please indicate referrer  ");
		}
		
		  
		  else{
		  
		  var data = $("#update-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "updateprofile.php",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			  $("#message").html("Update successful!");
			   $("#updateprofile").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Updated ');
			 
			}
			else    {
			
			 $("#message").html(data);
			  $("#updateprofile").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Update  Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#updateprofile").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; updating ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	
	//profile update ends here 
	
	 
	
}); //document ready closes here 


