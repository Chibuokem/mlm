
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
								<h2 class="inner-tittle">Matrix</h2>
												<div class="graph">
											 <div class="block-page">
															
                                                            		<!--body starts here-->
                                                                  
                                               
                                               
                                               <!--stat row starts here-->
                                       <div class="row">
          
                                                 <div class="col-sm-12 col-md-12 col-lg-12">
                                                 
                                                <!-- card starts here-->
                                                 <div class="card card-block">
                                                   <h4 class="card-title"><i class="fa fa-user"></i> Your Matrix</h4>
                                                <div class="card-text">
                                                <!--Who to pay details starts here-->
                                                <div id="message" style="color:red; font-weight:bold;"></div>
                                                <div id="success" style="color:green; font-weight:bold;"></div>
                                  				  
                                                  
                                     <div class="table-responsive content">
									<table class="table no-border hover">
										<thead class="no-border">
											<tr>
												<th>Name</th>
                                                <th>Email</th>
												<th>Upline</th>
												<th>Level</th>
												<th>Registered on</th>
												<th>Phone</th>
												<th>Link</th>
                                                <th>Send Message</th>
											</tr>
										</thead>
										<tbody class="no-border-y">

																						<tr>
												
												<td><?php echo $upline1['name'];?></td>
                                                <td><?php echo $upline1['email'];?></td>
												<td><?php echo $upline1['sponsor_email'];?></td>
												<td><?php echo $upline1['level'];?></td>
												<td><?php echo $upline1['timee'];?></td>
												<td><?php echo $upline1['phone'];?></td>
												<td><a class="card-link" target="_blank" href="<?php echo base_url();?>?ref=<?php echo $upline1['email']; ?> ">Registration Link</a></td>
                                                <td> <a class="card-link" href="<?php echo base_url();?>user/compose?with=<?php echo $upline1['email'];?>">Send message</a></td>
											</tr>
																						<tr>
												
												<td><?php echo $upline2['name'];?></td>
                                                <td><?php echo $upline2['email'];?></td>
												<td><?php echo $upline2['sponsor_email'];?></td>
												<td><?php echo $upline2['level'];?></td>
												<td><?php echo $upline2['timee'];?></td>
												<td><?php echo $upline2['phone'];?></td>
												<td><a class="card-link" target="_blank" href="<?php echo base_url();?>?ref=<?php echo $upline2['email']; ?> ">Registration Link</a></td>
                                                 <td> <a class="card-link" href="<?php echo base_url();?>user/compose?with=<?php echo $upline2['email'];?>">Send message</a></td>
											</tr>
																						<tr>
												
												<td><?php echo $upline3['name'];?></td>
                                                <td><?php echo $upline3['email'];?></td>
												<td><?php echo $upline3['sponsor_email'];?></td>
												<td><?php echo $upline3['level'];?></td>
												<td><?php echo $upline3['timee'];?></td>
												<td><?php echo $upline3['phone'];?></td>
												<td><a class="card-link" target="_blank"  href="<?php echo base_url();?>?ref=<?php echo $upline3['email']; ?> ">Registration Link</a></td>
                                                 <td> <a class="card-link" href="<?php echo base_url();?>user/compose?with=<?php echo $upline3['email'];?>">Send message</a></td>
											</tr>
																						<tr>
												<td><?php echo $upline4['name'];?></td>
                                                <td><?php echo $upline4['email'];?></td>
												<td><?php echo $upline4['sponsor_email'];?></td>
												<td><?php echo $upline4['level'];?></td>
												<td><?php echo $upline4['timee'];?></td>
												<td><?php echo $upline4['phone'];?></td>
												<td><a class="card-link" target="_blank" href="<?php echo base_url();?>?ref=<?php echo $upline4['email']; ?> ">Registration Link</a></td>
                                                 <td> <a class="card-link" href="<?php echo base_url();?>user/compose?with=<?php echo $upline4['email'];?>">Send message</a></td>
											</tr>
                                            
                                            
																						<tr>
												<td><?php echo $upline5['name'];?></td>
                                                <td><?php echo $upline5['email'];?></td>
												<td><?php echo $upline5['sponsor_email'];?></td>
												<td><?php echo $upline5['level'];?></td>
												<td><?php echo $upline5['timee'];?></td>
												<td><?php echo $upline5['phone'];?></td>
												<td><a class="card-link" target="_blank" href="<?php echo base_url();?>?ref=<?php echo $upline5['email']; ?> ">Registration Link</a></td>
                                                 <td> <a class="card-link" href="<?php echo base_url();?>user/compose?with=<?php echo $upline5['email'];?>">Send message</a></td>
											</tr>
                                            
                                            
                                            
																						<tr>
												<td><?php echo $upline6['name'];?></td>
                                                <td><?php echo $upline6['email'];?></td>
												<td><?php echo $upline6['sponsor_email'];?></td>
												<td><?php echo $upline6['level'];?></td>
												<td><?php echo $upline6['timee'];?></td>
												<td><?php echo $upline6['phone'];?></td>
												<td><a class="card-link" target="_blank"  href="<?php echo base_url();?>?ref=<?php echo $upline6['email']; ?> ">Registration Link</a></td>
                                                 <td> <a class="card-link" href="<?php echo base_url();?>user/compose?with=<?php echo $upline6['email'];?>">Send message</a></td>
											</tr>
                                            
																					</tbody>
									</table>
									

								</div>
                                                
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
