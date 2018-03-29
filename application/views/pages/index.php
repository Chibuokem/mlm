<?php 
$company ="Dreamers Goal";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $company;?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dreamers goal multi level marketing platform " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
<!-- start-smoth-scrolling -->
</head>
	
<body>

<!-- MODAL -->
        <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
                        
        				<h3 class="modal-title" id="modal-login-label">Login</h3>
        				<p>Enter your Email and Password to log on:</p>
        			</div>
        			
        			<div class="modal-body">
        				
                         <div id="errorr" style="color:red; font-weight:bold;">
                        <!-- error will be shown here ! -->
                        </div>
	                    <form role="form" action="" method="post" class="login-form" id="login-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="email">Email</label>
	                        	<input type="text" name="email" placeholder="Email" class="form-username form-control" id="email" required >
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="password">Password</label>
	                        	<input type="password" name="password" placeholder="Password" class="form-password form-control" id="password" required>
	                        </div>
	                        <button class="btn" id="btn-login"> <span class="glyphicon glyphicon-log-in"></span>&nbsp; Login</button><br>
                            <a href="<?php echo base_url();?>reset/pass" class="link text-center" target="_blank">Forgot password?</a>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>
        
        <!--modal stops here -->


  <!-- Registration modal starts here -->
   
	<div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-register-label">Register </h3>
        				<p>Enter your details below</p>
        			</div>
        			
        			<div class="modal-body">
                    <div id="message" style="color:red; font-weight:bold;"></div>
        				<div id="regerrors" style="color:green; font-weight:bold;"></div>
                        
                        
	                    <form role="form" action="" method="post" class="login-form" id="register-form">
	                    	<div class="form-group">
                            <label  for="form-name">Name</label>
	                        	<input type="text" name="name" placeholder="Name" class="form-username form-control" id="name" required >
                            </div>
                            
                            <div class="form-group">
                            <label  for="lastname">Last Name</label>
	                        	<input type="text" name="lastname" placeholder="Last name" class="form-username form-control" id="lastname" required >
                            </div>
                            
                            <div class="form-group">
	                    		<label  for="form-email">Email </label>
	                        	<input type="email" name="email" placeholder="Email" class="form-username form-control" id="form-email" required >
	                        </div>
                            
                             <div class="form-group">
                            <label  for="phone">Phone Number</label>
	                        	<input type="text" name="phone" placeholder="Phone Number" class="form-username form-control" id="phone" required >
	                        </div>
                            <div id="phone_error" style="color:green; font-weight:bold"></div>
                            <input type="hidden" id="phone_check">
                            
                            <div class="form-group">
                            <label  for="bank_name">Bank Name</label>
	                        	<input type="text" name="bank_name" placeholder="Bank name" class="form-username form-control" id="bank_name" required >
                            </div>
                            
                            
                            <div class="form-group">
                            <label  for="account_name">Account Name</label>
	                        	<input type="text" name="account_name" placeholder="Account name" class="form-username form-control" id="account_name" required >
                            </div>
                            
                             <div class="form-group">
                            <label class="sr-only" for="account_number">Account Number</label>
	                        	<input type="text" name="account_number" placeholder="Account number" class="form-username form-control" id="account_number" required >
                            </div>
                            
                             <div class="form-group">
                            <label  for="next_kin">Next of Kin Full name</label>
	                        	<input type="text" name="next_kin" placeholder="Next of kin" class="form-username form-control" id="next_kin" required >
                            </div>
                            
                            
                             <div class="form-group">
                            <label for="next_kin_phone">Next of kin phone</label>
	                        	<input type="text" name="next_kin_phone" placeholder="Next of Kin phone" class="form-username form-control" id="next_kin_phone" required >
                            </div>
                            <div id="next_kin_phone_error" style="color:green; font-weight:bold"></div>
                         
                             <div class="form-group">
                            <label class="sr-only" for="sponsor_email">Sponsors Email</label>
	                        	<input type="email" name="sponsor_email" placeholder="Sponsors Email" class="form-username form-control" id="sponsor_email" value="<?php echo $referral;?>" required >
                            </div>
                            
	                        <div class="form-group">
	                        	<label  for="password1">Password</label>
	                        	<input type="password" name="password" placeholder="Password" class="form-password form-control" id="password1" required>
                              </div>
                                
                               <div class="form-group">  
                                <label  for="password2">Confirm Password</label>
	                        	<input type="password" name="password2" placeholder="Confirm Password" class="form-password form-control" id="password2" required>
	                        </div>
                            <div id="confirmpassword" style="color:green; font-weight:bold;"></div>
	                        <button id="register" class="btn">Register </button>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>
   
   
   <!--Registration modal stops here-->


<!-- banner -->
	<div class="banner">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="<?php echo base_url();?>">D<span>R</span>EA<span>MERS</span>GO<span>A</span>L</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
							  <ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					    <ul class="nav navbar-nav">
          							  <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
           							
								
								<li><a class="active" href="#about">About</a></li> 
								 <li class="dropdown">
              							     <li><a class=" launch-modal scroll" href="#" data-modal-id="modal-login" data-toggle="modal" data-target="#modal-login">Login</a></li>
                          
              								<!--<ul class="dropdown-menu">
               									 <li><a href="codes.html">Short Codes</a></li>
              									  <li><a href="codes.html">Typography</a></li>
               									 <li><a href="codes.html">Services</a></li>
             								 </ul>-->
           							</li>
								  <li><a class=" launch-modal scroll" href="#" data-modal-id="modal-register " data-toggle="modal" data-target="#modal-register">Register</a></li> 
								<li><a href="#contact">Contact</a></li> 
         						 </ul>
       						 </div>
        				<!-- /.navbar-collapse -->
						 </nav>	   
				
				</div>
				<div class="clearfix"></div>
			
			<div class="w3l_banner_info">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="w3l_banner_info">
									 <h4><?php echo $company;?></h4>
									<p>Provide help today</p>
									<a class=" hvr-underline-from-center read launch-modal scroll" href="#" data-modal-id="modal-register " data-toggle="modal" data-target="#modal-register">Register</a>
								</div>
							</li>
							<li>
								<div class="w3l_banner_info">
									<h4><?php echo $company;?></h4>
									<p>A true entrepreneur is someone that takes action , not just a dreamer </p>
									<a class=" hvr-underline-from-center read launch-modal scroll" href="#" data-modal-id="modal-register " data-toggle="modal" data-target="#modal-register">Register</a>
								</div>
							</li>
							<li>
								<div class="w3l_banner_info">
									 <h4><?php echo $company; ?></h4>
									<p>Raise money for any business project you desire TO DO </p>
									<a class=" hvr-underline-from-center read launch-modal scroll" href="#" data-modal-id="modal-register " data-toggle="modal" data-target="#modal-register">Register</a>
								</div>
							</li>
							<li>
								<div class="w3l_banner_info">
									<h4>Join us</h4>
									<p>Join us today  </p>
									<a class=" hvr-underline-from-center read launch-modal scroll" href="#" data-modal-id="modal-register " data-toggle="modal" data-target="#modal-register">Register</a>
								</div>
							</li>
						</ul>
					</div>
				</div>

				
						</div>			
					</div>
<!-- //banner -->	
<!-- about -->
   <div class="about" id="about">
        <div class="container">
			 <div class="wthree-about">
				  <div class="col-md-5 wthree-ab-left">
				      <img src="images/ab.jpg" class="responsive" alt=" " />
                  </div>
				  <div class="col-md-7 wthree-ab-right">
				     <h2 id=""aboutus>About us </h2>
				     <p> <?php echo $company;?> is a simple system that enable members raise the money they seek for any business project, make money from their venture, show them ideas on how to manage the money they have made, and of course show them how that money can be multiplied using various financial instruments. There are two sides to ecooperative and you can choose which one you want to be involved in. The first side is the multilevel part of ecooperative. The second side is the business part.

Some of the services that <?php echo $company;?> renders are – Fundraising through <?php echo $company;?>, Online and offline business development, Internet marketing and training, Online Advertising, Agro-economic ventures, Financial Empowerment services, Hire purchase service, Micro-credit, eCommerce/Online Shopping and Skill Acquisition training.                         </p>
                     
                     <h3>How it works </h3>
					 <p> A sponsor is someone who invited you and is already in the network. He is as a referral link in which you can register. You are to contribute ₦500 into your sponsor’s business.It works with a 2 x 2 forced matrix and is very simple to get involved in. It is a transparent, member to member payment scheme or cooperative that enables you raise the money that you need for your business.

What the 2x2 forced matrix means is that you have to invite four persons to join you in <?php echo $company;?>. 
NOTE: You begin the business with just 500 .
</p>
					
                     
                      <h3>How to join</h3>
					 <p> Joining <?php echo $company;?> is absolutely free. However, to be part of
the network of people who are developing themselves and building
their wealth through e-cooperative, you need a sponsor.
                          .</p>
                          
                           
                      <h3>Mission </h3>
					 <p>To promote quintessential living of all. </p>
                     
                     
                     
                      <a href="#" class="hvr-underline-from-center read">Read More</a>
                      
				  </div>
				  <div class="clearfix"></div>
			 </div>
		</div>
	</div>


<!--plans starts here -->
		<div class="service" id="services">
     <div class="container">
		 <h3 class="tittle">How it works </h3>
		 <p class="sub">The things involved in this MLM platform are</p>
	 </div>
    <div class="service-agileits">
     	<div class="col-md-7 services-gds agile-info">
			<div class="col-md-6 list-gds text-center">
				<span class="glyphicon glyphicon-ok icon" aria-hidden="true"></span>
				<h4>Stage1 </h4>
				<p>You give Emma [your sponsor] ₦500 and invite 2 persons to join you in the <?php echo $company;?>. This two persons will give you ₦500 each amounting to N1,000.

<!--To move to level 2, you CLICK on upgrade and Anie’s account details appear. Note that the figurative Anie in the above diagram is the person who brought your sponsor [Jane]. You give ₦2,500 to Anie, and when the 16 persons that your initial 4 persons want to upgrade to level 2, you will receive ₦2, 500 from each 16 persons. What that means is that you will earn ₦40,000.

When you give Ifiok [the third person above] ₦5,000, you will receive ₦320,000 from your 64 persons when they are moving up to level 3.
When you give Emma [the fourth person above you] ₦10,000, your 256 persons when moving up to level 4 will give you ₦10,000 each summing up to ₦2,560,000.-->
</p>
			</div>
			<div class="col-md-6 list-gds text-center">
				<!--<span class="glyphicon glyphicon-time icon" aria-hidden="true"></span>-->
                <span class="glyphicon glyphicon-ok icon" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-ok icon" aria-hidden="true"></span>
				<h4>Stage 2</h4>
				<p>Just keep inviting people and gaining more</p>
			</div>
			<!--<div class="col-md-6 list-gds text-center">
				
                <span class="glyphicon glyphicon-ok icon" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-ok icon" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-ok icon" aria-hidden="true"></span>
				<h4>Ultimate  </h4>
				<p>50 thousand Naira </p>
			</div>
				<div class="col-md-6 list-gds text-center">
				
                <span class="glyphicon glyphicon-fire icon text-danger" aria-hidden="true"></span>
				<h4>Veteran  </h4>
				<p>100k  </p>
			</div>-->

			<div class="clearfix"></div>			
		</div>
        <div class="col-md-5 col-sm-12 well-lg  well ">
        	<span class="glyphicon glyphicon-warning-sign " aria-hidden="true" style="font-size:75px !important;  font-color:red; "></span>
            <h1 class="text-center text-danger" style="font-weight:bold; ">WARNING! </h1>
            
            <p style="font-weight:bold; font-size:16px; ">Please do not join on this platform if you are not yet ready to pay
            <br/> Join only when you are ready to make payment. we do not want the payments of any of our serious memeber to be delayed by an unserious participant
            </p>
        </div>
        <!-- <div class="col-md-5 agitsworkw3ls-grid">
        </div>-->
        <div class="clearfix"></div>
	 </div>
  </div>


<!--plans ends here -->





 <!-- /services -->
<div class="service" id="services">
     <div class="container">
		 <h3 class="tittle">FEATURES </h3>
		 <p class="sub">The different features we have to make this system awesome </p>
	 </div>
    <div class="service-agileits">
     	<div class="col-md-7 services-gds agile-info">
			<div class="col-md-6 list-gds text-center">
				<span class="glyphicon glyphicon-ok icon" aria-hidden="true"></span>
				<h4>Payment </h4>
				<p>Direct Member to Member payments </p>
			</div>
			<div class="col-md-6 list-gds text-center">
				<span class="glyphicon glyphicon-time icon" aria-hidden="true"></span>
				<h4>Customer Care</h4>
				<p>Direct Link to admin for complaints which are immediately attended to.</p>
			</div>
			<div class="col-md-6 list-gds text-center">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				<h4>DELETE BUTTON  </h4>
				<p>When your downline   is not able to pay ,can be deleted by the upliner for rematching.</p>
			</div>
				<div class="col-md-6 list-gds text-center">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				<h4>Low start </h4>
				<p>Start with as low as 500 Naira </p>
			</div>

			<div class="clearfix"></div>			
		</div>
        <div class="col-md-5 agitsworkw3ls-grid">
        </div>
        <div class="clearfix"></div>
	 </div>
  </div>
	<!-- //services -->
<!-- /client -->
    <div class="client-agile-info" id="client">
        <div class="container">
		 <div class="client-top">
		  <h3 class="tittle two">TESTIMONIES </h3>
		    <div class="slider">
					<div class="callbacks_container">
						<ul class="rslides" id="slider4">
							<li>
								 <div class="agileits-clients">
									<div class="col-md-6 client_agile_info">
									   
											<div class="c-img"><i class="fa fa-quote-right"></i> </div>
											<p></p>
											<h4><img src="images/f1.jpg" alt=""><!-- Martin H. Joseph--></h4>
										 
									</div>
									<div class="col-md-6 client_agile_info">
									   
											<div class="c-img"><i class="fa fa-quote-right"></i> </div>
											<p></p>
											<h4><img src="images/f2.jpg" alt=""> <!--Martin H.Wilson--></h4>
										 
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
							<div class="agileits-clients">
								<div class="col-md-6 client_agile_info">
								   
                                        <div class="c-img"><i class="fa fa-quote-right"></i></div>
										<p><!--"First of all hands off to you guys for your effort and nice, super system. Good work NairaCash team. Great effort, even without refering any user I got my complete paymen--></p>
										<h4> <img src="images/f3.jpg" alt=""> <!--Martin H.Wilson--></h4>
									 
								</div>
								<div class="col-md-6 client_agile_info">
								   
                                        <div class="c-img"><i class="fa fa-quote-right"></i> </div>
										<p><!--I am grateful and cannot stop talking about this platform because it has really change my perspective toward life. Please may all the Nigerians join and be proud like I am and I wish this idea will reach other Nigerians abroad.--> </p>
										<h4><img src="images/f4.jpg" alt=""> <!--Martin Pal--></h4>
									 
								</div>
								<div class="clearfix"></div>
								</div>
							</li>
							<li>
							<div class="agileits-clients">
							  <div class="col-md-6 client_agile_info">
								   
                                        <div class="c-img"><i class="fa fa-quote-right"></i> </div>
										<p><!--This platform is really wonderful instant matching within some hours,fast payment.--></p>
										<h4><img src="images/f1.jpg" alt=""> <!--Martin H. Joseph--></h4>
									 
								</div>
								<div class="col-md-6 client_agile_info">
								   
                                        <div class="c-img"><i class="fa fa-quote-right"></i></div>
										<p><!--Weldone to the administrators of this idea; thumbs up for u all. Proud to be in this great family i got my payment so fast that it was almost unbelieveable .--></p>
										<h4> <img src="images/f2.jpg" alt=""> <!--Martin Pal--></h4>
									 
								</div>
								
								<div class="clearfix"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
						

				</div>
	</div>
</div>
<!-- //client -->
<!-- /contact -->
   <div class="contact-main-agile-info" id="contact">
        <div class="container">
		   <h3 class="tittle" id="contact">Contact Us</h3>
		   <p class="sub">reach us through this Medium</p>
		  <div class="contact-top-agileits">
               <div class="col-md-4 contact-grid ">
					<div class="contact-grid1 agileits-w3layouts">
						<i class="fa fa-location-arrow"></i>
						<div class="con-w3l-info">
						   <h4>Address </h4>
						  <p> <span></span></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid2 w3">
						<i class="fa fa-volume-control-phone"></i>
						<div class="con-w3l-info">
						  <h4>Call Us</h4>
						   <p><span></span></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid3 w3l">
						<i class="fa fa-envelope"></i>
						<div class="con-w3l-info">
						  <h4>Email</h4>
						  <p><a href="mailto:mail.dreamersgoal.com">mail.dreamersgoal.com</a>
						  <span><a href="mailto:mail.dreamersgoal.com">mail.dreamersgoal.com</a></span></p>
						  </div>
						  <div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		  </div>
   <!-- map -->
		<div class="map agileits">
		   <div class="location-mark"><i class="fa fa-map-marker"></i></div>
			   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359195.17562375!2d-113.7156245614499!3d36.2473834534249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471497559566"  frameborder="0" style="border:0" allowfullscreen></iframe>
					<div class="map-grids">
					    <h4>Send Us a Message Now</h4>
						<form action="#" method="post">
						<input type="text" name="Your Name" placeholder="Your Name" required>
						<input type="text" name="Your Email" placeholder="Your Email" required>
						<textarea name="Your Message" placeholder="Your Message" required></textarea>
						<input type="submit" value="SUBMIT">
					</form>
					
				</div>
			
		</div>
		<!-- //map -->
  </div>
  <!-- Footer -->
	<div class="w3l-footer">
		<div class="container">
         <div class="footer-info-agile">
				<div class="col-md-2 footer-info-grid links">
					<h4>NAVIGATION</h4>
					<ul>
						       <li><a href="<?php echo base_url();?>">Home</a></li> 
								<li><a href="#about">About</a></li> 
								<li><a href="#features">features</a></li> 
                                <li><a class=" launch-modal scroll" href="#" data-modal-id="modal-login" data-toggle="modal" data-target="#modal-login">Login</a></li>
                            <li><a class=" launch-modal scroll" href="#" data-modal-id="modal-register " data-toggle="modal" data-target="#modal-register">Register</a></li>
                                <li><a href="contact.html">Contact</a></li> 
					</ul>
				</div>
				<div class="col-md-3 footer-info-grid address">
					<h4>ADDRESS</h4>
					<address>
						<ul>
							<li> </li>
							<li></li>
							<li> </li>
							<li>Email : <a class="mail" href="mailto:mail.dreamersgoal.com">mail.dreamersgoal.com</a></li>
						</ul>
					</address>
				</div>
				<div class="col-md-3 footer-grid">
				   <h4>INSTAGRAM</h4>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f1.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f2.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
						<a href="#"><img src="images/f3.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f4.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 footer-info-grid newsletter">
					<h4>Join us</h4>
					<p>Join us today and experience another dimension of life .
					</p>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="connect-agileits">
				<div class="connect-social">
					<h4>CONNECT WITH US</h4>
					<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="icon rss" href="#"><i class="fa fa-rss"></i></a></li>
							<li><a class="icon lin" href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</section>

				</div>
			</div>

			<div class="copyright-wthree">
				<p>&copy; 2017 <?php echo $company;?>.</p>
			</div>

		</div>
	</div>
<!-- for bootstrap working -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script>
					$('ul.nav li.dropdown').hover(function() {
 						 $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
							}, function() {
  								$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
							});
				</script>	
					<!--banner Slider starts Here-->
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

							<!--banner Slider starts Here-->
	<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider4").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script src="js/bootstrap.js"></script>
   <!-- <script src="js/project.js"></script>-->
<!-- //for bootstrap working -->

<script>

$(document).ready(function() {

	
	 $("#btn-login").click(function(q){	
	 q.preventDefault();
	 
		var emaill=$("#email").val();
		var passwordd=$("#password").val()
		// var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
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
		  
		   url: "<?php echo base_url();?>/process/login",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			 
			$("#btn-login").html('Signing In ...');
      setTimeout(' window.location.href = "<?php echo base_url();?>user"; ',2000);
			 
			}
			
			else if (data=="blocked"){
				$("#btn-login").html('Signing In ...');
      setTimeout(' window.location.href = "<?php echo base_url();?>blocked"; ',2000);
				
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
		
			$.post("<?php echo base_url();?>/process/confirmpass", {pass1: passs1,pass2:passs2} ,{})
			.done(function(data){
					$("#confirmpassword").html(data);
				
			});
	
	}); //confirm password ends here 
	
	
	
	
	//registration starts here 
	
	 $("#register").click(function(q){	
	 q.preventDefault();
	 
	 
	 var name=$("#name").val();
   var lastname=$("#lastname").val();
    var emaill=$("#form-email").val();
      var phone=$("#phone").val();
      var bank_name=$("#bank_name").val();
      var account_name=$("#account_name").val();
       var account_number=$("#account_number" ).val();
        var next_kin =$("#next_kin").val();
        var next_kin_phone =$("#next_kin_phone").val();
        var sponsor_email  =$("#sponsor_email" ).val();
         var password1=$("#password1").val();
         var password2=$("#password2").val();
		// var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		var emailcheck=emaill.match(pattern);
	    
		var phone_error_check=$("#phone_error").html();
		var phone_number=$("#phone");
		   //check_mobile(errorDiv,phoneInput);
		var next_kin_phonee= $("#next_kin_phone");
		var next_kin_phonee_error= $("#next_kin_phone_error");
		 
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
		
		else if(phone_error_check !=='Valid gsm number'){
			 $("#message").html("Please enter valid phone number");
		}
		//phone number validation
		/*else if( check_mobile(phone_error_owner,phone_number)==false){
			$("#message").html("Please enter your valid phone number");
		}*/
		else if(bank_name==""){
		   	 $("#message").html("Please enter your bank name ");
			
		}
		
		else if(account_name==""){
		   	 $("#message").html("Please enter your account name ");
			
		}
		 
		 else if(account_number==""){
		   	 $("#message").html("Please enter your account number ");
			
		} 
		
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
		 else if(sponsor_email==""){
		   	 $("#message").html("Please enter sponsor email ");
			
		} 
		
		 else if(password1==""){
		   	 $("#message").html("Please enter your password ");
			
		} 
		
		 else if(password2==""){
		   	 $("#message").html("Please enter your confirmation password ");
			
		} 
		
		 else if(password1!==password2){
		   	 $("#message").html("Your passwords do not match ");
			
		} 
		  else{
		  
		  var data = $("#register-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>/process/register",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			$("#message").html(" ");
			  $("#regerrors").html("Registration sucessful proceed to login");
			  
			$("#register").html('Registration successful ...');
      //setTimeout(' window.location.href = "dashboard.php"; ',4000);
			 
			}
			else    {
			
			 $("#message").html(data);
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
		var patternn = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		 //var patternn = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
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
	// JavaScript Document
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

phoneInput.addEventListener("blur",function(){

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
	 
	
}); //document ready closes here 





</script>
</body>
</html>