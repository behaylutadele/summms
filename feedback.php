
<?php
include("connection.php");
?>
<html>
  <title>SU Material Maintenance Management System</title>
  <head>
  <link rel="icon" type="image/JPG" href="image/asu.png"/>
    <meta charset="UTF-8">
     <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/carousel.js" type="text/javascript"></script>
        <script src="bootstrap/js/dropdown.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/cs.css">   
	<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Please   Write Your First Name???");
        return false;
    }
 var x = document.forms["myForm"]["lname"].value;
    if (x == "") {
        alert("Please  Write Your Last Name???");
        return false;
    }
 var x = document.forms["myForm"]["date"].value;
    if (x == "") {
        alert("Please   Write Your Date???");
        return false;
    }
 var x = document.forms["myForm"]["email"].value;
    if (x == "") {
        alert("Please   Write Your Email???");
        return false;
    }
 var x = document.forms["myForm"]["comment"].value;
    if (x == "") {
        alert("Please  Write Your Comment???");
        return false;
    }

}
</script>
<style type="text/css">
  
.header {
    color: #333;
    font-size: 0px;
    padding: 0px;
}
</style>
 </head><body>
     <div class="container">    
       <div class="header">
<div style="position: fixed; left:0px; background-color:    rgb(128,128,128); height:100%; width: 80px; "></div>
<div style="position: fixed; right:0px; background-color:   rgb(128,128,128); height:100%; width: 80px; "></div>
   
   <div style="height:auto; width:100%; margin:auto; margin-top:0px; margin-bottom:10px; background-color:#B0C4DE; border:2px rgba(255, 0, 0, 0.2); box-shadow:2px 25px 2px 5px 2px  #B0C4DE;font-size: 25px;">
   <center>  <img width="1100" height="150" src="image/1.jpg" ></div></center>
<center><ul>
   <div class="col-sm-12">
   <ul class="nav navbar-nav">
      <div class="row">
<li><a class="b"  href="index.php">Home</a></li>
<li><a class="b" href="about.php"> About Us</a></li>
<li><a class="b" href="contact.php"> Contact Us</a></li>
<li><a class="b" href="feedback.php">Feedback</a></li>
<li><a class="b" href="login.php">Login</a></li>  
</div> </div> </ul>  </div> </ul></center></div>

<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
   $date = $_POST['date'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

  $con = mysqli_connect("localhost", "root", "");
    if (!$con)
        die("unable to connect");
    mysqli_select_db($con,"summms");
    $sql = "INSERT INTO `feedback`(`First_Name`, `Last_Name`, `Date`, `Email`, `Comment`) VALUES('$fname','$lname','$date','$email','$comment')";
 $result = mysqli_query($con,$sql);
            echo mysqli_error($con);
            if ($result) {
                $a = $result + 1;
                $message=" Your Comment is Submit!";
            }
            else{
                $eror="your comment is not Submitted!";
            }
      }
?>  

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
   
<body><br>
    <center>

    
<form name="myForm"   action="feedback.php" onsubmit="return validateForm()" method="post">
    <div class="col-sm-8">
     <div class="form-group">    
 <label class="control-label col-sm-2"> First Name</label><input type="text" name="fname" class="form-control input-md" onkeyup="lettersOnly(this)"  title="Name should be text only"  autocomplete="off" ></p>
 <label class="control-label col-sm-2"> Last Name</label><input type="text" name="lname" onkeyup="lettersOnly(this)"  class="form-control input-md" pattern="[a-zA-Z]+" required="required" title="Name should be text only"  autocomplete="off"  ></p>
      <label class="control-label col-sm-2"> Date</label><input type="date" name="date" class="form-control input-md" placeholder="Fill Your Name" ></p>

  <label class="control-label col-sm-2">Email</label> <input type="email" name="email" class="form-control" autocomplete="off" placeholder="fill correct email"  > </p>                     
   <label class="control-label col-sm-2"> Comment</label><textarea name="comment" rows="8" cols="40" type="text" class="form-control input-md" onkeyup="lettersOnly(this)" required="required" title="Name should be text only"  autocomplete="off" ></textarea></p>
          
  <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<button type="reset" name="clear" class="btn btn-primary btn-lg">Clear</button>
 
        </form>


        <?php
                      if (isset($message)) {
                            ?>
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $message; ?></strong>
                            </div>
                            <?php
                        } else if (isset($eror)) {
                            ?>
                            <div class="alert alert-danger">
                                <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $eror; ?></strong>
                            </div>
                            <?php
                        }
                        ?> 
                    </div>
                     
  </ul></div>
 </div>
</form>
</center> </div>
<br> <br><br><br><br>
<div id="footer">
<div class="footer-left">  
<img width="1100" height="60" src="image/copy.JPG"/>    
</div>    
</body>
</html>

