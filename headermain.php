<?php
require('admin/connection.inc.php');
$galy="select * from aboutgallery where Status='1'";
$glly=$galy;
$resglry=mysqli_query($con,$galy);
$resglry2=mysqli_query($con,$galy);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <!-- Meta tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta name="keywords" content="Marketing,Branding,Developing,Building,Business" />
		<meta name="description" content="From Ideation & Consultation To Growing Your Business, All The Services You Can Ask For.">
		<meta name='copyright' content='MarketingOJO'>	
		
		<!-- Title Tag -->
        <title>Marketing OJO</title>
		
		<!-- Favicon -->
	
		<link rel="icon" type="image/png" href="images/favicon.png">	
		
        <!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Tromas CSS -->
		<link rel="stylesheet" href="css/theme-plugins.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">	
				<link rel="stylesheet" href="ideastyle.css" id="ideanation">	
		<!-- Tromas Color -->
		<link rel="stylesheet" href="css/skin/skin1.css">
		<link rel="stylesheet" href="#" id="tromas">
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173650006-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173650006-1');
</script>	
		<style type="text/css">
				/*.logol{
				background-image: url("images/1.png");
				background-repeat: no-repeat;
				height: 100%;
				margin-left: 206px;*/
	
		 	@media screen and (max-width: 600px) {
 				.logol img{
 				 width: 65%;
 				     margin-left: 64px;
			 
 				}
 				.logo img{
				width: 60%;

			}
				.address img{
					width: 25%;
				}
				.f{
					   width: 287px;
				}
				.word {
  font: 600 normal 2.5em 'tahoma';
  }
			}
			.slicknav_nav a{
				    text-transform: uppercase;
			}
			.logo img{
				 width: 12rem;
  					height: auto;
			}
			
			.call-to-action .btn {
				background-color: transparent;color: white; margin-top: -1px;
			}
			.call-to-action .btn a:hover{
				background-color: transparent;
			}
			.blog-head  img{
					    width: 350px;
                        height: 250px;
			}
			.blog-info p{
				text-transform: capitalize;
			}
.blog-main .single-blog {
    height: 350px;
   }
				.word {
  margin: auto;
  color: black;
  font: 700 normal 2.5em 'tahoma';
 font-family: 'Patua One', cursive;
  }
  	.logol img{
				 margin-top: 20px;
			}

		</style>
    </head>
    <body id="bg" style="">
		<div id="layout" class="">
		
			<!-- Start Header -->
			<header id="header" class="header style2">
				<!-- Topbar -->
				<div class="topbar">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="topbar-inner">
									<div class="row">
										<div class="col-md-8 col-sm-8 col-xs-12">
											<!-- Contact -->
											<ul class="contact">
												<li><i class="fa fa-phone"></i>+91 9136773853</li>
												<li><i class="fa fa-envelope"></i> <a href="mailto:info@marketingojo.com">info@MarketingOJO.com</a></li>
											</ul>
											<!--/ End Contact -->
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<!-- Social -->
											<ul class="social">
										<li><a href="https://www.facebook.com/marketingojo"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://www.instagram.com/marketingojo/"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://wa.me/919136773853"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
											</ul>
											<!--/ End Social -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Topbar -->
				<div class="header-inner">
					<div class="container">
						<div class="row">
							<div class="col-md-2 col-sm-12 col-xs-12">
								<!-- Logo -->
								<div class="logo">
									<a href="index.html"><img src="images/logo2.png" alt="logo"></a>
								</div>
								<!--/ End Logo -->
								<div class="mobile-nav"></div>
							</div>
							<div class="col-md-10 col-sm-12 col-xs-12">
								<div class="nav-area">
									<!-- Main Menu -->
										<nav class="mainmenu">
										<div class="collapse navbar-collapse">	
											<ul class="nav navbar-nav">
												<li  class="active"><a href="index.php">Home</a></li>
												<li><a href="about-us.php">About Us</a></li>
												<li><a href="service.php">Services</a></li>
												<li><a href="products/">PRODUCTS</a></li>
												<li><a href="ideanation.php">IdeaNation</a></li>
												<li><a href="clients.php">Our Clients</a></li>		
												<li><a href="career.php">Careers</a></li>	
												<li><a href="contact.php">Contact Us</a></li>												
											</ul>
										</div>
									</nav>
									<!--/ End Main Menu -->
								</div>
							
						
							</div>
						</div>
					</div>
				</div>
			</header>
			<!--/ End Header -->