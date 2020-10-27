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
?>