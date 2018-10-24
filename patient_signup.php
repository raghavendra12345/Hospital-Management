<?php
$link = mysqli_connect("localhost","root","Sai@99115","Project");
if($link === false)
{
	die("ERROR : COULD NOT CONNECT.".mysqli_connect_error());
}
$sql = "INSERT INTO Patients(fname,lname,Pid,Sex,Room_no,Contact_No,Address,Dr_id,Password) values('$_POST[fname]','$_POST[lname]','$_POST[Pid]','$_POST[Sex]','$_POST[Room_no]','$_POST[Contact_No]','$_POST[Address]','$_POST[Dr_id]','$_POST[Password]')";

if(mysqli_query($link,$sql))
{
	header("location: addpatient.php");
}
else
{
	echo "ERROR COULD NOT EXECUTE $sql.".mysqli_error($link);
}
mysqli_close($link);
?>
