

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
   
      <?php
     
               include("connection.php");

                require 'PHPMailer/PHPMailerAutoload.php';
                if (isset($_POST['forgotpass'])){
                $emailf = $_POST['emailf'];
                $subject="Password Recovery"; 
                $query = "SELECT * FROM `useraccount` WHERE `email`='$emailf' ";
                $result = mysqli_query($conn,$query);
           
                $row=mysqli_fetch_array($result);
  
              $role =$row['usertype'];
                 $email=$row['email'];
                $_SESSION['email']=$email;
                $username=$row['username'];



                    //random number generate
function rnd($length,$lower=true,$upper=true,$numbers=true){
  $pool="";

  $result="";
  if($lower==true){
  $pool .="abcdefghijklmnopqrstuvwxyz";
}
if($upper==true){
  $pool .="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
}
if($numbers==true){
  $pool .="0123456789";
}
$cc=0;
while($cc<$length){
  $result .=$pool[rand(0,strlen($pool)-1)];
  $cc++;
}
return $result;


}
$random_no=rnd(6,true,true,true);
//random end
                if (isset($_SESSION['email'])) {
                    $email=$_SESSION['email'];
                $query2 =" UPDATE `useraccount` SET `confirm_password`='$random_no' WHERE email='$emailf' ";}
                $result2 = mysqli_query($con,$query2);
                $mail = new PHPMailer;
                $mail->isSMTP();                                   // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                            // Enable SMTP authentication
                $mail->Username = 'leulnebiyou@gmail.com';          // SMTP username
                $mail->Password = 'birhanuleul@gmail.com'; // SMTP password
                $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                 // TCP port to connect to
                $mail->setFrom('leulnebiyou@gmail.com', 'ASUMMS');
                $mail->addReplyTo('leulnebiyou@gmail.com', 'ASUMMS');
                $mail->addAddress($emailf);   // Add a recipient
                $mail->isHTML(true);  // Set email format to HTML
                $bodyContent ='<center><h1>Asumms</h1></center><br>

<center>
<h3>From asumms  '.$username.' ,
<br>
We received a request to reset your password.
<br>
you can enter the following password reset code:'.$random_no.' </h3> ';
              
              $mail->Subject ='FROM ASUMMS';
             $mail->Body=$bodyContent;
                if(!$mail->send()) {
            echo"<script>alert('Message could not be sent. ')</script";
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {

      header("Location:forgot1.php");


                  // visit our site www.studyofcs.com for more learning
                }
              }?>



<form action="" method="POST" >

     <div class="container" style="margin-top:20px;margin-left:0px;">
    <div class="row justify-content-center">
    <div class="col-md-6 col-md-offset-3" align="center">
    <input class="form-control" id="email" placeholder="Your Email Address" type="email"  name="emailf"><br>
    <input type="submit" class="btn btn-danger btn-primary" value="Reset Password" name="forgotpass">
                <br><br>
                <p id="response"></p>
            </div>
        </div>
    </div>
</form>
</div></div>
</body>
</html>

