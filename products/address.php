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
	header("Location:addressdetails.php");
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
	header("Location:addressdetails.php");
}	

if(isset($_POST['upload']))
{
$productId=$_POST['id'];

$customfile = '';
if(!empty($_FILES['photo']['name'])){
	$photofile=$_FILES['photo']['name'];
				$ext = pathinfo($photofile, PATHINFO_EXTENSION);
				$customfile = rand(100,999).$productId.'_'.$_SESSION['userId'].'.'.$ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/orderfiles/'.$customfile);	
}elseif (!empty($_POST['mobile'])) {
	$customfile =$_POST['mobile']."_".$_POST['model'];
}elseif (!empty($_POST['text'])) {
 $customfile=$_POST['text'];
}
$custmupdate=$product->customefile($_SESSION['userId'],$productId,$customfile);
	header("Location:cart.php");
}
if(isset($_POST['deleteadd']))
{
	
	 $id=$_POST['id'];
	 
$address=$user->addressdelete($id);
	header("Location:addressdetails.php");
}
if(isset($_POST['id']))
{
	echo "<script>alert('inhere');</script>";
	$id=$_POST['id'];
	$address=$user->getaddressbyid($id);
	echo $address;
}	

if(isset($_GET['aid']))
{
	$setaddress=$user->setstatus($_GET['aid'],$_SESSION['userId']);
	header("Location:addressdetails.php");
}
if(isset($_POST['addressid']))
{

	$setaddress=$user->setstatus($_POST['addressid'],$_SESSION['userId']);
	header("Location:checkout.php");
}				
?>