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
	mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Medical submission</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		table{padding: 40px 40px;border-radius: 10px; background-color: white;text-align: center; margin-top: 5%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		td{padding: 10px 10px}
		input[type="date"]{border-radius: 10px; text-align: center;width: 90%}
		body{font-family: 'Raleway', sans-serif;}
	</style>
</head>

<body>
	<div class="sidebar">
		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" ></center>
		<a href="../student.php">Results & Grades</a>
  		<a class="active" href="./Medical.php">Medical Submission</a>
  		<a href="./course_reg.php">Course Registration</a>
  		<a href="./payment.php">Payment Details</a>
  		<a href="#contact">Notifications</a>
  		<a href="Account_Setting.php">Account setting</a>
  		<a href="http://localhost/SIS/" target="_self" style="all:unset ;"><button style="margin-top: 20%;margin-left: 25%">Log out</button></a>

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