<!DOCTYPE html>
<html>
<link rel="stylesheet" href="UI.css">
<link rel="stylesheet" href="navigation.css">
<link href="navigation.css" rel="stylesheet"/>
<head>
  <title>ADMIN</title>
</head>

		<body>
		<div>
			<div class="topnav">
				<a style = "float:left; "href="adminlogin.php">LOG OUT</a>
				<a href="contact.html">CONTACT</a>
				<a class = "active" href="home.html">HOME</a>
        <div class = "abc" align = "center">
          <?php
            session_start();
            $myusername = $_SESSION['un'];
            echo "WELCOME ADMIN ";
            echo $myusername;
          ?>
          </div>
			</div>

		<div class = "logo">
			<a ><h1><b>ADMIN PAGE</b></h1></a>
		</div>
    <hr>
		</div>	
    <div align = "center">
      <a href = "adddoctor.php"><button>DOCTOR</button></a>
      <a href = "addpatient.php"><button>PATIENT</button></a>
<a href ="room.php"><button>ROOMS</button></a>	
    </div>
    <hr>
		<!-- <div class="navbar">
		     <a href="doctor2.php" class="active">DOCTOR</a>
		     <a href="patient.html" >PATIENT</a>
		     <a href="Medical Record.html" class="active">MEDICAL RECORDS</a>
		</div> -->
		</body>
</html>
    

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html> 

