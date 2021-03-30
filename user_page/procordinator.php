<?php
	session_start();
	include("../Login/dbcon.php");
?>
<!DOCTYPE html>
<html>
  <head>
<title>Program Coordinator</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
  <link rel="stylesheet" type="text/css" href="../css/css.css">
  <link rel="stylesheet" type="text/css" href="../css/top_navigation.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <style type="text/css">
    table{background-color: white; padding: 10px 10px; border-radius: 10px ;margin-bottom: 5%;width: 50%}
    th, td {padding: 15px;border-bottom: 1px solid #ddd;}
    th{background-color: #002b80;border-radius: 10px;color: white}
    tr:hover {background-color: #f2f2f2;}
    body{font-family: 'Raleway', sans-serif;}
    #sem_prog{
      background-color: white;
      width: 70%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      border-radius: 10px;
      padding: 20px 20px;
      margin-left: 13%;
    }


#progress {
    background: #333;
    border-radius: 13px;
    height: 20px;
    width: 90%;
    padding: 3px;
    margin: 20px 50px;
}

#progress:after {
    content: '';
    display: block;
    background: orange;
    width: <?php echo "30";?>%;
    height: 100%;
    border-radius: 9px;
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 20px;
  padding: 20px;
}

.grid-container > div {
  background-color: white;
  text-align: left;
  padding: 0px 20px;
  border-radius: 10px;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
}

.item2 {
  grid-column: 1 / 2;
  grid-row: 1/3;
}
  </style>
  </head>
  <body>
    <div class="sidebar">
    	<center><img src="../icons/logo.png" style="width:80px;height:80px;" >
		<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
          
      </center>
      <a  href="procordinator/pmarking.php">Paper Marking Progress</a>
    	<a href="#">Student Results & Grades</a>
  		<a href="procordinator/PD1.php">Course Statistics</a>
  		<a href="procordinator/account_Setting.php">Account Settings</a>
  		<a href="../login/logout.php" style="all:unset ; "><button style="margin-top: 20%;margin-left: 25%" id="logout">Log out</button></a>
    </div>
    
    <ul>
      <li style="margin-right: 258px" class="dropdown">
      <img src="../icons/default.png"<?php //echo $Userpic ?>" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
      <div class="dropdown-content">
            <a href="./procordinator/account_Setting.php">Setting</a>
            <a href="../login/logout.php">Log out</a>
        </div>
      </li>
	  <li style="margin: 25px 20px">Welcome , Programcordinator</li>
      <li style="margin: 25px 20px"><?php //echo $UserName; ?></li>
	  
      <li class="dropdown"> 
        <img src="../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top: 15px" class="dropbtn">
		<div class="dropdown-content1">
            	<p>notifications are shown here</p>
        	</div>
      </li>
    </ul>
    <div class="content" align="center">
		<form method="post" action="./procordinator/resultandgrades.php">
			<table style="width:95%">
				<tr>
					<th colspan="2">
						<p style="font-size:160%">Results and Grades of Students</p>
					</th>
				</tr>
				<tr style="width:90%">
					<td style="width:90%" align="center">
						<label for="program" style="font-size: 120%">Program
					</td>
					<td>
						<select name="program" style="font-size: 120%">
							<option value="1020">BSc (External) in Electronics and Automation Technologies</option>
							<option value="1021">BSc (External) in Financial Engineering</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="width:90%" align="center">
						<label for="year" style="font-size: 110%">Year
					</td>
					<td>
						<select name="year" style="font-size: 110%">
							<option value="year1">First Year</option>
							<option value="year2">Second Year</option>
							<option value="year3">Third Year</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="width:90%" align="center">
						<label for="course">Course
					</td>
					<td>
						<select name="course" style="font-size: 110%">
							<option value="EA1001">Waves, Vibrations & AC Theory</option>
							<option value="EA1002">Analogue & Digital Electronics - I</option>
							<option value="EA1003">Electromagnetic Theory</option>
							<option value="EA1004">Introduction to Computer Programming</option>
							<option value="EA1005">Computer Applications</option>
							<option value="EA1006">Computer Architecture - I</option>
							<option value="EA1007">Electronic Circuit Simulations</option>
							<option value="EA1008">Object Oriented Programming</option>
							<option value="EA1009">Calculus</option>
							<option value="EA1010">Mathematical Methods – I</option>
							<option value="EA1011">Differential Equations</option>
							<option value="EA1012">Probability and Statistics</option>
							<option value="EA1013">English for Science and Technology</option>
							<option value="EA1030">Analogue Electronic Laboratory</option>
							<option value="EA1031">Digital Electronic Laboratory</option>
							<option value="EA2001">Analogue & Digital Electronics - II</option>
							<option value="EA2002">Analogue & Digital ICs</option>
							<option value="EA2003">Sensors & Transducers and DAQ Systems</option>
							<option value="EA2004">Computer Architecture – II</option>
							<option value="EA2005">Applied Numerical Methods</option>
							<option value="EA2006">Internet Programming</option>
							<option value="EA2007">Data Communication Techniques</option>
							<option value="EA2008">Rapid Applications Development</option>
							<option value="EA2009">Computational Statistics</option>
							<option value="EA2010">Mathematical Methods – II</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<input type="submit" style="border-radius: 5px" name="search" value="Search">
					</td>
				</tr>
			</table>
		</form>
		<div class="container">
			<p style="font-size:150%;">Recently Released Results - Two Weeks</p>
		</div>
		<div class="grid-container">
			<div>
				<p>Waves, Vibrations & AC Theory</p>
				<!--<img src="./deputydirector/img/wavesvibes.jpg" style="width:70%; height:70%;">-->
				<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Grades', 'Numbers'],
  <?php

	// Database credentials
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sis2';

// Create connection and select db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get data from database
$result = $db->query("SELECT Result, count(*) as number FROM student_result WHERE CourseID = 'EA1001' GROUP BY Result");

      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['Result']."', ".$row['number']."],";
          }
      }
      ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
			</div>
			<div>
				<p>Computer Applications</p>
				<div id="piechart1"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Grades', 'Numbers'],
  <?php

	// Database credentials
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sis2';

// Create connection and select db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get data from database
$result = $db->query("SELECT Result, count(*) as number FROM student_result WHERE CourseID = 'EA1005' GROUP BY Result");

      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['Result']."', ".$row['number']."],";
          }
      }
      ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
  chart.draw(data, options);
}
</script>
			</div>
		</div>
		<div class="grid-container">
			<div>
				<p>Analogue & Digital Electronics - I</p>
				<div id="piechart2"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Grades', 'Numbers'],
  <?php

	// Database credentials
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sis2';

// Create connection and select db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get data from database
$result = $db->query("SELECT Result, count(*) as number FROM student_result WHERE CourseID = 'EA1002' GROUP BY Result");

      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['Result']."', ".$row['number']."],";
          }
      }
      ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
  chart.draw(data, options);
}
</script>
			</div>
			<div>
				<p>Electromagnetic Theory</p>
				<div id="piechart3"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Grades', 'Numbers'],
  <?php

	// Database credentials
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sis2';

// Create connection and select db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get data from database
$result = $db->query("SELECT Result, count(*) as number FROM student_result WHERE CourseID = 'EA1003' GROUP BY Result");

      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['Result']."', ".$row['number']."],";
          }
      }
      ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
  chart.draw(data, options);
}
</script>
			</div>
		</div>
	</div>

    <h2><a href = "../login/logout.php">Sign Out</a></h2>

  </body>
</html>
