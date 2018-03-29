<?php
class Payments extends CI_Model{
public $table;
	public function __construct(){
	
	$this->table = "transactions";	
 date_default_timezone_set('Africa/Lagos');

}







public function downline_fetch($emailll,$db){
	die("downline fetch");
	$this->table = "users"; 
	$downline_fetch=array();
	$i_downline=0;
	
	$query_fetch = "SELECT * FROM ".$this->table." WHERE sponsor_email=? ";
		  $statement_fetch = $db->prepare($query_fetch);
		  $statement_fetch->bind_param("s",$emailll);
		 if ( $statement->execute() ){	 
			 $result_downline = $statement->get_result();
			 $num_fetch = $result_downline ->num_rows;
			 
			 if($num_fetch > 0){
				while($row_fetch_downline = $result_downline ->fetch_assoc()){
					 $downline_fetch['email'][$i_downline] = $row_fetch_downline['email'];
					 $i_downline++;
					
				}
				
				return $downline_fetch;
				
				
			 }
				
		}
	
	 else{
		//echo $db->error;
		return false; 
	
	 }
	
	
}

	//get downline function 
	public function getdownlines($db){
		$this->table = "users"; 
	 if(!isset($_SESSION['email'])){
			$location=base_url();
			redirect($location);
		}
		
		$email = $_SESSION['email'];
		if(empty($id)){
		die("Your session has expired or your not logged in. please Login");	
		}
		//initializing data array
		$dataa=array();
		$i=0;
	//query for downline
		$query = "SELECT * FROM ".$this->table." WHERE sponsor_email= '$email' ";
		
	 $result = $db->query($query);
	 $num = mysqli_num_rows($result);
	 if($num > 0)
	 {
	 
	  while($row = mysqli_fetch_array($result)){
		 $dataa['name'][$i] = $row['name'];
		 $dataa['email'][$i]= $row['email'];
		 $dataa['timee'][$i] = $row['timee'];
		 $dataa['lastname'][$i] = $row['lastname'];
		 $dataa['phone'][$i] = $row['phone'];
		 $dataa['bank_name'][$i] = $row['bank_name'];
		 $dataa['account_name'][$i]= $row['account_name'];
		 $dataa['account_number'][$i] = $row['account_number'];
		 $dataa['next_kin'][$i] = $row['next_kin'];
		 $dataa['next_kin_phone'][$i] = $row['next_kin_phone'];
		 $dataa['sponsor_email'][$i] = $row['sponsor_email'];
		 $dataa['id'][$i]= $row['id'];
		
		 $i++;
	 }
	 
	 return $dataa;
	}
	
	 else{
		//echo $db->error;
		return false; 
	
	 }
	 
	 
	}
	
	
	
	//get upline function 
	public function getupline($db){
		$this->table = "users";
	 if(!isset($_SESSION['email'])){
			$location=base_url();
			redirect($location);
		}
		$email = $_SESSION['sponsor_email'];
		if(empty($id)){
		die("Your session has expired or your not logged in. please Login");	
		}
		//initializing data array
		$dataa=array();
		$i=0;
	//query for upline
		$query = "SELECT * FROM ".$this->table." WHERE email= '$email' LIMIT 1";
		
	 $result = $db->query($query);
	 $num = mysqli_num_rows($result);
	 if($num > 0)
	 {
	 
	  while($row = mysqli_fetch_array($result)){
		 $dataa['name'][$i] = $row['name'];
		 $dataa['email'][$i]= $row['email'];
		 $dataa['timee'][$i] = $row['timee'];
		 $dataa['lastname'][$i] = $row['lastname'];
		 $dataa['phone'][$i] = $row['phone'];
		 $dataa['bank_name'][$i] = $row['bank_name'];
		 $dataa['account_name'][$i]= $row['account_name'];
		 $dataa['account_number'][$i] = $row['account_number'];
		 $dataa['next_kin'][$i] = $row['next_kin'];
		 $dataa['next_kin_phone'][$i] = $row['next_kin_phone'];
		 $dataa['sponsor_email'][$i] = $row['sponsor_email'];
		 $dataa['id'][$i]= $row['id'];
		
		 $i++;
	 }
	 
	 return $dataa;
	}
	
	 else{
		//echo $db->error;
		return false; 
	
	 }
	 
	 
	}
	
	
	//function activate
	  public function activate($db){
		$this->table = "users"; 
	 if(!isset($_SESSION['level'])){
			$location=base_url();
			redirect($location);
		}
		
		$level = $_SESSION['level'];
		if(empty($level)){
		die("Your session has expired or your not logged in. please Login");	
		}
		if($level > 0){
			return "activated";
		}
		//initializing data array
		$dataa=array();
		$i=0;
	//query for downline
		$query = "SELECT * FROM ".$this->table." WHERE sponsor_email= '$email' ";
		
	 $result = $db->query($query);
	 $num = mysqli_num_rows($result);
	 if($num > 0)
	 {
	  
	 
	  while($row = mysqli_fetch_array($result)){
		 $dataa['name'][$i] = $row['name'];
		 $dataa['email'][$i]= $row['email'];
		 $dataa['timee'][$i] = $row['timee'];
		 $dataa['lastname'][$i] = $row['lastname'];
		 $dataa['phone'][$i] = $row['phone'];
		 $dataa['bank_name'][$i] = $row['bank_name'];
		 $dataa['account_name'][$i]= $row['account_name'];
		 $dataa['account_number'][$i] = $row['account_number'];
		 $dataa['next_kin'][$i] = $row['next_kin'];
		 $dataa['next_kin_phone'][$i] = $row['next_kin_phone'];
		 $dataa['sponsor_email'][$i] = $row['sponsor_email'];
		 $dataa['id'][$i]= $row['id'];
		
		 $i++;
	 }
	 
	 return $dataa;
	}
	
	 else{
		//echo $db->error;
		return false; 
	
	 }
	 
	 
	}

   //function to check if downlines of the sponsor is complete
   public function check_downline_num($email_fetch,$db){
	   $this->table = "users";
		 $query_fetch = "SELECT * FROM ".$this->table." WHERE sponsor_email=? ";
		  $statement_fetch = $db->prepare($query_fetch);
		  $statement_fetch->bind_param("s",$email_fetch);
	 if ( $statement_fetch->execute() ){	 
		 $result_fetch = $statement_fetch->get_result();
		 $number_of_dowlines = $result_fetch->num_rows;
		 
		 return  $number_of_dowlines;
			
	}
	
	 else{
		 
		echo $db->error;
		return false; 
	
	 }
	 
	 
	}
		
	
	//function to replace upline if full 
	 //if($num > 0){
			// $row = $result->fetch_assoc();	
	public function replace_upline($email,$db){
		
		$gotten=true;
		$data=array();
		$i=0;
		 $query = "SELECT * FROM ".$this->table." WHERE sponsor_email=? ";
		  $statement = $db->prepare($query);
		  $statement->bind_param("s",$email);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 	while ($row = $result->fetch_assoc()){
			 $data['email'][$i] = $row['email'];
			 		
			$i++;	
			}
		 while($gotten){			
            // $counting_email= sizeof($data['email']);
			 
			  $no_email = count($data['email']);
		
				   for ($j = 0; $j < $no_email; $j++) {
				   
					$emaill = $data['email'][$j];
								
					 $queryy = "SELECT * FROM ".$this->table." WHERE sponsor_email=? ";
				  $statementt = $db->prepare($queryy);
				  $statementt->bind_param("s",$emaill);
			 if ( $statementt->execute() ){	 
				 $resultt = $statementt->get_result();
				 $numm = $resultt->num_rows;
				 
				 //if sponsor not yet complete return email 
					 if($numm < 2 ){
						 
						 return $emaill;
						 
						 $gotten=false;
					 }  
				
			}
			
			 else{
				//echo $db->error;
				return false; 
			
			 }
				
				
			//for loop ends here 	
			 }
			 
			
			//$data['email'] = downline_fetch($emaill,$db);
			
			$downline_fetch=array();
	       $i_downline=0;
		   
		 //  die($emaill);
	
	    $query_fetch = "SELECT * FROM ".$this->table." WHERE sponsor_email=? ";
		  $statement_fetch = $db->prepare($query_fetch);
		
		  $statement_fetch->bind_param("s",$emaill);
		 if ( $statement_fetch->execute() ){	 
			 $result_downline = $statement_fetch->get_result();
			 $num_fetch = $result_downline ->num_rows;
			 
				 if($num_fetch > 0){
					while($row_fetch_downline = $result_downline ->fetch_assoc()){
						 $data['email'][$i_downline] = $row_fetch_downline['email'];
						 $i_downline++; 
					}
					
			 //num fetch if ends here
				    }
			 
		       }
			 //while loop for gotten ends here 
		 }
		
			
	}
	
	 else{
		//echo $db->error;
		return false; 
	
	 }
			
		//function for replacing ends here 
	}
	
	//check pending payments

	public function check_pending_payment($db)
	{
			$email = $_SESSION['email'];
			$query_payer = "SELECT * FROM ".$this->table." WHERE payer=? AND status = 0 "; 
			 $statement_payer = $db->prepare($query_payer);
		
			  $statement_payer->bind_param("s",$email);
				 if ( $statement_payer->execute() ) {
				 
					  $result_payer = $statement_payer->get_result();
					  $num_payer = $result_payer ->num_rows;
						  if($num_payer > 0){
							  
							  return "yes";
						  }
						 else{
							return "no"; 
						 }
					  
				 
				   }
				   
				   else{
					return false;   
				   }
	 	
	}
	
	
	
	public function check_pending_payment_num($db)
	{
			$email = $_SESSION['email'];
			$query_payer = "SELECT * FROM ".$this->table." WHERE payer=? AND status = 0 "; 
			 $statement_payer = $db->prepare($query_payer);
		
			  $statement_payer->bind_param("s",$email);
				 if ( $statement_payer->execute() ) {
				 
					  $result_payer = $statement_payer->get_result();
					  $num_payer = $result_payer ->num_rows;
						  if($num_payer > 0){
							  
							  return $num_payer;
						  }
						 else{
							return "no"; 
						 }
					  
				 
				   }
				   
				   else{
					return false;   
				   }
	
	 	
	}

	
	 
	
		public function pay($amount,$payer,$reciever,$payment_level,$db){
			$day=86400;
		  $start=strtotime(date('Y-m-d H:i:s'));
		 // $duration = strtotime("+1 day");
		  $number_of_days=1;
		  $finish=strtotime(date('Y-m-d H:i:s'))+($number_of_days*$day);
		  $status=0;
		  $paid=0;
		  $date_created=date('Y-m-d');
		  $time_matched=date('H:i:s');
		  
		  //time to finish payment
		  $time_finish = date('Y-m-d H:i:s',$finish);
		  
		  
		  	      $query="INSERT INTO ".$this->table."(amount,payer,reciever,date_created,time_matched,time_finish,paid,status,start,finish,payment_level ) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
		//echo $db->error.$query;
		
			$statement = $db->prepare($query);
		
		$statement->bind_param("sssssssssss",$amount,$payer,$reciever,$date_created,$time_matched,$time_finish,$paid,$status,$start,$finish,$payment_level);
		
	 //$result = $db->query($query);
	 
	 if ( $statement->execute() ){
		 
		 return true;
	 }
	 
	 else{
		
		return false;
		//echo $db->error;
	 }
					 
					 
		//pay function ends			 
		 }
	
	
	public function get_to_pay($db)
	{    if(!isset($_SESSION['email'])){
			$location=base_url();
			redirect($location);
		}
			$email = $_SESSION['email'];
			
			$data=array();
			$i=0;
			$query_to_pay = "SELECT * FROM ".$this->table." WHERE payer=? "; 
			 $statement_to_pay = $db->prepare($query_to_pay);
		
			  $statement_to_pay->bind_param("s",$email);
				 if ( $statement_to_pay->execute() ) {
				 
					  $result = $statement_to_pay->get_result();
					  $num_to_pay = $result->num_rows;
					  
					      if($num_to_pay > 0){
					          $result_to_pay = $statement_to_pay->get_result();
							
							while($row=$result->fetch_assoc()){
								
							 $data['id'][$i] = $row['id'];
							 $data['amount'][$i] = $row['amount'];
							 $data['payer'][$i] = $row['payer'];
							 $data['reciever'][$i] = $row['reciever'];
							$data['date_created'][$i] = $row['date_created'];
							$data['time_matched'][$i] = $row['time_matched'];
							$data['time_finish'][$i] = $row['time_finish'];	
							$data['paid'][$i] = $row['paid'];
							$data['status'][$i] = $row['status'];
							$data['start'][$i] = $row['start'];
							$data['finish'][$i] = $row['finish'];

							$data['payment_level'][$i] = $row['payment_level'];
							$i++;	
			             }	   
							  return $data;
						  }
						 else{
							return "no"; 
						 }
					  
				 
				   }
				   
				   else{
					return false;   
				   }
				  
	 	
	}
	
	
	
	public function get_to_recieve($db)
	{
			 if(!isset($_SESSION['email'])){
			$location=base_url();
			redirect($location);
		}
			$email = $_SESSION['email'];
			
			$data=array();
			$i=0;
			$query_to_pay = "SELECT * FROM ".$this->table." WHERE reciever=? "; 
			 $statement_to_pay = $db->prepare($query_to_pay);
		
			  $statement_to_pay->bind_param("s",$email);
				 if ( $statement_to_pay->execute() ) {
				 
					  $result = $statement_to_pay->get_result();
					  $num_to_pay = $result->num_rows;
					  
					      if($num_to_pay > 0){
					          $result_to_pay = $statement_to_pay->get_result();
							
							while($row=$result->fetch_assoc()){
								
							 $data['id'][$i] = $row['id'];
							 $data['amount'][$i] = $row['amount'];
							 $data['payer'][$i] = $row['payer'];
							 $data['reciever'][$i] = $row['reciever'];
							$data['date_created'][$i] = $row['date_created'];
							$data['time_matched'][$i] = $row['time_matched'];
							$data['time_finish'][$i] = $row['time_finish'];	
							$data['paid'][$i] = $row['paid'];
							$data['status'][$i] = $row['status'];
							$data['start'][$i] = $row['start'];
							$data['finish'][$i] = $row['finish'];

							$data['payment_level'][$i] = $row['payment_level'];
							$i++;	
			             }	   
							  return $data;
						  }
						 else{
							return "no"; 
						 }
					  
				 
				   }
				   
				   else{
					return false;   
				   }
				  
	 	
	}
	
	
        //have paid function 
		public function paid($id,$db){
			$query="UPDATE ".$this->table." SET paid=1 WHERE id=? LIMIT 1";
			$statement = $db->prepare($query);
			$statement->bind_param("s",$id);
			
			 if ( $statement->execute() ){
				 return true;	
				}
			else{
			return false;	
			}
			
		}
		
		//confirm payment function
		public function confirm($id,$db){
			$query="UPDATE ".$this->table." SET status=1 WHERE id=? LIMIT 1";
			$statement = $db->prepare($query);
			$statement->bind_param("s",$id);
			
			 if ( $statement->execute() ){
				 return true;	
				}
			else{
			return false;	
			}
			
		}
				
		public function confirm_admin($id,$db){
			$query="UPDATE ".$this->table." SET status=1,paid=1 WHERE id=? LIMIT 1";
			$statement = $db->prepare($query);
			$statement->bind_param("s",$id);
			
			 if ( $statement->execute() ){
				 return true;	
				}
			else{
			return false;	
			}
			
		}		
	
		         //get all transactions
					public function get_all($db)
				   {
						 if(!isset($_SESSION['email']))
						 {
						$location=base_url();
						redirect($location);
					    }
						
						
						$data=array();
						$i=0;
						$query = "SELECT * FROM ".$this->table." ";
						
						$result = $db->query($query);
						 $num = mysqli_num_rows($result);
						 if($num > 0) {
			
					        while($row=mysqli_fetch_assoc($result)){
								
							 $data['id'][$i] = $row['id'];
							 $data['amount'][$i] = $row['amount'];
							 $data['payer'][$i] = $row['payer'];
							 $data['reciever'][$i] = $row['reciever'];
							$data['date_created'][$i] = $row['date_created'];
							$data['time_matched'][$i] = $row['time_matched'];
							$data['time_finish'][$i] = $row['time_finish'];	
							$data['paid'][$i] = $row['paid'];
							$data['status'][$i] = $row['status'];
							$data['start'][$i] = $row['start'];
							$data['finish'][$i] = $row['finish'];

							$data['payment_level'][$i] = $row['payment_level'];
							$i++;	
			             }	   
							  return $data;
						  }
						 else{
							return "no"; 
						 }
			
	}
		
		
		//get transactions for cron job
		public function get_all_cron($db)
				   {
						 /*if(!isset($_SESSION['email']))
						 {
						$location=base_url();
						redirect($location);
					    }
						*/
						
						$data=array();
						$i=0;
						$query = "SELECT * FROM ".$this->table." ";
						
						$result = $db->query($query);
						 $num = mysqli_num_rows($result);
						 if($num > 0) {
			
					        while($row=mysqli_fetch_assoc($result)){
								
							 $data['id'][$i] = $row['id'];
							 $data['amount'][$i] = $row['amount'];
							 $data['payer'][$i] = $row['payer'];
							 $data['reciever'][$i] = $row['reciever'];
							$data['date_created'][$i] = $row['date_created'];
							$data['time_matched'][$i] = $row['time_matched'];
							$data['time_finish'][$i] = $row['time_finish'];	
							$data['paid'][$i] = $row['paid'];
							$data['status'][$i] = $row['status'];
							$data['start'][$i] = $row['start'];
							$data['finish'][$i] = $row['finish'];

							$data['payment_level'][$i] = $row['payment_level'];
							$i++;	
			             }	   
							  return $data;
						  }
						 else{
							return "no"; 
						 }
			
	}
		
		
		
		
		//delete transaction 
		 public function delete_trans($id,$db){
	   $query="DELETE FROM ".$this->table." WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("s",$id);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
	   
	   
   }
//payments class ends here 	
	
}

?>