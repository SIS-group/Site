<?php 
	include ('./config/setting.php');
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
  		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" ></center>
		<a href="../Assistant_bursar.php">Pay slip verification</a>
  		<a href="#contact">Notifications</a>
  		<a class="active" href=" ">Account setting</a>
  		<a href="../../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>
	</div>

	<div class="content">
		<h1 align="center">Account Setting</h1>
		<form action="" method="post">
			<table align="center">
				<tr>
					<td>Current Password</td>
					<td><input type="Password" name="Curr_Password"></td>
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