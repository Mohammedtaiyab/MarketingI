<?php
/*	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['contact'];
		$campany=$_POST['company'];
		$msg=$_POST['message'];

		$to='bforus.in@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Company :".$company."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, "From:client@marketingojo.com")){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}*/
?>
<?php
/*if(isset($_POST["submit"])){
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

}*/
?>
<?php
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
    
?>

<html>
    <head>
        <title>PHPMailer 5.2 testing from DomainRacer</title>
    </head>
    <body style="background: black;">
        <center><h2 style="padding-top:70px;color: white;"><?php echo $error; ?></h2></center>
    </body>
    
</html>