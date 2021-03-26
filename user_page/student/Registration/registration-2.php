<?php 
	include ("../../../config/dbcon.php");
	if(isset($_POST['payment_form'])){
		$NIC = $_POST['NIC'];
		$payment_type = $_POST['payment'];
		$filename1=$_FILES['reg_fee_slip']['name']; //application fee slip
		$filetmpname1=$_FILES['reg_fee_slip']['tmp_name'];
		$folder1='../Application_fee_slips/';
		move_uploaded_file($filetmpname1, $folder1.$filename1);
	}

	if($payment_type=='bank'){
		$stmt1=$conn->prepare("INSERT INTO student_reg_payments(NIC_No,Type,Pay_slip) VALUES(?,?,?)");
		$stmt1->bind_param('sss',$NIC,$payment_type,$filename1);
		$stmt1->execute();
		$stmt1->close();

		/*$sql = "INSERT INTO student_reg_payments(NIC_No,Type,Pay_slip) VALUES('$NIC','$payment_type','$filename1')";
		mysqli_query($conn,$sql);*/
	}
	else{
		$stmt2=$conn->prepare("INSERT INTO student_reg_payments(NIC_No,Type) VALUES(?,?)");
		$stmt2->bind_param('ss',$NIC,$payment_type);
		$stmt2->execute();
		$stmt2->close();

		/*$sql2 = "INSERT INTO student_reg_payments(NIC_No,Type,Pay_slip) VALUES('$NIC','$payment_type','NULL')";
		mysqli_query($conn,$sql2);*/
	}

	header("location: pre_registration.html");
	$conn->close();
?>