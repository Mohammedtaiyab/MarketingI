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
          if(isset($_POST['quantity'])){
              $quanlity=$_POST['quantity'];
          }
        
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
                      'item_custom'              =>$productitem[0]['Custom_Type'],  
                     'item_quantity'          =>     $quanlity  
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
                 'item_custom'              =>$productitem[0]['Custom_Type'],  
                'item_quantity'          =>   $quanlity  
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





// Fill CLIENT ID, CLIENT SECRET ID, REDIRECT URI from Google Developer Console
 $client_id = '61411318107-n48rdrq0ta9g0dgpr779ee1gvbt8j4ge.apps.googleusercontent.com';
 $client_secret = 'ujPPhoz__scERj1nqi8194Ao';
 $redirect_uri = 'https://marketingojo.com/products';
  //$redirect_uri = 'http://localhost:8080/marketingojo/products';
 $simple_api_key = '<Your-API-Key>';
 
//Create Client Request to access Google API
$client = new Google_Client();
$client->setApplicationName("MarketingOjO Google OAuth Login");
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->setDeveloperKey($simple_api_key);
// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");

//Send Client Request
$objOAuthService = new Google_Service_Oauth2($client);

//Logout
if (isset($_REQUEST['logout'])) {
  unset($_SESSION['access_token']);
 // $client->revokeToken();
  //header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL)); //redirect user back to page
}

//Authenticate code from Google OAuth Flow
//Add Access Token to Session
if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}

//Set Access Token to make Request
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
}

//Get User Data from Google Plus
//If New, Insert to Database
if ($client->getAccessToken()) {
  $userData = $objOAuthService->userinfo->get();
  if(!empty($userData)) {
 $email=$userData['email'];
 $name=$userData['name'];
 $gender='';
 $addon=date('Y ,D M');
 if(isset($userData['gender'])){
  $gender=$userData['gender'];
 }
 $googleid=$userData['id'];
$register=$user->googlelogin($name,$email,$googleid,$addon,$gender);
  if($register==false){
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
  }
  $_SESSION['access_token'] = $client->getAccessToken();
} else {
  $authUrl = $client->createAuthUrl();
}
?>
