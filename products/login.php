<?php 
require('functions.php');
if(isset($_POST['reg_user']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$addon=date('Y ,D M');

	$register=$user->register($name,$phone,$email,$password,$addon,$gender);
 	if($register==false){
	$error="Could Not Register";
 	}else{
 		 if(isset($_SESSION["shopping_cart"])) {
	                		foreach($_SESSION["shopping_cart"] as $cart){
	                			$addcart=$product->singlecart($_SESSION["userId"],$cart['item_id'],$cart['item_quantity']);
	                		}
	                }else{

	                			$usercart=$product->fatchcart($_SESSION['userId']);
								foreach($usercart as $cart){ 
										  $item_array = array(  
              								'item_id'               =>      $cart['product_id'],  
                							'item_name'               =>    $cart['Name'], 
                							'item_price'          =>     $cart['Price'],  
               								 'item_image'              =>$cart['Image'],  
               								'item_quantity'          =>  $cart['quantity']
         										  );  
           						$_SESSION["shopping_cart"][0] = $item_array;  
								}

	                }
 	}

header('Location:index.php');
}	
if(isset($_POST['login'])){

	$email = $_POST['email'];
	$password =$_POST['password'];
	$user=$user->login($email,$password);
	if($user==false){
	$error="Email Or Password is Wrong!";
 	}
 	else{
 		 if(isset($_SESSION["shopping_cart"])) {
	                		foreach($_SESSION["shopping_cart"] as $cart){
	                			$addcart=$product->singlecart($_SESSION["userId"],$cart['item_id'],$cart['item_quantity']);
	                		}
	                }
	                else{

	                			$usercart=$product->fatchcart($_SESSION['userId']);
								foreach($usercart as $cart){ 
										  $item_array = array(  
              								'item_id'               =>      $cart['product_id'],  
                							'item_name'               =>    $cart['Name'], 
                							'item_price'          =>     $cart['Price'],  
               								 'item_image'              =>$cart['Image'],  
               								'item_quantity'          =>  $cart['quantity']
         										  );  
           						$_SESSION["shopping_cart"][0] = $item_array;  
								}

	                }
 	}
	header('Location:index.php');
}
if(isset($_GET['logout'])){
	 $_SESSION['login'] = FALSE;
	 session_destroy();
	 header('Location:index.php');

}
if(isset($_POST['cart'])){
	$userId=$_SESSION['userId'];
	$productId=$_POST['productid'];
	$quanlity=$_POST['quantity'];
$addcart=$product->cart($userId,$productId,$quanlity);
 	if(isset($_SESSION["shopping_cart"])) {
 	
 		$i=0;
for ($i=0; $i <count($productId); $i++) { 
	if($_SESSION["shopping_cart"][$i]['item_id']==$productId[$i])
	             		{
	             		
	             			$_SESSION["shopping_cart"][$i]['item_quantity']=$quanlity[$i];
	             			
	             		}
}


	             // foreach($_SESSION["shopping_cart"] as $cart){
	             // 	print_r($cart['item_id']);
	             // 	
	             // }
	   }
header('Location:checkout.php');

}

?>