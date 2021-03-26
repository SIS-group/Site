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
		th{background-color: #4B0082;color: white;border-radius: 10px ;}
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
  		<a href="../../login/logout.php" style="all:unset ;"><button style="margin-top: 20%;margin-left: 20%" id="logout">Log out</button></a>
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

		<form action=" " method="post" id="myform">
			<table align="center">
				<tr>
					<th colspan="2">
						<h1>Remove User Account</h1>
					</th>
				</tr>
				<tr>
					<td>
						<input type="radio" name="user_type" value="Staff" id="Staff">
						<label for="Staff">Staff</label>
					</td>
					<td>
						<input type="radio" name="user_type" value="Student" id="Student">
						<label for="Student">Student</label>
					</td>
				</tr>
				<tr>
					<td>Enter Username</td>
					<td><input type="text" name="Username" required></td>
				</tr>
				<tr>
				<td style="color: red" colspan="2"><i>
					<?php
                    	if(isset($_SESSION["error"])){
                        	$error = $_SESSION["error"];
                        	echo "<span>$error</span>";
                    	}
                	?> 
				</i></td>
				</tr>
				<tr>
					<td colspan="2"><button id="but_upload">Remove</button></td>
				</tr>
			</table>
		</form>

	</div>
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
			text: "Account will be Deactivated",
			icon: 'warning',
			buttons: true,
			})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
           		   url: './config/remove_acc.php',
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
</body>
</html>