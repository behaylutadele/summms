


<?php 
include("header.php");
include 'connection.php';
?>
<?php

if(isset($_POST['create'])){  
//$userid=$_POST['userid'];
$employeeid=$_POST['employeeid'];
$usertype=$_POST['usertype'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$phone=$_POST['phone'];
//$status=$_POST['status'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$rpassword=md5($_POST['cpassword']);
$position=$_POST['position'];
 if (!strlen($_POST["fname"]) || !strlen($_POST["lname"]) || !strlen($_POST["sex"]) || !strlen($_POST["age"])|| !strlen($_POST["phone"])|| !strlen($_POST["usertype"])|| !strlen($_POST["username"])|| !strlen($_POST["email"])|| !strlen($_POST["password"])|| !strlen($_POST["cpassword"])) {

   echo "<script> alert('You must fill all the required field')</script>";
 }
elseif(!strlen($_POST["fname"])||!strlen($_POST["lname"])||!strlen($_POST["username"]))
    {
   // $error3="You can only enter characters ";
        echo "<script> alert('You can only enter characters in fname and lname and username')</script>";
   
     }
elseif(!is_numeric($_POST["age"])||!is_numeric($_POST["phone"]))
   {
    //$error2="Please, You can enter only numbers ";
     echo "<script> alert('Please, You can enter only numbers in age and phone field')</script>";
     }
elseif($password!=$rpassword)
    {
   // $error4="You can enter equal value ";
       echo "<script> alert('Your password does not match,You have to enter equal value of password.')</script>";
    }
    elseif(!is_numeric($_POST["phone"])||!is_numeric($_POST["age"]))
   {
    //$error2="Please, You can enter only numbers ";
     echo "<script> alert('Please, You can enter only numbers')</script>";
   
     }
else
    {
     
mysqli_connect("localhost","root","");
mysqli_select_db($conn,"summms");
$sql=mysqli_query($conn,"select * from useraccount where username='$username'|| phone='$phone'|| email='$email'|| EmployeeId='$employeeid'");
if(mysqli_num_rows($sql)>0){

 echo "<script> alert('username and Employee ID,phone number and email identifies you uniquely!!!, User Already Exist please change your unique character!!!')</script>";

}

else{

$sql="INSERT INTO `useraccount` (`userId`, `EmployeeId`, `usertype`, `First_Name`, `Last_Name`, `sex`, `age`, `phone`, `email`, `username`, `password`, `status`, `Position`) VALUES (NULL, '$employeeid', '$usertype', '$fname', '$lname', '$sex', '$age', '$phone', '$email', '$username', '$password', '0', '$position');";

$result=mysqli_query($conn,$sql);
if(!$result)
{
  echo "<script> alert('The error is happenned, Account have not been created!!.')</script>";
    
//$msg1="UnSuccessfully Create Account!";
}
else{
    echo "<script> alert('Account Successfully Created')</script>";
//$msg= "Account Successfully Created!";
}

//header("location: Viewaccount.php");
  //print "<script>location.href = 'Viewaccount.php'</script>";

}}}
?>

<html>
<head>
<link rel="icon" type="image/JPG" href="image/samara.png"/>
<title>SU Material Maintenance Management System</title>
</head>

<style type="text/css">

</style>

  <script>

            function isInputNumber(evt){
                
                var ch = String.fromCharCode(evt.which);
                
                if(!(/[0-9]/.test(ch))){
                    evt.preventDefault();
                }
                
            }
            
function lettersOnly(input) {
    var regex = /[^a-z ]/gi;
    input.value = input.value.replace(regex, "");
}
</script> 
<body style="background-color:#87CEEB;">
</br></br>
<div class="row" style="background-color:#FFE4C4;border:2px solid blue; border-radius:10px;">
<div class="col-md-4" style="background-color:#ADFF2F; border-radius:10px;">
<h2>Instructions</h2>
<h3>please fill the form carefully based on the instruction</h3>
<ol>
<b>
<li>First name and last name should be text only.</li><br>
<li>You can enter either in username or password field as you want. But you have to remember your password and username to login to the system.</li>
<br><li>In the Employee id field you have to enter the id which is given to you from the organization.</li><br>
<li>you have to fill all fields carefully.</li><br>

</b>
</ol>
<h4>After you logged in, the system gives you a User id. which is uniquely identify  you  from others.
Keep it in your mind you cannot change the user ID.
</div>
<div class="col-md-8" style="border:2px solid red; border-radius:20px;">
 <h4 align="right">Welcome to user registration page.Fill your info here.<a href="index.php"><img src="image/cross.png" width="30px" height="20px"/></a></h4>
  <center> 
  
<form action="" method="POST" class="form-group">
<table style="font-weight: bold; font-size:17px; margin:30px" ><br>

<tr><td class="s">First Name <td><input type="text" name="fname"  pattern="[a-zA-Z]+" required="required" onkeyup="lettersOnly(this)"  autocomplete="off" title="Name should be text only" placeholder="Enter firstname"  class="form-control"/></td></tr>

<tr><td class="s">Last Name <td><input type="text" name="lname"  pattern="[a-zA-Z]+" required="required" title="Name should be text only"  placeholder="last name" onkeyup="lettersOnly(this)" 
autocomplete="off" class="form-control"/></td></tr>
<td></td><td></td></tr>
<tr><td class="s">User Name </td><td><input type="text" name="username" required="required"
title="User Name can be collection of alphabet, numeric and special characters."  placeholder="Enter Username"  autocomplete="off" class="form-control"/></td></tr>
<td></td><td></td></tr>

<tr><td><tr><td class="s">Gender</td><td>
<input type="radio"  name="sex" value="Male" class="custom-radio">Male</br>
<input type="radio"  name="sex" value="Female" class="custom-radio">Female</td></tr>
<td></td><td></td></tr>

<tr><td class="s">Age <td><input type="text" name="age" maxlength=2 onkeypress="isInputNumber(event)" autocomplete="off" pattern="[0-9]{2}" title="Enter Valid digit age Format eg. 12"  class="form-control"/></td></tr><td></td><td></td></tr>

<tr><td class="s">Phone Number <td><input type="text" maxlength=10 name="phone" onkeypress="isInputNumber(event)" autocomplete="off" class="form-control"  pattern="[0-9]{10}"  value="09" title="Enter Valid digit phone number Format eg. 0927691976"/></td></tr>

<td></td><td></td></tr>

<tr><td class="s">email <td><input type="email" name="email"  title="Enter valid email address eg. behaylu@gmail.com" autocomplete="off" placeholder="Enter email" class="form-control"/></td></tr>
<td></td><td></td></tr>

<tr><td class="s">User Type</td><td><select name="usertype" class="form-control">
<option value="End User">End User</option>

</select></td></tr>
<tr><td class="s">Position</td><td><input type="text" name="position"  autocomplete="off" placeholder="Enter Your Position" class="form-control"/></td></tr>
<tr><td class="s">Employee_Id</td><td><input type="text" name="employeeid"  autocomplete="off" placeholder="Enter Your employee Id no" class="form-control"/></td></tr>
<tr><td class="s">Password</td><td><input type="Password" name="password"  placeholder="Enter Password"  autocomplete="off" class="form-control" onKeyUp="vaildate()" minlength=3 required/></td></tr>
<tr><td class="s">Re-enter password</td><td><input type="Password" name="cpassword" 
placeholder="Confirm Password" class="form-control"  onKeyUp="validate()" required/></td></tr>
<tr><td></td><td><center><input  type="submit" name="create"  style="height:40px;width:70px" value="Create" class="btn btn-info"/>&nbsp &nbsp &nbsp

<input  type="reset" name="submit" style="height:40px;width:70px; color:black" value="Clear" class="btn btn-danger"></center></td></tr>
</table> </form>
   </td>
  
</div>
</center> 
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
 