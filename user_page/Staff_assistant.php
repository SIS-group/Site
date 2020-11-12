<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../css/image_view.css">
	<link rel="stylesheet" type="text/css" href="../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{background-color: white; padding: 10px 10px; border-radius: 10px ;}
		th, td {padding: 10px}
		tr:hover {background-color: #f2f2f2;border-bottom: 1px solid #ddd;}
		button:hover{background-color: grey}
		#reject:hover{background-color: red}
		input[type=submit]{margin-left: 30px}
		body{font-family: 'Raleway', sans-serif;}
		h1{background-color: #002b80;color: white;padding: 20px 20px;margin: 1% 14%;border-radius: 10px}
	</style>
	<script src="../js/showimage.js"></script>
</head>
<body>
	<div class="sidebar">

		<center><img src="../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
		<a class="active" href="./ .php">Print Documents</a>
		<a href=" ">Enter index numbers</a>
  		<a href="./Staff_assistant/account_setting.php">Account setting</a>
  		<a href="../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>

	</div>

    <ul>
     	<li style="margin-right: 270px" class="dropdown">
			<img src="./Staff_assistant/Profile_photo/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
			<div class="dropdown-content">
      			<a href="./Staff_assistant/account_setting.php">Setting</a>
      			<a href="../login/logout.php">Log out</a>
    		</div>
		</li>
     	<li style="margin: 25px 20px"><?php echo "Welcome , Staff Assistant" ?></li>
    	<li> 
  			<img src="../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top: 15px">
  		</li>
    </ul>

	<div class="content">

		
	</div>
</body>
</html>

