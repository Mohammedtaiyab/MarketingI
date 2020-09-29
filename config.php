<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
//require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
//$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
//$google_client->setClientId('61411318107-n48rdrq0ta9g0dgpr779ee1gvbt8j4ge.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
//$google_client->setClientSecret('ujPPhoz__scERj1nqi8194Ao');

//Set the OAuth 2.0 Redirect URI
//$google_client->setRedirectUri('http://localhost:8080/MarketingOJO/shop.php');

// to get the email and profile 
//$google_client->addScope('email');

//$google_client->addScope('profile');
$con=mysqli_connect("localhost","marketi1_OJO","Marketing@52","marketi1_MarketingOJO");
$sql="select * from banner where Status='1'";
$res=mysqli_query($con,$sql);
function getUserByOAuthId($oauth_user_id) {
		$query = "select * from user where oauth_user_id = '" . $oauth_user_id . "'";
		$result = mysqli_query($con,$query);
		if(!empty($result)) {
			$existing_member = mysql_fetch_assoc($result);
			return $existing_member;
		}
	}
	
	function insertOAuthUser($userData) {
		$query = "insert into  user (Name, Email, oauth_user_id, oauth_user_page, oauth_user_photo) VALUES ('" . $userData->name . "','" . $userData->email . "','" . $userData->id . "','" . $userData->link . "','" . $userData->picture . "')";
		$result =  mysqli_query($con,$query);
	}
if (isset($_REQUEST['logout'])) {
  unset($_SESSION['access_token']);
  $client->revokeToken();
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL)); //redirect user back to page
}
?> 