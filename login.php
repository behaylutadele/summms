


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
<?php
session_start();
include('connection.php');
if (isset($_SESSION['userId']) && ($_SESSION['username'])&& ($_SESSION['usertype']== 'End User')) {
header('location:enduser/index.php');
}
elseif(isset($_SESSION['userId']) && ($_SESSION['username'])&& ($_SESSION['usertype']== 'Team Leader')) {
header('location:team leader/index.php'); 
   
}

elseif(isset($_SESSION['userId']) && ($_SESSION['username'])&& ($_SESSION['usertype']== 'Admin')) {
header('location:admin/index.php'); 
   
}

elseif (isset($_SESSION['userId']) && ($_SESSION['username'])&& ($_SESSION['usertype']== 'Technician')) {
header('location:technician/index.php'); 
   
}

?>

<script type="text/javascript">
        window.history.forward();
        function noBack()
        {
            window.history.forward();
        }
</script>
<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
 
        <script type="text/javascript">
            function validateForm() {
                var x = document.forms["myForm"]["username"].value;
                if (x == "") {
                    alert("Name must be filled out");
                    return false;
                }

                var x = document.forms["myForm"]["password"].value;
                if (x == "") {
                    alert("Password must be filled out");
                    return false;
                }



            }</script>
        <style type="text/css">
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
                <div style="position: fixed; left:0px; background-color: rgb(128,128,128); height:100%; width: 80px; "></div>
                <div style="position: fixed; right:0px; background-color: rgb(128,128,128); height:100%; width: 80px; "></div>

                <div style="height:auto; width:100%; margin:auto; margin-top:0px; margin-bottom:10px; background-color:#B0C4DE; border:2px rgba(255, 0, 0, 0.2); box-shadow:2px 25px 2px 5px 2px  #B0C4DE;font-size: 25px;">
                    <center>  <img width="15%" height="140" src="image/samara.png" ><img width="67%" height="140" src="image/1.png" >
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
                                <?php
                            
                                if (isset($_POST['login'])) {

                            
                                        $username = $_POST['username'];
                                        $password = ($_POST['password']);
                                        $query1 = mysqli_query($conn,"select * from useraccount WHERE username='$username' AND password='$password'");
                                        echo mysqli_error($conn);
                                        if (mysqli_num_rows($query1) > 0) {
                                            $row = mysqli_fetch_array($query1);
                                           
                                            $usertype = $row['usertype'];
                                            $userId = $row['userId'];
                                            $username = $row['username'];
											$fname = $row['First_Name'];
											$lname = $row['Last_Name'];
                                            echo $usertype;
                                            echo $userId;
                                            if ($usertype == '') {
                                                
                                            }

                                            if ($usertype == 'Admin') {

                                                $st = mysqli_query($conn,"select * from useraccount where userId='$userId'");
                                                if (mysqli_num_rows($st) > 0) {
                                                    $st1 = mysqli_fetch_array($st);
                                                    $status = $st1['status'];
                                                    echo $status;

                                                    if ($status == 0) {
                                                        $_SESSION['username'] = $username;
                                                        $_SESSION['userId'] = $userId;
                                                        $_SESSION['usertype'] = $usertype;
                                                        $_SESSION['First_Name'] = $fname;
														$_SESSION['Last_Name'] = $lname;
                                                        header("Location:admin/index.php");
                                                    } else {
                                              echo "<script> alert('Oh Sorry, your account is temporarily deactivated by the admin.??')</script>";
                                                    }
                                                }
                                            } else if ($usertype == 'Team Leader') {

                                                $st = mysqli_query($conn,"select * from useraccount where userId='$userId'");
                                                if (mysqli_num_rows($st) > 0) {
                                                    $st1 = mysqli_fetch_array($st);
                                                    $status = $st1['status'];
                                                    echo $status;

                                                    if ($status == 0) {
                                                        $_SESSION['username'] = $username;
                                                        $_SESSION['userId'] = $userId;
                                                        $_SESSION['usertype'] = $usertype;
														$_SESSION['First_Name'] = $fname;
														$_SESSION['Last_Name'] = $lname;
                                                        header("Location: team leader/index.php");
                                                    } else {

                                                       echo "<script> alert('Oh Sorry, your account is temporarily deactivated by the admin.??')</script>";
                                                    }
                                                }
                                            } else if ($usertype == 'Technician') {

                                                $st = mysqli_query($conn,"select * from useraccount where userId='$userId'");
                                                if (mysqli_num_rows($st) > 0) {
                                                    $st1 = mysqli_fetch_array($st);
                                                    $status = $st1['status'];
                                                    echo $status;
                                                    if ($status == 0) {
                                                        $_SESSION['username'] = $username;
                                                        $_SESSION['userId'] = $userId;
                                                        $_SESSION['usertype'] = $usertype;
                                                        $_SESSION['First_Name'] = $fname;
														$_SESSION['Last_Name'] = $lname;

                                                        header("Location: technician/index.php");
                                                    } else {

                                                       echo "<script> alert('Oh Sorry, your account is temporarily deactivated by the admin.??')</script>";
                                                    }
                                                }
                                            } else if ($usertype == 'End User') {

                                                $st = mysqli_query($conn,"select * from useraccount where userId='$userId'");
                                                if (mysqli_num_rows($st) > 0) {
                                                    $st1 = mysqli_fetch_array($st);
                                                    $status = $st1['status'];
                                                    echo $status;

                                                    if ($status == 0) {
                                                        $_SESSION['username'] = $username;
                                                        $_SESSION['userId'] = $userId;
                                                        $_SESSION['usertype'] = $usertype;
														$_SESSION['First_Name'] = $fname;
														$_SESSION['Last_Name'] = $lname;
                                                        header("Location:enduser/index.php");
                                                    } else {

                                                         echo "<script> alert('Oh Sorry, your account is temporarily deactivated by the admin.??')</script>";
                                                    }
                                                }
                                            }   
                                        } else {

                                            //$msg = "<div class='alert alert-danger'>Oh Sorry! Please fill correct Username and Password!</div>";

                                            echo "<script> alert('Oh Sorry! Please fill correct Username and Password!')</script>";
                                        }
                                    
                                }
                                ?>
								
								<div class="row" style="background-color:#FFE4C4;border:2px solid blue; border-radius:10px;">
								<div class="col-md-4" style="background-color:#ADFF2F; border-radius:10px;">
								<h2>Be sure when you enter your password and username.</h2>
								<p><b>If you have no user name and password you have to registered first.</b></p>
								<p><b>If you forget your password click the link forget password. 
								And after you complete the process please use <u>0000</u> as your password and change it after login.</b></p>
								<?php include ('slideshow.php');?>
								</div>
							
								<div class="col-sm-8" style="border:2px solid red; border-radius:10px;">
                                <center>
								<font color="black" size="5" class="s"><b><h2 style="color:blue">Welcome to Login Page</h2></b></font>
                                    <table border="0px" style="border-radius:10px;">
     <form  name="myForm" class="form-control" method="POST" onsubmit="return validateForm();">
                                          <br> <img src="image/a.jpg" class="img-circle" alt="user" width="200">
                         <div class="form-group">
        
                         <tr><td colspan="2"></td></tr>
          <tr height="60"><td class="s" style="color:blue"><label><b> User Name</b></label></td><td> <input type="text" autocomplete="off" placeholder="Enter username"  name="username" style="width: 400px;"></span></td></tr>
     <tr height="40"><td class="s" style="color:blue"><label><b>Password</b></label></td><td> <input type="password" autocomplete="off" placeholder="********"  name="password"  style="width: 400px;"></span></td></tr>
             <tr><td><td>
      
      <br><br> 
  <tr><td align="center" colspan="2"><button type="submit" name="login" value='login' class="btn btn-info" style="width: 100px;"> Login</button>
  <input type="reset" value="Clear" class="btn btn-danger" style="width: 100px;"></td></tr>
       
  </td></tr> 
  
  </div> <br>
                      
        </form>
		
		</div>
		</center>
		
      </table>
     
<div align="center"> <a href="forgetpass.php" style="color: #17a2b8;" class="b">Forgot Password use (0000)</a></div>
<div align="center">
<p><b>If you don't have registered in the system you have to register as a user.</b></p> <a href="register.php" style="color: #17a2b8;" class="b">click here</a></div>
</div>
<br><br>
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



