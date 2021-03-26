<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Account setting</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{ border-radius: 30px ;background-color: white; padding: 40px 40px;margin-bottom: 20px}
		td{ padding: 10px 10px }
		
		input[type="submit"]:hover{background-color: green}
		body{font-family: 'Raleway', sans-serif;}
		th{background-color: #4B0082;color: white;border-radius: 10px ;margin-bottom: 50px}
		h1{margin-bottom: 20px}
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
		<a href="../Assistant_bursar.php">Annual fees verification</a>
		<a href="./Reg_fee_verify.php">Application fees verification</a>
  		<a class="active" href="./account_setting.php">Account setting</a>
  		<a href="../../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>

	</div>

	<ul>
		<?php
    		include("./config/get_user_pic.php");
    	?>
     	<li style="margin-right: 270px" class="dropdown">
			<img src="./Profile_photo/<?php echo $row['Profile_picture'] ;?>" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
			<div class="dropdown-content">
      			<a href="./account_setting.php">Setting</a>
      			<a href="../../login/logout.php">Log out</a>
    		</div>
		</li>
     	<li style="margin: 25px 20px"><?php echo "Assistant bursar" ?></li>
    	
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
</body>
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
</html>

<?php
    unset($_SESSION["error"]);
    unset($_SESSION["success"]);
?>
