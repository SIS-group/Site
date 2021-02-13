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
		.course{
    		box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    		margin: 10px 20px;
    		border-radius: 10px;
    		background-color: white;
    		padding: 10px 10px;
  		}

  		table{
  			box-shadow: unset;
  			border-radius: 10px;
  			border: 1px solid #656565;
  			padding: 20px 20px;

  		}
  		td,th{
  			padding: 10px;
  			border-bottom: 1px solid #ddd;
  		}
  		#selection{
  			margin: 10px 20px;
  		}
  		#Insert{background-color: #002b80;color: white;border-radius: 10px ;padding: 20px 20px;width: 80%}
  		#Edit{background-color: #002b80;color: white;border-radius: 10px ;padding: 20px 20px;}
	</style>
</head>
<body>
	<div class="sidebar">
		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
      	<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
      	</center>
  		<a href="../Admin.php">Dashboard</a>
  		<a href=" ./manage_accounts.php ">Manage User Accounts</a>
  		<a href="./prog_manage.php">Program Managment</a>
  		<a class="active" href=" ">Course Managment</a>
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
		<div class="course">
			<br>
			<label for="cars" id="selection" style="padding-left: 60px;"><b>Select Program</b></label>

			<select id="cars">
  				<option value="1020">BSc (External) in Electronics and Automation Technologies</option>
  				<option value="1021">BSc (External) in Financial Engineering</option>
			</select>
			<br><br>
			<table style="margin-left: 50px">

				<form>
					<tr>
						<th colspan="2" id="Insert">Insert New Course</th>
					</tr>
					<tr>
						<td>Enter Course ID</td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td>Enter Course Name</td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td>Year</td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td>Semester</td>
						<td><input type="text" name=""></td>
					</tr>
					<tr>
						<td>Course type</td>
						<td>
							<input type="radio" name="type" id="Compulsory">
							<label for="Compulsory">Compulsory</label>

							<input type="radio" name="type" id="optional">
							<label for="optional">Optional</label>
						</td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="" value="Submit"></td>
					</tr>
				</form>
			</table><br>

			<table align="center">
				<tr>
					<th colspan="7" id="Edit">Edit Courses</th>
				</tr>
				<tr>
					<th>Course ID</th>
					<th>Course Name</th>
					<th>Year</th>
					<th>Semester</th>
					<th>Type</th>
					<th></th>
					<th></th>
				</tr>
				<tr>
					<td>EA1001</td>
					<td>Waves, Vibrations & AC Theory</td>
					<td>1</td>
					<td>1</td>
					<td>Compulsory</td>
					<td><button>Edit</button></td>
					<td><button>Remove</button></td>
				</tr>
				<tr>
					<td>EA1002</td>
					<td>Analogue & Digital Electronics - I</td>
					<td>1</td>
					<td>2</td>
					<td>Compulsory</td>
					<td><button>Edit</button></td>
					<td><button>Remove</button></td>
				</tr>
				<tr>
					<td>EA1003</td>
					<td>Electromagnetic Theory</td>
					<td>1</td>
					<td>1</td>
					<td>Compulsory</td>
					<td><button>Edit</button></td>
					<td><button>Remove</button></td>
				</tr>
				<tr>
					<td>EA1004</td>
					<td>Introduction to Computer Programming</td>
					<td>1</td>
					<td>1</td>
					<td>Compulsory</td>
					<td><button>Edit</button></td>
					<td><button>Remove</button></td>
				</tr>
				<tr>
					<td>EA1005</td>
					<td>Computer Applications</td>
					<td>1</td>
					<td>1</td>
					<td>Compulsory</td>
					<td><button>Edit</button></td>
					<td><button>Remove</button></td>
				</tr>
				<tr>
					<td>EA1006</td>
					<td>Computer Architecture - I</td>
					<td>1</td>
					<td>2</td>
					<td>Compulsory</td>
					<td><button>Edit</button></td>
					<td><button>Remove</button></td>
				</tr>
				<tr>
					<td>EA1007</td>
					<td>Electronic Circuit Simulations</td>
					<td>1</td>
					<td>2</td>
					<td>Compulsory</td>
					<td><button>Edit</button></td>
					<td><button>Remove</button></td>
				</tr>
				<tr>
					<td>EA1008</td>
					<td>Object Oriented Programming</td>
					<td>1</td>
					<td>2</td>
					<td>Compulsory</td>
					<td><button>Edit</button></td>
					<td><button>Remove</button></td>
				</tr>
				<tr>
					<td>EA1009</td>
					<td>Calculus</td>
					<td>1</td>
					<td>1</td>
					<td>Compulsory</td>
					<td><button>Edit</button></td>
					<td><button>Remove</button></td>
				</tr>
				<tr>
					<td>EA1010</td>
					<td>Mathematical Methods – I</td>
					<td>1</td>
					<td>1</td>
					<td>Compulsory</td>
					<td><button>Edit</button></td>
					<td><button>Remove</button></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>