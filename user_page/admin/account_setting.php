<?php 
	include ('../../config/dbcon.php');
	include ('../../config/session.php');

	if (isset($_POST['changes'])&& !empty($_POST['username']) && !empty($_POST['Conf_Password'])) {
		$new_username = $_POST['username'];
		$new_password = $_POST['Conf_Password'];
		$active_user = $user;
		$sql = "UPDATE admin SET Username='$new_username',Password='$new_password' WHERE Username='$active_user'";
		mysqli_query($conn,$sql);
		
	}
	elseif (isset($_POST['changes']) && empty($_POST['username'])) {
		$new_password = $_POST['Conf_Password'];
		$active_user = $user;
		$sql = "UPDATE admin SET Password='$new_password' WHERE Username='$active_user'";
		mysqli_query($conn,$sql);
		
	}
	elseif (isset($_POST['changes']) && empty($_POST['Conf_Password'])) {
		$new_username = $_POST['username'];
		$active_user = $user;
		$sql = "UPDATE admin SET Username='$new_username' WHERE Username='$active_user'";
		mysqli_query($conn,$sql);

	}
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Account setting</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{ border-radius: 30px ;background-color: white; padding: 7% 7%;}
		td{ padding: 10px 10px }
		.sidebar a {
  			display: block;
  			color: black;
  			padding: 15%;
  			text-decoration: none;
  			text-align: center;
		}
		input[type="submit"]:hover{background-color: green}
		body{font-family: 'Raleway', sans-serif;}
	</style>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">
	function check_PassMatch() {
    	var password = $("#newpass").val();
    	var confirmPassword = $("#confirmpass").val();

    	if (password != confirmPassword)
        	$("#divCheckPasswordMatch").html("Passwords do not match!");
    	else
        	$("#divCheckPasswordMatch").html(" ");
	}
	</script>
</head>
<body>
	<div class="sidebar">
  		<a href="../Admin.php">Analyze System Performance</a>
  		<a href=" ./manage_accounts.php ">Manage User Accounts</a>
  		<a href=" ">Troubleshoot</a>
  		<a class="active" href="./account_setting.php">Account setting</a>
  		<a href="../../login/logout.php" style="all:unset ;"><button style="margin-top: 40%;margin-left: 25%">Log out</button></a>
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