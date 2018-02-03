<?php
session_start();
?> <!DOCTYPE html>
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
  
  <body>  <style>
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
    background-color:#ADD8E6;
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
    background-color:#ADD8E6;
}
</style>
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
            <li class="active"><a href="#">Home</a></li>
           
            <li><li class="active"><a href="studentlogin.php">Student</a></li>
            <li><li class="active"><a href="admin.php">Admin</a></li>
          
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
body
a{
text-decoration:none;
}
table, th, td {
    
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}

</style>
<center>
<table><strong>
<form action="studentreg.php" method="post">
<h1> Data entry Form for Transport Register</h1>
<tr><td><strong>UserName</strong></td><td><input type="text" name="uname"></td></tr>
<tr><td><strong>Password</strong></td><td><input type="password" name="pwd"></td></tr>
<tr><td><strong>Name</strong></td><td><input type="text" name="name"></td></tr>
<tr><td><strong>Age</strong></td><td><input type="text" name="age"></td></tr>
<tr><td><strong>Father Name</strong></td><td><input type="text" name="fname"></td></tr>
<tr><td><strong>Father Phoneno</strong></td><td><input type="text" name="fphn"></td></tr>
<tr><td><strong>year</strong></td><td><select name="year">
<option><strong>1 year</strong></option>
<option><strong> 2year</strong></option>
<option><strong>3 year</strong></option>
</select></td></tr>
<tr><td><strong>department</strong></td><td><select name="dept">
<option><strong>BSC</strong></option>
<option><strong>BCA</strong></option>
<option><strong>BCOM</strong></option>
<option><strong>MSC</strong></option>
<option><strong>MCOM</strong></option></select></td></tr>
<tr><td><strong>Semester</strong></td><td><select name="sem">
<option><strong>1 semester</strong></option>
<option><strong>2 semester</strong></option>
<option><strong>3 semester</strong></option>
<option><strong>4 semester</strong></option>
<option><strong>5 semester</strong></option>
<option><strong>6 semester</strong></option>
</select></td></tr>
<tr><td><strong>Address</strong><td><textarea id="addr" name="addr"></textarea></td></tr>
<tr><td><strong>Student PhonNo</strong></td><td><input type="text" name="phn"></td></tr>
<tr><td><center>&emsp;&emsp;<input  class="button3"type="submit" name="submit" name="submit"></center></td></tr>
</strong></table>

</form>
</html>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("college",$con);?>
<?php
if(isset($_POST['submit']))
{
$ins=mysql_query("insert into student (username,pwd,name,age,fname,fphn,year,department,sem,addr,phn)values('".$_POST['uname']."','".$_POST['pwd']."','".$_POST['name']."',".$_POST['age'].",'".$_POST['fname']."',".$_POST['fphn'].",'".$_POST['year']."','".$_POST['dept']."','".$_POST['sem']."','".$_POST['addr']."',".$_POST['phn'].")",$con)or die(mysql_error());

$l=mysql_insert_id($con);
$_SESSION["ssid"]=$l;
}

?>
   
 </div>
 <a href="studententry.php">Register Form Transport</a>
        </div>
      </div>
      
      
    </div></center><!-- End Thumbnails -->
    
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

