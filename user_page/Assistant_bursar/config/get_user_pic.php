<?php 
	include ('../../config/dbcon.php');
	include ('../../config/session.php');
	$active_user = $user;

	$sql = "SELECT Profile_picture FROM staff WHERE Staff_ID= ? ";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param('s',$active_user);
	$stmt->execute();
	$result=$stmt->get_result();
	$row = $result->fetch_assoc();
	
?>