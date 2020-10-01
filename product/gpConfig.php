<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '61411318107-n48rdrq0ta9g0dgpr779ee1gvbt8j4ge.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'ujPPhoz__scERj1nqi8194Ao'; //Google client secret
$redirectURL = 'http://localhost:8080/MarketingOJO/shop/login.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to MarketingOJO.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>