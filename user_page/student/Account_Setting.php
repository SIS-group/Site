
<!DOCTYPE html>
<html>
<head>
	<title>Account Setting</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{ border-radius: 10px ;background-color: white; padding: 5% 5%;margin-top: 5%}
		td{ padding: 10px 10px }
		body{font-family: 'Raleway', sans-serif;}
		input[type="submit"]:hover{background-color: green}
	</style>
</head>
<body>
	<div class="sidebar">
		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" ></center>
		<a href="../student.php">Results & Grades</a>
  		<a href="./Medical.php">Medical Submission</a>
  		<a href="./course_reg.php">Course Registration</a>
  		<a href="./payment.php">Payment Details</a>
  		<a href="#contact">Notifications</a>
  		<a class="active" href="Account_Setting.php">Account setting</a>
  		<a href="http://localhost/SIS/" target="_self" style="all:unset ;"><button style="margin-top: 20%;margin-left: 25%">Log out</button></a>
	</div>

	<div class="content">
		<h1 align="center">Account Setting</h1>
		<form action="" method="post">
			<table align="center">
				<tr>
					<td>Change Username</td>
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