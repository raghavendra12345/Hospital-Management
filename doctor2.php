<!DOCTYPE html>

<html>


<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
<link href="navigation.css" rel="stylesheet"/>
<title>Doctors Available</title>

</head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<div align="center">
	<div class="topnav">
				<a style = "float:left; "href="patient_log.html">BACK</a>
				<a href="contact.html">CONTACT</a>
				<a class = "active" href="home.html">HOME</a>
			</div>
<h1 style="color:red;"><b>Specialists</b></h1>
</div>
<body bgcolor="#cdf4f7">
<div align="center">

<h1 style="background-color:DodgerBlue;">Gastroentrologist</h1>

<table style="width:100%;text-align: center;" class="table-condesed" >
<tr>
<th style="text-align: center;">Doctor Name</th>
<th style="text-align: center;">Doctor id</th>


</tr>
<?php
$conn=mysqli_connect("localhost","root","Sai@99115","Project");
if($conn==false)
{
die("Connection failed:" .mysqli_connect_error());
}
$sql="SELECT Dname,Dr_id from Doctor where Dr_id like '1__'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<tr><td>".$row["Dname"]."</td><td>".$row["Dr_id"]."</td></tr>";
}
echo "</table>";
}
else
{

echo "0 result";
}



$conn->close();
?>
</table>
<h1 style="background-color:DodgerBlue;">ENT</h1>

<table style="width:100%;text-align: center;" class="table-condesed">
<tr>
<th style="text-align: center;">Doctor Name</th>
<th style="text-align: center;">Doctor id</th>


</tr>
<?php
$conn=mysqli_connect("localhost","root","Sai@99115","Project");
if($conn==false)
{
die("Connection failed:" .mysqli_connect_error());
}
$sql="SELECT Dname,Dr_id from Doctor where Dr_id like '2__'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<tr><td>".$row["Dname"]."</td><td>".$row["Dr_id"]."</td></tr>";
}
echo "</table>";
}
else
{

echo "0 result";
}



$conn->close();
?>
</table>

<h1 style="background-color:DodgerBlue;">Pulmonologist</h1>

<table style="width:100%;text-align: center;" class="table-condesed">
<tr>
<th style="text-align: center;">Doctor Name</th>
<th style="text-align: center;">Doctor id</th>


</tr>
<?php
$conn=mysqli_connect("localhost","root","Sai@99115","Project");
if($conn==false)
{
die("Connection failed:" .mysqli_connect_error());
}
$sql="SELECT Dname,Dr_id from Doctor where Dr_id like '3__'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<tr><td>".$row["Dname"]."</td><td>".$row["Dr_id"]."</td></tr>";
}
echo "</table>";
}
else
{

echo "0 result";
}



$conn->close();
?>
</table>
<h1 style="background-color:DodgerBlue;">Ophthalmologist</h1>

<table style="width:100%;text-align: center;" class="table-condesed">
<tr>
<th style="text-align: center;">Doctor Name</th>
<th style="text-align: center;">Doctor id</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","Sai@99115","Project");
if($conn==false)
{
die("Connection failed:" .mysqli_connect_error());
}
$sql="SELECT Dname,Dr_id from Doctor where Dr_id like '4__'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<tr><td>".$row["Dname"]."</td><td>".$row["Dr_id"]."</td></tr>";
}
echo "</table>";
}
else
{
echo "0 result";
}



$conn->close();
?>
</table>
<h1 style="background-color:DodgerBlue;">Pediatrician</h1>

<table style="width:100%;text-align: center;" class="table-condesed">
<tr>
<th style="text-align: center;">Doctor Name</th>
<th style="text-align: center;">Doctor id</th>


</tr>
<?php
$conn=mysqli_connect("localhost","root","Sai@99115","Project");
if($conn==false)
{
die("Connection failed:" .mysqli_connect_error());
}
$sql="SELECT Dname,Dr_id from Doctor where Dr_id like '5__'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<tr><td>".$row["Dname"]."</td><td>".$row["Dr_id"]."</td></tr>";
}
echo "</table>";
}
else
{

echo "0 result";
}



$conn->close();
?>
</table>
<div align="center">
 <a href="appoint.html" class="active"><button>MAKE AN APPOINTMENT</button></a>
</div>

</body>
</html>

