<?php 
	include ("../../../config/dbcon.php");

		$Message = $_POST['Message'];
		$Student_message = $_POST['Student'];
		$Staff_message = $_POST['Staff'];

		
		if (!empty($Student_message) && empty($Staff_message)) {
			$sql="INSERT INTO notification(Message,Audience) VALUES(?,'Student')";
			$stmt1=$conn->prepare($sql);
			$stmt1->bind_param('s',$Message);
			$stmt1->execute();
			$stmt1->close();
		}

		elseif (empty($Student_message) && !empty($Staff_message)) {
			$sql="INSERT INTO notification(Message,Audience) VALUES(?,'Staff')";
			$stmt1=$conn->prepare($sql);
			$stmt1->bind_param('s',$Message);
			$stmt1->execute();
			$stmt1->close();
		}

		elseif (!empty($Student_message) && !empty($Staff_message)) {
			$sql="INSERT INTO notification(Message,Audience) VALUES(?,'Staff'),(?,'Student')";
			$stmt1=$conn->prepare($sql);
			$stmt1->bind_param('ss',$Message,$Message);
			$stmt1->execute();
			$stmt1->close();
		}


	//header("location: ../broadcast.php");
	$conn->close();
?>