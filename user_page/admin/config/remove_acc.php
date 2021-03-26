<?php 
	include ('../../../config/dbcon.php');

		$type = $_POST['user_type'];
		$username = $_POST['Username'];
		$error= "Username does not exist";

	
	if ($type == "Student") {
		$sql1 = "SELECT RegNo FROM student WHERE RegNo=?";
		$stmt1=$conn->prepare($sql1);
		$stmt1->bind_param("s",$username);
		$stmt1->execute();
		$result1=$stmt1->get_result();
		$count1 = $result1->num_rows;	
		$result1->close();
		$stmt1->close();

		if($count1 == 1){
			$status = "Deactive";
			$sql2 = "UPDATE student SET Account_status=? WHERE RegNo=? ";
			$stmt2=$conn->prepare($sql2);
			$stmt2->bind_param("ss",$status,$username);
			$stmt2->execute();
			$stmt2->close();
		}

		else{
			$_SESSION["error"] = $error;
		}
		
	}
	elseif ($type == "Staff") {
		$sql3 = "SELECT Staff_ID FROM staff WHERE Staff_ID=?";
		$stmt3=$conn->prepare($sql3);
		$stmt3->bind_param("s",$username);
		$stmt3->execute();
		$result3=$stmt3->get_result();
		$count3 = $result3->num_rows;	
		$result3->close();
		$stmt3->close();

		if($count3 == 1){
			$status = "Deactive";
			$sql4 = "UPDATE staff SET Account_status=? WHERE Staff_ID=? ";
			$stmt4=$conn->prepare($sql4);
			$stmt4->bind_param("ss",$status,$username);
			$stmt4->execute();
			$stmt4->close();
		}

		else{
			$_SESSION["error"] = $error;
		}
	}

	$conn->close();
	header("location: ../remove_accounts.php");
?>