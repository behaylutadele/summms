 <?php
 include ('connection.php');
 $uid=$_GET['id'];
 if(isset($_POST['confirm'])){
				  $newpass=md5($_POST['newpass']);
				  $renewpass=md5($_POST['renewpass']);
				  
				  if($newpass != $renewpass){
					  echo "<script>alert('Your password did not match,Please try again.');</script>";
				  }else{
					  
					  $set=mysqli_query($conn,"update useraccount set password='$newpass' where userId='$uid';");
					  if($set){
						  echo "<script> alert('You are successfully changed the password. you can login now.');
					location.href='login.php';
					</script>";
						  
					  }
				  }
				  
			  }
			  ?>