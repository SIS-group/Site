<?php 

	header('Content-type: application/json; charset=UTF-8');
	//$response = array();
	include("../../../config/dbcon.php");

	if ($_POST['verify']) {	
		$id = $_POST['verify'];
/*
		$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
		$txt = $id;
		fwrite($myfile, $txt);
		$txt = "mahela Doe\n";
		fwrite($myfile, $txt);
		fclose($myfile);
		
*/			
		$sql = "UPDATE student_payment SET Verified_status='Verified' WHERE ID=? ";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('i',$id);
		$stmt->execute();

		if($stmt){
			echo json_encode(array("statusCode"=>200));
			$sql1 = "SELECT RegNo FROM student_payment WHERE ID=? ";
			$stmt1=$conn->prepare($sql1);
			$stmt1->bind_param('i',$id);
			$stmt1->execute();
			$result1=$stmt1->get_result();
			$row1 = $result1->fetch_assoc();
			$RegNo=$row1["RegNo"];
			$result1->close();

			if($stmt1){
				$Message = "Your Annual Payslip has been Accepted";
				$sql2 = "INSERT INTO notification(Message,Audience,Username) VALUES(?,'Student',?)";
				$stmt2=$conn->prepare($sql2);
				$stmt2->bind_param('ss',$Message,$RegNo);
				$stmt2->execute();
			}
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}

		

		$conn->close();
	}
	
	elseif ($_POST['reject']) {
		$id = $_POST['reject'];
		$sql = "UPDATE student_payment SET Verified_status='Rejected' WHERE ID=? ";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('i',$id);
		$stmt->execute();

		if($stmt){
			echo json_encode(array("statusCode"=>200));
			$sql1 = "SELECT RegNo FROM student_payment WHERE ID=? ";
			$stmt1=$conn->prepare($sql1);
			$stmt1->bind_param('i',$id);
			$stmt1->execute();
			$result1=$stmt1->get_result();
			$row1 = $result1->fetch_assoc();
			$RegNo=$row1["RegNo"];
			$result1->close();

			if($stmt1){
				$Message = "Your Annual Payslip has been Rejected";
				$sql2 = "INSERT INTO notification(Message,Audience,Username) VALUES(?,'Student',?)";
				$stmt2=$conn->prepare($sql2);
				$stmt2->bind_param('ss',$Message,$RegNo);
				$stmt2->execute();
			}
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}

		$conn->close();
	}
?>