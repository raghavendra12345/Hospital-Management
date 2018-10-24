<?php
$link = mysqli_connect("localhost","root","Sai@99115","Project");
if($link === false)
{
	die("ERROR : COULD NOT CONNECT.".mysqli_connect_error());
}
$sql = "INSERT INTO appointment(Patient_name,Dr_id,Date_of_appoint) values('$_POST[Patient_name]','$_POST[Dr_id]','$_POST[Date_of_appoint]')";
if(mysqli_query($link,$sql))
{
	header("location: appoint.html");
}
else
{

	echo "<script type='text/javascript'> alert('ERROR')</script>";
	include 'appoint.php';	
}
mysqli_close($link);
?>

