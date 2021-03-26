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
		.input_form{
			background-color: white;width: 60%;border-radius: 20px;
			box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
			padding: 20px;margin-top: 5%
		}
		input[type='date']{
			margin: 20px 20px;border-radius: 25px
		}
		h2{
  			background-color: #4B0082;color: white;border-radius: 10px ;padding: 20px 20px;width: 70%
  		}
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
  		<a href="./course_manage.php">Course Managment</a>
  		<a href="./broadcast.php">Broardcast Notifications</a>
  		<a class="active" href=" ">Manage Deadlines</a>
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

	<div class="content"><center>
		<div class="input_form">
			<h2 align="center">Manage Deadlines</h2>
			<form id="myform">
				<b>Select Deadline Type</b>
				<select id="type" name="type" style="padding: 10px;border-radius: 10px">
					<option value="New_Intake">New Intake</option>
					<option value="Level_Payment">Level Payment</option>
					<option value="Course_Reg">Course Registration</option>
				</select><br><br>
				Start Date
				<input type="Date" name="Sdate">
				End Date
				<input type="Date" name="Edate"><br><br>
				<button id="but_upload">Save</button>
			</form>
		</div>
  		
	</center></div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script >

$(document).ready(function(){

    $("#but_upload").click(function(event){
    	event.preventDefault();
    	var form = $('#myform')[0];
        var fd = new FormData(form);

        $("#but_upload").prop("disabled", true);
       	swal({
			title: "Confirm?",
			text: "Course will be inserted permanently",
			icon: 'warning',
			buttons: true,
			})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
           		   url: './config/insert_deadlines.php',
           		   type: 'POST',
          		   enctype: 'multipart/form-data',
           		   data:fd,	
           		   contentType: false,
           		   processData: false,
           		   cache: false,

           		 
           		}),
           		location.reload()
			}
			else{
				location.reload()
			}
		});
        
    });
});
</script>
</html>