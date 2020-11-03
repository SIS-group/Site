<!DOCTYPE html>
<html>
<head>
	<title>Account Setting</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

	<style type="text/css">
		table{ border-radius: 10px ;background-color: white; padding: 4% 4%;}
		td{ padding: 10px 10px }
		body{font-family: 'Raleway', sans-serif;margin: 0;}
		input[type="submit"]:hover{background-color: green}
		th{background-color: #002b80;color: white;border-radius: 10px ;}
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
  		<a href="./course_reg.php">Course Registration</a>
  		<a href="./payment.php">Payment Details</a>
  		<a href="#contact">Notifications</a>
  		<a class="active" href="Account_Setting.php">Account setting</a>
  		<a href="../../login/logout.php" target="_self" style="all:unset ;"><button style="margin-top: 20%;margin-left: 25%">Log out</button></a>
	</div>

	<?php include("./config/get_name.php") ?>

	<ul>
      <li style="margin-right: 250px"><img src="./Profile_photo/user.jpg" style="width: 60px;height: 60px;border-radius: 50%;"></li>
      <li style="margin: 25px 10px"><?php echo $UserName; ?></li>
    </ul>
		

	<div class="content">

		
		<form action="" method="post">
			<table align="center">
				<tr>
					<th colspan="2">
						<h1>Account Setting</h1>
					</th>
				</tr>
				<tr>
					<td>Current Password</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>New Password</td>
					<td><input type="Password" name="Password" id="newpass"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="Password" name="Conf_Password" id="confirmpass" onkeyup="check_PassMatch();"></td>
				</tr>
				<tr style="color: red"><i>
					<td colspan="2" id="divCheckPasswordMatch"></td>
				</i></tr>
				<tr>
					<td colspan="2"><input type="submit" name="changes" value="Save"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>