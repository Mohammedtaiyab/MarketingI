
<?php
if(isset($_POST["submit"])){
$subject = $_POST['name'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['contact'];
$campany=$_POST['company'];
$msg=$_POST['message'];
$message="Name :".$name."\n"."Phone :".$phone."\n"."Company :".$company."\n"."Wrote the following :"."\n\n".$msg;
$emailaddress = "bforus.in@gmail.com";
echo $message;
$mail=mail($emailaddress, $subject, $message, "From:client@bforus.com");
if ($mail){
echo alert("Message has been sent");
}
else{
echo"Message not sent this time";
}
echo"Message not sent this time";

}
?>
<?php
if(isset($_POST["submit"])){
require "PHPMailer/PHPMailerAutoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
    	$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['contact'];
		$campany=$_POST['company'];
		$msg=$_POST['message'];
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.marketingojo.com';
        $mail->Port = 465;  
        $mail->Username = 'info@marketingojo.com';
        $mail->Password = 'Marketing@52';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From='info@marketingojo.com';
     	 $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            header("Location: contact.php");
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
              header("Location: contact.php");
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }
    

 	$to   = 'info@marketingojo.com';
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subj = 'Inquiry';
    $msg = "Name :".$name."<br>"."Phone :".$_POST['contact']."<br>"."Company :".$_POST['company']."<br>"."Services Required:<br>".implode(',', $_POST['service'])."<br>"."Wrote the following :"."<br>".$_POST['message'];
  

    $error=smtpmailer($to,$from, $name ,$subj, $msg);



    $to   = $_POST['email'];
    $from = 'info@marketingojo.com';
    $name ='MarketingOJO';
    $subj = 'Service/Product inquiry';
    $msg = '<p>Thank you for your inquiry regarding our product and service.
Your inquiry will be reviewed by the concerned team and will be getting in touch with you soon.
Thanks again for your interest.<br>

<span>Best Regards</span><br>
<span>MarketingOJO Team</span><br>
To know more about our services and products please visit: - 
Instagram: - https://www.instagram.com/marketingojo/
Facebook: - https://www.facebook.com/marketingojo/
Website: - http://marketingojo.com/</p>';
  

    $error=smtpmailer($to,$from, $name ,$subj, $msg);
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <!-- Meta tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="SITE KEYWORDS HERE" />
		<meta name="description" content="">
		<meta name='copyright' content='codeglim'>	
		
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
			.fai {
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
												<li><a href="customize.html">Products</a></li>
												<li><a href="ideanation.html">IdeaNation</a></li>
												<li><a href="clients.html">Our Clients</a></li>		
												<li><a href="career.html">Careers</a></li>	
												<li class="active"><a href="contact.php">Contact Us</a></li>												
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
	
			<!--/ End Header -->
			<section id="contact-us" class="contact-us section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="section-title">
								<h1>Contact Us</h1>
								
							</div>
						</div>
					</div>
				
					<div class="row">
						<!-- Contact Form -->
						  <center><h2 style="padding-top:70px;color: white;"><?php echo $error; ?></h2></center>
						<div class="col-md-8 col-sm-6 col-xs-12">
							<form class="form" method="post" action="contact.php">
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
											<input type="email" name="email" placeholder="Email" required="required">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
												<label>Contact Number</label>
											<input type="text" name="contact" placeholder="Contact Number" required="required">
										</div>
									</div>
										<div class="col-md-6">
										<div class="form-group">
												<label>Company Name</label>
											<input type="text" name="company" placeholder="Company Name" required="required">
										</div>
									</div>
									<div class="col-md-12">
										<div class="grid">
												<label>Select Services</label>
											<div class="form-check form-check-inline">
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox1" value="Ideation & Consultation">
  												<label class="form-check-label" for="inlineCheckbox1">Ideation & Consultation</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox2" value="Feasibility study">
  												<label class="form-check-label" for="inlineCheckbox2">Feasibility study</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox3" value="Negotiation">
  												<label class="form-check-label" for="inlineCheckbox3">Negotiation</label>
  												<input class="form-check-input"name="service[]"  type="checkbox" id="inlineCheckbox4" value="Human Resources">
  												<label class="form-check-label" for="inlineCheckbox4">Human Resources</label>
  												<input class="form-check-input"name="service[]"  type="checkbox" id="inlineCheckbox5" value="Interior Designing">
  												<label class="form-check-label" for="inlineCheckbox5">Interior Designing</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox6" value="Photography">
  												<label class="form-check-label" for="inlineCheckbox6">Photography</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox7" value="Videography">
  												<label class="form-check-label" for="inlineCheckbox7">Videography</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox8" value="Branding">
  												<label class="form-check-label" for="inlineCheckbox8">Branding</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox9" value="Location search">
  												<label class="form-check-label" for="inlineCheckbox9">Location search</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox10" value="Website Design">
  												<label class="form-check-label" for="inlineCheckbox10">Website Design</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox11" value="App Development">
  												<label class="form-check-label" for="inlineCheckbox11">App Development</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox12" value="Ad Management">
  												<label class="form-check-label" for="inlineCheckbox12">Ad Management</label>
  												<input class="form-check-input"name="service[]"  type="checkbox" id="inlineCheckbox13" value="Social Media Marketing">
  												<label class="form-check-label" for="inlineCheckbox13">Social Media Marketing</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox14" value="Business Analysis">
  												<label class="form-check-label" for="inlineCheckbox14">Business Analysis</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox15" value="Accounting">
  												<label class="form-check-label" for="inlineCheckbox15">Accounting</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox16" value="Blogger Connections">
  												<label class="form-check-label" for="inlineCheckbox16">Blogger Connections</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox17" value="Corporate Flight Management">
  												<label class="form-check-label" for="inlineCheckbox17">Corporate Flight Management</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox18" value="Corporate Flight Management">
  												<label class="form-check-label" for="inlineCheckbox18">Customised Products</label>
											</div>

										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
												<label>Message</label>
											<textarea name="message" rows="5" placeholder="Type Your Message Here" ></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group button">	
											<button type="submit" class="btn primary">Send</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!--/ End Contact Form -->
						<!-- Contact Address -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="contact-address">
								<div class="contact">
									<h2>Get In Touch</h2>
									<a href="https://www.facebook.com/marketingojo" class="fa fa-facebook fai fb"></a><br>
									<a href="mailto:info@marketingojo.com" class="fa fa-google fai gg"></a><br>
									<a href="https://www.instagram.com/marketingojo/" class="fa fa-instagram fai in"></a><br>
									<a href="https://wa.me/919136773853"><i class="fa fa-whatsapp fai gg" aria-hidden="true"></i></a>
									<!-- Single Address -->
									<div class="single-address">
										<span><i class="fa fa-headphones"></i>Phone</span>
										<p>+91 9136773853</p>
									</div>
									<!--/ End Single Address -->
									<!-- Single Address -->
									<div class="single-address">
									
									</div>
									<!--/ End Single Address -->
									<!--/ End Single Address -->
									<!-- Single Address -->
									<div class="single-address">
										<span><i class="fa fa-map"></i>Corporate Office:</span>
										<p>Pune, Maharastra</p>
									</div>
									<!--/ End Single Address -->
								</div>
							</div>
						</div>
						<!--/ End Contact Address -->
					</div>
				</div>
			</section>
			<!--/ End Contact -->
			
			
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
										<li><i class="fa fa-phone"></i>Phone: +91 9136773853</li>
										<li><i class="fa fa-envelope"></i>Email: <a href="">Info@MarketingOJO.com</a></li>
										<li><i class="fa fa-map-o"></i>Address: Pune, Maharastra</li>
									</ul>		
									<ul class="social">
									<li><a href="https://www.facebook.com/marketingojo"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://www.instagram.com/marketingojo/"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://wa.me/919136773853"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
									</ul>
								</div>
				
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
										<li><a href="images/gallery-1.jpg" data-fancybox="photo"><img src="images/post78.jpg" alt="#"></a></li>
										<li><a href="images/gallery-2.jpg" data-fancybox="photo"><img src="images/post36.jpg" alt="#"></a></li>
										<li><a href="images/gallery-3.jpg" data-fancybox="photo"><img src="images/post21.jpg" alt="#"></a></li>
										<li><a href="images/gallery-4.jpg" data-fancybox="photo"><img src="images/post47.jpg" alt="#"></a></li>
										<li><a href="images/gallery-5.jpg" data-fancybox="photo"><img src="images/post56.jpg" alt="#"></a></li>
										<li><a href="images/gallery-6.jpg" data-fancybox="photo"><img src="images/post68.jpg" alt="#"></a></li>
										<li><a href="images/gallery-7.jpg" data-fancybox="photo"><img src="images/post63.jpg" alt="#"></a></li>
										<li><a href="images/gallery-8.jpg" data-fancybox="photo"><img src="images/post36.jpg" alt="#"></a></li>
								
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
	
			<!--/ End footer -->
			
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
				var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
			</script>
		</div>
    </body>
</html>