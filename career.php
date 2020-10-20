<?php
 require('admin/connection.inc.php');
if(isset($_POST["submit"])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['contact'];
		$profile=$_POST['profile'];
		$bio=$_POST['bio'];
		$BOD=$_POST['bod'];
		$resume=$_FILES["resume"]["name"];
require "PHPMailer/PHPMailerAutoload.php";
// function smtpmailer($to, $from, $from_name, $subject, $body)
//     {
//     	$num=0;
//     	$name=$_POST['name'];
// 		$email=$_POST['email'];
// 		$phone=$_POST['contact'];
// 		$profile=$_POST['profile'];
// 		$bio=$_POST['bio'];
//         $mail = new PHPMailer();
//         $mail->IsSMTP();
//         $mail->SMTPAuth = true; 
 
//         $mail->SMTPSecure = 'ssl'; 
//         $mail->Host = 'mail.marketingojo.com';
//         $mail->Port = 465;  
//         $mail->Username = 'career@marketingojo.com';
//         $mail->Password = 'Marketing@52';   
   
// $file =$_FILES["resume"]["tmp_name"];
//  //move_uploaded_file($_FILES["resume"]["tmp_name"], $path);
// move_uploaded_file($_FILES["resume"]["tmp_name"],"download/" . $_FILES["resume"]["name"]) ;	
//  $path ="download/" . $_FILES["resume"]["name"];
//         $mail->IsHTML(true);
//         $mail->From='career@marketingojo.com';
//      	 $mail->FromName=$from_name;
//         $mail->Sender=$from;
//         $mail->Subject = $subject;
//         $mail->Body = $body;
   
//    //  
//     $mail->AddAttachment($path);
//         $mail->AddAddress($to);
//         if(!$mail->Send())
//         {
       
//     $error ="Please try Later, Error Occured while Processing...";
//       return $error; 
//         }
//         else 
//         {
           
//        $error = "Thanks You !! Your email is sent.";  
//       return $error;
//         }
//     }
    

//  	$to   = 'career@marketingojo.com';
//     $from = $_POST['email'];
//     $name = $_POST['name'];
//     $subj = 'Job application';
//     $msg = "Full Name: - ".$name."<br><br>"."Email: - ".$_POST['email']."<br><br>"."Contact Number: - ".$_POST['contact']."<br><br>"."Profile: - ".$_POST['profile']."<br><br>"."DOB: - ".$_POST['bod']."<br><br>"."Bio: - ".$_POST['bio'];
  

//     $error=smtpmailer($to,$from, $name ,$subj, $msg);


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
    $companyname ='MarketingOJO';
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
    $error=smtpmailerr($to,$from, $companyname ,$subj, $msg);
      $ext = pathinfo($resume, PATHINFO_EXTENSION);
        $new_filename = rand(11,99).'_'.$name.'.'.$ext;
        move_uploaded_file($_FILES['resume']['tmp_name'], 'download/'.$new_filename); 
$name=$_POST['name'];
  $date=date("Y-m-d");
mysqli_query($con,"insert into careers(Name,Email,Contact,Profile,BirthDate,Resume,Bio,Added_on)values('$name','$email', '$phone','$profile','$BOD','$new_filename','$bio','$date')");
}
$sql="select * from company where Status='1'";
$res=mysqli_query($con,$sql);
$resi=mysqli_query($con,$sql);

$rowcount=mysqli_num_rows($res);
require('header.php');
?>

  <section id="services" class="services section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-title">
                <h1>Requirements</h1>
                   <?php
                  if($rowcount==0){
                    ?>
                      <p>Currently No Requirements</p>
            	  <p>Share Your Details Below and We will let You know.</p>
              </div>
            </div>
          </div>
                      <?php 
                    }else{
                    ?>
              </div>
            </div>
          </div>   
          <div class="row row-centered">
          	<?php 
              $i=1;
              while($row=mysqli_fetch_assoc($res)){?>
        <div class="col-xs-12 col-centered">
			<div class="single-services">
                <h2><?php echo $row['Vacancy']?></h2>
                <h5><?php echo $row['Company_name']?></h5>
                <p><?php echo $row['Location']?></p>
                <div style="float: right;text-align: right;">
                	<h2>Job Description</h2>
                	 <p><?php echo $row['Job_Description']?></p>
                	 <h2>Job Requirements</h2>
                	 <p><?php echo $row['Requirements']?></p>
                </div>
                <div style="float: right;">
                	<button class="btn"><a href="#contact-us">Apply</a></button>
                </div>
              </div>
        </div>
           <?php $i++; } }?>
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
							<form autocomplete="off" class="form" enctype="multipart/form-data" method="post" action="career.php">
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
									 <input list="browsers" type="text" name="profile" placeholder="Profile" required="required">

									 <datalist id="browsers">
									 	<?php while($row=mysqli_fetch_assoc($resi)){ 
 										echo "<option value='".$row['Vacancy']."'>";
  											}?>
									</datalist>

										
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Birth Date</label>
											<input type="text" placeholder="DD/MM/YYYY" name="bod" required="required">
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
<?php
require('footer.php');
?>