<?php 
require('functions.php');
if(isset($_POST['address']))
{
	 $address=$_POST['addressl1'];
	  $address2=$_POST['addressl2'];
		$phone=$_POST['phone'];
	 $country=$_POST['country'];
	 	 $city=$_POST['city'];
	$state=$_POST['state'];
	 $pin=$_POST['pin'];
	 $userId=$_POST['userid'];
$address=$user->address($address,$address2,$phone,$country,$city,$state,$pin,$userId);
 // 	if($register==false){
	// $error="Could Not Register";
 // 	}
	header("Location:checkout.php");
}	

?>