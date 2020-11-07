<?php 
require('functions.php');
if(isset($_POST['reg_user']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$register=$user->register($name,$phone,$email,$password);
	if(isset($register)){

		$__SESSION['customerEmail']=$email;
			$__SESSION['customerName']=$name;
	//	header("Location:index.php");
	}else
	{
		header("Location:index.php");
	}
}	
?>