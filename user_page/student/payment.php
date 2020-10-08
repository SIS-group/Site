<?php 
	include ('../../login/session.php');
	include ('../../login/dbcon.php');

	if (isset($_POST['paysubmit']) && !empty($_POST['payment_date']) && !empty($_POST['bank_branch']) && !empty($_POST['payfile'])) {

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
	<style type="text/css">
		table{border-style: solid; padding: 40px 40px;border-radius: 10px; background-color: white;text-align: center; margin-top: 5%}
		td{padding: 10px 10px}
		input[type="date"]{border-radius: 10px; text-align: center;width: 90%}

	</style>
</head>
<body>
	<div class="sidebar">
  		<a href="./Medical.php">Medical Submission</a>
  		<a href="./course_reg.php">Course Registration</a>
  		<a href="#contact">Notifications</a>
  		<a class="active" href="./payment.php">Payment Details</a>
  		<a href="#about">Account details</a>
  		<a href="http://localhost/SIS/" target="_self" style="all:unset ;padding: 25%;"><button >Log out</button></a>
	</div>
		
	<div class="content">
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