<?php
session_start();
require ('database/DBcontroller.php');
require ('database/Banner.php');
$db= new DBcontroller;
require ('database/Product.php');
$product=new Product($db);


$product->getData();
$banner= new Banner($db);
$banner->getData($table='banner');
?>
