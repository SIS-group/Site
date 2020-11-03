
<!DOCTYPE html>
<html>
<head>
	<title>Course Registration</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
    	table{background-color: white; padding: 10px 10px; border-radius: 10px ;margin-bottom: 5%;width: 80%}
    	th, td {padding: 10px;border-bottom: 1px solid #ddd;}
    	body{font-family: 'Raleway', sans-serif;}
    	tr:hover {background-color: #f2f2f2;}
  	</style>
</head>
<body>
	<div class="sidebar">
		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
		<a href="../student.php">Home</a>
		<a href="./results.php">Results & Grades</a>
  		<a href="./Medical.php">Medical Submission</a>
  		<a class="active" href="./course_reg.php">Course Registration</a>
  		<a href="./payment.php">Payment Details</a>
  		<a href="#contact">Notifications</a>
  		<a href="Account_Setting.php">Account setting</a>
  		<a href="../../login/logout.php" target="_self" style="all:unset ;"><button style="margin-top: 20%;margin-left: 25%">Log out</button></a>
	</div>

	<?php include("./config/get_name.php") ?>

	<ul>
      <li style="margin-right: 250px"><img src="./Profile_photo/user.jpg" style="width: 60px;height: 60px;border-radius: 50%;"></li>
      <li style="margin: 25px 10px"><?php echo $UserName; ?></li>
    </ul>

	<div class="content">
		<table align="center">
		<?php
      		include ("./config/course_regi.php");
      		
      		if (mysqli_num_rows($result2) > 0) {

      			echo "<tr style='background-color: #002b80;color: white'>
							<th><h3>Course ID</h3></th>
							<th><h3>Name</h3></th>
							<th><h3>No. of Credits</h3></th>
							<th></th>
						</tr>";
        
        		//$stat1 = $stat2 = $stat3 = $stat4 = $stat5 = $stat6 = $stat7 = $stat8 = 0;
        		// output data of each row
        		while($row2 = mysqli_fetch_assoc($result2)) { 
        			echo "<tr>
							<td>".$row2["CourseID"]."</td>
							<td>".$row2["Name"]."</td>
							<td align='center'>".$row2["Credits"]."</td>
							<td>
							<form action='.php' method='post'>
							<input type='submit' name='verify' value='Register'>
							</form>
							</td>
						</tr>";
        		}
        	}

      	?>
      	</table>
	</div>
</body>
</html>