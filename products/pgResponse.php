<?php
require ('functions.php');
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";
$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg
//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.
$payment=$payment->paymentmade($paramList);
if($isValidChecksum == "TRUE") {
if ($_POST["STATUS"] == "TXN_SUCCESS") {
// 	  session_start();
// $_SESSION["login"] = true;
// $_SESSION["customer"] = $_COOKIE["customer"];
// $_SESSION["customermail"]=$_COOKIE['customermail'];
// $_SESSION["userId"]=$_COOKIE['userIssd'];
// $userId=$_SESSION["userId"];
// $productdetail=$user->usercart($userId);
// $orderid= $paramList['ORDERID'];
// $placeorder=$order->placeorder($userId,$productdetail,$orderid);
//echo $_COOKIE['userId'];
 if(!isset($_SESSION['login'])){
	$login=$user->loginbyid($_COOKIE['userId']);
	 unset($_COOKIE['userId']); 
 }
header("Location:index.php");
// $productdetail=$_POST['cart'];
// $usermail=$_POST["customermail"];
//
//
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
				$columns[] = $paramName;
		}
		//print_r($columns);
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>