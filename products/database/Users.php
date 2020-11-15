<?php
class Users
{
	
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}



	public function register($name,$phone,$email,$password,$addon){
 
			$sql="SELECT * FROM user WHERE Email='$email'";
 
			//checking if the username or email is available in db
			$check =  $this->db->con->query($sql) ;
			$count_row = $check->num_rows;
 
			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$password = md5($password);
				$sql1="INSERT INTO user(Name,Password,Email,Mobile,Added_on) VALUES ('$name','$password','$email',$phone,'$addon')";
				$result = mysqli_query($this->db->con,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
				 $_SESSION['login'] = true;
	            $_SESSION['customer'] = $name;
	             $_SESSION['customermail'] = $email;
	               $_SESSION['userId']=$this->getuserid($email);
        		return $result;
			}
			else { 
				 $_SESSION['error']="Registeration Error";
				return false;}
		}





		public function login($email, $password){
			$password = md5($password);
			$sql2="SELECT * from user WHERE Email='$email'and Password='$password'";
 
			//checking if the username is available in the table
        	$result = mysqli_query($this->db->con,$sql2);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;
 
	        if ($count_row == 1) {
	            // this login var will use for the session thing
	            $_SESSION['login'] = true;
	            $_SESSION['customer'] = $user_data['Name'];
	             $_SESSION['customermail']=$user_data['Email'];
	                $_SESSION['userId']=$user_data['ID'];

	           	            return true;
	        }
	        else{
	        	 $_SESSION['error']="Login Error";
			    return false;
			}
    	}


		public function loginbyid($userId){
			$sql="SELECT * from user WHERE ID=($userId)";
 
			//checking if the username is available in the table
        	$result = mysqli_query($this->db->con,$sql);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;
 
	        if ($count_row == 1) {
	            // this login var will use for the session thing
	            $_SESSION['login'] = true;
	            $_SESSION['customer'] = $user_data['Name'];
	             $_SESSION['customermail']=$user_data['Email'];
	                $_SESSION['userId']=$user_data['ID'];

	           	            return true;
	        }
	        else{
	        	 $_SESSION['error']="Login Error";
			    return false;
			}
    	}


public function getuserid($usermail){
	$sql="SELECT * FROM user WHERE Email='$usermail'";
 			//checking if the username or email is available in db
			$check =  $this->db->con->query($sql) ;
		$resultArray=array();
		while ($item=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
	}
	return $resultArray[0]['ID'];
}



public function address($address,$address2,$phone,$country,$city,$state,$pin,$usermail){
			
	$fulladdress=$address."".$address2;
				$userID=$this->getuserid($usermail);
		$sql1="INSERT INTO address(UserId,Address,Phone,Country,State,City,Pin) VALUES ('$userID','$fulladdress',$phone,'$country','$city','$state','$pin')";
				$result = mysqli_query($this->db->con,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
		
		}
	public function getaddress($usermail){
		$userID=$this->getuserid($usermail);
		$result =$this->db->con->query("SELECT * FROM address WHERE UserId=($userID)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
		public function usercart($userId){
		$result =$this->db->con->query("SELECT * FROM cart WHERE UserId=($userID)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}

}

?>