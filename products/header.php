<?php
require ('functions.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>MarketingOJO Products</title>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Marketing,Branding,Developing,Building,Business" />
		<meta name="description" content="From Ideation & Consultation To Growing Your Business, All The Services You Can Ask For.">
		<meta name='copyright' content='MarketingOJO'>	
		<meta name="google-signin-client_id" content="61411318107-n48rdrq0ta9g0dgpr779ee1gvbt8j4ge.apps.googleusercontent.com">

<!-- Favicon -->
	<link rel="icon" type="image/png" href="../images/favicon.png">	<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- Stylesheets -->
		<link rel="stylesheet" href="../css/theme-plugins.css">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../css/responsive.css">	
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/flaticon.css"/>
<link rel="stylesheet" href="css/slicknav.min.css"/>
<link rel="stylesheet" href="css/jquery-ui.min.css"/>
<link rel="stylesheet" href="css/owl.carousel.min.css"/>
<link rel="stylesheet" href="css/animate.css"/>
<link rel="stylesheet" href="css/style.css"/>
  <link href="login/assets/css/login-register.css" rel="stylesheet" />
          <link rel="stylesheet" type="text/css" href="login/style.css">
<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		#addressform{
			display: none;
		}
		.product-img{
			    width: 263px;
    height: 263px;
    object-fit: cover;
		}
		.success-msg {
  color: #270;
  background-color: #DFF2BF;
}
.warning-msg {
  color: #9F6000;
  background-color: #FEEFB3;
}
.dropbtn {
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;z-index: 10000;}
.selectform{
	    text-align: center;
    font-family: Poppins-Medium;
    font-size: 16px;
    color: #333333;
    line-height: 1.2;
    display: block;
    width: 46%;
    height: 55px;
    background: transparent;
    outline: none;
    border: none;
    border-bottom: 1px solid;
    opacity: 1;
    margin-left: 25%;
}
	</style>
}
</head>
<body>
<!-- Header section -->
<header class="header-section">
<div class="header-top">
<div class="container">
<div class="row">
<div class="col-lg-2 text-center text-lg-left">
<!-- logo -->
<a href="index.php" class="site-logo">
<img src="../images/logoproduct.jpg" style="width: 10rem;" alt="logo">
</a>
</div>
<div class="col-xl-6 col-lg-5">
<form class="header-search-form" action="category.php">
<input type="text" name="search" placeholder="Search a Product....">
<button type="submit" ><i class="flaticon-search"></i></button>
</form>
</div>
<div class="col-xl-4 col-lg-5">
<div class="user-panel">
<div class="up-item">
<?php
if(isset($_SESSION['login'])){?>
<ul class="dropdown">
<li><i class="flaticon-profile"></i>  <a href=""class="dropbtn headbut btn-sm">Account</a>
<ul class=" dropdown-content sub-menu">
<li><a href="#"><?php echo $_SESSION['customer']; ?></a></li>
<li><a href="#">Address</a></li>
<li><a href="cart.php">Cart</a></li>
<li><a href="checkout.php">Checkout</a></li>
<li><a href="order.php">Track Order</a></li>
<li><a href="login.php?logout=true">Logout</a></li>
</ul>
</li>
</ul>
<?php 
}else{
	if(isset($_SESSION['error'])){?>
<div class="warning-msg">
  <i class="fa fa-warning"></i>
  <?php echo $_SESSION['error'];
  unset($_SESSION['error']); ?>
</div>
<?php }?>
<i class="flaticon-profile"></i> 
<a data-toggle="modal" class="headbut btn-sm" href="#loginModal">SignIn or Create Account</a>
<?php } ?>
</div>
<div class="up-item">
<div class="shopping-card">
<i class="flaticon-bag"></i>
<span><?php 
	$data= 0;
	if(isset($_SESSION["login"])){
	$cartnum=$product->fatchcart($_SESSION['userId']);
	if ( is_array( $cartnum) ) {
		$data = count( $cartnum);
	} else { 	
		$data= 0;
	}
}else if(isset($_SESSION["shopping_cart"])){
if ( is_array( $_SESSION["shopping_cart"]) ) {
		$data = count( $_SESSION["shopping_cart"]);
	} else { 	
		$data= 0;
	}
}
echo $data; ?></span>
</div>
<a href="cart.php">Shopping Cart</a>
</div>
</div>
</div>
</div>
</div>
</div>
<nav class="main-navbar">
<div class="container">
<!-- menu -->
<ul class="main-menu">
<li><a href="index.php">Home</a></li>
<li><a href="category.php">Products
<span class="new">New</span>
</a></li>
  <?php 
$productlist=$product->Productcategory();
   $i = 0; 
    foreach($productlist as $item): 
        if($i >=3) {break;}else{
        	$categoryname=$category->getdatabyId($item['Categories_id']);

 foreach($categoryname as $name): ?>

<?php echo "<li><a href='category.php?id=".$name['id']."'>".$name['categories']."</a></li>";?>
<?php endforeach; $i++; } endforeach;?>
</ul>
</div>
</nav>
</header>