<?php 
	include ('../../../config/dbcon.php');
	if(isset($_POST['Remove_account'])) {
		$type = $_POST['user_type'];
		$username = $_POST['Username'];
		if ($type == "Student") {
			$sql = "DELETE FROM student WHERE RegNo='$username'";
			mysqli_query($conn,$sql);
		}
		elseif ($type == "Staff") {
			$sql = "DELETE FROM staff WHERE Staff_ID='$username'";
			mysqli_query($conn,$sql);
		}

	}
	mysqli_close($conn);
	header("location: ../create_accounts.php");
?>