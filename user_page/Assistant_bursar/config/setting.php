<?php 
	include ('../../../config/dbcon.php');
	include ('../../../config/session.php');
	$active_user = $user;

	if (isset($_POST['change_pro_pic'])) {
		$filename=$_FILES['profile_pic']['name']; //profile photo
		$filetmpname=$_FILES['profile_pic']['tmp_name'];
		$folder='../profile_photo/';
		move_uploaded_file($filetmpname, $folder.$filename);

		$sql = "UPDATE staff SET Profile_picture=? WHERE Staff_ID=? ";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ss',$filename,$active_user);
		$stmt->execute();
		$stmt->close();
		$conn->close();

		header("location:../account_setting.php");

	}

	else{
	
		$CurrentPWD = $_POST['Curr_pass'];
		$new_password = $_POST['Confirm_pass'];
		$hashedPWD = password_hash($new_password, PASSWORD_DEFAULT);

		$sql0 = "SELECT Password FROM staff WHERE Staff_ID= ? ";
		$stmt0=$conn->prepare($sql0);
		$stmt0->bind_param('s',$active_user);
		$stmt0->execute();
		$result0=$stmt0->get_result();
		$row0 = $result0->fetch_assoc();
		$pwd0=$row0["Password"];

		if(password_verify($CurrentPWD, $pwd0)) {

			$sql = "UPDATE staff SET Password=? WHERE Staff_ID=? ";
			$stmt=$conn->prepare($sql);
			$stmt->bind_param('ss',$hashedPWD,$active_user);
			$stmt->execute();
			
			if ($stmt) {
				$success = "Password saved successfully";
				$_SESSION["success"] = $success;
			}
			$stmt->close();
			$conn->close();

			//header("location:../account_setting.php");
		}

		else{
			$error = "Current Password Missmatch";
			$_SESSION["error"] = $error;
			//header("location:../account_setting.php");
		}
	
	}
	
	
?>
