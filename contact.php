<?php
require('admin/connection.inc.php');
	// $email=$_POST['email'];
if(isset($_POST["submit"])){
require "PHPMailer/PHPMailerAutoload.php";
function smtpmailer($to, $from, $from_name, $subject, $body)
    {
    	$num=0;
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
    

 	$to   = 'info@marketingojo.com';
    $from = $_POST['email'];
    $name = $_POST['name'];
    $campany=$_POST['company'];
    $phone=$_POST['contact'];
    $subj = 'Inquiry';
    $msg = "Full Name: - ".$name."<br><br>"."Email: - ".$_POST['email']."<br><br>"."Contact Number: - ".$_POST['contact']."<br><br>"."Company Name: - ".$_POST['company']."<br><br>"."Services: - ".implode('<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$_POST['service'])."<br><br>"."Message: - ".$_POST['message'];
  

    // $error=smtpmailer($to,$from, $name ,$subj, $msg);



    $to   = $_POST['email'];
    $from = 'info@marketingojo.com';
    $namee ='MarketingOJO';
    $subj = 'Products/Services Inquiry';
    $msg = '<p>Thank you for your inquiry regarding our Products and Services.<br>
Your inquiry will be reviewed by the concerned team and will be getting in touch with you soon.<br>
Thanks again for your interest.<br><br>

<span>Best Regards</span><br>
<span>MarketingOJO Team</span><br><br>
To know more about our services and products please visit: - <br><br>
Instagram: - https://www.instagram.com/marketingojo/<br><br>
Facebook: - https://www.facebook.com/marketingojo/<br><br>
Website: - http://marketingojo.com/</p>';
  

    $error=smtpmailer($to,$from, $namee ,$subj, $msg);

 $msg ="Services: - ".implode('<br>',$_POST['service'])."<br><br>"."Message: - ".$_POST['message'];
 	$email=$_POST['email'];
 	$date=date("Y-m-d");
mysqli_query($con,"insert into contact_us (Name,Email,Contact,Company,Comment,Added_on)values('$name','$email', '$phone','$campany', '$msg','$date')");
}
require('header.php');
?>
	
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
						 <center><h2 style="color: white;"><?php echo $error; ?></h2></center>
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
											<input type="tel" id="phone" name="contact" placeholder="Contact Number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"required>
											
										</div>
									</div>
										<div class="col-md-6">
										<div class="form-group">
												<label>Company Name</label>
											<input type="text" name="company" placeholder="Company Name" required="required">
										</div>
									</div>
									<div class="col-md-12">
										<div class="grid ">
												<label style="font-size: 18px;">Services</label>
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
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox10" value="Website Development">
  												<label class="form-check-label" for="inlineCheckbox10">Website Development</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox11" value="Application Development">
  												<label class="form-check-label" for="inlineCheckbox11">Application Development</label>
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox12" value="Advertising Management">
  												<label class="form-check-label" for="inlineCheckbox12">Advertising Management</label>
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
  												<input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox18" value="Customised Products">
  												<label class="form-check-label" for="inlineCheckbox18">Customised Products</label>
											</div>

										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group"style="margin-top: 20px;">
												<label>Message</label>
											<textarea name="message" rows="5" placeholder="Type Your Message Here" ></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group button">	
											<button type="submit" name="submit" class="btn primary">Send</button>
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
			
<?php 
require('footer.php');
?>