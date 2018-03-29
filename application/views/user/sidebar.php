<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="<?php echo base_url();?>"> <span id="logo"> <h1>MLM</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="<?php echo base_url();?>user"><img src="<?php echo base_url();?>/imagess/admin.jpg"></a>
									  <a href="<?php echo base_url();?>user"><span class=" name-caret"><?php if($details['level'][0]==0){echo "User";}else{ echo "Admin";}?></span></a>
									 <p><?php echo $details['name'][0];?><br/>Current Level:<?php echo $details['level'][0];?></p>
									<ul>
									<!--<li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>-->
										<li><a class="tooltips" href="<?php echo base_url();?>user/logout"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
								<div class="menu">
									<ul id="menu" >
										<li><a href="<?php echo base_url();?>user"><!--<i class="fa fa-tachometer"></i>--><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                                        
									  <?php
									  //if admin show this navigation option
									  if($details['superadmin'][0]==1){
										   
									  ?>  
                                        
                                          <li><a href="#"><i class=" fa fa-user"></i> <span>Admin</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href="<?php echo base_url();?>user/support_messages"><i class="fa fa-inbox"></i>Support Messages</a></li>
										<li><a href="<?php echo base_url();?>user/compose"><i class="fa fa-pencil-square-o"></i> Message User</a></li>
                                        <li><a href="<?php echo base_url();?>user/view_users"><i class="fa fa-eye"></i> View Users</a></li>
                                         <li><a href="<?php echo base_url();?>user/payments_all"><i class="fa fa-eye"></i> View transactions </a></li>
											
									
									  </ul>
									</li>
                                        
                                        <?php
									  }
										?>	 
									
									
							        
									<li id="menu-comunicacao" ><a href="<?php echo base_url();?>user/profile"><i class="fa fa-edit"></i> <span>Profile</span></a></li>
                                    
                                    <li id="menu-comunicacao" ><a href="<?php echo base_url();?>user/upgrade"><i class="fa fa-plus-square"></i> <span>Upgrade</span></a></li>
                                    
                                     <li id="menu-comunicacao" ><a href="<?php echo base_url();?>user/payments"><i class="fa fa-money"></i><span>Payments</span></a></li>
                                       <li id="menu-comunicacao" ><a href="<?php echo base_url();?>user/matrix"><i class="fa fa-sitemap"></i> <span>Matrix</span></a></li>
                                       <!-- <li id="menu-comunicacao" ><a href="<?php echo base_url();?>user/messages"><i class="fa fa-envelope"></i> <span>Messages</span></a></li>-->
                                        
                                         <li><a href="#"><i class=" fa fa-envelope"></i> <span>Message</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href="<?php echo base_url();?>user/inbox"><i class="fa fa-inbox"></i> Inbox</a></li>
										<li><a href="<?php echo base_url();?>user/compose"><i class="fa fa-pencil-square-o"></i> Compose Message</a></li>
											<li><a href="<?php echo base_url();?>user/sent"><i class="lnr lnr-envelope"></i> Sent</a></li>
									
									  </ul>
									</li>
                                        
                                    
                                        <li id="menu-comunicacao" ><a href="<?php echo base_url();?>user/help"><i class="fa fa-question-circle"></i> <span>Help &amp; Support</span></a></li>
                                    
                                    
									   
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>