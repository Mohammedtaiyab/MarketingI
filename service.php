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
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Marketing,Branding,Developing,Building,Business" />
		<meta name="description" content="From Ideation & Consultation To Growing Your Business, All The Services You Can Ask For.">
		<meta name='copyright' content='MarketingOJO'>	
		
		<!-- Title Tag -->
        <title>Marketing OJO</title>
		
		<!-- Favicon -->
			<link rel="icon" type="image/png" href="images/favicon.png">	
		
        <!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Tromas CSS -->
		<link rel="stylesheet" href="css/theme-plugins.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">	
		
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
			@media screen and (max-width: 600px) {
			.logol img{
 				 width: 65%;
			    margin-left: 20%;
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
				.slicknav_nav a{
				    text-transform: uppercase;
			}
			}
			.address img{
					width: 15rem;
					height: auto;
				}

			.mystyle{	
					margin: 5px;
				display: grid;grid-template-columns: 0px auto;
			}
		
  				.a{	
					margin-left: 150px;
			
			}
			.b{
			
   			 margin-left: 400px;
			}
			
				@media screen and (max-width: 992px) {
 				 .a{	
					margin-left: 0px;
			
					}
				.b{
			
    			margin-left: 0px;
					}
			}

			#outer-circle {
				    background: #fff;
    border-radius: 50%;
    height:100px;
    width:100px;
    display:table-cell;
    vertical-align:middle;
        border:10px solid #36bfc4;
transition: border 1s;
}
.tag{
	text-align: center;
	    height: 70px;
    border-radius: 70px;
       
       margin-top: 15px;
        
    width: 328px;
               background: #36bfc4;
	box-shadow: 0 1px 2px rgba(0,0,0,0.15);
  transition: all 500ms ease-in-out;
        /*   transition-timing-function:cubic-bezier(1,-0.62, 0.4, 0.37);
*/}
/*.circle:hover .tag{
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  border: #fff
}
.tag:hover .circle{
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);

}*/
.tag h3{

	      padding: 8px;
    position: inherit;
    margin-top: 1%;
    margin-left: 20%;
	opacity: 1;
	color: #fff;

	  
}
.h h3{
	margin-top: 4%;
}
.h hr{
	margin-top: 34px;
}
.tag .para{
	opacity: 0;
	 transition-duration: .3s;
	 transform: opacity;
}
.circle .icon i {
    font-size: 32px;
    position: absolute;
    left: 20px;
    border-radius: 50%;
    text-align: center;
    display: inline-block;
    border: 1px solid transparent;
    top: 48px;
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
.circle img{
	    margin-top: 7px;
    margin-left: 7px;
    width: 83%;
    
}

.my .tag {
	box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  height: 300px;
    margin-left: 34px;

}
.mystyle:hover  .circle{
	/*-webkit-transform: rotateZ(-30deg);
        -ms-transform: rotateZ(-30deg);
        transform: rotateZ(-30deg);*/
 box-shadow: 0 5px 15px rgba(0,0,0,0.3);

}
.mystyle:hover  .circle img{
	-webkit-transform: rotateZ(-30deg);
        -ms-transform: rotateZ(-30deg);
        transform: rotateZ(30deg);

}

.first{
	background-image: url("images/blog/blog1.jpg");
	
	    width: 400px;
    height: 100px;
      display: flex;
      flex-direction: column;
    box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.30);
    transition: .3s
}
/*.first:hover{
	background: #b9b657;
	 height: 400px;
}
.first:hover .box{
	 margin-left: 30px;
	opacity: 1;


}*/

.second .box{
	 margin-left: 30px;
	opacity: 1;
}
.second{
	    background:#0071bb;
	    width: 400px;
    height: 280px;
    display: flex;
    box-shadow: 0px 20px 60px rgba(0, 0, 0, 0.30);
}
.box{
	width: 90px;
	height: 90px;
	border-radius: 50%;
	background: #0071bb;
	    margin-top: -30px;
    margin-left: 0px;
    box-shadow: 0px 30px 80px rgba(0, 0, 0, 0.30);
    opacity: 0;
transition-property: all;
transition: .3s;
     transition-timing-function: cubic-bezier(0.14, 0.65, 0.32, 1.28);
}
.first .text{
	 
  margin: 0 auto;

    }

.second .text{
	padding: 0px;
	margin-left: 0px;
	color: black;
	  margin: 0 auto;
}
.first .para{
	opacity: 0;

}
.second .para{
	opacity: 1;
	   text-align: justify;
    font-size: initial;
        margin: 0px 10px;
}
.second .para p{
	color: wheat;
	
}
.arrow-right {
    width: 0;
    height: 0;
    border-left: 35px solid #569cbd;
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
}

.my .tag .para {
	opacity: 1;
	  text-align: justify;
    font-size: initial;
        margin: 0px 10px;

}
.my .tag  .para p{
	color: white;
}
.second .para p{
	color: white;
}
.i h3{
    padding-right: 42px;
}
			@media screen and (max-width: 600px) {
			.logol img{
 				 width: 65%;
			    margin-left: 20%;
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
				
			}
			.content p{
				    text-transform: capitalize;
			}
			.logo img{
				 width: 14rem;
  					height: auto;
			}
			.address img{
					width: 15rem;
					height: auto;
				}
			}
			.text{
				text-align: justify;
			}

.client{
	width: 100%;
	height: 42rem;
	z-index: -1;
}
.city{
	position: inherit;
    width: 100%;
    height: 100%;
  
}


.gtco-testimonials {
  position: relative;
  margin-top: 30px;
}
@media (max-width: 767px) {
  .gtco-testimonials {
    margin-top: 20px;
  }
}
.gtco-testimonials h2 {
  font-size: 30px;
  text-align: center;
  color: #333333;
  margin-bottom: 50px;
}
.gtco-testimonials .owl-stage-outer {
  padding: 30px 0;
}
.gtco-testimonials .owl-nav {
  display: none;
}
.gtco-testimonials .owl-dots {
  text-align: center;
}
.gtco-testimonials .owl-dots span {
  position: relative;
  height: 10px;
  width: 10px;
  border-radius: 50%;
  display: block;
  background: #fff;
  border: 2px solid #01b0f8;
  margin: 0 5px;
}
.gtco-testimonials .owl-dots .active {
  box-shadow: none;
}
.gtco-testimonials .owl-dots .active span {
  background: #01b0f8;
  box-shadow: none;
  height: 12px;
  width: 12px;
  margin-bottom: -1px;
}
.gtco-testimonials .card {
  background: #fff;
  box-shadow: 0 8px 30px -7px #c9dff0;
  margin: 0 20px;
  padding: 0 10px;
  border-radius: 20px;
  border: 0;
}
.gtco-testimonials .card .card-img-top {
  max-width: 100px;
  border-radius: 50%;
  margin: 15px auto 0;
  box-shadow: 0 8px 20px -4px #95abbb;
  width: 100px;
  height: 100px;
}
.gtco-testimonials .card h5 {
  color: #01b0f8;
  font-size: 21px;
  line-height: 1.3;
}
.gtco-testimonials .card h5 span {
  font-size: 18px;
  color: #666666;
}
.gtco-testimonials .card p {
  font-size: 18px;
  color: #555;
  padding-bottom: 15px;
}
.gtco-testimonials .active {
  opacity: 0.5;
  transition: all 0.3s;
}
.gtco-testimonials .center {
  opacity: 1;
}
.gtco-testimonials .center h5 {
  font-size: 24px;
}
.gtco-testimonials .center h5 span {
  font-size: 20px;
}
.gtco-testimonials .center .card-img-top {
  max-width: 100%;
  height: 120px;
  width: 120px;
}
.owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot {
  outline: 0;
}
	.contact-us .form-group select {
    width: 100%;
    height: 50px;
    border: 1px solid #ddd;
    padding-left: 10px;
    border-radius: 5px;
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    transition: all 0.4s ease;
    font-weight: 400;
    border-radius: 0px;
}
.apply{
	width: 75%;
	    margin: 0 15%;
}input[type=file]{

    padding: 12px;
}
.form-group label{
	font-size: 18px;
}
/* centered columns styles */
.row-centered {
    text-align:center;
}
.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
    text-align:left;
    /* inline-block space fix */
    margin-right:-4px;
 
}			.fai {
    padding: 19px;
    font-size: 20px;
    width: 159px;
    height: 50px;
    text-align: -webkit-center;
    text-decoration: none;
    margin: 4px 0px;
 
}.fa:hover {
    opacity: 0.7;
}

.fb{
  background: #3B5998;
  color: white;
}

 .gg{
  background: #dd4b39;
  color: white;
}


.in{
  background: #125688;
  color: white;
}
.multiselect {
  width: 200px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}
input[type=checkbox]{
	    width: 17px;
    height: 16px;
    margin: 6px;
    padding: 5px;
}

.form-check-inline{
	    display: grid;
    grid-template-columns: auto auto auto auto auto auto;
}
.form-group label{
	font-size: 18px;
}
.bg-white{
	background: white;
}
			/*.hero-area.creative .single-layer.one {
  /*  background-image: url(images/slider/layer5.png);
}	

.hero-area.creative .single-layer.two {
    background-image: url(images/slider/layer6.png);
    background-position: top 32% right 6%;
}
.hero-area .animate-text{
    position: relative;
    height: 363px;
    overflow: hidden;
}


.hero-area.animate-text, .hero-area.animate-text .single-slider, .hero-area.animate-text .slide-text {
    height: 400px;
}

.hero-area.creative .slide-text {
    text-align: center;
    padding: 0 200px;
}
	
		.logol{
			
			width: 50%;
			}
	}*/

		</style>	
    </head>
    <body id="bg" style="">
		<div id="layout" class="">
		
		
			<!-- Start Header -->
			<header id="header" class="header">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<!-- Logo -->
							<div class="logo">
								<a href="index.html"><img src="images/mojoservices.png"></a>
							</div>
							<!--/ End Logo -->
							<div class="mobile-nav"></div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<!-- Header Widget -->
							<div class="header-widget">
								<!-- Single Widget -->
								<div class="single-widget">
									<i class="fa fa-clock-o"></i>
									<h4>Timings</h4>
									<p>24X7</p>
								</div>
								<!--/ End Single Widget -->
								<!-- Single Widget -->
								<div class="single-widget">
									<i class="fa fa-envelope"></i>
									<h4>Email address</h4>
									<p><a href="mailto:info@marketingojo.com">info@MarketingOJO.com</a></p>
								</div>
								<!--/ End Single Widget -->
								<!-- Single Widget -->
								<div class="single-widget">
									<i class="fa fa-phone"></i>
									<h4>Phone</h4>
									<p>+91 9136773853</p>
								</div>
								<!--/ End Single Widget -->
							</div>
							<!--/ End Header Widget -->
						</div>
					</div>
				</div>
				<!-- Header Inner -->
				<div class="header-inner">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="nav-area">
									<!-- Main Menu -->
									<nav class="mainmenu">
										<div class="collapse navbar-collapse">	
											<ul class="nav navbar-nav">
												<li><a href="index.php">HOME</a></li>
												<li class="about-nav"><a href="about-us.php">ABOUT US</a></li>
												<li class="service-nav"><a href="service.php">SERVICES</a></li>
												<li><a href="products/">PRODUCTS</a></li>
												<li><a href="ideanation.php">IDEANATION</a></li>
												<li><a href="clients.php">OUR CLIENTS</a></li>		
												<li><a href="career.php">CAREERS</a></li>		
												<li><a href="contact.php">CONTACT US</a></li>												
											</ul>
										</div>
									</nav>
									<!--/ End Main Menu -->
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
				<!--/ End Header Inner -->
			</header>
			<!--/ End Header -->

			<section id="services" class="services section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="section-title">
								<h1>Our services</h1>
								<p>From Ideation & Consultation To Growing Your Business, All The Services You Can Ask For.</p>
							</div>
						</div>
					</div>
					<div class="row" style="">
						<!-- margin-right: -61px;margin-left: 129px; -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="mystyle ">
								<div class="tag">
								<h3>IDEATION & CONSULTATION</h3>
									<div class="para">
										<hr>
											<p>We Provide Business Ideas To Young And Competent Entrepreneurs With Consultation Service To Groom Them To Become The Future Of The Nation. We Welcome Any Business Ideas And Make It Potential Enough For Success.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/1.png">
								</div>
							</div>
						</div>
						<!--/ End Single Service -->
						<!-- Single Service -->
						
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="mystyle">
								<div class="tag i">
								<h3>FEASIBILITY STUDY</h3>
									<div class="para">
										<hr>
											<p>We Do Intense Research On Your Business Idea, Product, And Services Before Bringing It To Reality.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/2.png">
								</div>
							</div>
						</div>
						<!--/ End Single Service -->
						<!-- Single Service -->

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="mystyle">
								<div class="tag h">
										<h3>NEGOTIATION</h3>
								<div class="para">
										<hr>
											<p>Negotiating On Your Behalf To Fulfil Your Needs And Thrive Ourselves For Accomplishing Your Success.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/3.png">
								</div>
							</div>
						</div>
						<!--/ End Single Service -->
					</div><div class="row">
						<!-- Single Service -->
						<div class="col-md-6 col-sm-6 col-xs-12 ">
							<div class="mystyle  a">
								<div class="tag i">
									<h3>  HUMAN RESOURCES</h3>
									<div class="para">
										<hr>
											<p>Getting Well Qualified and Competent Staff for the Business Is Everyone’s Dream. Fulfil Your Dream Through Us As We Can Recruit The Right Staff For Your Business.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/4.png">
								</div>
							</div>
						</div>
						<!--/ End Single Service -->
						<!-- Single Service -->
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="mystyle">
								<div class="tag i">
									<h3>INTERIOR DESIGNING</h3>
									<div class="para">
										<hr>
										<p>We Are Blessed With Extraordinarily Talented And Hardworking Interior Designers, Who Will Convert Your Workplace Into The Office You Have Dreamt Of.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/5.png">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<!--/ End Single Service -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="mystyle">
								<div class="tag h">
									<h3>PHOTOGHRAPY</h3>
									<div class="para">
										<hr>
											<p>Our Team’s Camera Lenses Will Focus and Capture the Right Photo for Your Digital Marketing, Leaving Your Customers Stunned.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/6.png">
								</div>
							</div>
						</div>
						<!--/ End Single Service -->
						<!-- Single Service -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="mystyle">
								<div class="tag h">
								<h3>VIDEOGRAPHY</h3>
									<div class="para">
										<hr>
											<p>We Also Make Commercial Videos To Enhance Your Marketing Campaign.

</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/7.png">
								</div>
							</div>
						</div>
						<!--/ End Single Service -->
						<!-- Single Service -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="mystyle">
								<div class="tag h">
									<h3>BRANDING</h3>
								<div class="para">
										<hr>
											<p>We Design The Unmatchable Logo And Build A Brand Identity Which Will Leave An Everlasting Impression On Your Customers.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/10.png">
								</div>
							</div>
						</div>
						<!--/ End Single Service -->
						<!-- Single Service -->
					</div><div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="mystyle a">
								<div class="tag i">
								<h3>LOCATION  SEARCH</h3>
									<div class="para">
										<hr>
											<p>Finding Your Business, The Best-Suited Location For Its Prosperity Is Indeed A Challenging Task, Well Leave It On Us And See Our Magic.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/8.png">
								</div>
							</div>
						</div>
						<!--/ End Single Service -->
						<!-- Single Service -->
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="mystyle">
								<div class="tag">
										<h3>WEBSITE DEVELOPMENT</h3>
								<div class="para">
										<hr>
											<p>Want Your Business To Reach Your Customers Worldwide? Well, Our Undefinable Website Designing And Development Team Is There For You.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/9.png">
								</div>
							</div>
						</div>
						<!--/ End Single Service -->
						<!-- Single Service -->
					</div><div class="row">
						<!--/ End Single Service -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="mystyle">
								<div class="tag">
									<h3>APPLICATION DEVELOPMENT</h3>
								<div class="para">
										<hr>
											<p>Who Doesn’t Want The Digital Appearance Of The Business On Their Customer’s Mobile? Well, It’s Achievable Through Our Talented Application Development And Management Team.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/13.png">
								</div>
							</div>
						</div>


						<!-- Single Service -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="mystyle">
								<div class="tag ">
								<h3>ADVERTISING MANAGEMENT</h3>
								<div class="para">
										<hr>
											<p>We Provide An Additional Marketing Approach Through Advertising Management On Our Website.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/11.png">
								</div>
							</div>
						</div>
						<!--/ End Single Service -->
						<!-- Single Service -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="mystyle">
								<div class="tag">
									<h3>SOCIAL MEDIA MARKETING </h3>
									<div class="para">
										<hr>
											<p>Enlightening Your Business Through Our Approach To Social Media Platforms Like Instagram, Facebook, Etc. For Building Better Bonds With Your Customers.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/14.png">
								</div>
							</div>
						</div>
						<!--/ End Single Service -->
						<!--/ End Single Service -->
					</div><div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="mystyle a">
								<div class="tag i">
									<h3>BUSINESS ANALYSIS</h3>
								<div class="para">
										<hr>
											<p>We Conduct An Overall Analysis Of Your Business Activities And Provide You With The Analysis Report For Your Better Functioning.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/12.png">
								</div>
							</div>
						</div>


						<!-- Single Service -->
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="mystyle">
								<div class="tag h">
									<h3>ACCOUNTING</h3>
								<div class="para">
										<hr>
											<p>We Provide Accounting Services For Your Business For Better Financial Decision Making.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/15.png">
								</div>
							</div>
						</div>
						<!--/ End Single Service -->
						<!-- Single Service -->
						<!--/ End Single Service -->
						<!-- Single Service -->
					</div><div class="row">
						<div class="col-md-4 col-sm-3 col-xs-12">
							<div class="mystyle">
								<div class="tag ">
								<h3>BLOGGER CONNECTIONS</h3>
									<div class="para">
										<hr>
											<p>Do You Want To Enhance Your Social Media Marketing? We Do It By Connecting Your Business With The Right Bloggers.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/16.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="mystyle b">
								<div class="tag i">
								<h3>CORPORATE FLIGHT</h3>
									<div class="para">
										<hr>
											<p>We Provide Flight Management Service For Your Business Trips, So You Don't Miss Any Deal.</p>
									</div>
								</div>
								<div id="outer-circle" class="circle">
									<img src="images/icon/17.png">
								</div>
							</div>
						</div>

						<!--/ End Single Service -->

					</div>
				</div>
		</section>

		
		<!--/ End Faq -->
		<!-- Start Footer -->
<?php 
require('footer.php');
?>