
<?php
include("connection.php");
?>

<html>
    <head>
        <title>SU Material Maintenance Management System</title>
         <link rel="icon" type="image/JPG" href="image/asu.png"/>
          <meta charset="UTF-8">
          
          <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/carousel.js" type="text/javascript"></script>
        <script src="js/dropdown.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/cs.css">
      <style type="text/css">
          .header {
    color: #111;
    font-size: 0px;
    padding: 0px;
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
   
   <div style="height:auto; width:100%; margin:auto; margin-top:0px; margin-bottom:10px; background-color:#B0C4DE; border:2px rgba(255, 0, 0, 0.2); box-shadow:2px 25px 2px 5px 2px  #B0C4DE;font-size: 25px;">
   <center>   <img width="15%" height="140" src="image/samara.png" ><img width="67%" height="140" src="image/1.png" >
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
<div align="right">
                        <font size="5"color ="green"> 
                        <?php
                        echo "<b>" . date('l\, F jS\, Y ') . "</b>";
                        ?>
                        </font>
						</div>
						<div align="right">
						<table border="0" bgcolor=#0000FF cellspacing=2 cellpadding=2 class="clock24st" style="line-height:50px; line-width:215px; padding:0;">
<script type="text/javascript" src="http://www.24webclock.com/clock24.js"></script>
<tr><td class="clock24std" style="font-family:bold; font-size:26px;"><a href=" ">
</a>
<b><a href="http://www.24webclock.com/" style="text-decoration:none;"><span class="clock24s" id="clock24_48332" style="color:white;"></b> </span></a></td></tr>
</table>
<script type="text/javascript">
var clock24_48332 = new clock24('48332',180,'%HH:%nn:%ss %P','en');
clock24_48332.daylight('ET'); clock24_48332.refresh();
</script>  </div>
<div class="row" style="background-color:#FFE4C4;border:2px solid blue; border-radius:10px;">
<div class="col-sm-12" style="border:2px solid red; border-radius:10px;">
                        <div class="jumbotron" style="background-color:white; width:100%">
						
                            <div  style='background-color:white; border-radius: 10px;'>
							<table><tr><td>
                                <img width="400" height="250" src="image/contactus.JPG"></td>
                                <td><h4>You can contact us by using the following address.</h4>
								<h5><b>phone number: 033 666 05 96</b> </h5>
<h5><b>website: www.su.edu.et</b> </h5>
<h5><b>Fax: 532</b> </h5>								
								</td></tr></table>
                               
                        </div></div></div>
					
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
<a href="www.twitter.com" style="color:white;">Join twitter</a>  
</div>
<div class="col-md-1">
<a href="www.Facebook.com/su semera.page"><img src="image/facbook.png" height="60px" width="70px"></a>
<a href="www.Facebook.com/su semera.page" style="color:white;">Go to Facebook</a>  
</div>
<div class="col-md-1">
<a href="www.gmail.com"><img src="image/gmail.png" height="60px" width="70px"></a> 
<a href="www.gmail.com" style="color:white;">Contact by Email</a> 
</div>
<div class="col-md-7">
<h5 style="color:white;">Material Maintenance Management System @SU 2019. All Rights Reserved!!!.</h5>
<p style="color:white;"><b>Developed by SU 2011 Graduate students. @SU 4th year computer science section 'B' group 1.</b></p>  
</div>
</div>
</body>
</html>