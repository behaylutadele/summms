
    
<html>
  <title>SU Material Maintenance Management System</title>
  <head>
  <link rel="icon" type="image/JPG" href="image/asu.png"/>
    <meta charset="UTF-8">
     <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/cs.css">
<style type="text/css">
  
.header {
    color: #333;
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
<body bgcolor="#d0e4fe">
      <div class="container">    
    <div class="header">
<div style="position: fixed; left:0px; background-color:  rgb(128,128,128); height:100%; width: 80px; "></div>
<div style="position: fixed; right:0px; background-color: rgb(128,128,128); height:100%; width: 80px; "></div>
   
   <div style="height:auto; width:100%; margin:auto; margin-top:0px; margin-bottom:10px; background-color:#B0C4DE; border:2px rgba(255, 0, 0, 0.2); box-shadow:2px 25px 2px 5px 2px  #B0C4DE;font-size: 25px;">
   <center>  <img width="20%" height="120" src="image/ethio.jpg" ><img width="60%" height="120" src="image/1.png" ><img width="20%" height="120" src="image/afar.jpg" ></div></center>
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
<?php
    
            error_reporting(0);
            ?>
 
          <div class="content-page">
    <!-- Start content -->
    <div class="content">
                    <div class="row">
                <div class="col-sm-12">  
            <?php

            session_start();
            //echo $email=$_SESSION['email'];
            $conn=mysqli_connect("localhost","root","");
           mysqli_select_db($conn,"summms");

              if (isset($_POST['confirim'])) {
                 $new_password=$_POST['new_password'];
                 $confirm_password=$_POST['confirm_password'];

                if ($new_password==$confirm_password) {
                    $new_password=md5($_POST['new_password']);
                    if (isset($_SESSION['email'])) {
                    $email=$_SESSION['email'];
                }
$query4 =" UPDATE `useraccount` SET `password`='$new_password',confirm_password='' WHERE email='$email' ";
if ($result4 = mysqli_query($conn,$query4)) {
    session_destroy();
    header("location: login.php");
    echo "<script>alert('Your password is changed successfully')</script>";

}
                }
              }
?>
     <div class="container" style="margin-top:20px;margin-left:0px;">
    <div class="row">
    <div class="col-md-6" align="center">
  <form class="form-horizontal" role="form" method='post' name="form1">
            <div class="form-group">
    <b>New-Password</b>
                   
         <input type="password"   placeholder="enter new password" class="form-control" name='new_password' class='form-control'  autocomplete="off" onKeyUp="vaildate()" minlength=3 required />                   
        <b>Re-enter new Password</b>
         <input type="password"   placeholder="confirm password" class="form-control" name='confirm_password' class='form-control'  autocomplete="off" onKeyUp="vaildate()" minlength=3 required />
                                               
                                           
                                      
      <button type="submit" class="btn btn-sm btn-success" name="confirim" style="margin-left:5px;height:40px">Save<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i></button>&nbsp;&nbsp;
     <button class="btn" type="reset" style="margin-right:-50px;height:40px">  <i class="ace-icon fa fa-undo bigger-110"></i> Reset </button>
                                         </div> </div></form>
                                    
                                    </div></div></div></div> </div> </div>
                                     </div></div></div>
                                 </body></html>
                