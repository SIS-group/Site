<?php 
	include ('./config/setting.php');
?>
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
	</style>
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

		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
		<a href="../staff_assistant.php">Print Documents</a>
		<a href=" ">Enter index numbers</a>
  		<a class="active" href=" ">Account setting</a>
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
    	<li> 
  			<img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top: 15px">
  		</li>
    </ul>

	<div class="content">
		
		<form action="" method="post">
			<table align="center">
				<tr>
					<th colspan="2">
						<h1 align="center">Account Setting</h1>
					</th>
				</tr>
				<tr>
					<td>Profile picture</td>
					<td><input type="file" name="profile_pic"></td>
				</tr>
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