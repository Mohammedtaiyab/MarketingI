<?php
require('admin/connection.inc.php');
if(isset($_POST["submit"])){
  $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['contact'];
    $company=$_POST['company'];
    $price=$_POST['price'];
    $topic=$_POST['topic'];
    $idea=$_POST['idea'];

mysqli_query($con,"insert into ideas (Name, Email, Contact,Company, Topic, Description,Amount)values('$name','$email', '$phone','$company',' $topic','$idea', '$price')");
}
$sql="select * from ideas where Status='1'";
$res=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($res);
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
		
			<link rel="icon" type="image/png" href="images/favicon.png">	
		
        <!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Tromas CSS -->
        <link rel="stylesheet" href="css/idea.css"> 
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
    </head>
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
        .why-choose .waves-block .waves {
    position: absolute;
    width: 239px;
    height: 239px;
    background: rgba(255, 255, 255, 0.3);
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    border-radius: 100%;
    -webkit-animation: waves 3s ease-in-out infinite;
    animation: waves 3s ease-in-out infinite;
    left: 56%;
    margin-left: -150px;
    top: 46%;
    margin-top: -150px;
}.why-choose .why-video {
    height: 300px;
    margin: 0px 0px 0px 24%;
}  
      }
      .content p{
            text-transform: capitalize;
      }
      .logo img{
         width: 10rem;
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
/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #28d;
}

.login-header {
  background: #28d;
 padding: 5px;
    font-size: 1em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.login-container {
  background: #ebebeb;
  
}

/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 5px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

.login input[type="email"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}

/* Text fields' focus effect */
.login input[type="email"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: #28d;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}

.login input[type="submit"]:hover {
  background: #17c;
}

/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #05a;
}
.single-idea{
	  background: #fff;
    padding: 0px 10px 10px 10px;
    position: relative;
    -webkit-box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.30);
    -moz-box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.30);
    box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.30);
    margin-top: 0;
    text-align: left;
    overflow: hidden;
    width: 150%;
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
     
        .price{
          width: 90px;
        }
        .price h6{
          font-size: 15px;
        }
        .why-choose .single-choose {
    position: relative;
 margin-bottom: 3px;
    border-radius: 5px;
    text-align: left;
    padding: 0px 0px 0px 68px;
}


.form-popup-bg {
  position:absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  flex-direction: column;
  align-content: center;
  justify-content: center;
}
.form-popup-bg {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(94, 110, 141, 0.9);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  transition: opacity 0.3s 0s, visibility 0s 0.3s;
  overflow-y: auto;
  z-index: 10000;
}
.form-popup-bg.is-visible {
  opacity: 1;
  visibility: visible;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
  transition: opacity 0.3s 0s, visibility 0s 0s;
}
.form-container {
    background-color: #2d3638;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    display: flex;
    flex-direction: column;
    width: 100%;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    position:relative;
  padding: 40px;
  color: #fff;
}
.close-button {
  background:none;
  color: #fff;
  width: 40px;
  height: 40px;
  position: absolute;
  top: 0;
  right: 0;
  border: solid 1px #fff;
}

.form-popup-bg:before{
    content:'';
    background-color: #fff;
  opacity: .25;
  position:absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
#btnOpenForm{
  display: inline-block;
    background: #353535;
    color: #fff;
    padding: 14px 35px;
    text-transform: uppercase;
    font-size: 14px;
    border: 0px solid;
    font-weight: 500;
    position: relative;
    border-radius: 3px;
}.btn1{
  display: inline-block;
    background: #8398ae;
    color: #fff;
    padding: 14px 35px;
    text-transform: uppercase;
    font-size: 14px;
    border: 0px solid;
    font-weight: 500;
    position: relative;
    border-radius: 3px;
}
.formm{
      display: flex;
    flex-wrap: wrap;
}
.form-group {
    margin-bottom: 15px;
    width: 47%;
    margin: 2px;
}
.card {
    position: relative;
    margin: 10vh auto;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 300px;
    height: 400px;
    background: #000;
    border-radius: 30px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.5s ease;
    backface-visibility: hidden;
}
.card:hover {
    transform: scale(0.9);
}
.card:hover .ul {
    transform: translate(0);
    opacity: 1;
}
.card:hover .con-text p {
    margin-bottom: 0;
    opacity: 1;
    transition: all 0.5s ease;
}
.card img {
    position: absolute;
    width: 100%;
    z-index: 10;
    transition: all 0.5s ease;
}
.card .con-text {
    position: absolute;
    z-index: 30;
    bottom: 0;
    color: #fff;
    padding: 20px;
    padding-bottom: 30px;
    background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 100%);
}
.card .con-text p {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 1.8rem;
    opacity: 0;
    color: white;
    margin-bottom: -150px;
    transition: all 0.5s ease;
}
.card .con-text p button {
    padding: 7px 17px;
    border-radius: 12px;
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
    margin-top: 10px;
    margin-left: auto;
    cursor: pointer;
    transition: all 0.5s ease;
    font-family: poppins;
    font-size: 1.25rem;
    outline: none;
}
.card .con-text p button:hover {
    background: #fff;
    color: #000;
}
.contactinfo{
  opacity: 0;
}
.con-text:hover .contactinfo{
  opacity: 1;
}
    </style>
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
												<li  ><a href="index.html">Home</a></li>
												<li><a href="about-us.html">About Us</a></li>
												<li><a href="service.html">Services</a></li>
												<li><a href="product/index.php">PRODUCTS</a></li>
												<li class="active"><a href="ideanation.php">IdeaNation</a></li>
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
	    

  <!-- Why Choose Us -->
      <section id="why-choose" class="why-choose section">
        <div class="container-fluid fix">
          <div class="row fix">

             <div class="col-md-3 col-sm-12 col-xs-12 fix">
              <div class="why-video">
                <!-- Video Animation -->
                <div class="promo-video">
                  <div class="waves-block">
                    <div class="waves wave-1"></div>
                    <div class="waves wave-2"></div>
                    <div class="waves wave-3"></div>
                  </div>
                </div>
                <!--/ End Video Animation -->
                <!-- Promo Video -->
              
                <!--/ End Promo Video -->
              </div>
            </div>          
          
            <div class="col-md-4 col-sm-12 col-xs-12 fix">
              <div class="choose-main">
                <!-- Single Choose -->
                <div class="single-choose">
                  <i class="fa fa-lightbulb-o"></i>
                  <h4>Got A Business Idea</h4>
                 <p>MarketingOJO helps you to build the business from the ideas you have if it has got any potential. Build your business with the idea you have got or just scroll down for more potential business ideas.</p>
                </div>
                <!-- End Single Choose -->  
                <!-- Single Choose -->
                <div class="single-choose">
                  <i class="fa fa-support"></i>
                  <h4>Sell Your Business Idea</h4>
                  <p>Are you smart enough to think of an idea that can bring change? If yes, share it with the nation and get paid for it with just a click</p>
                </div>
                <!-- End Single Choose -->
                <!-- Single Choose -->
                <div class="single-choose">
                  <i class="fa fa-optin-monster"></i>
                  <h4>Buy A Business Idea</h4>
                  <p>Looking for a unique idea to start a business? Scroll down and grab the idea before it slips from your hand.</p>
                </div>
                <!-- End Single Choose -->  
              </div>
            </div>     
              <div class="col-md-5 col-sm-12 col-xs-12 fix">
              <div class="working-process">
                <h2>Share Your Business Ideas With The Nation!</h2>
                <p>No one can steal your idea but you should give it away to those who need it, of course for a price you like. You're just a click away from bringing the change.</p>
               <!--  <a href="" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Share!</a> -->
                <button  id="btnOpenForm">Share!</button>
              </div>
            </div> 
           </div>
        </div>
      </section>  


    <!-- Start Services -->
      <section id="services" class="services section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-title">
                <h1>IDEANATION</h1>
                <?php
                  if($rowcount==0){
                    ?>
                      <p>No Ideas Available At the Moment</p>
                          </div>
                          </div>
                           </div>
                      <?php 
                    }else{
                    ?>
              </div>
            </div>
          </div>

                <div class="row">
                    <?php 
              $i=1;
              while($row=mysqli_fetch_assoc($res)){?>
                <div class="col-md-4">
                  <div class="card">
                    <img src="images/ideaLogo.png" style="opacity: .3">
    <!--     <img src="https://picsum.photos/200/300" alt="Idea" style="opacity: .8"> -->
        <div class="con-text">
            <h2><?php echo $row['Topic']?></h2>
            <p>
                <?php echo $row['Description']?>
                
            <button id="info">Rs.<?php echo $row['Amount']?>/-</button>
            </p>
           <div class="contactinfo">
              <p>Contact</p>
           <h5><?php echo $row['Name']?></h5>
            <p>
                <?php echo $row['Email']?>
                </p>
        </div>
        </div>
    </div>
                </div> 
                    <?php $i++; } }?>
                </div>
          
           
        </div>
      </section>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="form-popup-bg">
  <div class="form-container">
    <button id="btnCloseForm" class="close-button">X</button>
    <h1>IDEANATION</h1>
    <p>To Share Your Idea. Please complete this form.</p>
    <form action="ideanation.php" class="formm" method="POST">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" required="required"/>
      </div>
      <div class="form-group">
        <label for="">Company Name</label>
        <input class="form-control" name="company" type="text" required="required"/>
      </div>
      <div class="form-group">
        <label for="">E-Mail Address</label>
        <input class="form-control" name="email" type="email" required="required"/>
      </div>
      <div class="form-group">
        <label for="">Phone Number</label>
        <input class="form-control" name="contact" type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required="required"/>
      </div>
       <div class="form-group">
        <label for="">Idea Topic</label>
        <input class="form-control" name="topic" type="text"  required="required" />
      </div>
    
      <div class="form-group">
        <label for="">Price</label>
        <input class="form-control" name="price" type="text" placeholder="₹"  required="required"/>
      </div>
        <div class="form-group" style="width: 96%">
        <label for="">Brief Your Idea</label>
        <textarea  class="form-control" name="idea" rows="2" placeholder="Describe Your Idea in few words..."  required="required"></textarea>
      </div>
      <button type="submit" name="submit" class="btn1">Submit</button>
    </form>
  </div>
</div>
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
                    <li><a href="product/index.php.html"><i class="fa fa-angle-right"></i>PRODUCTS</a></li>
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
      <script type="text/javascript">
        function closeForm() {
  $('.form-popup-bg').removeClass('is-visible');
}

$(document).ready(function($) {
  
  /* Contact Form Interactions */
  $('#btnOpenForm').on('click', function(event) {
    event.preventDefault();

    $('.form-popup-bg').addClass('is-visible');
  });
  
    //close popup when clicking x or off popup
  $('.form-popup-bg').on('click', function(event) {
    if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  
  
  
  });
      </script>
		</div>
    </body>
</html>