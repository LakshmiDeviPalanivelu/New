<html>
<body>
<form action ="Mail.php" method ="post">

<input type ="submit" name="button"/>
</form>

</body>
</html>
<?php 
      
	  if(isset($_POST['button'])){
  require 'PHPMailer-master/PHPMailerAutoload.php';

	//$htmlversion = "this is the html version";
	//$textversion ="this is the text version";

	
		date_default_timezone_set('Etc/UTC');
		
	$mail = new PHPMailer;
				$mail->isSMTP();
				$mail->SMTPDebug = 0;
				$mail->Debugoutput = 'text';
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = 587;
				$mail->SMTPSecure = 'tls';
				$mail->SMTPAuth = true;
				$mail->Username = "testtestlookout@gmail.com";
				$mail->Password = "testtest05";
				$mail->setFrom('testtestlookout@gmail.com', 'priya');
				$mail->addReplyTo('hemapvs03@gmail.com', 'hema');
				$mail->addAddress('hemapvs03@gmail.com', 'hema');
				$mail->Subject = 'This is test email ';
				$mail->msgHTML="htmlversion";
				$mail->AltBody = "textversion";
			$mail->Body='priya';
			if (!$mail->send()) 
				{
					echo "not";
					echo 'email error'.$mail->ErrorInfo;
					exit;
					//header("location:forget.php?msg=Order Created Successfully, Unable to send Email!");
			
				} 
				else 
				{
				echo "sent";
					//header("location:index.php?msg=Order Created Successfully, and the details have been sent to registered Email Id!");
				}
	  }
?>