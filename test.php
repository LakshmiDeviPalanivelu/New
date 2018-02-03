<?Php 
session_start();
?>
 <html>
 <table>
 <form action="test.php" method="post">
 <tr><td>Enter StudentId</td><td><input type="text" name="no"></td><tr>
 <tr><td><input type="submit" name="submit" value="submit"></td></tr>
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
$sel=mysql_query("select * from reg where receiptno='".$a."'");
while($row=mysql_fetch_row($sel,MYSQL_BOTH))
{?><html>
<style>
body
a{
text-decoration:none;
}
</style>

 <center><h1>Student BusPass Bill Receipt </h1><table border="1">

<tr><td>Receipt No</td><td><?php echo $row[0];?></td></tr>
<tr><td>RouteNo</td><td><?php echo $row[8];?></td></tr>
<tr><td>Name</td><td><?php echo $row[1];?></td></tr>
<tr><td>Year</td><td><?php echo $row[3];?></td></tr>
<tr><td>Department</td><td><?php echo $row[4];?></td><tr>
<tr><td>Semester</td><td><?php echo $row[5];?></td></tr>
<tr><td>FeesPaid</td><td><?php echo $row[6];?></td></tr>
<tr><td>Dues</td><td><?php echo $row[7];?></td></tr>
<td><input type="submit" name="submit" value="submit"></td></tr>

</center>
 <?php
 $b=$_SESSION['mail'];
 $sel1=mysql_query("select email from reg where reciptno='".$b."'",$con);
while($row1=mysql_fetch_row($sel1,MYSQL_BOTH))
{

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
				$mail->addReplyTo($a, 'hema');
				$mail->addAddress('select email from reg where receiptno='.$a.'', 'hema');
				$mail->Subject = 'This is test email ';
				$mail->msgHTML="htmlversion";
				$mail->AltBody = "textversion";
			    $body="<table border='1'>
<tr><td>Receipt No</td><td>". $row[0]."</td></tr>
<tr><td>RouteNo</td><td>".$row[8]."</td></tr>
<tr><td>Name</td><td>".$row[1]."</td></tr>
<tr><td>Year</td><td>".$row[3]."</td></tr>
<tr><td>Department</td><td>".$row[4]."</td><tr>
<tr><td>Semester</td><td>".$row[5]."</td></tr>
<tr><td>FeesPaid</td><td>".$row[6]."</td></tr>
<tr><td>Dues</td><td>".$row[7]."</td></tr></table>";
				
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
				}
				
	  
?></table></html>