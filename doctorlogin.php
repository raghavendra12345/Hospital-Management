<?php
$conn=mysqli_connect("localhost","root","Sai@99115","Project");
if($conn==false)
{
die("Connection failed:" .mysqli_connect_error());
}
session_start();
$myusername = mysqli_real_escape_string($conn,$_POST['Dr_id']);
$mypassword = mysqli_real_escape_string($conn,$_POST['Password']);
$sql="SELECT Dr_id,Password from Doctor where Dr_id ='$myusername' and Password='$mypassword'";
$_SESSION['un'] = $myusername;
$result=$conn->query($sql);
if($result->num_rows>0)
{
  header("location: doctor.php");

}
else
{
	echo "<script type='text/javascript'> alert('YOUR USERNAME AND PASSWORD IS INVALID')</script>";
	include 'login.html';
}
$conn->close();
?>
