<?php
include("connection.php");
?>
<html>
  <title>SU Material Maintenance Management System</title>
  <head>
  <link rel="icon" type="image/JPG" href="image/asu.png"/>
    <meta charset="UTF-8">
     <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/carousel.js" type="text/javascript"></script>
        <script src="js/dropdown.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/cs.css">
	
<style type="text/css">
  
.header {
    background-color: ;
    font-size: 0px;
    padding: 0px;
}
body{
	padding:0px;
	margin:0px
}
.footer-left{
	align:center;
}
.b {
color:white;
 font-size:20px;
 padding:10px;
 font-family:Times New Roman;
}
.link{
	background-color:blue;
	height:50px;
border-radius:10px;	
}
ul li a{
	color:white;
	text-decoration:none;
	display:block;
       background-color:blue;
      border-radius:10px;
}
ul li a:hover{
	background-color:#87ceeb;
	color:#ff00ff;
}

</style>
</head>
<body bgcolor="#d0e4fe" style="background-color:#87CEEB;">
      <div class="container">    
    <div class="header">
<div style="position: fixed; left:0px; background-color:  rgb(128,128,128); height:100%; width: 80px; "></div>
<div style="position: fixed; right:0px; background-color: rgb(128,128,128); height:100%; width: 80px; "></div>
   
   <div style="height:auto; width:100%; margin:auto;  background-color:#B0C4DE; border:2px rgba(255, 0, 0, 0.2); box-shadow:2px 25px 2px 5px 2px  #B0C4DE;font-size: 25px;">
   <center>  <img width="15%" height="140" src="image/samara.png" ><img width="69%" height="140" src="image/1.png" >
   <img width="15%" height="140" src="image/afar.jpg" ></div></center>
<ul>
<center>
          <div class="link"> 
         <ul class="nav navbar-nav"> <div class="row">
<li><a class="b"  href="index.php">Home</a></li>
<li><a class="b" href="about.php"> About Us</a></li>
<li><a class="b" href="contact.php"> Contact Us</a></li>
<li><a class="b" href="register.php">Register</a></li>
<li><a class="b" href="login.php">Login</a></li></div></ul>
</b></center></ul> </div>
<div class="row" style="background-color:#FFE4C4;border:2px solid blue; border-radius:10px;">
<div class="col-sm-4" style="background-color:#ADFF2F; border-radius:10px;">
<h2>welcome to Material Maintenance Management System.It is <a href="developer.php">developed by</a> Samara University computer science graduate students in 2011 E.C.</h2>
 <?php include ('slideshow.php');?>
</div>

<div class="col-sm-8" style="border:2px solid red; border-radius:10px;">
 <div align="right">
 <font size="5"color ="green"> 
 <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?> </font></div>
  <div align="right">
<table border="0" bgcolor=#0000FF cellspacing=2 cellpadding=2 class="clock24st" style="line-height:50px; line-width:215px; padding:0;">
<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>
<tr><td bgcolor=#000000 class="clock24std" style="font-family:bold; font-size:26px;"><a href=" ">
</a>
<b><a href="http://www.24webclock.com/" style="text-decoration:none;"><span class="clock24s" id="clock24_48332" style="color:white;"></b> </span></a></td></tr>
</table>
<script type="text/javascript">
var clock24_48332 = new clock24('48332',180,'%HH:%nn:%ss %P','en');
clock24_48332.daylight('ET'); clock24_48332.refresh();
</script>  </div>       
		
	<div style="background-color:white">
	<img width="350px" height="200" src="image/ber.jpg"  />
	<img width="350px" height="200" src="image/office.jpg"  />
	</div>
	<font color=" #9200ff "><center><b>Welcome Dear!!!</b></center></font>
		 
<font color="black" size="4" face=" font-family:Times New Roman", Times, serif;">
<p class="serif"><div class="v"> Samara University was established by ministry of education in 1999 E.C.
   One of the activities that are performed in Samara University is Material Maintenance Management and  General Service System Perform Maintenance Activities such as
   <br><ul><li>Electric Maintenance</li> <br>
  <li>Furniture Maintenance</li></ul> </font> 
            </center></div>
			<h3><b>Introduction about the system</b></h3>
			<p><b>Material maintenance management system is design to  provide  fast  and  easy  way  of  controlling  all  the activities of maintaining 
			materials in SU estate and facility office.  It is also used to communicate end users with estate and facility office using the web, keep the data for the longest time with in the database.</b></p>
   <p><b>Our system provides an easy way for end user to send request for maintenance service. The system also provides an easy way for admin to manage user accounts and to see end user’s request on the web and approve their request. 
   The system also used to the team leader can view the request and assign technician based on technician’s status.</b></p>
   <p><b>Generally, Material maintenance management system is concerned on managing the flow of information for purpose of maintaining malfunctioned materials, providing easy and understandable way of controlling the activities  of maintaining material, 
   and   making   easy   and  fast communication   held  between end user, system admin, Team leader   and   technicians.</b></p>
   </div> 
   </div>
   <br>
<div class="row" style="background-color:#0B5345;">
<div class="col-md-1">
<h4 style="color:white;">Follow US</h4>
</div>
<div class="col-md-1">
<a href="www.youtube.com"><img src="image/you.jpg" height="60px" width="70px"></a>
<a href="www.youtube.com" style="color:white;">Youtube</a> 
</div>
<div class="col-md-1">
<a href="www.twitter.com"><img src="image/twitter.png" height="60px" width="70px"></a>
<a href="www.twitter.com" style="color:white;">twitter</a>  
</div>
<div class="col-md-1">
<a href="www.Facebook.com/su semera.page"><img src="image/facbook.png" height="60px" width="70px"></a>
<a href="www.Facebook.com/su semera.page" style="color:white;">Facebook</a>  
</div>
<div class="col-md-1">
<a href="www.gmail.com"><img src="image/gmail.png" height="60px" width="70px"></a> 
<a href="www.gmail.com" style="color:white;">Email</a> 
</div>
<div class="col-md-7">
<h5 style="color:white;">Material Maintenance Management System @SU 2019. All Rights Reserved!!!.</h5>
<p style="color:white;"><b>Developed by SU 2011 Graduate students. @SU 4th year computer science section 'B' group 1.</b></p>  
</div>
</div>
</body>
</html>





