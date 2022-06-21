<?php
		$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

?>
<!DOCTYPE html>
<html>
<title>QUERY/RESPONSE DATASET PAGE </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("https://cached.imagescaler.hbpl.co.uk/resize/scaleWidth/880/cached.offlinehbpl.hbpl.co.uk/news/OTM/Speech-shutterstock_193539209-Matej-Kastelic-20180419114131278.jpg"), url("d.jpg");
  min-height: 90%;
    background-repeat: no-repeat;
  background-attachment: fixed;  
  background-blend-mode: screen;
}

.menu {
  display: none;
}
</style>
<body>

<!-- Links (sit on top) -->
<form action="" method="POST">
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
       <a href="admin.php"><a href="#" onclick="my1();" class="w3-button w3-block w3-black">BACK</a>
    </div>
    <div class="w3-col s3">
       <a href="add.php"><a href="#about" onclick="my2();" class="w3-button w3-block w3-black">ADD TO DATASET</a>
    </div>
    <div class="w3-col s3">
       <a href="ds.php"><a href="#menu" onclick="my3();" id="view" class="w3-button w3-block w3-black">VIEW DATASET</a>
    </div>
    <div class="w3-col s3">
       <a href="login.php"><a href="#where" onclick="my4();" class="w3-button w3-block w3-black">LOGOUT</a>
    </div>
  </div>
</div>
</form>
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
 
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-black" style="font-size:90px">QUERY/ RESPONSE DATASET</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-black">GEU CHATBOT</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
   
    
    <div class="w3-panel w3-leftbar w3-light-grey">
     
    </div>
   
   
  </div>
</div>


</div>


<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();

function my1() {
  location.replace("adminlogin.php");
}

function my2() {
  location.replace("add.php");
}

function my3() {
  location.replace("ds.php");
}

function my4() {
  location.replace("login.php");
}
</script>


</body>
</html>
