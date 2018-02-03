<?php

     session_start();    
 ?>   
	
<!doctype HTML>
<html lang = "en-US">
<head>
<title>Travel Around</title>	
<link rel="icon" href="icon/favicon.ico" type="image/icon">
<script>
     /*function forget(){
		/ document.getElementById("fohr").value;
		 document.getElementById("mail").action = "Mail.php";
		 document.getElementById("Mail").submit();
	 }*/
	 </script>

<meta charset="UTF-8">
<meta type= "keywords" content = "website keywords">
<link rel ="stylesheet" href = "css/style.css" type = "text/css"/>
</head>
<body>
      <div id = "travel">
	    <div class = "header">
		  <header>
		      <a href = "#">
		      <div id = "logo">
		      <a href= "index.php"> <img src ="images/logo.jpg" alt = "" /></a> 
			  </a>
			  
			   <h2><span>Travel Around <span></h2>
			   
			  </div>
			  <div id ="interact"><br>
			     <ul>
				    <li><a href = "#">FAQ</a></li>
				
					<li><a href = "#">login</a>
					 <ul>
					  <li><a href = "Login.php">UserLogin</a></li>
					  <li><a href = "admin.php">Admin Login</a></li>
					  </ul>
					 </li>
					<li><a href = "register.php">Register</a></li>
				</ul>
              	</div>	
			 </header>
              			 
			
	
		<nav>	 
		<div id="nav"> <br>
		    <div id = "nav_menu"><br>
              <ul>
                    <li class="current"><a href="index.php">Home</a></li>
                    <li><a href="Accomodation.php">Accomodation</a></li>
                    <li><a href="Gallery.php">Gallery</a></li>
                    <li><a href="Our Blog.php">Our Blog</a></li>
                    <li><a href="Contact.php">Contact Us</a></li>
              </ul>
			  <form action ="Search.php" method = "post" >
			  <input type = "text" size = "15" placeholder= "&nbsp;&nbsp;&nbsp;Search.." id ="search" name = "search"/>
			  <button type = "submit" value ="search" name= "submit" id="submit_1"></button>
				   
					
		</form>	
			    
          </div><!--close menubar-->	
		  </div>
          </nav>
		</div>
		
		   <div id = "content">
		       <div class = "content_area">
			   
			   
			   <form action = "forget.php" method= "post" id= "mail">

                 <table>
                    <tr><td> Enter EmailAddress</td><td><input type ="text" name = "Emailid1" placeholder= "Emailid" id ="webmail" ></td></tr>
					<tr><td><input type = "submit" name = "mail" id= "but"/></td></tr>
			    </table>
				</form>
				
	<?php 
	
	
	if(isset($_POST['mail'])){
		
		
		$mail =$_POST ['Emailid1'];
		
	
		date_default_timezone_set('Etc/UTC');
		   require 'PHPMailer-master/PHPMailerAutoload.php';
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
				$mail->setFrom('testtestlookout@gmail.com', 'This is test email');
				$mail->addReplyTo('testtest05@gmail.com', 'MANOJ');
				$mail->addAddress('lvigneshjob@gmail.com', 'mano');
				$mail->Subject = 'This is test email ';
				$mail->msgHTML="This is the test email";
				$mail->AltBody = "This is the test email";
			
			if (!$mail->send()) 
				{
					
			      echo "hai";		//header("location:forget.php?msg=Order Created Successfully, Unable to send Email!");
			
				} 
				else 
				{
					 echo "hai! hello";//eader("location:index.php?msg=Order Created Successfully, and the details have been sent to registered Email Id!");
				}
	}
			?>	
		
		
		</body></html>
	