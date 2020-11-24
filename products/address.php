<?php 
require('functions.php');
if(isset($_POST['address']))
{
	$name=$_POST['name'];
	 $address=$_POST['addressl1'];
	  $address2=$_POST['addressl2'];
		$phone=$_POST['phone'];
	 $country=$_POST['country'];
	 	 $city=$_POST['city'];
	$state=$_POST['state'];
	 $pin=$_POST['pin'];
	 $userId=$_POST['userid'];
	 
$address=$user->address($name,$address,$address2,$phone,$country,$city,$state,$pin,$userId);
 // 	if($register==false){
	// $error="Could Not Register";
 // 	}
	header("Location:checkout.php");
}	
if(isset($_POST['updateadd']))
{
	$name=$_POST['name'];
	 $address=$_POST['addressl1'];
	  $address2=$_POST['addressl2'];
		$phone=$_POST['phone'];
	 $country=$_POST['country'];
	 	 $city=$_POST['city'];
	$state=$_POST['state'];
	 $pin=$_POST['pin'];
	 $userId=$_POST['userid'];
	 
$address=$user->updateadd($name,$address,$address2,$phone,$country,$city,$state,$pin,$userId);
 // 	if($register==false){
	// $error="Could Not Register";
 // 	}
	header("Location:checkout.php");
}	
?>