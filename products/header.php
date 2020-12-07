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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
	    text-align-last:center;
    font-family: Poppins-Medium;
    font-size: 16px;
    color: #333333;
    line-height: 1.2;
    display: block;
    width: 100%;
    height: 55px;
    background: transparent;
    outline: none;
    border: none;
       margin: 9px 0px;
    opacity: 1;

}
.login .box .form input[type="text"], .login .box .form input[type="password"] {
  text-align:center;
       font-family: Poppins-Medium;
    font-size: 16px;
    color: #333333;
    line-height: 1.2;
    display: block;
    width: 100%;
    height: 55px;
    background: transparent;
        outline: none;
    border: none;
    opacity: 1;
        margin: 9px 0px;
}
.form-control {
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
select .lt { text-align: center; }
.zoom {
  transition: transform .2s; /* Animation */
}

.zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
.input-xlarge{
    font: 15px/24px "Lato", Arial, sans-serif;
    color: #333;
    width: 100%;
    box-sizing: border-box;
    letter-spacing: 1px;
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
#scrollUp {
 
  background: #f51167;
}
.imgdetail{
      width: 370px;
    margin-left: 80px;
        object-fit: cover;
}
.entry-content strong {
    font-weight: 700;
    font-size: large;
}
.btn-grad {
    /* background-image: linear-gradient(to right, #f32cbf 0%, #a2e1ff 51%, #314755 100%); */
    background: #f51167;
}
.product-item .pi-text h6 {
    margin-right: 42px;
    }
    #footer{
      font-size: 14px;
    }
/*.list li:hover, a:hover{
  color: #f51167;
 } 
 .footer.dark li:hover {
    color: #f51167;
}
.footer li:hover a, .footer li i, .footer .single-tweet i, .footer .footer-top .single-tweet p a:hover, .success .mail h2 span {
    color: #f51167;
}
.social  a:hover a , li{
   color: #f51167;
}*/
.footer .footer-top .social li:hover a i {
    color: #f51167;
}
.facebook:hover a i {
 color: #3228c3;
}
.instagram:hover a i {
 color: #fccc63;
}
.whatsapp:hover a i {
 color: #4FCE5D;
}
.footer .footer-top .social .facebook:hover a i {
 color: #3228c3;
}
.footer .footer-top .social .instagram:hover a i {
 color: #fccc63;
}
.footer .footer-top .social.whatsapp:hover a i {
 color: #4FCE5D;
}
	</style>


  
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
<img src="../images/logoproduct.jpg" style="width: 16rem;" alt="logo">
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
<li><i class="flaticon-profile"></i>  <a href=""class="dropbtn headbut btn-sm"><?php echo $_SESSION['customer']; ?></a>
<ul class=" dropdown-content sub-menu">
<li><a href="addressdetails.php">Address</a></li>
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

<div class="up-item"><a href="cart.php" style="color: black;">
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
Shopping Cart</a>
</div>
</div>
</div>
</div>
</div>
</div>
<nav class="main-navbar">
<div class="container">
  <div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
<!-- menu -->
<div class="nav-area">
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
<li style="float: right;">
  <ul class="social" style="display: flex;">
                    
                    <li class="facebook"><a href="https://www.facebook.com/marketingojo.products" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="instagram"><a href="https://www.instagram.com/marketingojo.products/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li class="whatsapp"><a href="https://wa.me/919136773853" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                  </ul>
</li>
</ul>
</div>


  

  
             
</div>
</div>
</div>
  
</nav>
</header>