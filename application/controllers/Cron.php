<?php
  class Cron extends CI_Controller{
	  
	 public function index(){ 
	 
	  /*$this->email->clear();

    $this->email->to($address);
    $this->email->from('your@example.com');
    $this->email->subject('Here is your info '.$name);
    $this->email->message('Hi '.$name.' Here is the info you requested.');
    $this->email->send();*/
	
	 //load database connection
	  require_once('connection.php');
	  //load the member class 
		 $this->load->model('member');
		 //load time model
		 $this->load->model('time_ago');
		 //load payments model
		  $this->load->model('payments');
		 //instantiate the member class
		  $member_class = new Member();
		  //load time class
		  $time_class = new Time_ago();
		  //load payments class
		   $payments_class = new Payments();
		//get users from the member class
		$result_users = $member_class->get_users($this->db);
		$num = count($result_users['id']);
		
							if ($num > 0) {
								
								  for ($i = 0; $i < $num; $i++) { 
									
									//check if activated and registration greater than 3days 
							          if($result_users['level'][$i]==0 && $result_users['active'][$i]==1){
										  
										$result_time=$time_class->time_ago($result_users['timee'][$i]);
										
											//if not activated and time has passed block the user
											if($result_time==true){
												
												$member_class->block_user($result_users['id'][$i],$this->db);
												//$member_class->delete_user($result_users['id'][$i],$this->db);
												
											}
										//if  activated ends here  
									  }
							       
								  }
	                            
	                         //end of users check activation
							}
							
						
						//check payments if time has expired block the payer and delete the transaction
			 $payments_get=$payments_class->get_all_cron($this->db);
			if($payments_get !=="no"){
				 //$data['transaction_pay']=$payments_get;
				$no_payments = count($payments_get['reciever']);
		
				   for ($j = 0; $j < $no_payments; $j++) {
						   if($payments_get['paid'][$j]==0 && $payments_get['status'][$j]==0){
					  // $data['payment_details'][$i]=$member_class->get_data($payments_get['payer'][$i],$this->db);
					          $today=strtotime(date('Y-m-d H:i:s'));
							  $finish=$payments_get['finish'][$j];
							  $diff=$finish-$today;
							  //if he hasnt paid and his time has expired 
								  if($diff <= 0){
									  //get payers details
									 $result_payer=$member_class->get_data($payments_get['payer'][$j],$this->db);
									 //block payer
									 $member_class->block_user($result_payer['id'],$this->db);
									 //delete transaction
									$payments_class->delete_trans($payments_get['id'][$j],$this->db);
								  }
						   }
				   }
				
			
				}
				//end of cron function			
	         }
  
  
  
  }
  
  ?>