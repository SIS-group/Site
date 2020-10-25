<?php 
	include ('../../config/session.php');
	include ('../../config/dbcon.php');

	if (isset($_POST['paysubmit'])) {

		$active_user = $user;
		$date = $_POST['payment_date'];
		$branch = $_POST['bank_branch'];
		$filename=$_FILES['payfile']['name'];
		$filetmpname=$_FILES['payfile']['tmp_name'];
		$folder='./Payslips/';

		move_uploaded_file($filetmpname, $folder.$filename);

		$sql = "INSERT INTO student_payment(RegNo,Branch,PayDate,Pay_slip) VALUES('$active_user','$branch','$date','$filename')";
		mysqli_query($conn,$sql);
	}
	mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Enter Payment Details</title>
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
  		<a href="./Medical.php">Medical Submission</a>
  		<a href="./course_reg.php">Course Registration</a>
  		<a class="active" href="./payment.php">Payment Details</a>
  		<a href="#contact">Notifications</a>
  		<a href="Account_Setting.php">Account setting</a>
  		<a href="http://localhost/SIS/" target="_self" style="all:unset ;"><button style="margin-top: 20%;margin-left: 25%">Log out</button></a>
	</div>
		
	<div class="content">
		<h1 align="center">Enter payment details</h1>
		<form action="" method="post" enctype="multipart/form-data">
		<table align="center">
			<tr>
				<td>
					<b>Payment Date</b>
				</td>
				<td>
					<input type="date" name="payment_date">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<b>Bank Branch</b>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="text" name="bank_branch">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<b>Upload soft copy of payment slip</b>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="file" name="payfile"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="paysubmit" value="Submit"></td>
			</tr>
		</table>
		</form>
	</div>
</body>
</html>