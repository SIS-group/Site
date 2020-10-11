<?php 
	include ('../../login/session.php');
	include ('../../login/dbcon.php');

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
	mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Medical submission</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<style type="text/css">
		table{border-style: solid; padding: 40px 40px;border-radius: 10px; background-color: white;text-align: center; margin-top: 5%}
		td{padding: 10px 10px}
		input[type="date"]{border-radius: 10px; text-align: center;width: 90%}

	</style>
</head>

<body>
	<div class="sidebar">
  		<a class="active" href="./Medical.php">Medical Submission</a>
  		<a href="./course_reg.php">Course Registration</a>
  		<a href="#contact">Notifications</a>
  		<a href="./payment.php">Payment Details</a>
  		<a href="#about">Account details</a>
  		<a href="http://localhost/SIS/" target="_self" style="all:unset ;padding: 25%;"><button >Log out</button></a>

	</div>

	<div class="content"> 
		<h1 align="center">Medical Submission</h1>
	<div class="med">
		<form action="" method="post" enctype="multipart/form-data">
			<table align="center">
				<tr>
					<td><b>Enter Date</b> </td>
				</tr>
				<tr>
					<td><input type="date" name="Med_date"></td>
				</tr>
				<tr>
					<td><b>Upload the file</b></td>
				</tr>
				<tr>
					<td><input type="file" id="medfile" name="medfile"></td>
				</tr>
				<tr>
					<td><input type="submit" name="medsubmit" value="Submit"></td>
				</tr>
			</table>

			

		</form>
	</div>
	</div>
	
</body>
</html>