
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
								<h2 class="inner-tittle">Upgrade</h2>
												<div class="graph">
											 <div class="block-page">
															
                                                            		<!--body starts here-->
                                                                  
                                               
                                               
                                               <!--stat row starts here-->
                                       <div class="row">
          
                                                 <div class="col-sm-12 col-md-12 col-lg-12">
                                                 
                                                <!-- card starts here-->
                                                 <div class="card card-block">
                                                   <h4 class="card-title"><i class="fa fa-level-up"></i> Upgrade</h4>
                                                <div class="card-text">
                                                <!--profile details starts here-->
                                                <div id="message" style="color:red; font-weight:bold;"></div>
                                                <div id="success" style="color:green; font-weight:bold;"></div>
                                                
                                                <?php 
												//check sponsors or current level if okay to recieve upgrade starts here
												if ($details_current_upline['level'] < $details['level'][0]+1){?>
                                                <div class="alert alert-warning">
                                                <p>Thank you for your interest in upgrading to  level
                                                <?php
									$next_level=$details['level'][0];
									echo $next_level+1;
									?>. Unfortunately, your direct upline <?php echo $details_current_upline['name']; ?> that should receive the payment from you, has not yet attained this level. The system can provide a replacement so that you can upgrade and continue growing your business. You can also wait for your upline to upgrade and call him on his number <?php echo $details_current_upline['phone']; ?>. or send him a mail:<?php echo $details_current_upline['email']; ?>. Waiting for <?php echo $details_current_upline['name']; ?> puts you at a risk of loosing payments from your downlines who want to upgrade to the level you are waiting for. </p>
                                                <p>Clicking on upgrade button will generate a replacement account for you to upgrade and continue growing your business and is none reversible. You can decide not to upgrade yet and wait. However, you stand the risk of losing payments from your downlines.</p>
                                                </div>
                                                
                                            <?php 
											//check sponsors or current  level if okay to recieve upgrade ends here
											} ?>    
                                            
                                            
                                           <?php  
										   //if sponsors or upline level is okay starts here
										   if ($details_current_upline['level'] > $details['level'][0]){?>
                                                <div class="alert alert-success">
                                                <p>Your upline is ready for your upgrade go ahead and upgrade to the next level and continue growing your business</p>
                                                </div>
                                                
                                              <?php 
											  //if sponsors or upline level is okay ends here
											  } ?>  
                                                
                                               <?php if ($pending==true){?> 
                                                <div class="alert alert-danger">
                                                <p>Your have a pending payment to make so you can not upgrade yet.Try and make your payment as soon as possible to avoid being blocked </p>
                                                </div>
                                               <?php } ?> 
                                 <form id="upgrade-form">              
                                                
                                <input type="hidden" id="level" name="level" value="<?php echo $details['level'][0]+1;?>"/>
                                
                               <input type="hidden" id="receiver" name="reciever" value="<?php echo $details_current_upline['email'] ;?>"/>
                             <input type="hidden" id="payer" name="payer"    value="<?php echo $details['email'][0];?>"/>
                              <input type="hidden" id="receiver_level" name="reciever_level" value="<?php echo $details_current_upline['level'] ;?>"/>
                                
                                              	
	                        <div id="success" style="color:green; font-weight:bold;"></div> 
                            <div id="error" style="color:green; font-weight:bold;"></div> 
	                    </form>
                         <?php if ($pending==false){?> 
                        <button id="upgrade" class="btn btn-success">Upgrade now</button>
                        <a href="<?php echo base_url();?>user" class="btn btn-warning">Dont upgrade yet</a>
                        <?php }?>
                                                
                                                <!--profile details ends here-->
                                                </div>
                                                 
                                               <!-- <div class="flex-row">
                                                    <a class="card-link">Card link</a>
                                                    <a class="card-link">Another link</a>
                                                </div>-->
                                            </div>
                                       
                                       <!-- card ends here-->
                                                           
                                            </div>
                                            
                                            
                                             
							           </div>
                                       
                                       
                                      
							    
                                	
                                
                                                                   <!-- body ends here -->
																</div>
												
										        </div>
											
										</div>
										<!--//graph-visual-->
									</div>
                                    
 <script type="text/javascript">
$(document).ready(function() {
//profile update starts here 
	 $("#upgrade").click(function(u){	
	 u.preventDefault();
	  
	  var check=confirm("Are u sure you want to upgrade to level <?php echo $details['level'][0]+1;?>");
 
 		if(check== true){
		  var data = $("#upgrade-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>user/upgrade_level",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			  $("#success").html("Upgrade successful check your payments for details on who to pay");
			   $("#upgrade").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Upgrade successful ');
			 
			}
			else    {
			
			 $("#error").html(data);
			  $("#upgrade").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Upgrade  Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#upgrade").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; upgrading ...');
		   }
		  });
		return false;
		
		}
		
		else{
		alert("Upgrade to level <?php echo $details['level'][0]+1;?> canceled");	
		}
		  // end of if confirm statement braces 
	});
	
	
	
	
});

</script>                                   