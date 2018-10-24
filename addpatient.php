<!DOCTYPE html>
<html>
<style>
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
input[type=text], input[type=password],input[type=number] {
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
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

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
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
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
<body>
  <head><link href="navigation.css" rel="stylesheet"/></head>
  <div>
      <div class="topnav">
        <a style = "float:left; "href="admin.php">BACK</a>
        <a href="adminlogin.php">LOG OUT</a>
        <a href="ontact.html">CONTACT</a>
        <a class = "active" href="home.html">HOME</a>
        <div class = "abce" align = "center">
          <?php
            session_start();
            $myusername = $_SESSION['un'];
            echo "WELCOME ADMIN ";
            echo $myusername;
          ?>
          </div>
      </div>
    <div class = "logo">
      <a ><h1><b>ADMIN PAGE : PATIENT</b></h1></a>
    </div>
    <hr>
    </div>  
<div align= "center">
  <img src="patientlogo.gif" alt="patient" width="28%" height="28%"></img><br>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">ADD A NEW PATIENT</button>
</div>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="doctor signup.php" method="POST">
    <div class="container">
      <h1>NEW PATIENT INFO</h1>
      <p>Please fill in this form to add a patient.</p>
      <hr>
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="FIRST NAME" name="fname" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="LAST NAME" name="lname" required>

      <label for="Pid"><b>ID</b></label>
      <input type="text" placeholder="ID" name="Pid" required>

      <label for="Sex"><b>Sex</b></label>
      <input type="text" placeholder="SEX" name="Sex" required>

      <label for="Room_No"><b>Room No</b></label>
      <input type="number" placeholder="ROOM NO" name="Room_No" required>
      
      <label for="Contact_No"><b>Contact No</b></label>
      <input type="number" placeholder="CONTACT NO" name="Contact_No" required>
      
      <label for="Address"><b>Address</b></label>
      <input type="text" placeholder="ADDRESS" name="Address" required>

      <label for="Password"><b>Password</b></label>
      <input type="password" placeholder="PASSWORD" name="Password" required>
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label> -->

      <!-- <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">ADD</button>
      </div>
    </div>
  </form>
  <hr>
</div>
 <!-- <div class="navbar">
      <a href="adminlogin.php" class="active">ADMIN</a>
         <a href="doctor2.php">DOCTOR</a>
         <a href="patient.html" class="active">PATIENT</a>
         <a href="Medical Record.html">MEDICAL RECORDS</a>
    </div> -->
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

</body>
</html>
