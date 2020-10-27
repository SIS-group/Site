<?php 
	include ('./config/remove_acc.php');
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remove Accounts</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{border-radius: 30px ;background-color: white; padding: 7% 7%; margin-top: 10%}
		td{padding: 10px 5px; text-align: center;}
		input[type=submit]:hover{background-color: red}
		.sidebar a {
  			display: block;
  			color: black;
  			padding: 15%;
  			text-decoration: none;
  			text-align: center;
		}
		body{font-family: 'Raleway', sans-serif;}
	</style>
</head>
<body>
	<div class="sidebar">
  		<a href="../Admin.php">Analyze System Performance</a>
  		<a class="active" href=" ./manage_accounts.php ">Manage User Accounts</a>
  		<a href=" ">Troubleshoot</a>
  		<a href="./account_setting.php">Account setting</a>
  		<a href="../../login/logout.php" style="all:unset ;"><button style="margin-top: 40%;margin-left: 25%">Log out</button></a>
	</div>
	
	<div class="content" align="center">
		<h1>Remove User Account</h1>
		<form action=" " method="post">
			<table align="center">
				<tr>
					<td><input type="radio" name="user_type" value="Staff">Staff</td>
					<td><input type="radio" name="user_type" value="Student">Student</td>
				</tr>
				<tr>
					<td>Enter Username</td>
					<td><input type="text" name="Username"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="Remove_account" value="Remove User Account"></td>
				</tr>
			</table>
		</form>

	</div>

</body>
</html>