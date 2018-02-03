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
{?><html><style>
body
a{
text-decoration:none;
}
</style>
<form action="" method="post">
 <center><h1>Buspass form</h1><table border="1">
<tr><td>StudentId</td><td><?php echo $row[0];?></td></tr>
<tr><td>Name</td><td><?php echo $row[1];?></td></tr>
<tr><td>EmailID</td><td><?php echo $row[2];?></td></tr>
<tr><td>Year</td><td><?php echo $row[3];?></td></tr>
<tr><td>Department</td><td><?php echo $row[4];?></td><tr>
<tr><td>Semester</td><td><?php echo $row[5];?></td></tr>
<tr><td>Busstop</td><td><?php echo $row[6];?></td></tr>
<tr><td>RouteNo</td><td><?php echo $row[7];?></td></tr>
<tr><td>Time</td><td><?php echo $row[8];?></td></tr>
</table>
</center>
 <?php
 
  require 'PHPMailer-master/PHPMailerAutoload.php';

	//$htmlversion = "this is the html version";
	//$textversion ="this is the text version";
$sel1=mysql_query("select email from reg where receiptno='".$a."'",$con)or die(mysql_error());
$tmail=array();
while($row1=mysql_fetch_row($sel1))
{
$tmail[]=$row1['email'];
}
$from = "EMAIL ADDRESS"; 
    $subject = "SUBJECT"; 
    $body = "BODY"; 

    $host = "smtp.domain.com"; 
    $username = "USERNAME"; 
    $password = "PASSWORD"; 

        if(mysql_num_rows($elist) > 0)
        {
            while($elist_result = mysql_fetch_array($elist))
            {
            $headers = array ('From' => $from, 
            'To' => $elist_result['cEmail'], 
            'Subject' => $subject); 
            $smtp = Mail::factory('smtp', 
            array ('host' => $host, 
            'auth' => true, 
            'username' => $username, 
            'password' => $password)); 

            $mail = $smtp->send($to, $headers, $body); 
            }
        }

	
		/*date_default_timezone_set('Etc/UTC');
		
	$mail = new PHPMailer;
				$mail->isSMTP();
				$mail->SMTPDebug = 0;
				$mail->Debugoutput = 'text';
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = 587;
				$mail->SMTPSecure = 'tls';
				$mail->SMTPAuth = true;*/
			
			    $body="<center><h1>Buspass form</h1><table border=1>

<tr><td>StudentId</td><td>".$row[0]."</td></tr>
<tr><td>Name</td><td>".$row[1]."</td></tr>
<tr><td>EmailID</td><td>".$row[2]."</td></tr>
<tr><td>Year</td><td>".$row[3]."</td></tr>
<tr><td>Department</td><td>".$row[4]."</td><tr>
<tr><td>Semester</td><td>".$row[5]."</td></tr>
<tr><td>Busstop</td><td>".$row[6]."</td></tr>
<tr><td>RouteNo</td><td>".$row[7]."</td></tr>
<tr><td>Time</td><td>".$row[8]."</td></tr>";
				
				$mail->MsgHTML($body);
			mail(
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
 