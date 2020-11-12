<?php 
	include ('../../../config/dbcon.php');
	if(isset($_POST['create_account'])) {
		$role = $_POST['role'];
		$Staff_id = $_POST['Staff_id'];
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$password = $_POST['Password'];
	}

	$sql = "INSERT INTO staff(Staff_ID,Name,Role,Email,Password) VALUES('$Staff_id','$name','$role','$email','$password')";
	mysqli_query($conn,$sql);

	mysqli_close($conn);
	header("location: ../create_accounts.php");
?>