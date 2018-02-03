		
<?php
				
				require 'PHPMailer-master/PHPMailerAutoload.php';

				$mail = new PHPMailer;
				$mail->isSMTP();
				$mail->SMTPDebug = 1;
				$mail->Debugoutput = 'html';
				$mail->Host = 'smtp.gmail.com';
				$mail->Port =567;
				$mail->SMTPSecure = 'tls';
				$mail->SMTPAuth = true;
				$mail->Username = "testtestlookout@gmail.com";
				$mail->Password = "testtest05";
				$mail->setFrom('priyabalaraman95@gmail.com', 'Online Food');
				$mail->addReplyTo('hemapvs03@gmail.com','hema');
				$mail->addAddress('balaraman90944@gmail.com', 'hema');
				$mail->Subject = 'New Order Placed at OnlineFood.com';
				$mail->msgHTML= "hai";
				$mail->AltBody = "welcome";
				$mail->isHTML(true);
				$mail->Body='priya';
			if (!$mail->send()) 
				{
				
					echo"hai";
					
					//header("location:book_list.php?msg=Order Created Successfully, Unable to send Email!");
			
				} 
				else 
				{
              		echo "sent";//header("location:index.php?msg=Order Created Successfully, and the details have been sent to registered Email Id!");
				}
			?>	<?php /*
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'user@example.com';                 // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'from@example.com';
$mail->FromName = 'Mailer';
$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
*/?>
<?php
   /*  require 'Phpmailer/PHPMailerAutoload.php'; 
	 
$mail = new PHPMailer;
$mail->isSMTP(); /*Set mailer to use SMTP
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true; Enable SMTP authentication


$mail->Username = "manoj.kumar@slashio.com";SMTP username
$mail->Password = "m.kumar";/*SMTP password
$mail->Host = "smtp.gmail.com"; /*Specify main and backup SMTP servers
$mail->Port = 587;
$mail->SMTPSecure = "tls";  /*Enable encryption, 'ssl' also accepted
$mail->From = "manoj.kumar@slashio.com";
$mail->FromName = "manoj";
$mail->addAddress('manoj.kumar@slashio.com', ' My Name');Add a recipient
$mail->addReplyTo('manotechie@gmail.com','reply');
/*$mail->addCC('cc@example.com');
/*$mail->addBCC('bcc@example.com');
$mail->WordWrap = 50;DEFAULT = Set word wrap to 50 characters
//$mail->addAttachment('../tmp/' . $varfile, $varfile);Add attachments
/*$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
/*$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
$mail->isHTML(true);Set email format to HTML (default = true)
$mail->Subject = "here is the subject";
$mail->Body    = "This is test email";
$mail->AltBody = "alternative text";


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "successfull";
}*/
?>