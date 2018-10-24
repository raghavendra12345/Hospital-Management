<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href=""/></head>
<body>
<?php
$link = mysqli_connect("localhost","root","Sai@99115","Project");
if($link === false)
{
	die("ERROR : COULD NOT CONNECT.".mysqli_connect_error());
}
$sql = "INSERT INTO Project(fname,lname) values('$_POST[fname]','$_POST[lname]')";
if(mysqli_query($link,$sql))
{
	echo "RECORDS INSERTED SUCCESSFULLY";
}
else
{
	echo "ERROR COULD NOT EXECUTE $sql.".mysqli_error($link);
}
mysqli_close($link);
?>
</body>
</html>
