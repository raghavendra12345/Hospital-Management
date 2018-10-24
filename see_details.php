<!DOCTYPE html>
<html>
<link rel="stylesheet" href="UI.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
<head>
	<title>EPR Hospital</title>
	<link href="navigation.css" rel="stylesheet"/>
</head>
		<body>
		<div>
			<div class="topnav">
				<a href="patient_log.html" style = "float:left";>BACK</a>
				<a href="Contact.html">CONTACT</a>
				<a class = "active" href="home.html">HOME</a>
			</div>
			</div>
				<div>
				<?php
					session_start();
					$myusername = $_SESSION['un'];
					$conn=mysqli_connect("localhost","root","Sai@99115","Project");
					if($conn==false)
					{
					die("Connection failed:" .mysqli_connect_error());
					}
					$sql="SELECT * from Patients where Pid='$myusername'";
					$result=$conn->query($sql);
					if($result->num_rows>0)
					{
					while($row=$result->fetch_assoc())
					{
					echo "<div align = 'center'><h1><b>".$row["fname"]." ".$row["lname"]."</b></h1></div><hr>";
					echo "<div style = 'margin-left: 100px'; align = 'left'><h3><b> Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: ".$row["Sex"]."</b></h3></div>";
					echo "<div style = 'margin-left: 100px'; align = 'left'><h3><b> Contact &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : ".$row["Contact No"]."</b></h3></div>";
					echo "<div style = 'margin-left: 100px'; align = 'left'><h3><b> Address &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: ".$row["Address"]."</b></h3></div>";
					echo "<div style = 'margin-left: 100px'; align = 'left'><h3><b> Room number &nbsp: ".$row["Room_no"]."</b></h3></div>";
					}
					}
					$conn->close();
				?>
			</div>
			<hr>
		
<!-- <div class="navbar">
			<a href="adminlogin.php" class="active">ADMIN</a>
		     <a href="doctor2.php">DOCTOR</a>
		     <a href="patient.html" class="active">PATIENT</a>
		     <a href="Medical Record.html">MEDICAL RECORDS</a>
		</div>
 -->		</body>
</html>
