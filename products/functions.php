<?php
session_start();
require ('database/DBcontroller.php');
require ('database/Banner.php');
$db= new DBcontroller;
require ('database/Product.php');
require ('database/Category.php');
require ('database/Users.php');
require ('database/Payment.php');
require ('database/Order.php');
$order=new Order($db);
$payment=new Payment($db);
$category=new Category($db);
$product=new Product($db);
$product->getData();
$banner= new Banner($db);
$banner->getData($table='banner');
$user=new Users($db);
$succuss='';
$error='';
/////////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_GET["action"])){  
 	if($_GET['action']=='add'){
 		if(isset($_GET['pid'])){
 			    $id=$_GET['pid'];
 			    $productitem=$product->singleProduct($id);
          $quanlity=1;
            if(isset($_SESSION["login"])){
              $addcart=$product->singlecart($_SESSION["userId"],$productitem[0]['ID'],$quanlity);
            }
              if(isset($_SESSION["shopping_cart"])) {
                     $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
                      if(!in_array($_GET["pid"], $item_array_id)){

                         $count = count($_SESSION["shopping_cart"]);  
                  $item_array = array(  
                     'item_id'               =>    $productitem[0]['ID'],  
                     'item_name'               =>    $productitem[0]['Name'],  
                     'item_price'          =>    $productitem[0]['Price'],  
                      'item_image'              =>$productitem[0]['Image'],  
                     'item_quantity'          =>     1  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
                          } else   {  
                echo '<script>alert("Item Already Added")</script>';  }    
              } else  {  
           $item_array = array(  
                'item_id'               =>      $productitem[0]['ID'],  
                'item_name'               =>    $productitem[0]['Name'], 
                'item_price'          =>     $productitem[0]['Price'],  
                'item_image'              =>$productitem[0]['Image'],  
                'item_quantity'          =>   1  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
            }  
       
    }
  }else if($_GET['action']=='delete'){
    if(isset($_GET['pid'])){
      $id=$_GET['pid'];
      if(isset($_SESSION["login"])){
        $userId=$_SESSION['userId'];
      $cart=$product->removeitem($userId,$id);
    }
     foreach ($_SESSION["shopping_cart"] as $select => $val) {
        if($val["item_id"] == $id)
        {
            unset($_SESSION["shopping_cart"][$select]);
        }
      }
    }

 }
}
///////////////////////////////////////////USER LOGIN////////////////////////////////////////////////////////////
require '../vendor/autoload.php';

// Creating new google client instance
$client = new Google_Client();

// Enter your Client ID
$client->setClientId('61411318107-n48rdrq0ta9g0dgpr779ee1gvbt8j4ge.apps.googleusercontent.com');
// Enter your Client Secrect
$client->setClientSecret('ujPPhoz__scERj1nqi8194Ao');
// Enter the Redirect URL
$client->setRedirectUri('http://localhost:8080/marketingojo/products');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");


if(isset($_GET['code'])){

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    // getting profile information
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    // showing profile info
    echo "<pre>";
    var_dump($google_account_info);
}
?>
