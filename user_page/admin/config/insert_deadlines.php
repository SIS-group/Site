<?php 
	include ("../../../config/dbcon.php");

		$type = $_POST['type'];
		$Start_date = $_POST['Sdate'];
		$End_date = $_POST['Edate'];

		$sql="UPDATE deadlines SET StartDate=?,EndDate=? WHERE Type=?";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('sss',$Start_date,$End_date,$type);
		$stmt->execute();
		$stmt->close();


	//header("location: ../course_manage.php");
	$conn->close();
?>