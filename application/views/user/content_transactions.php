
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
								<h2 class="inner-tittle">Transactions</h2>
												<div class="graph">
											 <div class="block-page">
                                             <div class="alert alert-info">Use the scroll bar to scroll sideways to view other things in the table</div>
                                             <div class="table-responsive">
					<table class="table table-striped table-bordered">
				  
						<tbody>
							<tr class="success">
								<th>S/N:</th>
								<th>Amount:</th>
								<th>Payer Name:</th>
                                <th>Payer Email:</th>
                                <th>Payer Number:</th>
								<th>Reciever Name:</th>
                                <th>Reciever Email:</th>
                                <th>Reciever Number:</th>
								<th>Date:</th>
								<th>Time Matched:</th>
								<th>Time(finish):</th>
                                <th>Paid:</th>
                                <th>Status:</th>
                                <th>Payment Level:</th>
                                <th>Actions</th>
                                 <th>Actions(Payer)</th>
                                 <th>Actions(Reciever)</th>
						</tr>
							
							<?php
							 $num = count($transaction_recieve['reciever']);
							
							if ($num > 0) {
								
								   for ($i = 0; $i < $num; $i++) { 
									
							?>
									   <tr>
										<td><?php echo $transaction_recieve['id'][$i]; ?></td>
										<td><?php echo $transaction_recieve['amount'][$i]; ?></td>
										<td><?php echo $payment_recieve[$i]['name']; ?></td>
										<td><?php echo $payment_recieve[$i]['email']; ?></td>
										<td><?php echo $payment_recieve[$i]['phone']; ?></td>
										<td><?php echo $payment_details[$i]['name']; ?></td>
										<td><?php echo $payment_details[$i]['email']; ?></td>
                                       <td><?php echo $payment_details[$i]['phone']; ?></td>
                                        <td><?php echo $transaction_recieve['date_created'][$i]; ?></td>
                                        <td><?php echo $transaction_recieve['time_matched'][$i]; ?></td>
                                        <td><?php echo $transaction_recieve['time_finish'][$i]; ?></td>
                                <td><?php if($transaction_recieve['paid'][$i]==1){ echo "Paid";} else{ echo "Havent paid";} ?></td>
                                <td><?php if($transaction_recieve['status'][$i]==1){ echo "Confirmed";} else{ echo "Not Confirmed";} ?></td>
                                        <td><?php echo $transaction_recieve['payment_level'][$i]; ?></td>
                                        
										<td>
										<?php if($transaction_recieve['status'][$i]==0){ ?>
											<button class="btn btn-success" onClick="confirmuser(<?php echo $transaction_recieve['id'][$i];?>,'b_btn<?php echo $i;?>')" id="b_btn<?php echo $i;?>">Confirm User!</button>
										<?php } else { echo "Confirmed"; ?> 
											
										<?php } ?>
										
										
										</td>
                                        <td><?php if($payment_recieve[$i]['active'] ==1){ ?>
											<button class="btn btn-danger" onClick="blockUser(<?php echo $payment_recieve[$i]['id'];?>,'c_btn<?php echo $i;?>')" id="c_btn<?php echo $i;?>">Block Payer!</button>
										<?php } else { ?> 
											<button class="btn btn-info" onClick="unblockUser(<?php echo $payment_recieve[$i]['id'];?>,'ub_btn<?php echo $i;?>')" id="ub_btn<?php echo $i;?>">Unblock Payer!</button>
										<?php } ?></td>
                                        <td><?php if($payment_details[$i]['active'] ==1){ ?>
											<button class="btn btn-danger" onClick="blockUser(<?php echo $payment_details[$i]['id'];?>,'c_btnn<?php echo $i;?>')" id="c_btnn<?php echo $i;?>">Block Reciever!</button>
										<?php } else { ?> 
											<button class="btn btn-info" onClick="unblockUser(<?php echo $payment_details[$i]['id'];?>,'ub_btnn<?php echo $i;?>')" id="ub_btnn<?php echo $i;?>">Unblock Reciever!</button>
										<?php } ?></td>
									</tr>
							<?php	
									
								}
							} 
							?>

						</tbody>
					</table>
				</div>
                                             
                                                    		<!--body starts here-->
                                                                  
                                               
                                               
                                               <!--stat row starts here-->
                                               
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
//unblock user 
function confirmuser(u,b){
	var conf = confirm("Are you sure you want to confirm this transaction ? with id:"+u);
	var btn_id=b;
	if(conf==true){
		$.post("<?php echo base_url();?>user/confirm_admin", {id: u} ,{})
			.done(function(data){
				       if(data==true){
						$("#"+btn_id+"").html("Confirmed")
					   }
					   else{
						alert(data);  
					  }
				
			});
	}
}

//delete user function
function deleteuser(u,b){
	var conf = confirm("Are you sure you want to delete this User? with id:"+u);
	var btn_id=b;
	if(conf==true){
		$.post("<?php echo base_url();?>user/delete_user", {id: u} ,{})
			.done(function(data){
				      if(data==true){
						$("#"+btn_id+"").html("User deleted")
					  }
					  else{
						alert(data);  
					  }
				
			});
	}
}

//make user admin
function makeAdmin(u,b){
	var conf = confirm("Are you sure you want to make  this User admin? with id:"+u);
	var btn_id=b;
	if(conf==true){
		$.post("<?php echo base_url();?>user/make_admin", {id: u} ,{})
			.done(function(data){
				     if(data==true){
						$("#"+btn_id+"").html("User admin")
					 }
					 else{
						alert(data); 
					 }
				
			});
	}
}

//remove admin priviledges 
function removeAdmin(u,b){
	var conf = confirm("Are you sure you want to remove this User's admin priviledges? with id:"+u);
	var btn_id=b;
	if(conf==true){
		$.post("<?php echo base_url();?>user/remove_admin", {id: u} ,{})
			.done(function(data){
				        if(data==true){
						$("#"+btn_id+"").html("admin removed")
						}
				      else{
						alert(data); 
					 }
			});
	}
}

 //block user function
 function blockUser(u,b){
	var conf = confirm("Are you sure you want to block this User? with id:"+u);
	var btn_id=b;
	if(conf==true){
		$.post("<?php echo base_url();?>user/blockuser", {id: u} ,{})
			.done(function(data){
				     if(data==true){
						$("#"+btn_id+"").html("User blocked")
					 }
					 else{
						alert(data); 
					 }
				
				
			});
	}
}

function unblockUser(u,b){
	var conf = confirm("Are you sure you want to unblock this User? with id:"+u);
	var btn_id=b;
	if(conf==true){
		$.post("<?php echo base_url();?>user/unblockuser", {id: u} ,{})
			.done(function(data){
				
						$("#"+btn_id+"").html("User unblocked")
				
				
			});
	}
}
</script>
 