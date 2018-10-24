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
<h1 style="color:red;"><b>EPR Rooms</b></h1>
</div>
<body bgcolor="#cdf4f7">
<div align="center">

<h1 style="background-color:DodgerBlue;">Room Facilities</h1>

<table style="width:100%;text-align: center;" class="table-condesed" >
<tr>
<th style="text-align: center;">Room_no</th>

<th style="text-align: center;">Patient_id</th>

</tr>
<?php
$conn=mysqli_connect("localhost","root","Sai@99115","Project");
if($conn==false)
{
die("Connection failed:" .mysqli_connect_error());
}
$sql="SELECT Room_no,Patient_id from Rooms where Patient_id!=0";
$result=$conn->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<tr><td>".$row["Room_no"]."</td><td>".$row["Patient_id"]. "</td></tr>";
}
echo "</table>";
}
else
{

echo "0 result";
}


$conn->close();
?>
<div align="center">
 <a href="roomallo.html" class="active"><button>ALLOCATE ROOM</button></a>
</div>

</body>
</html>





