<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		require_once('connection.php');
	    $this->load->model('member');
		//loads the member class	
		$member_class = new Member();
		//gets profile data from the member class
		$result_member = $member_class->get_profile($this->db);
		$sponsor_email=$result_member['sponsor_email'][0];
		//get sponsors data
		$result_sponsor=$member_class->get_data($sponsor_email,$this->db);
		//transfers data from member class result
		
		 $this->load->model('payments');
			
		$payments_class = new Payments();
		$payments_response=$payments_class->check_pending_payment_num($this->db);
		
		if($payments_response=="no"){
			
		 $data['pending']=false;	
		}
		else if($payments_response > 0){
			$data['pending']=$payments_response;
		}
		else{
			$data['pending']=false;
		}
		
		
		$data['details'] = $result_member;
		$data['details_sponsor'] = $result_sponsor;
		//loads the view
		$this->load->view('user/head');
		
		$this->load->view('user/content_index',$data);
		$this->load->view('user/footer');
		$this->load->view('user/sidebar',$data);
		$this->load->view('user/ending');
		
	}
	
	
	public function activate()
	{
		
		
	}
	
	public function profile()
	{
		
		require_once('connection.php');
	    $this->load->model('member');
		//instantiate the member class	
		$member_class = new Member();
		//get profile data from member class
		$result_member = $member_class->get_profile($this->db);
		$data['details'] = $result_member;
		$this->load->view('user/head');
		$this->load->view('user/content_profile',$data);
		$this->load->view('user/footer');
		$this->load->view('user/sidebar');
		$this->load->view('user/ending');
		
	}
	
	public function update_profile()
	{
		   //load url helper
		   //load form helper
		    $this->load->helper('url');
		    $this->load->helper(array('form'));
			$name=$this->input->post('name');
			$lastname=$this->input->post('lastname');
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$next_kin=$this->input->post('next_kin');
			$next_kin_phone=$this->input->post('next_kin_phone');
			
			//connect to database
		require_once('connection.php');
		
		//instantiate the member class
	    $this->load->model('member');
			
		$member_class = new Member();
		//get profile data from member class
		$result_member = $member_class->update_profile($name,$lastname,$email,$phone,$next_kin,$next_kin_phone,$this->db);
		
		//check result
		if($result_member==true){
		  die(true);	
		}
		else{
		die(false);	
		}
		
		
	}
	
	
		//bank update function
	public function update_bank()
	{
		   //load url helper
		  
		    $this->load->helper('url');
			 //load form helper
		    $this->load->helper(array('form'));
			//get data from post array
			$bank_name=$this->input->post('bank_name');
			$account_name=$this->input->post('account_name');
			$account_number=$this->input->post('account_number');
			
			if(empty($bank_name)){
				die("Please enter bank name");
			}
			else if(empty($account_name)){
				die("Please enter account name");
			}
			else if(empty($account_number)){
				die("Please enter account number");
			}
				
			//connect to database
		require_once('connection.php');
		
		//instantiate the member class
	    $this->load->model('member');
			
		$member_class = new Member();
		//get profile data from member class
		
		$result_member = $member_class->update_bank($bank_name,$account_name,$account_number,$this->db);
		//check result
		if($result_member==true){
		  die(true);	
		}
		else{
		die(false);	
		}
		
		
	}	
		

  public function upgrade(){
	  //connect to database
		require_once('connection.php');
		
		//check if he has pending payment
		 $this->load->model('payments');
			
		$payments_class = new Payments();
		$payments_response=$payments_class->check_pending_payment($this->db);
		
		if($payments_response=="yes"){
			
		 $data['pending']=true;	
		}
		else{
			$data['pending']=false;
		}
		//check current level
		
		$this->load->model('member');
		//loads the member class	
		$member_class = new Member();
		//gets profile data from the member class
		$result_member = $member_class->get_profile($this->db);
		
		$sponsor_email=$result_member['sponsor_email'][0];
		$current_upline=$result_member['current_upline'][0];
		//get sponsors data
		$result_sponsor=$member_class->get_data($sponsor_email,$this->db);
		$result_current_upline=$member_class->get_data($current_upline,$this->db);
		//transfers data from member class result
		
		$data['details'] = $result_member;
		$data['details_sponsor'] = $result_sponsor;
		$data['details_current_upline'] = $result_current_upline;
		//load views
		$this->load->view('user/head');
		$this->load->view('user/content_upgrade',$data);
		$this->load->view('user/footer');
		$this->load->view('user/sidebar',$data);
		$this->load->view('user/ending');
		  
		
  }

		public function upgrade_level(){
			
			//loaad helper form array
				$this->load->helper(array('form'));
				//get data from post array
				$payer=$this->input->post('payer');
				$reciever=$this->input->post('reciever');
				$level=$this->input->post('level');
				$reciever_level=$this->input->post('reciever_level');
				
				
				//connect to database
				require_once('connection.php');
				$this->load->model('payments');
				
				//load payment class
			   $payments_class = new Payments();
		          //get required fee
		       $amount = $payments_class->price($level);
			   
			   
			   if($reciever_level >= $level){
		        $payment_result=$payments_class->pay($amount,$payer,$reciever,$level,$this->db);
			  if($payment_result==true){
				    $this->load->model('member');
					$member_class = new Member();
					//get details of next higher upline
					$result_upline=$member_class->get_data($reciever,$this->db);
					//higher upline to be next upline after upgrade
				    $current_upline=$result_upline['sponsor_email'];
					$result_update=$member_class->update_upline($current_upline,$this->db);
					if($result_update==true){
					die(true);	
						
					}
					else{
					die("Error updating upline");	
					}
			  }
		  
		  }
		  else{
			  $admin_email="chibuokemibezim@gmail.com";
			   $payment_result=$payments_class->pay($amount,$payer,$admin_email,$level,$this->db);
			  if($payment_result==true){
				    $this->load->model('member');
					$member_class = new Member();
					//get details of next higher upline
					$result_upline=$member_class->get_data($reciever,$this->db);
					//higher upline to be next upline after upgrade
				    $current_upline=$result_upline['sponsor_email'];
					$result_update=$member_class->update_upline($current_upline,$this->db);
					if($result_update==true){
					die(true);	
						
					}
					else{
					die("Error updating upline");	
					}
			  }
			  
		  }
		  
		 //check if upline is eligible for the upgrade
		 
		 
		 
		 
		 	
		}
	
	
	public function payments(){
		//load connection to database
		    require_once('connection.php');
			//load models
			$this->load->model('payments');
			$this->load->model('member');
			//load payment class
		    $payments_class = new Payments();
			$member_class = new Member();
			$result_member = $member_class->get_profile($this->db);
			$data['details'] = $result_member;
			//get who to pay
	        $payments_get=$payments_class->get_to_pay($this->db);
			if($payments_get !=="no"){
				 $data['transaction_pay']=$payments_get;
				$no_payments = count($payments_get['reciever']);
		
				   for ($i = 0; $i < $no_payments; $i++) {
				   $data['payment_details'][$i]=$member_class->get_data($payments_get['reciever'][$i],$this->db);
					
				   }
				
			
				}
			else{
	         $data['payment_details']="no";
			  $data['transaction_pay']="no";
	         }
			//get who to recieve from
	        $payments_recieve=$payments_class->get_to_recieve($this->db);	
	 	         if($payments_recieve !=="no"){
					 $data['transaction_recieve']=$payments_recieve;
				$no_recieve = count($payments_recieve['payer']);
		
				   for ($j = 0; $j < $no_recieve; $j++) {
				   $data['payment_recieve'][$j]=$member_class->get_data($payments_recieve['payer'][$j],$this->db);
					
				   }
				
			
				}
			else{
	         $data['payment_recieve']="no";
			 $data['transaction_recieve']="no";
	         }
			
			$this->load->view('user/head');
		    $this->load->view('user/content_payments',$data);
		    $this->load->view('user/footer');
		   $this->load->view('user/sidebar',$data);
		   $this->load->view('user/ending');
			
			
	}
	
	  //function to confirm users payments 
	public function confirm_payments(){
		 //data base connection
		   require_once('connection.php');
		    $this->load->helper(array('form'));
			//get data from post array
			$id=$this->input->post('id');
			$payer=$this->input->post('payer');
			$level=$this->input->post('level');
			
			//load payment model
		     $this->load->model('payments');
			  $payments_class = new Payments();
			  $response=$payments_class->confirm($id,$this->db);
			  if($response==true){
				  
				  $this->load->model('member');
			      $member_class = new Member();
				  $upgrade_response=$member_class->upgrade_level($payer,$level,$this->db);
				  if($upgrade_response==true){
					die(true);  
				  }
				  else{
					die(false);  
				  }

				  
			  }
		
		
	}
	
	public function have_paid(){
		   //data base connection
		   require_once('connection.php');
		    $this->load->helper(array('form'));
			//get data from post array
			$id=$this->input->post('id');
			//load payment model
		     $this->load->model('payments');
			  $payments_class = new Payments();
			  $response=$payments_class->paid($id,$this->db);
			   if($response==true){
				die(true);   
			   }
			   else{
				die(false);   
			   }
	}
	
	
	public function matrix(){
		  //data base connection
		   require_once('connection.php');
		   //load member class
		   $this->load->model('member');
		    $member_class = new Member();
		   //gets profile data from the member class
		  $result_member = $member_class->get_profile($this->db);
		  
		  $sponsor_email=$result_member['sponsor_email'][0];
		  $result_sponsor=$member_class->get_data($sponsor_email,$this->db);
		 //$result_current_upline=$member_class->get_data($current_upline,$this->db);
		  
		  
		//get sponsors data
		   $result_upline1=$member_class->get_data($sponsor_email,$this->db);
		   $result_upline2=$member_class->get_data($result_upline1['sponsor_email'],$this->db);
		   $result_upline3=$member_class->get_data($result_upline2['sponsor_email'],$this->db);
		   $result_upline4=$member_class->get_data($result_upline3['sponsor_email'],$this->db);
		    $result_upline5=$member_class->get_data($result_upline4['sponsor_email'],$this->db);
			 $result_upline6=$member_class->get_data($result_upline5['sponsor_email'],$this->db);
		    $data['upline1']=$result_upline1;
			$data['upline2']=$result_upline2;
			$data['upline3']=$result_upline3;
			$data['upline4']=$result_upline4;
			$data['upline5']=$result_upline5;
			$data['upline6']=$result_upline6;
			$data['details'] = $result_member;
		     //$data['details_sponsor'] = $result_sponsor;
		     //$data['details_current_upline'] = $result_current_upline;
			 
			 $this->load->view('user/head');
		    $this->load->view('user/content_matrix',$data);
		    $this->load->view('user/footer');
		   $this->load->view('user/sidebar',$data);
		   $this->load->view('user/ending');
			
		
	}
	//inbox message function
	public function inbox(){
		 if(!isset($_SESSION['id'])){
			$location=base_url();
			redirect($location);
		}
		
		$id = $_SESSION['id'];
		 require_once('connection.php');
		 $this->load->model('member');
		  $member_class = new Member();
		   //gets profile data from the member class
		   
		   //load the message class
		   $this->load->model('message');
		   //instantiate the message class 
		   $message_class = new Message();
		   $owner=$id;
		   //fetch the messages 
		   $inbox=$message_class->recieve($this->db,$owner);
		   //member profile data
		    $result_member = $member_class->get_profile($this->db);
		   //if message is actually fetched
		   
		   //initalize array for result from member class
		    $result_member_messages=array();
		   if($inbox !==false){
			   $no_inbox=count($inbox['id']);
			   
			    for ($j = 0; $j < $no_inbox; $j++) {
					
					$result_member_messages[$j] = $member_class->get_data_from_id($inbox['sender_id'][$j],$this->db);
				}
			   
		   }
		   else{
			$inbox="";   
		   }
		   $data['details'] = $result_member;
		   $data['inbox']=$inbox;
		   $data['sender']=$result_member_messages;
		   
		    $this->load->view('user/head');
		    $this->load->view('user/content_inbox',$data);
		    $this->load->view('user/footer');
		  $this->load->view('user/sidebar',$data);
		   $this->load->view('user/ending');
		
	}
	//send message function
	public function compose(){
		 require_once('connection.php');
		 //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  //get profile details
		$result_member = $member_class->get_profile($this->db);
		$data['details'] = $result_member;
	      $this->load->helper(array('form'));
			$with=$this->input->get('with');
			if(!empty($with)){
			$email=$with;
			$disabled="disabled";	
			}
			else{
				$email="";
				$disabled="";
			}
			$data['email']=$email;
			$data['disabled']=$disabled;
			//load views and pass data into the views
			 $this->load->view('user/head');
		    $this->load->view('user/content_compose',$data);
		    $this->load->view('user/footer');
		   $this->load->view('user/sidebar',$data);
		   $this->load->view('user/ending');	
		
	}
	
	//for sending message and inserting into data base 
	     public function send (){
			  if(!isset($_SESSION['id'])){
			die("Your session has expired or your not logged in please login");
			
		}
		    $this->load->model('message');
			$this->load->model('member');
			
		   $id = $_SESSION['id'];
		    require_once('connection.php');
	        $this->load->helper('url');
		    $this->load->helper(array('form'));
			//get sender id from session 
			$sender=$id;
		    $reciever_email=$this->input->post('email');
			
			//get id of the reciever
			$member_class = new Member();
			
			$message=$this->input->post('message');
	       //load the message class
			$message_class = new Message();
			
			$result_reciever=$member_class->get_data($reciever_email,$this->db);
			if($result_reciever==false){
				
			die("Receiver with the email you provided does not exist");	
			}
			else{
			
			//save recievers email
			$receiver=$result_reciever['id'];	
			}
			
			$response=$message_class->sendmessage($sender,$receiver,$message,$this->db);
			
			if($response==true){
			die(true);	
			}
			else{
			  die("Message sending failed ");	
			}
			
	    }
		
		
		public function sent(){
		 if(!isset($_SESSION['id'])){
			$location=base_url();
			redirect($location);
		}
		
		$id = $_SESSION['id'];
		 require_once('connection.php');
		 $this->load->model('member');
		  $member_class = new Member();
		   //gets profile data from the member class
		   
		   //load the message class
		   $this->load->model('message');
		   //instantiate the message class 
		   $message_class = new Message();
		   $sender=$id;
		   //fetch the messages 
		   $sent=$message_class->sent($this->db,$sender);
		   //member profile data
		    $result_member = $member_class->get_profile($this->db);
		   //if message is actually fetched
		   
		   //initalize array for result from member class
		    $result_member_messages=array();
		   if($sent !==false){
			   $no_sent=count($sent['id']);
			   
			    for ($j = 0; $j < $no_sent; $j++) {
					
					$result_member_messages[$j] = $member_class->get_data_from_id($sent['reciever_id'][$j],$this->db);
				}
			   
		   }
		   else{
			$sent="";   
		   }
		   $data['details'] = $result_member;
		   $data['sent']=$sent;
		   $data['reciever']=$result_member_messages;
		   
		    $this->load->view('user/head');
		    $this->load->view('user/content_sent',$data);
		    $this->load->view('user/footer');
		  $this->load->view('user/sidebar',$data);
		   $this->load->view('user/ending');
		
	}
		
	
	public function help(){
		  require_once('connection.php');
		 //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  //get profile details
		$result_member = $member_class->get_profile($this->db);
		$data['details'] = $result_member;
	      
			//load views and pass data into the views
			 $this->load->view('user/head');
		    $this->load->view('user/content_support',$data);
		    $this->load->view('user/footer');
		   $this->load->view('user/sidebar',$data);
		   $this->load->view('user/ending');
	}
	
	public function support(){
		 require_once('connection.php');
		 //load the member class
		   $this->load->helper(array('form'));
			//get data from post array
			$email=$this->input->post('email');
			$subject=$this->input->post('subject');
			$message=$this->input->post('message');
			$name=$this->input->post('name');
			$phone=$this->input->post('phone');
			$this->load->model('support');
			$support_class = new Support();
			
			$response=$support_class->sendmessage($name,$phone,$subject,$message,$email,$this->db);
		    if($response==true){
				die(true);	
			}
			else{
			die(false);	
			}
		
	}
	
	public function support_messages(){
	 require_once('connection.php');
	  //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  //get profile details
		$result_member = $member_class->get_profile($this->db);
		$data['details'] = $result_member;
		$this->load->model('support');
		$support_class = new Support();
			
		$messages=$support_class->recieve($this->db);
		if($messages==false){
		$messages="";	
		}
		$data['messages']=$messages;
		//load views
		 $this->load->view('user/head');
		  $this->load->view('user/content_support_messages',$data);
		  $this->load->view('user/footer');
		  $this->load->view('user/sidebar',$data);
		   $this->load->view('user/ending');
	}
	
	public function view_users(){
		 require_once('connection.php');
	  //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  //get profile details
		$result_member = $member_class->get_profile($this->db);
		//get users from the member class
		$result_users = $member_class->get_users($this->db);
		if($result_users==false){
			$users="";			
		}
		else{
			$users=$result_users;
		}
		$data['details'] = $result_member;
		$data['users'] = $users;
		
		//load views
		 $this->load->view('user/head');
		  $this->load->view('user/content_view_users',$data);
		  $this->load->view('user/footer');
		  $this->load->view('user/sidebar',$data);
		   $this->load->view('user/ending');
		
	}
	
	//block user function
	      public function blockuser(){
		 $this->load->helper(array('form'));
			//get data from post array
			$id=$this->input->post('id');
		   require_once('connection.php');
		
		 //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  $result_block= $member_class->block_user($id,$this->db);
		  if($result_block==true){
			die(true);  
		  }
		  else{
			die("Error occured while blocking user");  
		  }
		  //get profile details
		
	}
	
	//unblock user function
	      public function unblockuser(){
		 $this->load->helper(array('form'));
			//get data from post array
			$id=$this->input->post('id');
		   require_once('connection.php');
		
		 //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  $result_unblock= $member_class->activate_user($id,$this->db);
		  if($result_unblock==true){
			die(true);  
		  }
		  else{
			die("Error occured while unblocking user");  
		  }
		  //get profile details
		
	}
	
	 public function make_admin(){
		 $this->load->helper(array('form'));
			//get data from post array
			$id=$this->input->post('id');
		   require_once('connection.php');
		
		 //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  $result_admin= $member_class->make_admin($id,$this->db);
		  if($result_admin==true){
			die(true);  
		  }
		  else{
			die("Error occured while making user admin");  
		  }
		  //get profile details
		
	}
	
	
	 public function confirm_admin(){
		 $this->load->helper(array('form'));
			//get data from post array
			$id=$this->input->post('id');
		   require_once('connection.php');
		
		 //load the member class 
		 $this->load->model('payments');
		 //instantiate the member class
		  $payments_class = new Payments();
		  $result_admin_confirm=$payments_class->confirm_admin($id,$this->db);
		  if($result_admin_confirm==true){
			die(true);  
		  }
		  else{
			die("Error occured while confirming user ");  
		  }
		  //get profile details
		
	}
	
	public function remove_admin(){
		 $this->load->helper(array('form'));
			//get data from post array
			$id=$this->input->post('id');
		   require_once('connection.php');
		
		 //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  $result_remove= $member_class->remove_admin($id,$this->db);
		  if($result_remove==true){
			die(true);  
		  }
		  else{
			die("Error occured while removing admin priviledge");  
		  }
		    //get profile details
	}
	
	public function delete_user(){
		 $this->load->helper(array('form'));
			//get data from post array
			$id=$this->input->post('id');
		   require_once('connection.php');
		
		 //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  $result_delete= $member_class->delete_user($id,$this->db);
		  if($result_delete==true){
			die(true);  
		  }
		  else{
			die("Error occured while making user admin");  
		  }
		  //get profile details
		
	}
	
	//get all transactions for admin to view
	public function payments_all(){
		//load connection to database
		    require_once('connection.php');
			//load models
			$this->load->model('payments');
			$this->load->model('member');
			//load payment class
		    $payments_class = new Payments();
			$member_class = new Member();
			$result_member = $member_class->get_profile($this->db);
			$data['details'] = $result_member;
			//get who to pay
	        $payments_get=$payments_class->get_all($this->db);
			if($payments_get !=="no"){
				 $data['transaction_pay']=$payments_get;
				$no_payments = count($payments_get['reciever']);
		
				   for ($i = 0; $i < $no_payments; $i++) {
				   $data['payment_details'][$i]=$member_class->get_data($payments_get['reciever'][$i],$this->db);
				   
					
				   }
				
			
				}
			else{
	         $data['payment_details']="no";
			  $data['transaction_pay']="no";
			  $data['payer']="";
	         }
			//get who to recieve from
	        $payments_recieve=$payments_class->get_to_recieve($this->db);	
	 	         if($payments_recieve !=="no"){
					 $data['transaction_recieve']=$payments_recieve;
				$no_recieve = count($payments_recieve['payer']);
		
				   for ($j = 0; $j < $no_recieve; $j++) {
				   $data['payment_recieve'][$j]=$member_class->get_data($payments_recieve['payer'][$j],$this->db);
					
				   }
				
			
				}
			else{
	         $data['payment_recieve']="no";
			 $data['transaction_recieve']="no";
	         }
			
			$this->load->view('user/head');
		    $this->load->view('user/content_transactions',$data);
		    $this->load->view('user/footer');
		   $this->load->view('user/sidebar',$data);
		   $this->load->view('user/ending');
			
			
	}
	
	
	public function reset_password(){
//set email configouration		
  

		
		$this->load->helper(array('form'));
			//get data from post array
			$email=$this->input->post('email');
		   require_once('connection.php');
		
		 //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  //password token
		  $hash = md5( rand(0,1000) );
		  $token = "reset".$hash;
		  $member_response=$member_class->get_data($email,$this->db);
		  if($member_response==false){
			die("Email doesnt exist..check the email you typed well");  
		  }
		  else{
			  
			   $token_response=$member_class->update_token($email,$token,$this->db);
				   if($token_response==true){
					   $this->load->library('email');
					   $config['protocol'] = 'smtp';
						$config['mailpath'] = '/usr/sbin/sendmail';
						$config['charset'] = 'iso-8859-1';
						$config['wordwrap'] = false;
						  $config['smtp_host'] = "mail.dreamersgoal.com"; 
						 $config['smtp_user'] = "dreamers"; 
						 $config['smtp_pass'] = "0dsXT7im24";
                       $this->email->initialize($config);
					  $this->email->from('mail.dreamersgoal.com', 'Dreamers goal');
					  $this->email->to($email);
					 
					   //set url
					   $url= base_url()."user/password_reset/".$token;
					   //attach url
						$this->email->attach($url);
						$this->email->subject('Password reset');
						$this->email->message('Link to reset your password is below and also attached to your email. note that this link can only be used once. The link :'.$url);
				   			if ( ! $this->email->send())
{
                                // Generate error
								die("Error occured while sending email");
                              }
							  else{
								  die(true); 
							  }
				              
				
					 
				   }
		  }
	}
	
	public function password_reset($token){
		if(!isset($token)){
			 echo "<div style='color:red; font-weight:bold;'>Your have no token for this reset check your email for the correct link</div>";
			die(); 
		}
		 require_once('connection.php');
		
		 //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  //check token
		 $password_response=$member_class->check_token($token,$this->db);
		 if($password_response==false){
			 echo "<div style='color:red; font-weight:bold;'>Your token is invalid or has already been used </div>";
			die(); 
		 }
		 else{
			 $data['details']=$password_response;
			$this->load->view('pages/password_reset',$data); 
		 }
		
	}
	
	//function to reset password if token is right
	public function new_password(){
		require_once('connection.php');
	   $this->load->helper(array('form'));
			//get data from post array
			$id=$this->input->post('id');
			$password=$this->input->post('password');
			$password2=$this->input->post('password2');
			if($password !== $password2){
			die("Passwords do not match");	
			}
			else if($password==""){
			die("Fill in your password");	
			}
			
		  
		   else{
		 
		 //load the member class 
		 $this->load->model('member');
		 //instantiate the member class
		  $member_class = new Member();
		  $reset_response=$member_class->update_password($id,$password,$this->db);
				  if($reset_response==true){
					 die(true); 
				  }
				  else{
					die("Error occured while reseting password");  
				  }
		 }
	}
	
	public function logout(){
	$_SESSION['user_id'] = array();
  $location = base_url();
//destroy session
	session_destroy();
	//header("location:$location");	
	redirect($location);
	}
	
	
	
}
