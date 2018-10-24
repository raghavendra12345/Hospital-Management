<?php
$conn=mysqli_connect("localhost","root","Sai@99115","Project");
if($conn==false)
{
die("Connection failed:" .mysqli_connect_error());
}
session_start();
$myusername = mysqli_real_escape_string($conn,$_POST['Username']);
$mypassword = mysqli_real_escape_string($conn,$_POST['Password']);
$_SESSION['un'] = $myusername;
$sql="SELECT Username,Password from admin where Username='$myusername' and Password='$mypassword'";
$result = $conn->query($sql);
if($result->num_rows>0)
{
  header("location: admin.php");
}
else
{
	echo "<script type='text/javascript'> alert('YOUR USERNAME AND PASSWORD IS INVALID')</script>";
	include 'adminlogin.php';
}



$conn->close();
?>
