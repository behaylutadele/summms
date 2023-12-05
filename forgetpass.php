

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
<body style="background-color:#87CEEB;">
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
     
               include("connection.php");
                if(isset($_POST['submitid'])){
                $uid = $_POST['userid'];
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$phoneno = $_POST['phoneno'];
				$amailad = $_POST['email'];
				
                $query = mysqli_query($conn,"select * from useraccount where userId='$uid';");
				if(mysqli_num_rows($query)==0){
					echo "<script> alert('There is no user who have id of $uid, Please try again.');
					</script>";
				}else{
				$query1 = mysqli_fetch_array($query);
				$username = $query1['username'];
				$firstname = $query1['First_Name'];
				$lastname = $query1['Last_Name'];
				$phone = $query1['phone'];
				$email = $query1['email'];
				if($fname!=$firstname){
					echo "<script>('your first name did not match, please try again.')</script>";
				}elseif($lname!=$lastname){
					echo "<script> alert('your last name did not match, please try again.')</script>";
				}elseif($phoneno!=$phone){
					echo "<script> alert('The phone number did not match, please try again.')</script>";
				}elseif($amailad!=$email){
					echo "<script> alert('your email address did not match, please try again.')</script>";
				}elseif(!strlen($uid) || !strlen($fname) || !strlen($lname) || !strlen($phoneno) || !strlen($amailad)){
					echo "<script> alert('All the fields are required, please fill all field.')</script>";
				}elseif($fname==$firstname && $lname==$lastname && $phoneno==$phone && $amailad==$email){
					
						  echo "<script>
						  location.href='forgetpassin.php?id=$uid';</script>";
					
				}else{
					echo "<script> alert('There is an error occurred. Please try again.');</script>";
				}
				
				  
				}}
               
			  if(isset($_POST['cancel'])){
				 echo "<script> alert('Forgetting password process is canceled.');
					location.href='login.php';
					</script>";  
			  }
			  ?>


<h3><a href="login.php" style="color:black">Back</a></h3>


     <div class="container" style="margin-top:20px;margin-left:0px;">
    <div class="row" 
	style="background-color:#FFE4C4;border:2px solid blue; border-radius:10px;width:60%;align:center;">
	<form action="" method="POST" class="form-group">
    User id <input class="form-control" placeholder="enter user Id here" type="number"  name="userid"><br>
	First name <input class="form-control" placeholder="enter first name here" type="text"  name="fname"><br>
	Last name <input class="form-control" placeholder="enter last name here" type="text"  name="lname"><br>
	Phone number <input class="form-control" placeholder="enter phone number here" type="number"  name="phoneno" maxlength=10><br>
	Email address <input class="form-control" placeholder="email address" type="email"  name="email"><br>
    <input type="submit" class="btn btn-primary" value="Submit info" name="submitid">
	<input type="submit" class="btn btn-danger" value="Cancel" name="cancel" onclick="return confirm('Are you sure, you want to cancel the process?')">
                <br><br>
			</form>
        </div>
    </div>
</div></div>
</body>
</html>

