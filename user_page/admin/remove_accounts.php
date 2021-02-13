<!DOCTYPE html>
<html>
<head>
	<title>Remove Accounts</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{border-radius: 30px ;background-color: white; padding: 4% 4%;width: 50%}
		td{padding: 10px 5px; text-align: center;}
		input[type=submit]:hover{background-color: red}
		body{font-family: 'Raleway', sans-serif;}
		th{background-color: #002b80;color: white;border-radius: 10px ;}
	</style>
</head>
<body>
	<div class="sidebar">
		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
      		<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
      	</center>
  		<a href="../Admin.php">Dashboard</a>
  		<a class="active" href=" ./manage_accounts.php ">Manage User Accounts</a>
  		<a href="./prog_manage.php">Program Managment</a>
  		<a href="./course_manage.php">Course Managment</a>
  		<a href="./broadcast.php">Broardcast Notifications</a>
  		<a href="../../login/logout.php" style="all:unset ;"><button style="margin-top: 40%;margin-left: 20%" id="logout">Log out</button></a>
	</div>

	<ul> 
    <li style="margin-right: 275px" class="dropdown">
      <img src="../../icons/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
      <div class="dropdown-content">
            <a href="./account_setting.php">Setting</a>
            <a href="../../login/logout.php">Log out</a>
        </div>
    </li>
      <li style="margin: 25px 20px">Welcome , Admin</li>
  	</ul>
	
	<div class="content" align="center">

		<form action="./config/remove_acc.php" method="post">
			<table align="center">
				<tr>
					<th colspan="2">
						<h1>Remove User Account</h1>
					</th>
				</tr>
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