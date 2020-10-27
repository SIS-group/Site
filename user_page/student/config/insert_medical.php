<?php 
					
	include ('../../config/dbcon.php');
	include ('../../config/session.php');

	if (isset($_POST['medsubmit'])) {

		$active_user = $user;
		$date = $_POST['Med_date'];
		$file_name=$_FILES['medfile']['name'];
		$file_tmp_loc=$_FILES['medfile']['tmp_name'];
		$file_store="./Medical_files/".$file_name;

		move_uploaded_file($file_tmp_loc , $file_store);

		$sql = "INSERT INTO student_medical(RegNo,MedDate,MedicalFile) VALUES('$active_user','$date','$file_name')";
		mysqli_query($conn,$sql);
	}
?>