
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
								<h2 class="inner-tittle">Inbox</h2>
												<div class="graph">
											 <div class="block-page">
                                             
                                         <?php 
										 //check if inbox is empty
										 if( !empty($messages)){ ?>    
                                             <div class="table-responsive content">
											<table class="table no-border hover">
										<thead class="no-border">
											<tr>
												<th>Sender</th>
                                                <th>Sender No:</th>
                                                <th>Email:</th>
                                                <th>Subject</th>
												<th>Message</th>
                                                <th>Time</th>
                                                <th>Reply</th>
                                                
											</tr>
										</thead>
                                        <tbody class="no-border-y">
                                        
                                        
                                        
                                        <?php 
										
                                         $no_inbox=count($messages['id']);
										 ?>
			                   <?php 
                                for ($i = 0; $i < $no_inbox; $i++) {
                                    
                                    ?>
                                         <tr>
                                         
                                         <td><?php echo $messages['name'][$i];?></td>
                                         <td><?php echo $messages['phone'][$i];?></td>
                                         <td><?php echo $messages['email'][$i];?></td>
                                         <td><?php echo $messages['subject'][$i];?></td>
										<td><?php echo $messages['message'][$i];?></td>
                                        <td><?php echo $messages['date'][$i];?></td>
                                        <td><a href="<?php echo base_url();?>user/compose?with=<?php echo $messages['email'][$i]; ?>">Reply</a></td>
                                        </tr>
                                       <?php } ?>
                                       
                                       </tbody>
									</table>
                                    
                                    </div>
                                       
                                       
                                       <?php
									   //if inbox not empty ends here 
									    } 
										else{
										?>
                                        <div class="alert alert-info">Support inbox is empty</div>
                                        
                                        <?php 
										//else brace ends here 
										} ?>
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
                                    
 
