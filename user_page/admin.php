<?php 
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welocme Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		.sidebar a {
  			display: block;
  			color: black;
  			padding: 15%;
  			text-decoration: none;
  			text-align: center;
		}
    .split{width: 50%;position: fixed;z-index: 1;}
    .left{background-color: green;left: 10;}
    .right{background-color: white;right: 0;left:10;}
    body{font-family: 'Raleway', sans-serif;}

    
	</style>
</head>
<body>
	<div class="sidebar">
  		<a class="active" href="">Analyze System Performance</a>
  		<a href=" ./Admin/manage_accounts.php ">Manage User Accounts</a>
  		<a href=" ">Troubleshoot</a>
  		<a href="./admin/account_setting.php">Account setting</a>
  		<a href="../login/logout.php" style="all:unset ; "><button style="margin-top: 20%;margin-left: 25%">Log out</button></a>
	</div>

	<div class="content">
    <div class="split left">
      <h2>System performance</h2>
    </div>
    <div class="split right">
      <h2>Disk usage</h2>
    </div><br>

  		
	</div>

    <h2><a href = "../login/logout.php">Sign Out</a></h2>
</body>
</html>