<?php 
	include ("../../config/dbcon.php");
			// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT NIC_No,Type,Pay_slip,Applied_Date FROM student_reg_payments WHERE Verified_status='Not Verified' ORDER BY Type ";
    $stmt=$conn->prepare($sql);
    //$stmt->bind_param('s','Not Verified');
    $stmt->execute();
    $result=$stmt->get_result();
    $stmt->close();

    $conn->close();
?>