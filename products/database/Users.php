<?php
class Users
{
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}



	public function register($name,$phone,$email,$password,$addon,$gender){
 
			$sql="SELECT * FROM user WHERE Email='$email'";
 
			//checking if the username or email is available in db
			$check =  $this->db->con->query($sql) ;
			$count_row = $check->num_rows;
 			
			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$password = md5($password);
		
				$sql1="INSERT INTO user(Name,Password,Email,Gender,Mobile,Added_on) VALUES ('$name','$password','$email','$gender',$phone,'$addon')";
				$result = mysqli_query($this->db->con,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
				 $_SESSION['login'] = true;
	            $_SESSION['customer'] = $name;
	             $_SESSION['customermail'] = $email;
	               $_SESSION['userId']=$this->getuserid($email);
	               
        		return $result;
			}
			else { 
				 $_SESSION['error']="Registeration Error";
				 //echo $result;
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
		public function loginbyid($orid){
			$userId=$this->getuseridbyorder($orid);
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
public function getuseridbyorder($orid){
	$sql="SELECT * FROM sales WHERE pay_id='$orid'";
 			//checking if the username or email is available in db
			$check =  $this->db->con->query($sql) ;
		$resultArray=array();
		while ($item=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
	}
	return $resultArray[0]['user_id'];
}


public function address($name,$address,$address2,$phone,$country,$city,$state,$pin,$userID){
	
				
		$sql1="INSERT INTO address(UserId,Address,Address2,Name,Phone,Country,State,City,Pin) VALUES ('$userID','$address','$address2','$name',$phone,'$country','$state','$city','$pin')";
				$result = mysqli_query($this->db->con,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
		
		}
		public function updateadd($name,$address,$address2,$phone,$country,$city,$state,$pin,$userID){
	
				
		$sql1="UPDATE `address` SET `Name`='".$name."',`Address`='".$address."',`Address2`='".$address2."',`Phone`='".$phone."',`Country`='".$country."',`State`='".$state."',`City`='".$city."',`Pin`='".$pin."' WHERE UserId='".$userID."'";
				$result = mysqli_query($this->db->con,$sql1) or die(mysqli_connect_errno()."Data cannot updated");
		
		}
	public function getaddress($userID){
		$result =$this->db->con->query("SELECT * FROM address WHERE UserId=($userID)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
		public function getaddressbyid($ID){
		$result =$this->db->con->query("SELECT * FROM address WHERE Id=($ID)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
		public function usercart($userId){
		$result =$this->db->con->query("SELECT * FROM cart WHERE user_id=($userId)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
public function usercartdelete($userId){
		$result =$this->db->con->query("DELETE FROM cart WHERE user_id=".$userId);
		return true;
	}

public function addressdelete($id){
		$result =$this->db->con->query("DELETE FROM address WHERE Id=".$id);
		return true;
	}
public function setstatus($id,$userId){

		$result =$this->db->con->query("UPDATE address SET Status=0  WHERE UserId=".$userId);
		$result =$this->db->con->query("UPDATE address SET Status=1  WHERE Id=".$id);
	
		return true;
	}


	public function googlelogin($name,$email,$googleid,$addon,$gender){
 
			$sql="SELECT * FROM user WHERE Email='$email'";
			//checking if the username or email is available in db
			$check =  $this->db->con->query($sql) ;
			$count_row = $check->num_rows;
			//if the username is not in db then insert to the table
			if ($count_row == 0){
		
				$sql1="INSERT INTO user(Name,oauth_user_id,Email,Gender,Added_on) VALUES ('$name','$googleid','$email','$gender','$addon')";
				$result = mysqli_query($this->db->con,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
				 $_SESSION['login'] = true;
	            $_SESSION['customer'] = $name;
	             $_SESSION['customermail'] = $email;
	               $_SESSION['userId']=$this->getuserid($email);
	               
        		return $result;
			}
			else { 


			$sql2="SELECT * from user WHERE Email='$email'and oauth_user_id='$googleid'";
 
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
		}



}















?>