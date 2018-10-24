<!DOCTYPE html>
<html>
<link rel="stylesheet" href="UI.css">
<head>
	<title>Logged In</title>
	<head><link href="navigation.css" rel="stylesheet"/></head>
</head>
		<body>
		<div>
			<div class="topnav">
				<a style = "float:left; "href="login.html">LOG OUT</a>
				<a href="Contact.html">CONTACT</a>
				<a class = "active" href="home.html">HOME</a>
			</div>
			<div>
			<div>
				<?php

					session_start();
					$myusername = $_SESSION['un'];
					$conn=mysqli_connect("localhost","root","Sai@99115","Project");
					if($conn==false)
					{
					die("Connection failed:" .mysqli_connect_error());
					}
					$sql="SELECT * from Doctor where Dr_id='$myusername'";
					$result=$conn->query($sql);
					if($result->num_rows>0)
					{
					while($row=$result->fetch_assoc())
					{
					echo "<div align = 'center'><h1><b>".$row["Dname"]."</b></h1></div><hr>";
					echo "<div style = 'margin-left: 100px'; align = 'left'><h3><b> Identification&nbsp: ".$row["Dr_id"]."</b></h3></div>";
					echo "<div style = 'margin-left: 100px'; align = 'left'><h3><b> Qualification&nbsp&nbsp: ".$row["Dr_Qualification"]."</b></h3></div>";
					echo "<div style = 'margin-left: 100px'; align = 'left'><h3><b> Salary &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: Rs.".$row["Salary"]."</b></h3></div>";
					echo "<div style = 'margin-left: 100px'; align = 'left'><h3><b> Contact &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : ".$row["Contact"]."</b></h3></div>";
					//.$row["Dr_id"].$row["Dname"].$row["Dr_id"]."</td></tr>";
					}
					}
					else
					{

					echo "0 result";
					}
					$conn->close();
				?>
			</div>
			<hr>
			<div align = "center">
      		<a href = "see_appointment.php"><button>SEE APPOINTMENTS</button></a>
    		</div>
			<hr>
			</div>
    	</div>
  </form>
<!-- <div class="navbar">
			<a href="adminlogin.php" class="active">ADMIN</a>
		     <a href="doctor2.php">DOCTOR</a>
		     <a href="patient.html" class="active">PATIENT</a>
		     <a href="Medical Record.html">MEDICAL RECORDS</a>
		</div>
 -->		</body>
</html>
