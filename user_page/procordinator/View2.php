<!DOCTYPE html>
<html>
<title>Program Coordinator</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
  
</script>

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
      <span>Welcome, <strong>Program Coordinator</strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="procordinator.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-dashboard"></i>  Paper Marking Progress</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope"></i>  Notification</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users"></i>  Student Results & Grades</a>
    <a href="PD1.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-eye fa-fw"></i>  Course Statistics</a>
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
    <h5><b><i class="fa fa-eye"></i> Course Statistics</b></h5>
  </header>

  <?php
      $c_id = $_REQUEST["id"];
      $conn = mysqli_connect("localhost", "root", "", "sis");
      // Check connection
      if ($conn->connect_error) 
      {
        die("Connection failed: " . $conn->connect_error);
      } 
      $sql = "SELECT * FROM result WHERE CourseID = '$c_id' ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) 
      {
          // output data of each row
          while($row = $result->fetch_assoc()) 
          { ?>
              <header class="w3-container" style="padding-top:22px">
              <h5><b>Course Id: <?php $code = $row['CourseID'];
              echo $code; ?></b></h5>
              </header>
          <?php
        }
      } 
      else 
      { 
        echo ""; 
      }
      $conn->close();
  ?>

    <table class="w3-table">
      <tr>
        <th nowrap="true">Information</th>
        <th nowrap="true">Files</th>
      </tr>

       <?php
      $c_id = $_REQUEST["id"];
      $conn = mysqli_connect("localhost", "root", "", "sis");
      // Check connection
      if ($conn->connect_error) 
      {
        die("Connection failed: " . $conn->connect_error);
      } 
      $sql = "SELECT * FROM course WHERE CourseID = '$c_id' ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) 
      {
          // output data of each row
          while($row = mysqli_fetch_array($result)) 
          {?>
            <tr>
              <td nowrap="true">
                <label><strong>Course Id: &nbsp;</strong></label><?php echo $row['CourseID']; ?><br>
                <label><strong>Course Name: &nbsp;</strong></label><?php echo $row['Name']; ?><br>
                <label><strong>No. of Students: &nbsp;</strong></label><?php echo $row['No_of_Students']; ?><br>
                <label><strong>Semester: &nbsp;</strong></label><?php echo $row['Semester']; ?><br>
                <label><strong>Programme Id: &nbsp;</strong></label><?php echo $row['ProgramID']; ?>
              </td>
            </tr>
          <?php   
          }
      } 
      else 
      { 
        echo ""; 
      }
      $conn->close();
  ?>

    </table>

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
