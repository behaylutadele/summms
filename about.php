

<?php
session_start();
require_once("connection.php");
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
        <script src="js/jquery.min.js" type="text/javascript"></script>
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/cs.css">

<style type="text/css">
  
.header {
    color: #333;
    font-size: 0px;
    padding: 0px;
}
body{
	padding:10px;
	margin:5px
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
<div style="position: fixed; right:0px; background-color:   rgb(128,128,128); height:100%; width: 80px; "></div>
   
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
</b></center></ul>
 </div>

<div class="row" style="background-color:#FFE4C4;border:2px solid blue; border-radius:10px;">
<div class="col-md-4" style="background-color:#ADFF2F; border-radius:10px;">
<img src="image/about.jpg" width="200" height="200"/>
<center><h4><b><u>Mission</u></b></h4></center>
<p><b>Producing competent graduates, releasing problem solving research outputs and providing need based community services through education, training,
 consultancy and research to foster the social and economic development of the nation.</b></p>
 <h4><b><u>Vision</u></b></h4>
	  <p><b>Be the leading University in pastoral and agro-pastoral community development in East Africa by 2030.</b></p>
 </div>
 <div class="col-sm-8" style="border:2px solid red; border-radius:10px;">
            <div align="right">
                <font size="5"color ="green">
                <?php
                echo "<b>" . date('l\, F jS\, Y ') . "</b>";
                ?>
           </font></div>
<br>
<font>
<div align="left">
 <H4 class="serif"> <b> <center><u>BACKGROUND OF SAMARA UNIVERSITY </u></center></H4>
    <font color="black">

                                      
     <div><br>
	 <p>
         SAMARA UNIVERSITY is one of the higher institutions which is found in eastern part of Ethiopian and was established in 1999 E.C at Semera town.
       It started the Teaching and learning process since 1999 E.C by three colleges. but know the university have 8 colleges and around 32 departments.</p>
      
           <h4> <u><a href="developer.php">DEVELOPED BY</a></u></h4>
           
			<ol>
          <li>Behaylu Tadele</li>
         <li>Bitew Kassahun</li>
      <li>William Etsay</li>
      <li>Gebregziabher Tewoldebirhan</li>
	  <li>Firehiwot Amaha</li></ol></b></div></font></font></div>
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
						   
						   
						   
						   
						   
						   
						   