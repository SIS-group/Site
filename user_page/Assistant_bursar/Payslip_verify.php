<?php 
	
	include("../../config/dbcon.php");
	include ("../../config/session.php");

	$active_user = $user;
	
	if (isset($_POST['verify']){
		$sql = "INSERT INTO student_payment(Verified_status,Assistant_Bursar_ID) VALUES(Verified,'$active_user') where ";
		$result=mysqli_query($conn,$sql);
	}
?>