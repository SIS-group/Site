<!DOCTYPE html>
<html>
<head>
	<title>Account Setting</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

	<style type="text/css">
		table{ border-radius: 10px ;background-color: white; padding: 20px 20px;}
		td{ padding: 10px 10px }
		body{font-family: 'Raleway', sans-serif;margin: 0;}
		input[type="submit"]:hover{background-color: green}
		th{background-color: #4B0082;color: white;border-radius: 10px ;}
	</style>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">
	function check_PassMatch() {
    	var password = $("#newpass").val();
    	var confirmPassword = $("#confirmpass").val();

    	if (password != confirmPassword)
        	$("#divCheckPasswordMatch").html("Passwords do not match!");
    	else
        	$("#divCheckPasswordMatch").html(" ");
	}
	</script>
</head>
<body>

	<div class="sidebar">
		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
		<a href="../student.php">Home</a>
		<a href="./results.php">Results & Grades</a>
  		<a href="./Medical.php">Medical Submission</a>
  		<a href="./course_reg.php">Course Registration</a>
  		<a href="./payment.php">Payment Details</a>
  		<a href="../../login/logout.php" target="_self" style="all:unset ;"><button style="margin-top: 20%;margin-left: 25%" id="logout">Log out</button></a>
	</div>

	<?php include("./config/get_name.php") ?>

	<ul>
     	<li style="margin-right: 258px" class="dropdown">
			<img src="./Profile_photo/<?php echo $Userpic ?>" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
			<div class="dropdown-content">
      			<a href="Account_Setting.php">Setting</a>
      			<a href="../../login/logout.php">Log out</a>
    		</div>
		</li>
     	<li style="margin: 25px 20px"><?php echo $UserName; ?></li>
    	
    	<li class="dropdown"> 
        	<img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
        	<div class="dropdown-content1">
            	<p>notifications are shown here</p>
        	</div>
      	</li>
    </ul>
		

	<div class="content">

		
		<table align="center">
				<tr>
					<th colspan="2">
						<h1 align="center">Account Setting</h1>
					</th>
				</tr>
				<tr><td>                        </td></tr>

				<form action="./config/setting.php" method="post" enctype="multipart/form-data">
				<tr >
					<td colspan="2" style="border: 1px solid black;border-radius: 10px">
					Change Profile picture
					<input type="file" name="profile_pic" style="padding-left:50px"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="change_pro_pic" value="Save"></td>
				</tr>
				</form>


				<form >
				<tr>
					<td>Current Password</td>
					<td><input type="Password" name="Current_Pass" id="currentpass" required></td>
				</tr>
				<tr>
					<td>New Password</td>
					<td><input type="Password" name="Password" id="newpass" required ></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="Password" name="Conf_Password" id="confirmpass" onkeyup="check_PassMatch();" required ></td>
				</tr>
				<tr style="color: red"><i>
					<td colspan="2" id="divCheckPasswordMatch"></td>
				</i></tr>
				<tr >
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
                <td style="color: green" colspan="2"><i>
                	<?php
                    	if(isset($_SESSION["success"])){
                        	$success = $_SESSION["success"];
                        	echo "<span>$success</span>";
                    	}
                	?> 
				</i></td>
				</tr>

				<tr>
					<td colspan="2">
						<button id="Pass_change">Save Password</button>
					</td>
				</tr>
				</form>
			</table>
		</form>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	jQuery(function(){
		$(document).on('click','#Pass_change', function(e){
			$("#Pass_change").attr("disabled", "disabled");
			var Curr_pass = $('#currentpass').val();
			var Confirm_pass = $('#confirmpass').val();

			if(Curr_pass!="" && Confirm_pass!=""){
				swal({
					title: "Confirm?",
					text: "New password will be saved",
					icon: 'warning',
					buttons: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						$.ajax({
							url: "./config/setting.php" ,
							type: "POST",
							data: {
								Curr_pass:Curr_pass,
								Confirm_pass:Confirm_pass
							},
							cache: false,
							dataType: "json"
							
						});
						
					}
					location.reload()
				});

			}
		});
	});

	
</script>
<?php
    unset($_SESSION["error"]);
    unset($_SESSION["success"]);
?>
</body>
</html>
