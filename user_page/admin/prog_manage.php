<!DOCTYPE html>
<html>
<head>
	<title>Manage User Accounts</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		body{font-family: 'Raleway', sans-serif;}
		.edit{
    		box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    		margin: 10px 20px;
    		border-radius: 10px;
    		background-color: white;
    		padding: 10px 10px;
  		}
  		.edit label,.insert label{
    		padding: 50px 20px;
  		}
  		.edit table{
  			border-radius: 10px;
  			box-shadow:unset;
  			margin-top: 20px;
  			margin-bottom: 20px;
  			border: 1px solid #656565;
  		}
  		.insert{
  			box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
  			width: 60%;
  			margin: 10px 20px;
  			background-color: white;
  			border-radius: 10px;
  			padding: 20px 20px; 	
  		}
  		
  		.insert table{
  			border-radius: 10px;
  			box-shadow:unset;
  			
  			margin-top: 20px;
  			border: 1px solid #656565;
  			padding: 20px 20px;
  		}
  		th, td {
  			padding: 10px;
  			border-bottom: 1px solid #ddd;
		}
		.insert input[type="text"]{
			width: 80%;
		}
		button{
			border-radius: 25px;
		}
		tr:hover {background-color: #f5f5f5;}
		#sub:hover {background-color: unset;}
		#subdata{border-bottom: unset;}
		h2{background-color: #002b80;color: white;border-radius: 10px ;padding: 20px 20px;width: 50%}
	</style>
</head>
<body>
	<div class="sidebar">
		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
      	<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
      	</center>
  		<a href="../Admin.php">Dashboard</a>
  		<a href=" ./manage_accounts.php ">Manage User Accounts</a>
  		<a class="active" href=" ">Program Managment</a>
  		<a href="./course_manage.php">Course Managment</a>
  		<a href="./broadcast.php">Broardcast Notifications</a>
  		<a href="../../login/logout.php" style="all:unset ; "><button style="margin-top: 40%;margin-left: 20%" id="logout">Log out</button></a>
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

		<div class="insert" >
			<center><h2 align="center">Insert New Programs</h2></center> 
			
			<table align="center">
				<form>
					<tr>
						<td>Program ID</td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td>Program Name</td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td>Program Coordrinator ID</td>
						<td><input type="text" name=""></td>
					</tr>
					<tr id="sub">
						<td colspan="2" id="subdata"><input type="submit" name="" value="Submit" ></td>
					</tr>

				</form>
			</table>	
		</div>
		
		<div class="edit">
			
			<center><h2 align="center">Edit Current Programs</h2></center>
			<table align="center">
				<tr style="background-color: grey">
					<th>Program ID</th>
					<th>Name</th>
					<th>Program Coordinator</th>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<td>1020</td>
					<td>BSc (External) in Electronics and Automation Technologies</td>
					<td>Mr. H.R.D. Perera</td>
					<td><button>Edit</button></td>
					<td><button>Remove</button></td>
				</tr>
				<tr>
					<td>1021</td>
					<td>BSc (External) in Financial Engineering</td>
					<td>Dr. K.L. Damayanthi</td>
					<td><button>Edit</button></td>
					<td><button>Remove</button></td>
				</tr>
			</table>
			
		</div>
  		
	</div>
</body>
</html>