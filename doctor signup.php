<?php
$link = mysqli_connect("localhost","root","Sai@99115","Project");
if($link === false)
{
	die("ERROR : COULD NOT CONNECT.".mysqli_connect_error());
}
$sql = "INSERT INTO Doctor(Dr_id,Dname,Dr_Qualification,Salary,Contact) values('$_POST[Dr_id]','$_POST[Dname]','$_POST[Dr_Qualification]','$_POST[Salary]','$_POST[Contact]')";
if(mysqli_query($link,$sql))
{
	echo "RECORDS INSERTED SUCCESSFULLY,";
}
else
{
	echo "ERROR COULD NOT EXECUTE $sql.".mysqli_error($link);
}
mysqli_close($link);
?>
