<?php
  class Message extends CI_Model{

	
	// message class
	public function __construct(){
		
		$this->reciever_column = "reciever_id";
		$this->sender_column = "sender_id";
	}
	
	public function sendmessage($sender,$receiver,$message,$db){
		//die("sender is".$db);
		$this->timee = date('Y-m-d H:i:s');
		
		$this->table = 'messages';
		
		$query="INSERT INTO ".$this->table." (sender_id,reciever_id,message,timee ) VALUES(?,?,?,?)";
		
		$statement=$db->prepare($query);
		
		$statement->bind_param("ssss",$sender,$receiver,$message,$this->timee);
		
		 if ( $statement->execute() ){
			 
			 return true;
			 
		 }
		 
		 else{
			 echo $db->error;
			return false; 
		 }
		 
		
		
	}
	
	
	//recieve message function 
	 public function recieve($db,$owner){
		 $data=array();
		 $i=0;
		 $this->receiver=$owner;
		 $this->table='messages';
		  	
			$query = "SELECT * FROM ".$this->table." WHERE reciever_id=".$owner;
			$result = $db->query($query);
			$num = mysqli_num_rows($result);
			  if($num > 0){
			 while ( $row = mysqli_fetch_array($result)){
				 //$this->message = $row['message'];
				$data['message'][$i] = $row['message'];
				$data['timee'][$i]= $row['timee'];
				$data['sender_id'][$i]= $row['sender_id'];
				$data['id'][$i]= $row['id'];
				// $this->timee = $row['time'];
				 //$this->sender = $row['sender_id'];
				 
				$i++; 
			 }
			return $data;
		 }
		 
		else{
		return false;	
		}
		 
	 } 
	
	
	
	 public function sent($db,$sender){
		 $data=array();
		 $i=0;
		 //$this->receiver=$owner;
		 $this->table='messages';
		  	
			$query = "SELECT * FROM ".$this->table." WHERE sender_id=".$sender;
			$result = $db->query($query);
			$num = mysqli_num_rows($result);
			  if($num > 0){
			 while ( $row = mysqli_fetch_array($result)){
				 //$this->message = $row['message'];
				$data['message'][$i] = $row['message'];
				$data['timee'][$i]= $row['timee'];
				$data['reciever_id'][$i]= $row['reciever_id'];
				$data['id'][$i]= $row['id'];
				// $this->timee = $row['time'];
				 //$this->sender = $row['sender_id'];
				 
				$i++; 
			 }
			return $data;
		 }
		 
		else{
		return false;	
		}
		 
	 } 
	
	

	
//message class ends here 	
}

?>