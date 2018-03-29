<?php
  class Support extends CI_Model{
public $table;
	
	// message class
	public function __construct(){
		$this->table = 'support';
		
	}
	
	public function sendmessage($name,$phone,$subject,$message,$email,$db){
		//die("sender is".$db);
		$datee= date('Y-m-d H:i:s');
		 
		
		
		$query="INSERT INTO ".$this->table." (name,phone,subject,message,email,date ) VALUES(?,?,?,?,?,?)";
		//die($db->error);
		
		$statement=$db->prepare($query);
		
		$statement->bind_param("ssssss",$name,$phone,$subject,$message,$email,$datee );
		
		
		 if ( $statement->execute() ){
			 
			 return true;
			 
		 }
		 
		 else{
			
			echo $db->error;
			return false; 
		 }
		 
		
		
	}
	
	
	//recieve message function 
	 public function recieve($db){
		 $data=array();
		 $i=0;
		
		  	
			$query = "SELECT * FROM ".$this->table." ";
			$result = $db->query($query);
			$num = mysqli_num_rows($result);
			  if($num > 0){
			 while ( $row = mysqli_fetch_array($result)){
				 //$this->message = $row['message'];
				$data['name'][$i] = $row['name'];
				$data['phone'][$i]= $row['phone'];
				$data['message'][$i]= $row['message'];
				$data['email'][$i]= $row['email'];
				$data['date'][$i]= $row['date'];
				$data['subject'][$i]= $row['subject'];
				$data['id'][$i]= $row['id'];
				
				$i++; 
			 }
			return $data;
		 }
		 
		else{
		return false;	
		}
		 
	 } 
	
//support class ends here 	
}

?>