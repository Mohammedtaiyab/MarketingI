<?php
class Users
{
	
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}

	public function register($name,$phone,$email,$password){

$check =$this->db->con->query("SELECT * FROM user WHERE Email='$email'");
		$resultArray=array();
		while ($item=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		//print_r($resultArray);
		if(count($resultArray)==0){
			echo "found";
		


		}else{
			echo "Not Found";
		}
//$result =$this->db->con->query("INSERT INTO user(Name,Password,Email,Mobile) VALUES ('$name','$password','$email',$phone)");
		// $resultArray=array();
		// while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		// 	$resultArray[]=$item;
		// 	# code...
		// }
		//return $resultArray;
	return $resultArray;
	}




}

?>