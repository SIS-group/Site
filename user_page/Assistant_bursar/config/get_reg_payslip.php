<?php 
	include ("../../config/dbcon.php");
			// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT NIC_No,Type,Pay_slip,Applied_Date FROM student_reg_payments WHERE Verified_status='Not Verified' ";
	$result = mysqli_query($conn, $sql);
?>