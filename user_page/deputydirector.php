<!DOCTYPE html>
<html>
<title>Deputy Director</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-left">Department of Examination</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Deputy Director</strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-dashboard fa-fw"></i>  Paper Marking Progress</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope"></i>  Notification</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users"></i>  Student Results & Grades</a>
    <a href="DD1.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye"></i>  Verify Result Sheet</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user"></i>  Log Out</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog"></i>  Account Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Paper Marking Progress</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-check-square-o w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>100</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Checked Papers</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-spinner w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>140</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Checking Papers</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>240</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Candidates</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>6</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Answer Inspectors</h4>
      </div>
    </div>
  </div>

  <hr>
  <div class="w3-container">
    <h5>Paper Marking Status</h5>
    <p>Java</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">25%</div>
    </div>

    <p>C++</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Web</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Marking Prorgress of Inspectors</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td>Inspector 01</td>
        <td>65%</td>
      </tr>
      <tr>
        <td>Inspector 02</td>
        <td>15.7%</td>
      </tr>
      <tr>
        <td>Inspector 03</td>
        <td>5.6%</td>
      </tr>
      <tr>
        <td>Inspector 04</td>
        <td>2.1%</td>
      </tr>
      <tr>
        <td>Inspector 05</td>
        <td>1.9%</td>
      </tr>
      <tr>
        <td>Inspector 06</td>
        <td>1.5%</td>
      </tr>
    </table>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
