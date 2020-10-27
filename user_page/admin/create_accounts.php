<?php
	include ("./config/create_acc.php");
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Staff User Account</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{ border-radius: 30px ;background-color: white; padding: 7% 7%;}
		td{padding: 5px 5px}
		input[type=submit]:hover{background-color: green}
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
  		<a href="../../login/logout.php" style="all:unset ; "><button style="margin-top: 40%;margin-left: 25%">Log out</button></a>
	</div>
	
	<div class="content" align="center">
		<h1>Enter Details</h1><br>

		<form method="post" action=" ">
			<table align="center">
				<tr>
					<td>
						<label for="role">User Role</label>
					</td>
					<td>
			<select name="role">
 				<option value="Director">Director</option>
  				<option value="Deputy Director Examination">Deputy Director Examination</option>
  				<option value="Program Coordinator">Program Coordinator</option>
  				<option value="Examiner">Examiner</option>
  				<option value="Assistant Bursar">Assistant Bursar</option>
  				<option value="Assistant Registrar">Assistant Registrar</option>
  				<option value="Interview Commitee Member">Interview Commitee Member</option>
  				<option value="Staff assistant">Staff Assistant</option>
  			</select>
  				</td>
  				</tr>
  				<tr>
  					<td>
  						Staff ID
  					</td>
  					<td>
  						<input type="text" name="Staff_id">
  					</td>
  				</tr>
  				<tr>
  					<td>
  						Name
  					</td>
  					<td>
  						<input type="text" name="Name">
  					</td>
  				</tr>
  				<tr>
  					<td>
  						Email
  					</td>
  					<td>
  						<input type="text" name="Email">
  					</td>
  				</tr>
  				<tr>
  					<td>
  						Password
  					</td>
  					<td>
  						<input type="text" name="Password">
  					</td>
  				</tr>
  				<tr>
  					<td colspan="2">
  						<input type="submit" name="create_account" value="Create Account">
  					</td>
  				</tr>
  			</table>
		</form>
	</div>

</body>
</html>