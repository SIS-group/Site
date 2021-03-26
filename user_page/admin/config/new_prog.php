<?php 
	include ("../../../config/dbcon.php");
//	if(isset($_POST['prog_submit'])){
		$Prog_ID = $_POST['progID'];
		$Prog_Name = $_POST['progName'];
		$Cord_ID = $_POST['cord_ID'];

		$stmt1=$conn->prepare("INSERT INTO program(ProgramID,Program_Name,Program_Coordinator_ID) VALUES(?,?,?)");
		$stmt1->bind_param('sss',$Prog_ID,$Prog_Name,$Cord_ID);
		$stmt1->execute();
		$stmt1->close();
//	}

	header("location: ../prog_manage.php");
	$conn->close();
?>