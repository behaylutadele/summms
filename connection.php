
<?php
$server="localhost";
$user="root";
$password="";
$db="summms";
$conn=mysqli_connect($server,$user,$password);
if(!$conn)
{
	die(" Not Connected The Database");
}
$database=mysqli_select_db($conn,$db);
if(!$database)
{
	die(" Database Not Found");
}
?>
