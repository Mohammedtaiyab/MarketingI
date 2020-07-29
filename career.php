

<?php
 
if(isset($_POST["submit"])){
require "PHPMailer/PHPMailerAutoload.php";
function smtpmailer($to, $from, $from_name, $subject, $body)
    {
    	$num=0;
    	$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['contact'];
		$profile=$_POST['profile'];
		$bio=$_POST['bio'];
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.marketingojo.com';
        $mail->Port = 465;  
        $mail->Username = 'career@marketingojo.com';
        $mail->Password = 'Marketing@52';   
   
$file =$_FILES["resume"]["tmp_name"];
 //move_uploaded_file($_FILES["resume"]["tmp_name"], $path);
move_uploaded_file($_FILES["resume"]["tmp_name"],"download/" . $_FILES["resume"]["name"]) ;	
 $path ="download/" . $_FILES["resume"]["name"];
        $mail->IsHTML(true);
        $mail->From='career@marketingojo.com';
     	 $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->Subject = $subject;
        $mail->Body = $body;
   
   //  
    $mail->AddAttachment($path);
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
       
    $error ="Please try Later, Error Occured while Processing...";
      return $error; 
        }
        else 
        {
           
       $error = "Thanks You !! Your email is sent.";  
      return $error;
        }
    }
    

 	$to   = 'career@marketingojo.com';
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subj = 'Job application';
    $msg = "Full Name: - ".$name."<br><br>"."Email: - ".$_POST['email']."<br><br>"."Contact Number: - ".$_POST['contact']."<br><br>"."Profile: - ".$_POST['profile']."<br><br>"."DOB: - ".$_POST['bod']."<br><br>"."Bio: - ".$_POST['bio'];
  

    $error=smtpmailer($to,$from, $name ,$subj, $msg);


function smtpmailerr($to, $from, $from_name, $subject, $body)
    {
    	
    	$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['contact'];
		$profile=$_POST['profile'];
		$bio=$_POST['bio'];
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.marketingojo.com';
        $mail->Port = 465;  
        $mail->Username = 'career@marketingojo.com';
        $mail->Password = 'Marketing@52';   
        $mail->IsHTML(true);
        $mail->From='career@marketingojo.com';
     	 $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
    $error ="Please try Later, Error Occured while Processing...";
      return $error; 
        }
        else 
        {
       $error = "Thanks You !! Your email is sent.";  
      return $error;
        }
    }
    $to   = $_POST['email'];
    $from = 'career@marketingojo.com';
    $name ='MarketingOJO';
    $subj = 'Job application';
    $msg = "<p>Thank you  ".$_POST['name']."  for applying for a position of  ".$_POST['profile']."  at MarketingOJO.<br>
Your application will be reviewed by our team and we will be getting in touch with you if your qualifications meet our requirements.<br>
Thanks Again for Applying and All the Best.<br><br>

<span>Best Regards</span><br>
<span>MarketingOJO Team</span><br><br>
To know more about our services and products please visit: - <br><br>
Instagram: - https://www.instagram.com/marketingojo/<br><br>
Facebook: - https://www.facebook.com/marketingojo/<br><br>
Website: - http://marketingojo.com/</p>";
    $error=smtpmailerr($to,$from, $name ,$subj, $msg);
}
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
			.logo img{
				 width: 10rem;
  					height: auto;
			}
			.address img{
					width: 15rem;
					height: auto;
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
								<a href="index.html"><img src="images/logo2.png"></a>
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
												<li ><a href="index.html">HOME</a></li>
												<li><a href="about-us.html">ABOUT US</a></li>
												<li><a href="service.html">SERVICES</a></li>
												<li><a href="customize.html">PRODUCTS</a></li>
												<li><a href="ideanation.html">IDEANATION</a></li>
												<li><a href="clients.html">OUR CLIENTS</a></li>		
												<li class="active" ><a href="career.php">CAREERS</a></li>		
												<li><a href="contact.php">CONTACTS US</a></li>												
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
                <h1>Requirements</h1>
              <!--   <p>Contry to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece</p> -->
              <p>Currently No Requirements</p>
            	  <p>Share Your Details Below and We will let You know.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Single Service -->
            <div class="col-md-4 col-sm-6 col-xs-12">
            
             <!-- <div class="single-services">
                
                <h2>Salesforce Developer</h2>
                <h6>Infosys,Pune, Maharashtra</h6>
                <p>Qualification Required</p>
              </div>
            </div> -->
            <!--/ End Single Service -->
            <!-- Single Service -->
           <!--  <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="single-services">
                
                <h2>Vacant Position</h2>
                <h6>Company/ Location</h6>
                <p>Qualification Required</p>
              </div>
            </div> -->
            <!--/ End Single Service -->
            <!-- Single Service -->
           <!--  <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="single-services">
                
                <h2>Vacant Position</h2>
                <h6>Company/ Location</h6>
                <p>Qualification Required</p>
              </div>
            </div> -->
        
          </div>
        </div>
      </section>
	<!-- Start Services -->
	<!-- <section id="coming-soon" class="coming-soon section">
      <div class="table">
        <div class="table-cell">
          <div class="verticle-lines">
            <div class="vlines one"></div>
            <div class="vlines two"></div>
            <div class="vlines three"></div>
            <div class="vlines four"></div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2">  
                <div class="coming-text">
                	  <h2>We are coming soon</h2>

                    
                </div>  
                <div class="coming-time">
                  <div class="clearfix" data-countdown="2020/8/15"></div>
                </div>
                    <div class="coming-text">
								 <h2>Searching For A Job?</h2>
                <p>Share Your Details Below and We will let You know.</p>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
		
			<!--/ End Services -->
			

	<!--/ End Header -->
			<section id="contact-us" class="contact-us section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="section-title">
								<h1>Apply</h1>
								
							</div>
						</div>
					</div>
				
					<div class="row">
						<!-- Contact Form -->
						<div class="apply">
							<form class="form" enctype="multipart/form-data" method="post" action="career.php">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
												<label>Full Name</label>
											<input type="text" name="name" placeholder="Full Name" required="required">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
												<label>Email</label>
											<input type="email" name="email" placeholder="Your Email" required="required">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
												<label>Contact Number</label>
											<input type="text" name="contact" placeholder="Contact Number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required="required">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
												<label>Profile</label>
									 <input type="text" name="profile" placeholder="Profile" required="required">
										
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Birth Date</label>
											<input type="date" name="bod" required="required">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Resume</label>
									<input type="file" name="resume" accept=".doc,.docx, .pdf" required />
									<small>Use Your Name as File Name.</small>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group" style="margin-top: -23px;">
												<label>Bio</label>
											<textarea name="bio" rows="2" placeholder="Write Something About you..." ></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group button">	
											<button type="submit" name="submit" class="btn primary">Apply</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!--/ End Contact Form -->
					
					</div>
				</div>
			</section>
			<!--/ End Contact -->





























			
			<!-- Start Footer -->
				<!-- Start Footer -->
			<footer id="footer" class="footer dark">
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-1">
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
										<li><a href="customize.html"><i class="fa fa-angle-right"></i>PRODUCTS</a></li>
										<li><a href="ideanation.html"><i class="fa fa-angle-right"></i>IDEANATION</a></li>
										<li><a href="clients.html"><i class="fa fa-angle-right"></i>OUR CLIENTS</a></li>
										<li><a href="career.html"><i class="fa fa-angle-right"></i>CAREERS</a></li>
										<li><a href="contact.html"><i class="fa fa-angle-right"></i>CONTACT US</a></li>
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
		</div>
    </body>
</html>