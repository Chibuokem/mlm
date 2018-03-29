
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
								<h2 class="inner-tittle">Profile</h2>
												<div class="graph">
											 <div class="block-page">
															
                                                            		<!--body starts here-->
                                                                  
                                               
                                               
                                               <!--stat row starts here-->
                                       <div class="row">
          
                                                 <div class="col-sm-12 col-md-6 col-lg-6">
                                                 
                                                <!-- card starts here-->
                                                 <div class="card card-block">
                                                   <h4 class="card-title"><i class="fa fa-user"></i> Profile details</h4>
                                                <div class="card-text">
                                                <!--profile details starts here-->
                                                <div id="message" style="color:red; font-weight:bold;"></div>
                                                <div id="success" style="color:green; font-weight:bold;"></div>
                                                		 <form role="form" action="" method="post" class="update-form" id="update-form">
	                    	<div class="form-group">
                            <label  for="name">Name</label>
	                        	<input type="text" value="<?php echo $details['name'][0];?>" name="name" placeholder="Name" class=" form-control" id="name" required >
                            </div>
                            
                            <div class="form-group">
                            <label  for="lastname">Last Name</label>
	                        	<input type="text" value="<?php echo $details['lastname'][0];?>" name="lastname" placeholder="Last name" class="form-control" id="lastname" required >
                            </div>
                            
                            <div class="form-group">
	                    		<label  for="form-email">Email </label>
	                        	<input type="email" value="<?php echo $details['email'][0];?>" name="email" placeholder="Email" class="form-control" id="form-email" required >
	                        </div>
                            
                             <div class="form-group">
                            <label  for="phone">Phone Number</label>
	                        	<input type="text" value="<?php echo $details['phone'][0];?>" name="phone" placeholder="Phone Number" class="form-control" id="phone" required >
	                        </div>
                            <div id="phone_error" style="color:green; font-weight:bold"></div>
                            <input type="hidden" id="phone_check">
                            
                           
                            
                             <div class="form-group">
                            <label  for="next_kin">Next of Kin Full name</label>
	                        	<input type="text" value="<?php echo $details['next_kin'][0];?>" name="next_kin" placeholder="Next of kin" class=" form-control" id="next_kin" required >
                            </div>
                            
                            
                             <div class="form-group">
                            <label  for="next_kin_phone">Next of kin phone</label>
	                        	<input type="text" value="<?php echo $details['next_kin_phone'][0];?>" name="next_kin_phone" placeholder="Next of Kin phone" class="form-control" id="next_kin_phone" required >
                            </div> 
	                        <button id="updateprofile" class="btn btn-success">Update Profile </button>
	                    </form>
                                                
                                                <!--profile details ends here-->
                                                </div>
                                                 
                                               <!-- <div class="flex-row">
                                                    <a class="card-link">Card link</a>
                                                    <a class="card-link">Another link</a>
                                                </div>-->
                                            </div>
                                       
                                       <!-- card ends here-->
                                                           
                                            </div>
                                            
                                            
                                             <div class="col-sm-12 col-md-6 col-lg-6">
                                             
                                              <!-- card starts here-->
                                              <div class="card">
                                                 <div class="card-block">
                                                <h4 class="card-title"><i class="fa fa-money"></i> Payment information</h4>
                                                <div class="card-text">
                                                
                                                	<!--payment info starts here-->
                                                    	<!--profile details starts here-->
                                                        <div id="message_bank" style="color:red; font-weight:bold;"></div>
                                                         <div id="message_bank_success" style="color:green; font-weight:bold;"></div>
                                     <form role="form" action="" method="post" id="update-form-bank">
	                    	
                            
                            <div class="form-group">
                            
                            
                             <div class="form-group">
                            <label  for="bank_name">Bank Name</label>
	                        	<input type="text" value="<?php echo $details['bank_name'][0];?>" name="bank_name" placeholder="Bank name" class="form-control" id="bank_name" required >
                            </div>
                            
                            
                            <div class="form-group">
                            <label  for="account_name">Account Name</label>
	                        	<input type="text" value="<?php echo $details['account_name'][0];?>" name="account_name" placeholder="Account name" class="form-control" id="account_name" required >
                            </div>
                            
                             <div class="form-group">
                            <label  for="account_number">Account Number</label>
	                        	<input type="text" value="<?php echo $details['account_number'][0]?>" name="account_number" placeholder="Account number" class=" form-control" id="account_number" required >
                            </div>
	                        <button id="update_bank" class="btn btn-success">Update bank details</button>
	                    </form>	
                                                   <!-- payment info ends here-->
                                                
                                                </div>
                                                 
                                               
                                            
                                            </div>
                                          </div>  
                                       
                                       <!-- card ends here-->
                                   
								       </div>
                                       
                                          <div class="clearfix"></div>   
							           </div>
                                       
                                       
                                      
							    
                                	
                                
                                                                   <!-- body ends here -->
																</div>
												
										        </div>
											
										</div>
										<!--//graph-visual-->
									</div>
                                    
 <script type="text/javascript">

//profile update starts here 
	 $("#updateprofile").click(function(u){	
	 u.preventDefault();
	  
   var name=$("#name").val();
   var lastname=$("#lastname").val();
    var emaill=$("#form-email").val();
      var phone=$("#phone").val();
     
        var next_kin =$("#next_kin").val();
        var next_kin_phone =$("#next_kin_phone").val();
		// var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		var emailcheck=emaill.match(pattern);
	    
		var phone_error_check=$("#phone_error").html();
		var phone_number=$("#phone");
		   //check_mobile(errorDiv,phoneInput);
		
		 
		 if(emaill==""){
		   	 $("#message").html("Please enter email ");
			
		}
		  
		  
		else if(emailcheck==null){
		   	 $("#message").html("Please enter a valid email address ");
			
		}
		
		else if(name==""){
		   	 $("#message").html("Please enter your first name ");
			
		}
		else if(lastname==""){
		   	 $("#message").html("Please enter your last name ");
			
		}
 
         else if(phone==""){
		   	 $("#message").html("Please enter your phone number");
		}
		
		/*else if(phone_error_check !=='Valid gsm number'){
			 $("#message").html("Please enter valid phone number");
		}*/
		
		
		 else if(next_kin==""){
		   	 $("#message").html("Please enter next of kin name ");
			
		} 
		 
		
		 else if(next_kin_phone==""){
		   	 $("#message").html("Please enter next of kin phone number ");
			
		} 
		/*else if( check_mobile(next_kin_phonee_error,next_kin_phonee)==false){
			$("#message").html("Please enter a valid phone number for next of kin");
		}*/
		else if(phone===next_kin_phone){
			$("#message").html("You can not use same number for yourself and next of kin");
		}
		
		  else{
		  
		  var data = $("#update-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>user/update_profile",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			  $("#success").html("Update successful!");
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
	
	
	 $("#update_bank").click(function(l){	
	 l.preventDefault();
	  
   var bank_name=$("#bank_name").val();
   var account_name=$("#account_name").val();
    var account_number=$("#account_number").val();
      
		 
		 if(bank_name==""){
		   	 $("#message_bank").html("Please enter bank name ");
			
		}
		  
		
		else if(account_name==""){
		   	 $("#message_bank").html("Please enter your account name ");
			
		}
		else if(account_number==""){
		   	 $("#message_bank").html("Please enter your account number ");
			
		}
		
		  else{
		  
		  var data = $("#update-form-bank").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>user/update_bank",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			  $("#message_bank_success").html("Update successful!");
			   $("#update_bank").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Updated ');
			 
			}
			else    {
			
			 $("#message_bank").html("Update failed");
			  $("#update_bank").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Update  Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#update_bank").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; updating ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	
	//profile update ends here 
	
	//phone number validation
	//Nigerian mobile number prefixes from the four major telcos - MTN, GLO, AIRTEL & ETISALAT
var telcoPrefixes = [704,703, 706, 803, 806, 810, 813, 814, 816, 903, 705, 805, 811, 815, 905, 701, 708, 802, 808, 812, 902, 809, 817, 818, 909, 804];


//search array for specific values
function in_array(value, array){
	var index = array.indexOf(value);
	if(index == -1){
		return false;
	}else{
		return index;
	}
}

//error div
var errorDiv = document.getElementById("phone_error");
 
//phone number text field
var phoneInput = document.getElementById("phone");
var dialingCode, mobilePrefix, checkArray;

phoneInput.addEventListener("change",function(){

	//get value from textbox
	phoneInputValue = phoneInput.value;

	//get value length
	var inputLength = phoneInputValue.length;

	//if length is less than the required length of 14
	if(inputLength < 11){

		errorDiv.innerHTML = "Invalid gsm number length";
		errorDiv.classList.remove("valid");												
		errorDiv.classList.add("invalid");
		console.log("invalid gsm number length");

	//if length is equal to 11 (070xxxxxxxx)
	}else if(inputLength === 11){

				//get mobile number prefix - 706 or 703 - depending on telco
				mobilePrefix = Number(phoneInputValue.substr(1,3));
				firstFigure = Number(phoneInputValue[0]);

				//check if mobile prefix exists in telcoPrefixes array
				checkArray = in_array(mobilePrefix, telcoPrefixes);
				if(checkArray === false){
					errorDiv.innerHTML = "Invalid gsm number";
					errorDiv.classList.remove("valid");												
					errorDiv.classList.add("invalid");			
					console.log("invalid gsm number");
				}else if(checkArray > 0 && firstFigure === 0){
					errorDiv.innerHTML = "Valid gsm number";
					errorDiv.classList.remove("invalid");				
					errorDiv.classList.add("valid");												
					console.log("Valid gsm number");
				}else{
					errorDiv.innerHTML = "Invalid gsm number";
					errorDiv.classList.remove("valid");												
					errorDiv.classList.add("invalid");			
					console.log("invalid gsm number");

				}

	//if length is equal to 13 (23470xxxxxxxx)
	}else if(inputLength === 13){

				//get mobile number prefix - 706 or 703 - depending on telco
				mobilePrefix = Number(phoneInputValue.substr(3,3));

				//get dialling code from mobile number
				dialingCode = Number(phoneInputValue.substr(0,3));

				//check if mobile prefix exists in telcoPrefixes array		
				checkArray = in_array(mobilePrefix, telcoPrefixes);
				if(checkArray === false){
					
					errorDiv.innerHTML = "Invalid gsm number";
					errorDiv.classList.remove("valid");												
					errorDiv.classList.add("invalid");					
					console.log("invalid gsm number");

				}else if((checkArray >= 0) && (dialingCode === 234)){

					errorDiv.innerHTML = "Valid gsm number";
					errorDiv.classList.remove("invalid");				
					errorDiv.classList.add("valid");												
					console.log("Valid gsm number");

				}else{

					errorDiv.innerHTML = "Invalid gsm number";
					errorDiv.classList.remove("valid");												
					errorDiv.classList.add("invalid");				
					console.log("invalid gsm number");

				}

//if length is equal to 14 (+23470xxxxxxxx)
	}else if(inputLength === 14){

				//get mobile number prefix from entered value
				mobilePrefix = Number(phoneInputValue.slice(4,7));

				//get dialling code from mobile number - +234
				dialingCode = phoneInputValue.slice(0,4);

				//check if prefix exists in mobile prefix array
				checkArray = in_array(mobilePrefix, telcoPrefixes);

				//if prefix not found in array
				if(checkArray === false){
					
					errorDiv.innerHTML = "Invalid gsm number";
					errorDiv.classList.remove("valid");												
					errorDiv.classList.add("invalid");				
					console.log("invalid gsm number");

				//if found in array
				}else if((checkArray >= 0) && (dialingCode === "+234")){

					errorDiv.innerHTML = "Valid gsm number";
					errorDiv.classList.remove("invalid");				
					errorDiv.classList.add("valid");						
					console.log("Valid gsm number");

				}else{

					errorDiv.innerHTML = "Invalid gsm number";
					errorDiv.classList.remove("valid");												
					errorDiv.classList.add("invalid");				
					console.log("invalid gsm number");

				}
	}else if(inputLength > 14){
		errorDiv.innerHTML = "invalid gsm number length";
		errorDiv.classList.remove("valid");												
		errorDiv.classList.add("invalid");				
		console.log("invalid gsm number length");
	}
});

</script>                                   