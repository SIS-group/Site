<?php 
	include ('../../../config/dbcon.php');
	include ('../../../config/session.php');

	if (isset($_POST['changes'])&& !empty($_POST['username']) && !empty($_POST['Conf_Password'])) {
		$new_username = $_POST['username'];
		$new_password = $_POST['Conf_Password'];
		$hashedPWD = password_hash($new_password, PASSWORD_DEFAULT);
		$active_user = $user;
		$CurrentPWD = $_POST['Current_Pass'];

		$sql0 = "SELECT * FROM admin WHERE Username= ? ";
		$stmt0=$conn->prepare($sql0);
		$stmt0->bind_param("s",$active_user);
		$stmt0->execute();
		$result0=$stmt0->get_result();
		$row0 = $result0->fetch_assoc();
		$pwd0=$row0["Password"];

		if(password_verify($CurrentPWD, $pwd0)) {

		$sql = "UPDATE admin SET Username=?,Password=? WHERE Username=? ";
		//mysqli_query($conn,$sql);

		$stmt1=$conn->prepare($sql);
		$stmt1->bind_param('sss',$new_username,$hashedPWD,$active_user);
		$stmt1->execute();
		$stmt1->close();
		header("location:../account_setting.php");
		}
	}
	elseif (isset($_POST['changes']) && !empty($_POST['Conf_Password'])) {
		$new_password = $_POST['Conf_Password'];
		$hashedPWD = password_hash($new_password, PASSWORD_DEFAULT);
		$active_user = $user;
		$CurrentPWD = $_POST['Current_Pass'];

		$sql0 = "SELECT * FROM admin WHERE Username= ? ";
		$stmt0=$conn->prepare($sql0);
		$stmt0->bind_param("s",$active_user);
		$stmt0->execute();
		$result0=$stmt0->get_result();
		$row0 = $result0->fetch_assoc();
		$pwd0=$row0["Password"];

		if(password_verify($CurrentPWD, $pwd0)) {

		$sql = "UPDATE admin SET Password=? WHERE Username=? ";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ss',$hashedPWD,$active_user);
		$stmt->execute();
		$stmt->close();
		$conn->close();

		//mysqli_query($conn,$sql);
		header("location:../account_setting.php");
		}

		else{
			$error = "Current Password Missmatch";
			$_SESSION["error"] = $error;
			header("location:../account_setting.php");
		}
	}
	elseif (isset($_POST['changes']) && !empty($_POST['username'])) {
		$new_username = $_POST['username'];
		$active_user = $user;
		$sql = "UPDATE admin SET Username=? WHERE Username=? ";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ss',$new_username,$active_user);
		$stmt->execute();
		$stmt->close();
		$conn->close();
		header("location:../account_setting.php");

	}
?>