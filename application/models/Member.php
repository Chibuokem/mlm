<?php
class Member extends CI_Model{
	
public $timee;
public $table;

public function __construct(){
	
	$this->table = "users";	
 date_default_timezone_set('Africa/Lagos');

}


//get data from email
 public function get_data($email_data,$db){
		 
		  $query = "SELECT * FROM ".$this->table." WHERE email=? LIMIT 1";
		  $statement = $db->prepare($query);
		  $statement->bind_param("s",$email_data);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			  $row = $result->fetch_assoc();
			 
		 return $row;
		 }
		 else{
	
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }
	  
	  //check if email exists already
  public function check_email($email,$db){
		 
		  $query = "SELECT * FROM ".$this->table." WHERE email=? LIMIT 1";
		  $statement = $db->prepare($query);
		  $statement->bind_param("s",$email);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
		//email exists	 
		 return "yes";
		 }
		 else{
			 //email doesnt exist and is okay
			return "no"; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }

	



//register construct function
	
	public function register($name,$lastname,$email,$phone,$bank_name,$account_name,$account_number,$next_kin,$next_kin_phone,$sponsor_email,$password,$db){
		
		$password_hash=md5($password);
		$timee=date('Y-m-d H:i:s');
		$query="INSERT INTO ".$this->table."(name,lastname,email,phone,bank_name,account_name,account_number,next_kin,next_kin_phone,sponsor_email,password,timee,current_upline ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
		//echo $db->error.$query;
		
			$statement = $db->prepare($query);
		
		$statement->bind_param("sssssssssssss",$name,$lastname,$email,$phone,$bank_name,$account_name,$account_number,$next_kin,$next_kin_phone,$sponsor_email,$password_hash,$timee,$sponsor_email);
		
	 //$result = $db->query($query);
	 
	 if ( $statement->execute() ){
		 
		 return true;
	 }
	 
	 else{
		
		return false;
		//echo $db->error;
	 }
	               
		
	}


//login construct function

	public function get_profile($db){
		if(!isset($_SESSION['id'])){
			$location=base_url();
			redirect($location);
		}
		
		$id = $_SESSION['id'];
		if(empty($id)){
		die("Your session has expired or your not logged in. please Login");	
		}
		$dataa=array();
		$i=0;
		$query = "SELECT * FROM ".$this->table." WHERE id = '$id' LIMIT 1" ;
		
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
		 $dataa['level'][$i]= $row['level'];
		 $dataa['current_upline'][$i]= $row['current_upline'];
		 $dataa['superadmin'][$i]= $row['superadmin'];
		
		 $i++;
	 }
	 
	 return $dataa;
	}
	
	 else{
		echo $db->error;
		//return false; 
	
	 }
	               
		
	
}
	

	//profile update function
	
	public function update_profile($name,$lastname,$email,$phone,$next_kin,$next_kin_phone,$db){
		if(!isset($_SESSION['id'])){
			die("Your session has expired or your not logged in. please Login");
		}
		
		$id = $_SESSION['id'];
		
		$query="UPDATE ".$this->table." SET name=?,lastname=?,email=?,phone=?,next_kin=?,next_kin_phone=? WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("sssssss",$name,$lastname,$email,$phone,$next_kin,$next_kin_phone,$id);
	
	
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
		
		
		
	}
	
	//bank details update function
	public function update_bank($bank_name,$account_name,$account_number,$db){
		if(!isset($_SESSION['id'])){
			die("Your session has expired or your not logged in. please Login");
		}
		
		$id = $_SESSION['id'];
		
		$query="UPDATE ".$this->table." SET bank_name=?,account_name=?,account_number=? WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("ssss",$bank_name,$account_name,$account_number,$id);
	
	
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
		
		
		
	}
	
	
	//update current upline function
		public function update_upline($email,$db){
		if(!isset($_SESSION['id'])){
			die("Your session has expired or your not logged in. please Login");
		}
		
		$id = $_SESSION['id'];
		
		$query="UPDATE ".$this->table." SET current_upline=? WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("ss",$email,$id);
	
	
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
		
		
		
	}
	
	
	//upgrading level function
	public function upgrade_level($email,$level,$db){
		$query="UPDATE ".$this->table." SET level=? WHERE email=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("ss",$level,$email);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
		
		
		
	}
	
	
	//password token update
	public function update_token($email,$token,$db){
		$query="UPDATE ".$this->table." SET password_token=? WHERE email=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("ss",$token,$email);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
		
		
		
	}
	
//login check
  public function check($email,$password,$db){
		  $password_hash = md5($password);
		  $query = "SELECT * FROM ".$this->table." WHERE email=? AND password=? LIMIT 1";
		  $statement = $db->prepare($query);
		  $statement->bind_param("ss",$email,$password_hash);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			 $row = $result->fetch_assoc();
			 if($row['active']==0){
				die("blocked");
				
			 }
			 else{
			// print_r($row);
			 $_SESSION['id'] = $row['id'];
			 $_SESSION['name'] = $row['name'];
			 $_SESSION['active'] = $row['active'];
			 $_SESSION['email'] = $row['email'];
			 $_SESSION['sponsor_email'] = $row['sponsor_email'];
			 $_SESSION['level'] = $row['level'];
			  $_SESSION['current_upline'] = $row['current_upline'];
			 
			
		 return true;
		}
		 }
		 else{
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }

  
  public function get_data_from_id($id,$db){
		 
		  $query = "SELECT * FROM ".$this->table." WHERE id=? LIMIT 1";
		  $statement = $db->prepare($query);
		  $statement->bind_param("s",$id);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			  $row = $result->fetch_assoc();
			 
		 return $row;
		 }
		 else{
	
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }
  
  
   public function get_users($db){
		 $dataa=array();
		 $i=0;
		  $query = "SELECT * FROM ".$this->table." ";
		  
			$result = $db->query($query);
			$num = mysqli_num_rows($result);
		   if($num > 0){
				 while($row = mysqli_fetch_array($result)){
				 $dataa['name'][$i] = $row['name'];
				 $dataa['email'][$i]= $row['email'];
				 $dataa['timee'][$i] = $row['timee'];
				 $dataa['lastname'][$i] = $row['lastname'];
				 $dataa['phone'][$i] = $row['phone'];
				 $dataa['bank_name'][$i] = $row['bank_name'];
				  $dataa['active'][$i] = $row['active'];
				 $dataa['account_name'][$i]= $row['account_name'];
				 $dataa['account_number'][$i] = $row['account_number'];
				 $dataa['next_kin'][$i] = $row['next_kin'];
				 $dataa['next_kin_phone'][$i] = $row['next_kin_phone'];
				 $dataa['sponsor_email'][$i] = $row['sponsor_email'];
				 $dataa['id'][$i]= $row['id'];
				 $dataa['level'][$i]= $row['level'];
				 $dataa['current_upline'][$i]= $row['current_upline'];
				 $dataa['superadmin'][$i]= $row['superadmin'];
				
				 $i++;
			 }
			 return $dataa;  
			   
		   }
		 else {
			return false; 
		 }
	
		  
	  }

   //block user function
   public function block_user($id,$db){
	   $query="UPDATE ".$this->table." SET active=0 WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("s",$id);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
	   
	   
   }
   
    //Unblock user function
   public function activate_user($id,$db){
	   $query="UPDATE ".$this->table." SET active=1 WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("s",$id);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
	   
	   
   }
   
   //make user admin function
    public function make_admin($id,$db){
	   $query="UPDATE ".$this->table." SET superadmin=1 WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("s",$id);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
	   
	   
   }
   
    //remove  user admin privilege function
    public function remove_admin($id,$db){
	   $query="UPDATE ".$this->table." SET superadmin=0 WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("s",$id);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
	   
	   
   }
   
   //delete user function
    public function delete_user($id,$db){
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

		
    public function check_token($token,$db){
		  //$password_hash = md5($password);
		  $query = "SELECT * FROM ".$this->table." WHERE password_token=? LIMIT 1";
		  $statement = $db->prepare($query);
		  $statement->bind_param("s",$token);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			 $row = $result->fetch_assoc();
			
			
			// print_r($row);
			return $row;
		
		 }
		 else{
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }


   //change password function
    public function update_password($id,$password,$db){
		 $password_hash = md5($password);
	   $query="UPDATE ".$this->table." SET password=? WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("ss",$password_hash,$id);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
	   
	   
   }

//member class ends here 	
}



?>