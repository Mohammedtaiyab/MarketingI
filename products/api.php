<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
require ('functions.php');
$productlistapi=$product->productapi();
//echo $productl$productlistapi
print_r($productlistapi);
?>