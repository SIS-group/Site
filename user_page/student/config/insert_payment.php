<?php 
	include ("../../../config/session.php");
	include ("../../../config/dbcon.php");
	header('Content-type: application/json');
    echo json_encode($response_array);

		$active_user = $user;
		$date = $_POST['payment_date'];
		$branch = $_POST['bank_branch'];
		$Level = $_POST['Levels'];

		$filename=$_FILES['file']['name'];
		$filetmpname=$_FILES['file']['tmp_name'];
		$folder='../Payslips/';

		move_uploaded_file($filetmpname, $folder.$filename);

		$sql = "INSERT INTO student_payment(RegNo,Paid_for_level,Branch,PayDate,Pay_slip) VALUES(?,?,?,?,?)";
		$stmt=$conn->prepare($sql);
    	$stmt->bind_param('sisss',$active_user,$Level,$branch,$date,$filename);
    	$stmt->execute();

    	if($stmt){
    		$response_array['status'] = 'success';  
		}else {
    		$response_array['status'] = 'error';  
		}
		echo json_encode($response_array);
	//header("location:../payment.php");
?>