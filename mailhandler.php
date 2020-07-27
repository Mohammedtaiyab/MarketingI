
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
            header("Location: /contact.php");
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
              header("Location: /contact.php");
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