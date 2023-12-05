
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
           
              $conn=mysqli_connect("localhost","root","");
              mysqli_select_db($conn,"summms");


                if (isset($_POST['validate'])) {
                $emails=$_POST['emails'];
                if (isset($_SESSION['email'])) {
                    $email=$_SESSION['email'];
$query3 =" SELECT * FROM `useraccount` WHERE email='$email' ";
                $result3 = mysqli_query($conn,$query3);
                $row=mysqli_fetch_array($result3);
                $confirm_password=$row['confirm_password'];
                $_SESSION['email']=$row['email'];
            }
                if ($emails==$confirm_password) {
                    header("Location:forgot2.php");

                }
                else{
                    echo "<script>alert('incorrect code')</script>";
                }

              }?>
<div class="container">
        <div class="row">
         <div class="col-sm-8">
           <div class="card-box">
             <div class="row">
         <div class="col-md-6" style="width:70%">
       <form class="form-horizontal" role="form" method='post' name="form1">
                                        
     <div class="form-group"><div class="center">  
      <label class="col-md-9 control-label"  for="example-email"  style="font-size: 20px; " style="margin-left:400px; font-family: Bookman Old Style;color: brown;">Please Enter The Confirmation Code From Your Email</label>
       <div class="col-md-45">
     <input type="text"   placeholder=" Fill confirmation  Code" class="form-control" name='emails' class='form-control'  autocomplete="off" onKeyUp="vaildate()" required />
   </div>   </div>
                    
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <button type="submit" class="btn btn-success" name="validate" style="margin-left:5px;height:40px">Submit<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i></button>&nbsp;&nbsp;
            </div>                            

          </form>
            </div></div></div></div> </div>                            
               </div> </div></div></div></div>
             </form>
 </body>
</html>

             