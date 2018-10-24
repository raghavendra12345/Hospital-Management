<!DOCTYPE html>
<html>
<link rel="stylesheet" href="UI.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<head>
	<title>EPR Hospital</title>
	<head><link href="navigation.css" rel="stylesheet"/></head>
</head>
		<body>
		<div>
			<div class="topnav">
				<a style = "float:left; "href="doctor.php">BACK</a>
				<a href="Contact.html">CONTACT</a>
				<a class = "active" href="home.html">HOME</a>
			</div>
			<div>
				<hr>
			<div>
				<?php

					session_start();
					$myusername = $_SESSION['un'];
					$conn=mysqli_connect("localhost","root","Sai@99115","Project");
					if($conn==false)
					{
					die("Connection failed:" .mysqli_connect_error());
					}
					$sql="SELECT Patient_name,Date_of_appoint from appointment where Dr_id='$myusername'";
					$result=$conn->query($sql);
					if($result->num_rows>0)
					{
						echo "<table style='width:100%;text-align: center;' class='table-condesed'>";
						echo "<tr>";
						echo "<th style='text-align: center;'><h3><b>Patient's Name</b></th>";
						echo "<th style='text-align: center;'><h3><b>Date</b></th>";
						echo "</tr>";

					while($row=$result->fetch_assoc())
						{
							echo "<tr><td><h3>".$row["Patient_name"]."</td><td><h3>".$row["Date_of_appoint"]."</td></tr>";
						}
					}
					else
					{
						echo "<div align='center'><h1>NO APPOINTMENTS FOR YOU TODAY.<br><br>BE HAPPY FOR<br>...<br> <U>TODAY!!</U>";
					}
					$conn->close();
				?>
			</table>;
			</div>
			<hr>
		<div align = center>
			<?php
				echo "<a href = 'doctor.php'><button><h2>You have ";
				echo $result->num_rows;
				echo " appointment/s</button></a>";
			?>
		</div>

<!-- <div class="navbar">
			<a href="adminlogin.php" class="active">ADMIN</a>
		     <a href="doctor2.php">DOCTOR</a>
		     <a href="patient.html" class="active">PATIENT</a>
		     <a href="Medical Record.html">MEDICAL RECORDS</a>
		</div>
 -->		</body>
</html>
