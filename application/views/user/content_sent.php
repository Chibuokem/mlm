
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
								<h2 class="inner-tittle">Outbox</h2>
												<div class="graph">
											 <div class="block-page">
                                             
                                         <?php 
										
										 //check if outbox is empty
										 if( !empty($sent)){ ?>    
                                             <div class="table-responsive content">
											<table class="table no-border hover">
										<thead class="no-border">
											<tr>
												<th>Reciever</th>
                                                <th>Reciever No:</th>
                                                <th>Reciever Email:</th>
                                                <th>Time</th>
												<th>Message</th>
                                                <th>Send again</th>
											</tr>
										</thead>
                                        <tbody class="no-border-y">
                                        
                                        
                                        
                                        <?php 
										
										
                                         $no_sent=count($sent['id']);
										 ?>
			                   <?php 
                                for ($i = 0; $i < $no_sent; $i++) {
                                    
                                    ?>
                                         <tr>
                                         
                                         <td><?php echo $reciever[$i]['name'];?></td>
                                         <td><?php echo $reciever[$i]['phone'];?></td>
                                         <td><?php echo $reciever[$i]['email'];?></td>
                                         <td><?php echo $sent['timee'][$i];?></td>
										<td><?php echo $sent['message'][$i];?></td>
                                        <td><a href="<?php echo base_url();?>user/compose?with=<?php echo $reciever[$i]['email']; ?>">Send Message</a></td>
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
                                        <div class="alert alert-info">Outbox is empty</div>
                                        
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
