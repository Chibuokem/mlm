
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
								<h2 class="inner-tittle">View Users</h2>
												<div class="graph">
											 <div class="block-page">
                                             <div class="alert alert-info">Use the scroll bar to scroll sideways to view other things in the table</div>
                                             <div class="table-responsive">
					<table class="table table-striped table-bordered">
				  
						<tbody>
							<tr class="success">
								<th>S/N:</th>
								<th>Name:</th>
								<!--<th>Lastname:</th>-->
								<th>Email:</th>
								<th>Phone:</th>
								<!--<th>Bank Name:</th>
								<th>Account Name:</th>
								<th>Account Number:</th>-->
                                <th>Next of Kin:</th>
                                <th>Next of Kin(phone):</th>
                                <th>Sponsor Email:</th>
                                <th>Status:</th>
                                 <th>Registration date:</th>
                                 <th>Current Level:</th>
                                <!-- <th>Admin Level:</th>-->
                                 <th>Actions</th>
                                 
						</tr>
							
							<?php
							$num = count($users['id']);
							if ($num > 0) {
								
								   for ($i = 0; $i < $num; $i++) { 
									
							?>
									   <tr>
										<td><?php echo $users['id'][$i]; ?></td>
										<td><?php echo $users['name'][$i]; ?></td>
										<!--<td><?php echo $users['lastname'][$i]; ?></td>-->
										<td><?php echo $users['email'][$i]; ?></td>
										<td><?php echo $users['phone'][$i]; ?></td>
										<!--<td><?php echo $users['bank_name'][$i]; ?></td>
										<td><?php echo $users['account_name'][$i]; ?></td>
                                        <td><?php echo $users['account_number'][$i]; ?></td>-->
                                        <td><?php echo $users['next_kin'][$i]; ?></td>
                                        <td><?php echo $users['next_kin_phone'][$i]; ?></td>
                                        <td><?php echo $users['sponsor_email'][$i]; ?></td>
                                        <td><?php  if($users['active'][$i]==1){echo "Active";}else{ echo "Blocked";} ?></td>
                                        <td><?php echo $users['timee'][$i]; ?></td>
                                        <td><?php echo $users['level'][$i]; ?></td>
                                       <!-- <td><?php  if($users['superadmin'][$i]==1){echo "Admin";}else{ echo "User";} ?></td>-->
										<td>
										<?php if($users['active'][$i] ==1){ ?>
											<button class="btn btn-danger" onClick="blockUser(<?php echo $users['id'][$i];?>,'b_btn<?php echo $i;?>')" id="b_btn<?php echo $i;?>">Block User!</button>
										<?php } else { ?> 
											<button class="btn btn-info" onClick="unblockUser(<?php echo $users['id'][$i];?>,'ub_btn<?php echo $i;?>')" id="ub_btn<?php echo $i;?>">Unblock User!</button>
										<?php } ?>
										<?php if($users['superadmin'][$i]==0){ ?>
											<button class="btn btn-success" onClick="makeAdmin(<?php echo $users['id'][$i];?>,'a_btn<?php echo $i;?>')" id="a_btn<?php echo $i;?>">Make Admin!</button>
										<?php } else { ?> 
											<button class="btn btn-success" onClick="removeAdmin(<?php echo $users['id'][$i];?>,'ra_btn<?php echo $i;?>')" id="ra_btn<?php echo $i;?>">Remove Admin!</button>
										<?php } ?>
                                        <button class="btn btn-danger" onClick="deleteuser(<?php echo $users['id'][$i];?>,'d_btn<?php echo $i;?>')" id="d_btn<?php echo $i;?>">Delete User!</button>
										
										</td>
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
</script>
 