<?php
$conn=mysqli_connect("localhost","root","Sai@99115","Project");
if($conn==false)
{
die("Connection failed:" .mysqli_connect_error());
}
session_start();
$myusername = mysqli_real_escape_string($conn,$_POST['Pid']);
$mypassword = mysqli_real_escape_string($conn,$_POST['Password']);
$_SESSION['un'] = $myusername;
$sql="SELECT Pid,Password from Patients where Pid ='$myusername' and Password='$mypassword'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  header("location: patient_log.html");
}
else
{
	echo "<script type='text/javascript'> alert('YOUR USERNAME AND PASSWORD IS INVALID')</script>";
	include 'login.html';
}
$conn->close();
?>
