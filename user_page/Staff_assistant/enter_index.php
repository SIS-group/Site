<!DOCTYPE html>
<html>
<head>
	<title>Account setting</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{ border-radius: 30px ;background-color: white; padding: 50px 50px;}
		td{ padding: 10px 10px }
		
		input[type="submit"]:hover{background-color: green}
		body{font-family: 'Raleway', sans-serif;}
		th{background-color: #002b80;color: white;border-radius: 10px ;margin-bottom: 50px}
		#index{
			background-color: white;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			margin: 100px 300px;
			padding: 50px 20px;
			border-radius: 10px
		}
	</style>
	
</head>
<body>
	<div class="sidebar">

		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
		<a href="../staff_assistant.php">Print Documents</a>
		<a class="active" href=" ">Registration & Index numbers </a>
  		<a href="./account_setting.php">Account setting</a>
  		<a href="../../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>

	</div>

	<ul>
     	<li style="margin-right: 270px" class="dropdown">
			<img src="./Profile_photo/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
			<div class="dropdown-content">
      			<a href="./account_setting.php">Setting</a>
      			<a href="../../login/logout.php">Log out</a>
    		</div>
		</li>
     	<li style="margin: 25px 20px"><?php echo "Welcome , Staff Assistant" ?></li>
    	
    	<li class="dropdown"> 
        	<img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
        	<div class="dropdown-content1">
            	<p>notifications are shown here</p>
        	</div>
      	</li>
    </ul>

	<div class="content">
		<?php 
			include ("../../config/dbcon.php");
			$sql = "SELECT COUNT(Name) FROM student WHERE IndexNo IS NULL";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$num_of_students = $row["COUNT(Name)"];

			$sql1 = "SELECT COUNT(NIC_No) FROM student_reg_payments WHERE Verified_status='Verified' ";
			$result1 = mysqli_query($conn, $sql1);
			$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
			$num_of_students_pay = $row1['COUNT(NIC_No)'];


		?>

		<div id="index" align="center"> 
			Number of Students applied - <?php echo $num_of_students; ?><br><br>
			Application fees verified students - <?php echo $num_of_students_pay; ?><br><br>
			<button>Process Registration & Index numbers</button>
		</div>
		

	</div>
</body>
</html>