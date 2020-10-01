<?php
require('admin/connection.inc.php');
$sql="select * from client where Status='1'";
$res=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <!-- Meta tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="Marketing,Branding,Developing,Building,Business" />
		<meta name="description" content="From Ideation & Consultation To Growing Your Business, All The Services You Can Ask For.">
		<meta name='copyright' content='MarketingOJO'>	
		
		<!-- Title Tag -->
        <title>Marketing OJO</title>
		
		<!-- Favicon -->
			<link rel="icon" type="image/png" href="images/favicon.png">	
        <!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
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
			}
			.slicknav_nav a{
				    text-transform: uppercase;
			}
     .logo img{
				 width: 10rem;
  					height: auto;
			}
			.address img{
					width: 15rem;
					height: auto;
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
body { background: aliceblue; }

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
								<a href="index.html"><img src="images/logo2.png" ></a>
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
												<li ><a href="index.html">Home</a></li>
												<li><a href="about-us.html">About Us</a></li>
												<li><a href="service.html">Services</a></li>
												<li><a href="product/index.php">PRODUCTS</a></li>
												<li><a href="ideanation.php">IdeaNation</a></li>
												<li class="active"><a href="clients.php">Our Clients</a>	
												<li><a href="career.php">Careers</a></li>		
												<li><a href="contact.php">Contact Us</a></li>												
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
	

    <section id="clients" class="clients section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="gtco-testimonials">
    <h2>Happy Clients</h2>
    <div class="owl-carousel owl-carousel1 owl-theme">
      <div>

 <?php 
              $i=1;
              while($row=mysqli_fetch_assoc($res)){
  echo "<div class='card text-center'><img class='card-img-top' src='admin/media/client/".$row['Logo']."' alt=''>";
  ?>
          <div class="card-body">
            <h5><?php echo $row['Company']; ?><br />
              <span> <?php echo $row['ReviewBy']; ?> </span></h5>
            <p class="card-text">“ <?php echo $row['Review']; ?> ” </p>
          </div>
        </div>
      </div>
      <div>

<?php } ?>

  </div>
                    </div>
                </div>
            </section>
        
</div>


	<!-- Start Footer -->
			
			<!-- Start Footer -->
				<!-- Start Footer -->
			<footer id="footer" class="footer dark">
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<!-- Address Widget -->
								<div class="single-widget address logo f">
									<img src="images/logo.png" alt="logo">
									<p>From Ideation & Consultation To Growing Your Business, All The Services You Can Ask For.</p>
									<ul class="list">
										<li><i class="fa fa-phone"></i>Phone:- +91 9136773853</li>
										<li><i class="fa fa-envelope"></i>Email:- <a href="">Info@MarketingOJO.com</a></li>
										<li><i class="fa fa-map-o"></i>Address:- Pune, Maharastra</li>
									</ul>		
									<ul class="social">
									<li><a href="https://www.facebook.com/marketingojo"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://www.instagram.com/marketingojo/"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://wa.me/919136773853"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
									</ul>
								</div>
								/ End Address Widget
							</div>	
							<div class="col-md-4 col-sm-6 col-xs-12">
							
								<div class="single-widget links">
									<h2>Quick Links</h2>
									<ul class="list">
										<li><a href="about-us.html"><i class="fa fa-angle-right"></i>ABOUT US</a></li>
										<li><a href="service.html"><i class="fa fa-angle-right"></i>OUR SERVICES</a></li>
										<li><a href="product/index.php"><i class="fa fa-angle-right"></i>PRODUCTS</a></li>
										<li><a href="ideanation.php"><i class="fa fa-angle-right"></i>IDEANATION</a></li>
										<li><a href="clients.php"><i class="fa fa-angle-right"></i>OUR CLIENTS</a></li>
										<li><a href="career.php"><i class="fa fa-angle-right"></i>CAREERS</a></li>
										<li><a href="contact.php"><i class="fa fa-angle-right"></i>CONTACT US</a></li>
									</ul>
								</div>
				
							</div>
					
							<div class="col-md-4 col-sm-6 col-xs-12">
								
								<div class="single-widget photo-gallery">
									<h2>CustomiSe Products</h2>
									<ul class="list">
											<li><a href="images/post78.jpg" data-fancybox="photo"><img src="images/post78.jpg" alt="#"></a></li>
										<li><a href="images/post36.jpg" data-fancybox="photo"><img src="images/post36.jpg" alt="#"></a></li>
										<li><a href="images/post21.jpg" data-fancybox="photo"><img src="images/post21.jpg" alt="#"></a></li>
										<li><a href="images/post47.jpg" data-fancybox="photo"><img src="images/post47.jpg" alt="#"></a></li>
										<li><a href="images/post56.jpg" data-fancybox="photo"><img src="images/post56.jpg" alt="#"></a></li>
										<li><a href="images/post68.jpg" data-fancybox="photo"><img src="images/post68.jpg" alt="#"></a></li>
										<li><a href="images/post63.jpg" data-fancybox="photo"><img src="images/post63.jpg" alt="#"></a></li>
										<li><a href="images/post36.jpg" data-fancybox="photo"><img src="images/post36.jpg" alt="#"></a></li>
								
									</ul>
								</div>
							
							</div>
						</div>
					</div> 
				</div> 
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								copyright
								<div class="copyright">
									<p>&copy; 2020 All Right Reserved.</p>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</footer>
	

			<!-- Jquery -->
			<script src="js/jquery.min.js" type="text/javascript"></script>
			<!-- Bootstrap JS -->
			<script src="js/bootstrap.min.js" type="text/javascript"></script>
			<!-- Modernizer JS -->
			<script src="js/modernizr.min.js" type="text/javascript"></script>
			<!-- Tromas JS -->
			<script src="js/tromas.js" type="text/javascript"></script>
			<!-- Tromas Plugins -->
			<script src="js/theme-plugins.js" type="text/javascript"></script>
			<!-- Google Map JS -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>	
			<script src="js/gmap.min.js"  type="text/javascript" ></script>
			<!-- Main JS -->
			<script src="js/main.js" type="text/javascript"></script>
			<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		(function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();



	</script>
    </body>
</html>