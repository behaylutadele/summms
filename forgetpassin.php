
<?php
$id=$_GET['id'];   
include('connection.php');
$pass=md5('0000');
$sql="UPDATE useraccount SET password='$pass' WHERE userId='$id';";
if(mysqli_query($conn,$sql)){
echo "<script> alert('Your password is recovered successfully,Please Login to the system by using (0000) this password. After you login you have to change your password immediately.');
location.href='login.php';</script>";		
}
?>
