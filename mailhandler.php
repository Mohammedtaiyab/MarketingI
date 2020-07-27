<!-- <?php
	if(isset($_POST['submit'])){
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
	}
?> -->

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