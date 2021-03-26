<?php 
	include ("../../../config/session.php");
	include ("../../../config/dbcon.php");

		$active_user = $user;
		$date = $_POST['Med_date'];
		$course = $_POST['course'];

		$file_name=$_FILES['file']['name'];
		$file_tmp_loc=$_FILES['file']['tmp_name'];
		$file_store="../Medical_files/".$file_name;

		move_uploaded_file($file_tmp_loc , $file_store);

		$sql = "INSERT INTO student_medical(RegNo,MedDate,Course_ID,MedicalFile) VALUES(?,?,?,?)";
		$stmt=$conn->prepare($sql);
    	$stmt->bind_param('ssss',$active_user,$date,$course,$file_name);
    	$stmt->execute();

?>