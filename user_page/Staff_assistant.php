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
		button:hover{background-color: green}
		#reject:hover{background-color: red}
		input[type=submit]{margin-left: 30px}
		body{font-family: 'Raleway', sans-serif;}
		h2{background-color: #4B0082;color: white;padding: 20px 20px;margin: 1% 14%;border-radius: 10px}
		#print{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			margin: 50px 300px;
			background-color: white;
			border-radius: 10px;
			padding: 20px 50px
		}
	</style>
	<script src="../js/showimage.js"></script>
</head>
<body>
	<div class="sidebar">

		<center><img src="../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
		<a class="active" href="./ .php">Print Documents</a>
  		<a href="./Staff_assistant/account_setting.php">Account setting</a>
  		<center><a href="../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;">Log out</button></a></center>

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
    	
    	<li class="dropdown"> 
        	<img src="../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
        	<div class="dropdown-content1">
            	<p>notifications are shown here</p>
        	</div>
      	</li>
    </ul>

	<div class="content">

		<div id="print"><center>
			<h2>Print Documents</h2>

			<table>
			Select document type<br><br>
				<select name="doc_type" style="padding: 10px 10px;border-radius: 25px">
					<option>Program list</option>
					<option>Course list</option>
					<option>Student list</option>
				</select><br><br>
			<button onclick="printfun()">Print this page</button>
			</table>
		</center></div>
		
		
	</div>
<script type="text/javascript">
	function printfun() {
		alert("awa");
		$("#print").printElement();
	}
</script>
</body>
</html>

