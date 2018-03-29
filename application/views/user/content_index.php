
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
								<h2 class="inner-tittle">Dashboard</h2>
												<div class="graph">
											 <div class="block-page">
															
                                                            		<!--body starts here-->
                                                                    
                                                                    <!-- info row starts here-->
                                                 <div class="row">
						                             <div class="col-md-12 col-lg-12">
                                                       
                                                       <?php 
													   
													   if($details['level'][0]==0){
													   
													   ?>
                                                       
                                                       <div class="alert alert-danger">Please note!!! that if you remain at level zero for more than three days after registration your account will automatically be deleted from the system. <a href="<?php echo base_url();?>user/upgrade"><strong>Upgrade</strong></a> today</div>
                                                       <?php } ?>
                                                       
                                                    <?php 
													//alert for pending payments
													if($pending!==false){ ?>
                                                    <div class="alert alert-danger">You have <?php echo $pending;?> payment(s) to make. please note that after your time expires without you paying, your account automatically gets blocked</div>
                                                    <?php }?>  
                                                       
													  <div class="alert alert-info">
									                   <i class="fa fa-info-circle sign"></i>
									<strong>
									<strong>Upgrade to level
                                    
                                    <?php
									$next_level=$details['level'][0];
									echo $next_level+1;
									?>
                                     </strong>  to be able to get paid by your level <?php echo $next_level;?> referrals. If they decide to pay and you are under level <?php echo $next_level+1;?>, you will lose the payment!</strong>
								
                                                       </div>
													</div>
                   
												</div>
                                               <!-- info row ends here-->	
                                               
                                               
                                               <!--stat row starts here-->
                                       <div class="row">
          
                                                 <div class="col-sm-12 col-md-6 col-lg-6">
                                                 
                                                <!-- card starts here-->
                                                 <div class="card card-block">
                                                   <h5 class="card-title"><i class="fa fa-bar-chart"></i> Stats</h5>
                                                <p class="card-text"><!--Total earned:₦4000--></p>
                                                 
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
                                                <h5 class="card-title"><i class="fa fa-user"></i> Your sponsor</h5>
                                                
                                                <p class="card-text">Email: <?php echo $details_sponsor['email'];?> <br/> Phone: <?php echo $details_sponsor['phone']; ?> <br/> His/her Sponsor: <?php echo $details_sponsor['sponsor_email'];?></p>
                                                 
                                               
                                          <a class="card-link " href="mailto:<?php echo $details_sponsor['email'];?>" target="_blank">Send mail to Sponsor</a>
                                       <a class="card-link" href="<?php echo base_url();?>user/compose?with=<?php echo $details_sponsor['email'];?>">Send message</a>
                                                
                                            </div>
                                          </div>  
                                       
                                       <!-- card ends here-->
                                   
								       </div>
                                       
                                          <div class="clearfix"></div>   
							           </div>
                                       
                                       
                                      
							    
                                	<!--second row starts here-->
                                    			<!--start row ends here-->
                                                <br/>
                                			<div class="row">
          
                                                 <div class="col-sm-12 col-md-6 col-lg-6">
                                                 
                                                <!-- card starts here-->
                                                 <div class="card card-block">
                                                   <h5 class="card-title"><i class="fa fa-exclamation-circle"></i> Notifications</h5>
                                                <p class="card-text">You have <strong>
                                                <?php if($pending==false){
												echo 0;
												
												}
												else{
													echo $pending;	
												}?>
                                                </strong> pending payment(s) to make <strong></p>
                                                 
                                                    <a class="card-link" href="<?php echo base_url();?>user/payments">View </a>
                                                   <!-- <a class="card-link">Another link</a>-->
                                                
                                            </div>
                                       
                                       <!-- card ends here-->
                                                           
                                            </div>
                                            
                                            
                                             <div class="col-sm-12 col-md-6 col-lg-6">
                                             
                                              <!-- card starts here-->
                                              <div class="card">
                                                 <div class="card-block">
                                                <h5 class="card-title"><i class="fa fa-bullhorn"></i> Invite</h5>
                                                <p class="card-text">You can choose any of these URL's below to invite your friends and create your 2x2 matrix.<br/>You will be the sponsor of everyone you invite from yur direct referral link. After you invite your first 2 direct referrals, the next ones will be added under them until your 2 levels so you can help your referals and complete your 2x2 matrix.</p>
                                                 
                                               
                                          <a class="card-link " href="<?php echo base_url();?>?ref=<?php echo $details['email'][0]; ?> " target="_blank">Your Link</a>
                                       <a class="card-link"  href="<?php echo base_url();?>?ref=<?php echo $details['sponsor_email'][0]; ?> ">Uplines Link</a>
                                                
                                            </div>
                                          </div>  
                                       
                                       <!-- card ends here-->
                                   
								       </div>
                                       
                                         <div class="clearfix"></div>   
							           </div>		
                                    
                                     <!--second row ends here-->
                                
                                                                   <!-- body ends here -->
																</div>
												
										        </div>
											
										</div>
										<!--//graph-visual-->
									</div>