<?
session_start();
?><!DOCTYPE html>
<!--
TEMPLATE
Name: Zoo Planet
Version: 1.0
Created: 23 January 2014

AUTHOR
Design and code by: http://www.bootshape.com
Free stock photos by: http://www.bootshape.com

Read full license: http://www.bootshape.com/license.php

CREDITS
Background: http://subtlepatterns.com/ (extra_clean_paper)
Fonts: http://www.google.com/fonts (Actor, Duru_Sans)

SUPPORT
E-mail: bootshape.com@gmail.com
Contact: http://www.bootshape.com/contact.php
-->
<html>
  <head>
    <title>Yacht Club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Yacht Club</a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
  <style>
.dropbtn {
    background-color:#ADD8E6;
    color: black;
    padding: 25px;
    font-size: 14px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: 	#ADD8E6;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 16px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color:#ADD8E6 }

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color:	#ADD8E6;
}
</style>
<li><div class="dropdown">
  <button class="dropbtn"><strong>Complaint </strong></button>
  <div class="dropdown-content">
    <a href="buscom.php"><strong>Bus complaint</strong></a>
    <a href="drivecom.php"><strong>Driver complaint</strong></a>
  </div>
</div></li>


  
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Yacht Club</a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
         <ul class="navbar-nav nav">
            <li class="active"><a href="adminhome.php"><strong>Home</strong></a></li>
            <li class="dropdown">

            </li>
           <li class="active"> <a href="dataentry.php">Student Payment </a>
			
			<li><div class="dropdown">
  <button class="dropbtn"><strong>Bus information</strong></button>
  <div class="dropdown-content">
    <a href="bscheduleinformation.php"><strong>Bus Scheduling</strong></a>
    <a href="buspass.html"><strong>Buspassform</strong></a>
    <a href="bill.html"><strong>Bill Receipt</strong></a>
  </div>
</div></li>
			<li class="active"><a href="receipt.html">Transport Registers Details</a>
			<li class="active"><a href="schedule.php">Add Busstop</a>
			<li><div class="dropdown">
  <button class="dropbtn"><strong>Complaint </strong></button>
  <div class="dropdown-content">
    <a href="buscom.php"><strong>Bus complaint</strong></a>
    <a href="drivecom.php"><strong>Driver complaint</strong></a>
  </div>
</div></li>
				<li class="active"><a href="feedcom.php">Feedback</a>
            <li><li class="active"><a href="request.php">Request</a></li>
				<li class="active"><a href="Home1.php">Logout</a>
          </ul>
        </nav>
      </div>
    </div><!-- End Navigation bar -->

    <!-- Slide gallery -->
    <div class="jumbotron">
      <div class="container">
        <div class="col-xs-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/b10.jpg" alt="">
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item">
              <img src="img/b13.jpg" alt="">
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item">
              <img src="img/b16.jpg" alt="">
              <div class="carousel-caption">
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
        </div>
      </div><!-- End Slide gallery -->
    </div>

    <!-- Thumbnails -->
   <div class="container thumbs">
      <center> <div class="col-sm-10 col-md-12">
        <div class="thumbnail">
          
          <div class="caption">
  <html>
  <style>
    </body>
  table, th, td {
    
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}</body>
</style>

 <table>
 <form action="" method="post">
 <tr><td>Enter StudentId</td><td><input type="text" name="no"></td><tr>
 <tr><td><input class="button3" type="submit" name="submit" value="submit"></td></tr>
 </form>
 </table>
 </html>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("college",$con);
?>
 <?php
 if(isset($_POST['submit']))
{
$a=$_POST['no'];
$_SESSION['mail']=$a;
$sel=mysql_query("select * from reg where receiptno='".$a."'");
while($row=mysql_fetch_row($sel,MYSQL_BOTH))
{

?><html>
<style>
body
a{
text-decoration:none;
}
</style>

 <center><h1>Student BusPass Bill Receipt </h1><table border="1">

<tr><td>Receipt No</td><td><?php echo $row[0];?></td></tr>
<tr><td>RouteNo</td><td><?php echo $row[9];?></td></tr>
<tr><td>Name</td><td><?php echo $row[1];?></td></tr>
<tr><td>Year</td><td><?php echo $row[3];?></td></tr>
<tr><td>Department</td><td><?php echo $row[4];?></td><tr>
<tr><td>Semester</td><td><?php echo $row[5];?></td></tr>
<tr><td>FeesPaid</td><td><?php echo $row[7];?></td></tr>
<tr><td>Dues</td><td><?php echo $row[8];?></td></tr>
</tr>
</table></center>
 <?php
 
  require 'PHPMailer-master/PHPMailerAutoload.php';
  
$sel1=mysql_query("select * from reg where receiptno='".$a."'",$con)or die(mysql_error());
while($row7=mysql_fetch_row($sel1))
{
$to=$row7[2];
	
			    $body="<table border='1'>
<tr><td>Receipt No</td><td>". $row[0]."</td></tr>
<tr><td>RouteNo</td><td>".$row[9]."</td></tr>
<tr><td>Name</td><td>".$row[1]."</td></tr>
<tr><td>Year</td><td>".$row[3]."</td></tr>
<tr><td>Department</td><td>".$row[4]."</td><tr>
<tr><td>Semester</td><td>".$row[5]."</td></tr>
<tr><td>FeesPaid</td><td>".$row[7]."</td></tr>
<tr><td>Dues</td><td>".$row[8]."</td></tr></table>";
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
				$mail->setFrom('');
				
				$mail->addReplyTo(''.$to.'');
				$mail->addAddress(''.$to.'');
				$mail->Subject = 'This is test email ';
				$mail->msgHTML="htmlversion";
				$mail->AltBody = "textversion";
	
				$mail->MsgHTML($body);
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
				
				
				}}
				}}
				
	  
?></table></html>


          </div>
        </div>
      </div>
      
      
    </div></center><!-- End Thumbnails -->
    <!-- End Content -->
    <!-- Footer -->
    <div class="footer text-center">
        <p>&copy; 2014 Yacht Club. All Rights Reserved. Proudly created by <a href="http://bootshape.com">Bootshape.com</a></p>
    </div><!-- End Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
  </body>
</html>
