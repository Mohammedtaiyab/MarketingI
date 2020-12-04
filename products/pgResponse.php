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
	$orid=$paramList['ORDERID'];
	$setuser=$user->loginbyid($orid);
	$productdetail=$user->usercartdelete($_SESSION['userId']);
	header('Location:order.php');
	} else {
		$orid=$paramList['ORDERID'];
	$setuser=$user->loginbyid($orid);
	$record=$order->deleteall($orid);
	$_SESSION['orderstatus']='Order Could Not Be Made!';
	header('Location:cart.php');
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