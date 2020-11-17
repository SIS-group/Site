<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../css/image_view.css">
	<link rel="stylesheet" type="text/css" href="../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">

			.container
		{
			background-color: white;
			text-align: center;
			padding: 5px 5px;
			border-radius: 10px;
			margin-top: 15px;
			width:95%;
			box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
		}
		.grid-container 
		{
			display: grid;
			grid-template-columns: auto auto;
			grid-gap: 20px;
			padding: 20px;
		}

		.grid-container > div 
		{
			background-color: white;
			text-align: left;
			padding: 0px 20px;
			border-radius: 10px;
			box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
		}
		select 
		{
			border: 1px solid black;
			border-radius: 10px;
			padding: 7px 20px;
		}
		p
		{
			font-size:130%;
			text-align: center;
		}

		.item2 
		{
			grid-column: 1 / 2;
			grid-row: 1/2;
		}



		body{font-family: 'Raleway', sans-serif;margin: 0;}
		table{ border-radius: 10px ;background-color: white; padding: 4% 4%;}
		td{ padding: 10px 10px }
		input[type="submit"]:hover{background-color: green}
		th{background-color: #002b80;color: white;border-radius: 10px ;}
	</style>
	<script src="../js/showimage.js"></script>
</head>
<body>
	<div class="sidebar">

		<center><img src="../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
		<a class="active" href="Director/yearviceStudentpersonal2.php">Student Personal Details</a>
		
  		<a href="Director/paymentdetails2.php">Student Payment Details</a>
  		<a href="Director/coursestatprogram2.php">Course Statistic</a>
  		<a href="Director/yearvice2.php">Student results and grades</a>
  		
  		<a href="Director/accountS2.php"> Account Settings</a>
  		<a href="../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>

	</div>

			<div class="content" align="center">
		<form method="post" action="Director/resultandgrades.php">
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
				<img src="Director/img/wavesvibes.jpg" style="width:70%; height:70%;">
			</div>
			<div>
				<p>Computer Applications</p>
				<img src="Director/img/computerapp.png" style="width:60%; height:70%;" align="center">
			</div>
		</div>
		<div class="grid-container">
			<div>
				<p>Analogue & Digital Electronics - I</p>
				<img src="Director/img/result.jpg" style="width:70%; height:70%;">
			</div>
			<div>
				<p>Electromagnetic Theory</p>
				<img src="Director/img/pie_chart.png" style="width:60%; height:70%;" align="center">
			</div>
		</div>
	</div>





    <ul>
     	<li style="margin-right: 270px" class="dropdown">
			<img src="./Assistant_bursar/Profile_photo/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
			<div class="dropdown-content">
      			<a href="Director/accountS2.php">Setting</a>
      			<a href="../login/logout.php">Log out</a>
    		</div>
		</li>
     	<li style="margin: 25px 20px"><?php echo "Director" ?></li>
    	
    	<li class="dropdown"> 
        	<img src="../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
        	<div class="dropdown-content1">
            	<p>notifications are shown here</p>
        	</div>
      	</li>
    </ul>

	
</body>
</html>

