<?php 
	include ("../../../config/dbcon.php");

		$Prog_ID = $_POST['Program'];
		$Course_ID = $_POST['CourseID'];
		$Course_Name = $_POST['CourseName'];
		$Year = $_POST['Year'];
		$Semester = $_POST['Semester'];
		$Credits = intval($_POST['Credits']);
		$type = $_POST['type'];

		
		$sql="INSERT INTO course(CourseID,Name,Year,Semester,Credits,Type,ProgramID) VALUES(?,?,?,?,?,?,?)";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ssiiiss',$Course_ID,$Course_Name,$Year,$Semester,$Credits,$type,$Prog_ID);
		$stmt->execute();
		$stmt->close();


	//header("location: ../course_manage.php");
	$conn->close();
?>