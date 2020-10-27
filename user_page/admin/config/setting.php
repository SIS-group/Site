<?php 
	include ('../../config/dbcon.php');
	include ('../../config/session.php');

	if (isset($_POST['changes'])&& !empty($_POST['username']) && !empty($_POST['Conf_Password'])) {
		$new_username = $_POST['username'];
		$new_password = $_POST['Conf_Password'];
		$active_user = $user;
		$sql = "UPDATE admin SET Username='$new_username',Password='$new_password' WHERE Username='$active_user'";
		mysqli_query($conn,$sql);
		
	}
	elseif (isset($_POST['changes']) && empty($_POST['username'])) {
		$new_password = $_POST['Conf_Password'];
		$active_user = $user;
		$sql = "UPDATE admin SET Password='$new_password' WHERE Username='$active_user'";
		mysqli_query($conn,$sql);
		
	}
	elseif (isset($_POST['changes']) && empty($_POST['Conf_Password'])) {
		$new_username = $_POST['username'];
		$active_user = $user;
		$sql = "UPDATE admin SET Username='$new_username' WHERE Username='$active_user'";
		mysqli_query($conn,$sql);

	}
?>