<!DOCTYPE html>
<html>
<head>
	<title>Manage User Accounts</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		a{color: white; }
		#button1,#button2{padding: 20px 20px;font-size: 200%; margin: 25% 5%}
		#button1:hover{background-color: green;}
		#button2:hover{background-color: red;}
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