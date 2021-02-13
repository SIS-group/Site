<?php 
	include ("../config/dbcon.php");
			// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT RegNo,Branch,PayDate,Pay_slip,Uploaded_time FROM student_payment WHERE Verified_status='Not Verified' ORDER BY Uploaded_time ";
	$result = mysqli_query($conn, $sql);
?>