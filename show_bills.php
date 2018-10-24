<!DOCTYPE html>
<html>
<link rel="stylesheet" href="UI.css">
<head>
	<title>Bill</title>
	<head>
		<link href="navigation.css" rel="stylesheet"/>
	</head>
</head>
<style>
table, th, td {
    border: 1px solid black;

}
.abcd
{
  border-radius: 10px;
}
.abce
  {
    float: center;
    color: red;
    font-style:all;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    margin-left: 290px;
  }
body 
{
  font-family: Arial, Helvetica, sans-serif;
}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password],input[type=number],input[type=date] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
/* Set a style for all buttons */

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #cdf4f7;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: black;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<div>
	<div>
            <div class="topnav">
                <a style = "float:left; "href="patient_log.html">BACK</a>
                <a href="contact.html">CONTACT</a>
                <a class = "active" href="home.html">HOME</a>
            </div>
        <div class = "logo">
        
<?php
session_start();
$user = $_SESSION['un'];
$link = mysqli_connect("localhost","root","Sai@99115","Project");
if($link === false)
{
	die("ERROR : COULD NOT CONNECT.".mysqli_connect_error());
}
$sql = "SELECT * from Bills where (Patient_id = $user) ";
$result=$link->query($sql);
if($result->num_rows>0)
{
	echo "<div align = 'center'><h1 style='background-color:DodgerBlue;'>BILL DETAILS</h1></div>";
	echo "<table style='width:100%;text-align: center;' class='table-condesed'>";
	echo "<tr>";
	echo "<th style='text-align: center;'><h3><b>Doctor_id</b></th>";
	echo "<th style='text-align: center;'><h3><b>Date</b></th>";
	echo "<th style='text-align: center;'><h3><b>Amount</b></th>";
	echo "</tr>";
	while($row=$result->fetch_assoc())
	{
		echo "<tr><td><h3>".$row["Doctor_id"]."</td><td><h3>".$row["Date"]."</td><td><h3>".$row["Amount"]."</td></tr>";
	}

echo "</table>";
?>
<br><br><div align="center"><button onclick="document.getElementById('id01').style.display='block'" style="width:50%;">PAY BILL</button></div><br>
<?php
}
else
{
	echo "<script type='text/javascript'> alert('YOU DONT HAVE ANY BILLS ')</script>";
	include 'patient_log.html';
}
$link->close();
?>
</div>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="pay_bills.php" method="POST">
    <div class="container">
      <h1>BILL</h1>
      <p>Please fill in this form.</p>
      <hr>
	  <label for="Doctor_id"><b>Doctor_id</b></label>
      <input type="number" placeholder="ID" name="Doctor_id" required>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">PAY</button>
      </div>
    </div>
  </form>
  <hr>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
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
