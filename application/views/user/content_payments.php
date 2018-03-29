
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
								<h2 class="inner-tittle">Payments</h2>
												<div class="graph">
											 <div class="block-page">
															
                                                            		<!--body starts here-->
                                                                  
                                               
                                               
                                               <!--stat row starts here-->
                                       <div class="row">
          
                                                 <div class="col-sm-12 col-md-6 col-lg-6">
                                                 
                                                <!-- card starts here-->
                                                 <div class="card card-block">
                                                   <h4 class="card-title"><i class="fa fa-user"></i> Who to pay</h4>
                                                <div class="card-text">
                                                <!--Who to pay details starts here-->
                                                <div id="message" style="color:red; font-weight:bold;"></div>
                                                <div id="success" style="color:green; font-weight:bold;"></div>
                                  				  
                                                
                                                      <?php if($payment_details !=="no"){?>
                                                       
                                                         
													<?php 
													
                                                     $no = count($transaction_pay['reciever']);
                                                  
                                                for ($j = 0; $j < $no; $j++) { ?>
                                                      
                                                        <?php if ($transaction_pay['status'][$j]==0){?>
                                                         <form>
                                                    <p class="alert alert-info"> Created on:<?php echo $transaction_pay['date_created'][$j]; ?> by: <?php echo $transaction_pay['time_matched'][$j]; ?>. You are  expected to have made the payment of &#8358;<?php echo $transaction_pay['amount'][$j]; ?> on or before:<?php echo $transaction_pay['time_finish'][$j]; ?>. payment for level <?php echo $transaction_pay['payment_level'][$j]; ?> You can reach the person you are to pay with his/her details provided below</p>
                                                         <p class="card-text">Name:<?php echo $payment_details[$j]['name'];?><br/>Email:<?php echo $payment_details[$j]['email'];?> <br/>Phone Number:<?php echo $payment_details[$j]['phone'];?> <br/>Bank Name:<?php echo $payment_details[$j]['bank_name'];?>  <br/>Account Name:<?php echo $payment_details[$j]['account_name'];?>  <br/>Account Number:<?php echo $payment_details[$j]['account_number'];?> </p>	
                                                       	
                                                           
                                                        <?php 
														//if he has not indicated to have paid
														if ($transaction_pay['paid'][$j]==0){?>        
	                                                    <button id="<?php echo $transaction_pay['id'][$j]; ?>" class="btn btn-success paid" data-id="<?php echo $transaction_pay['id'][$j]; ?>" data-name="<?php echo $payment_details[$j]['name'];?>" data-number="<?php echo $payment_details[$j]['phone'];?>">I have paid</button>                                       
                                                        <?php } ?>
                                                        
                                                        <?php }  else{?>  
                                                        	<!--<p class="alert alert-info">No pending Payments to make</p>-->
                                                          <?php } ?>
                            
	                    </form>	
                                      <?php } ?>
                        
                            <?php } else{?>
                                
                            <p class="alert alert-info">No pending Payments to make</p>
                            <?php } ?>
                        
                                                
                                                
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
                                                <h4 class="card-title"><i class="fa fa-money"></i> Who to Recieve From</h4>
                                                <div class="card-text">
                                                
                                                	<!--payment info starts here-->
                                                    	<!--profile details starts here-->
                                                        <div id="message_bank" style="color:red; font-weight:bold;"></div>
                                    
                                                         <div id="message_bank_success" style="color:green; font-weight:bold;"></div>					
                                                         <?php if($payment_recieve !=="no"){?>
                                                       
                                                         
													<?php 
													
                                                     $no_pay = count($transaction_recieve['reciever']);
                                                  
                                                for ($j = 0; $j < $no_pay; $j++) { ?>
                                                      
                                                        <?php if ($transaction_recieve['status'][$j]==0){?>
                                                         <form>
                                                    <p class="alert alert-info"> Created on:<?php echo $transaction_recieve['date_created'][$j]; ?> by:<?php echo $transaction_recieve['time_matched'][$j]; ?>. He or she is  expected to have made the payment of  &#8358;<?php echo $transaction_recieve['amount'][$j]; ?> on or before:<?php echo $transaction_recieve['time_finish'][$j]; ?>. payment for level <?php echo $transaction_recieve['payment_level'][$j]; ?> You can reach the person with his/her details provided below.  <?php if ($transaction_recieve['paid'][$j]==1){?><br/>Your downline :<?php echo $payment_recieve[$j]['name'];?> said he/she has paid please confirm if you have recieved <?php }?></p>
                                                         <p class="card-text">Name:<?php echo $payment_recieve[$j]['name'];?><br/>Email:<?php echo $payment_recieve[$j]['email'];?> <br/>Phone Number:<?php echo $payment_recieve[$j]['phone'];?> </p>	
                                                       	
                                                            <?php
															//make button appear only if payer has clicked that he has paid 
															 if ($transaction_recieve['paid'][$j]==1){?>    
	                                                    <button id="<?php echo $transaction_recieve['id'][$j]; ?>" class="btn btn-success confirm" data-id="<?php echo $transaction_recieve['id'][$j]; ?>" data-payer="<?php echo $transaction_recieve['payer'][$j];?>" data-level="<?php echo $transaction_recieve['payment_level'][$j];?>" data-name="<?php echo $payment_recieve[$j]['name'];?>">Confirm Payment</button>
                                                              <?php } ?>
                                                       
                                                        <?php }  else{?>  
                                                        	<!--<p class="alert alert-info">No pending Payments to be recieved</p>-->
                                                          <?php } ?>
                            
	                    </form>	
                                      <?php } ?>
                        
                            <?php } else{?>
                                
                            <p class="alert alert-info">No pending Payments to be recieved</p>
                            <?php } ?>
                        
                                                   <!-- payment info ends here-->
                                                
                                                </div>
                                                 
                                               
                                            
                                            </div>
                                          </div>  
                                       
                                       <!-- card ends here-->
                                   
								       </div>
                                       
                                          <div class="clearfix"></div>   
							           </div>
                                       
                                       
                                      
							    <!--payments made starts here-->
                                        <div class="col-md-12">
                                            <p class="alert alert-info">All Recieved payments</p>
                                            	<?php 
													
                                                     $no_payy = count($transaction_recieve['reciever']);
                                                  
                                                for ($j = 0; $j < $no_payy; $j++) { ?>
                                                      
                                                        <?php if ($transaction_recieve['status'][$j]==1){?>
                                                        
                                                    <p class="alert alert-info"> Created on:<?php echo $transaction_recieve['date_created'][$j]; ?> by:<?php echo $transaction_recieve['time_matched'][$j]; ?>. Payment of  &#8358;<?php echo $transaction_recieve['amount'][$j]; ?> made to you. Deadline was:<?php echo $transaction_recieve['time_finish'][$j]; ?>. payment for level <?php echo $transaction_recieve['payment_level'][$j]; ?> </p>
                                                         <p class="card-text">Name:<?php echo $payment_recieve[$j]['name'];?><br/>Email:<?php echo $payment_recieve[$j]['email'];?> <br/>Phone Number:<?php echo $payment_recieve[$j]['phone'];?> </p>
                                                         
                                                        <?php } }?> 	
                                       </div>
                                	
                                
                                                                   <!-- body ends here -->
																</div>
												
										        </div>
											
										</div>
										<!--//graph-visual-->
									</div>
                                    
 
 <script type="text/javascript">
$( document ).ready(function(){
	//alert('hi');
	
	//confirmation function
$(".confirm").each(function(index, element) {
		   $(element).click(function(e){
			   e.preventDefault();
				var id=$(this).attr("data-id");
				var payer=$(this).attr("data-payer");
				var level=$(this).attr("data-level");
				var name=$(this).attr("data-name");
			    var form_data = new FormData();
				 form_data.append("id",id);
		       form_data.append("payer",payer);
			   form_data.append("level",level);
		     var check = confirm("Are sure you want to confirm this payment? done by: "+name);
		     if (check == true){
			
			 $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>user/confirm_payments",
		   dataType: 'text', // what to expect back from the PHP script
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
		   
			  
		   success: function(data){
			  
			if (data==true)    {
				
			$("#"+id).html('Payment confirmed'); 
			}
			else    {
				
			  $("#"+id).html('Confirmation failed!');

			}
		   },
		   beforeSend:function()
		   {
			
    $("#"+id).html('Confirming...');
		   }
		  });
		  
		return false;
		
		} //else ends here 
			//ajax ends here
				
			
			});
		   
		  
	});
	

//paid function

	$(".paid").each(function(index, element) {
		   $(element).click(function(e){
			   e.preventDefault();
				var id=$(this).attr("data-id");
				var name=$(this).attr("data-name");
				var number=$(this).attr("data-number");
			    var form_data = new FormData();
				 form_data.append("id",id);
		       
			   
		     var check = confirm("Are sure you have paid: "+name);
		     if (check == true){
			
			 $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>user/have_paid",
		   dataType: 'text', // what to expect back from the PHP script
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
		   
			  
		   success: function(data){
			  
			if (data==true)    {
				
			$("#"+id).html('Sent');
			alert("Payment has been marked, call:"+name+""+"On his number: "+number+" to confirm the payment "); 
			}
			else   {
				$("#"+id).html('Sending failed!');
			  //$("#"+id).html('Sending failed!');

			}
		   },
		   beforeSend:function()
		   {
			
    $("#"+id).html('Sending...');
		   }
		  });
		  
		return false;
		
		} //else ends here 
			//ajax ends here
				
			
			});
		   
		  
	});


});
</script>
