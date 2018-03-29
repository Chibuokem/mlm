<?php session_start();
class Process extends CI_Controller { 
public $db;
 

	public function register()
	
	
	{ 
	//this function is responsible for registration 
            $this->load->helper('url');
            $this->load->helper(array('form'));
			$name=$this->input->post('name');
			$lastname=$this->input->post('lastname');
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$bank_name=$this->input->post('bank_name');
			$account_name=$this->input->post('account_name');
			$account_number=$this->input->post('account_number');
			$next_kin=$this->input->post('next_kin');
			$next_kin_phone=$this->input->post('next_kin_phone');
			$sponsor_email=$this->input->post('sponsor_email');
			$password=$this->input->post('password');
         /* Load form validation library */ 
        if(empty($name)){
		die("Please enter your name");	
		}
		 if(empty($lastname)){
		die("Please enter your last name");	
		}
		 if(empty($email)){
		die("Please enter your email");	
		}
		 if(empty($bank_name)){
		die("Please enter your phone number");	
		}
		 if(empty($password)){
		die("Please enter your phone number");	
		}
		// loading the member model class	
		  $this->load->model('member');
		$member_class=new Member(); 
		//loading the database connection
		require_once('connection.php');
		// to check if email exists
		$valid_email_owner=$member_class->check_email($email,$this->db);
		if($valid_email_owner=="yes"){
		die("Email already exists");	
		}
		$valid_email_sponsor=$member_class->check_email($sponsor_email,$this->db);
		if($valid_email_sponsor=="no"){
		die("Sponsor doesnt exist yet in our system,email not valid");	
		}
		//load payments model
		 $this->load->model('payments');
		//class to check if downlines are complete
		$payments_class=new Payments(); 
		$answer=$payments_class->check_downline_num($sponsor_email,$this->db);
		
		if($answer==false || $answer < 2){
			$sponsor_email_final=$sponsor_email;
		}
		//if sponsors downline is complete replace him
		else if($answer > 1){
			$response_email=$payments_class->replace_upline($sponsor_email,$this->db);
			
			if($response_email !==false){
				$sponsor_email_final=$response_email;
			}
		}
		
		$response = $member_class->register($name,$lastname,$email,$phone,$bank_name,$account_name,$account_number,$next_kin,$next_kin_phone,$sponsor_email_final,$password,$this->db);
			if($response==true){
				die(true);
			}
			else{
			die($response);	
			}
		
	
		
	}


   public function login(){
	   //this function is responsible for login 
	    $this->load->helper('url');
         $this->load->helper(array('form'));
		 $email=$this->input->post('email');
		$password = $this->input->post('password');
		require_once('connection.php');
			 
			  $this->load->model('member');
		$check = new Member(); 
		
		
		$result = $check->check($email,$password,$this->db);
		if($result == true){
		die(true);
			
		}
		else{
		die("Invalid email or password");	
		}
		
			
	   
   }

 public function confirmpass(){
	 
	 //password confirmation function 
	  $this->load->helper('url');
		    $this->load->helper(array('form'));
			$pass_main=$this->input->post('pass1');
			$pass_check=$this->input->post('pass2');
			
			if(empty($pass_main)){
			die("Please Enter main password");	
			}
			else if(empty($pass_check)){
			die("Enter confirmation password");	
			}
			else if($pass_main==$pass_check){
			die("Passwords match");	
			}
			else if($pass_main!==$pass_check){
			die("Passwords do not  match");	
			}		
 }
 
 
 
 
 
 public function update(){
	            $this->load->helper('url');
		    $this->load->helper(array('form'));
			$id=$this->input->post('id');
			$message=$this->input->post('message');
			if(empty($id)){
			  	die("update failed");
			
			}
			else if(empty($message)){
				die("message is empty");
			}
			else{
				
				$this->load->model('messages');
			  $tributes = new Messages();
			  require_once('connection.php');
			 // $this->db = new MySQLi('localhost','root','','papa');
			  $result_tributes = $tributes->update($id,$message,$this->db);
			  if($result_tributes == true){
			    die(true);
			  }
			  else{
				  die("error");
				//die(false);  
			  }
			  	
			}
		 
	 }
	
	
	 
	 
	  public function approve(){
	            $this->load->helper('url');
		    $this->load->helper(array('form'));
			$id=$this->input->post('id');
			$message=$this->input->post('message');
			if(empty($id)){
			  	die("update failed");
			
			}
			else if(empty($message)){
				die("message is empty");
			}
			else{
				
				$this->load->model('testimonies');
			  $testimonies_update = new Testimonies();
			 // $this->db = new MySQLi('localhost','root','','papa');
			 require_once('connection.php');
			  $result_testimonies = $testimonies_update->update($id,$message,$this->db);
			  if($result_testimonies == true){
			    die(true);
			  }
			  else{
				  die("error occured");
				//die(false);  
			  }
			  	
			}
		 
	 }
	 
	 
	    public function picture(){
		   $this->load->helper('url');
         $this->load->helper(array('form'));
		 //print_r($_FILES);
		 if (isset($_FILES['files']) && !empty($_FILES['files'])) {
			 
		 $_FILES['file']['name'] = $_FILES['files']['name'][0];
                $_FILES['file']['type'] = $_FILES['files']['type'][0];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][0];
                $_FILES['file']['error'] = $_FILES['files']['error'][0];
                $_FILES['file']['size'] = $_FILES['files']['size'][0];
			 
			   $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            =2000;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);
				//if ( ! $this->upload->do_upload('picture'))
				//$pic=$_FILES["files"]["name"][$i];
				if ( ! $this->upload->do_upload('file'))
                {
                        //$error = array('error' => $this->upload->display_errors());
						
						echo $this->upload->display_errors();
						//echo $error;
						
						die();		
							
						
           }
		  // $picture = $this->upload->data('full_path');
		  $picture = $this->upload->data('file_name');
		  $path = './uploads/'.$picture;
		  $picture_new = 'thumb_'.$picture;
		  //image processing class called here 
		     $config['image_library'] = 'gd2';
			$config['source_image'] = $path;
			$config['create_thumb'] = FALSE;
			$config['new_image'] = $picture_new;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 1600;
			$config['height']       = 800;
           $this->load->library('image_lib', $config);
		            if ( ! $this->image_lib->resize())
             {
                  echo $this->image_lib->display_errors();
				  die();
             }
			 
		   
		     $this->load->model('pictures');
		   $pictures_class = new Pictures();
		   require_once('connection.php');
		   $name=$this->input->post('name');
		    $response_picture = $pictures_class->send($picture_new,$picture,$name,$this->db);
			if( $response_picture==true){
			   die(true);	
			}
			else{
			die("error occured");	
			}
		    
		   
		 }
		 else{
			die("Please select a picture"); 
		 }
	 }


  public function delete_picture(){
	    $this->load->helper('url');
		    $this->load->helper(array('form'));
			$id=$this->input->post('id');
			$image=$this->input->post('image');
			if(empty($id)){
			  	die("deleting failed");
			
			}
			elseif(empty($image)){
				die("deleting failed..image id not found!");
			}
	     else{
			 $this->load->model('pictures');
		   $pictures_classs = new Pictures();
		   require_once('connection.php');
		   $response = $pictures_classs->delete($id,$image,$this->db);
		   if($response==true){
			die(true);  
		   }
		   else{
			die(false);   
		   }
		   
		 }
  }

}
?>