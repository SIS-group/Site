<!DOCTYPE html>
<html>
<head>
	<title>Manage User Accounts</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		a{color: white; }
		#button1,#button2{padding: 20px 20px;font-size: 200%; margin-top: 20% ;}
		#button1{margin-left: 200px}
		#button1:hover{background-color: green;}
		#button2:hover{background-color: red;}
		body{font-family: 'Raleway', sans-serif;}
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
  		<a href="./manage_deadlines.php">Manage Deadlines</a>
  		<a href="../../login/logout.php" style="all:unset ; "><button style="margin-top: 20%;margin-left: 20%" id="logout">Log out</button></a>
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

	<div class="content">
		<a href="./create_accounts.php">
			<button id="button1">
				Create User Account
			</button>
		</a>

		<a href="./remove_accounts.php">
			<button id="button2">
				Remove User Account
			</button>
		</a>
  		
	</div>
</body>
</html>