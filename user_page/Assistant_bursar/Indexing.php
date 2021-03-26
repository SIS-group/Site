<?php 
	include ("../../config/dbcon.php");
			// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	/*$sql = "SELECT RegNo,Branch,PayDate,Pay_slip,Uploaded_time FROM student_payment WHERE Verified_status='Not Verified' ORDER BY Uploaded_time ";
	$result = mysqli_query($conn, $sql);*/
	else{

		$sql = "SELECT NIC,Program FROM student INNER JOIN student_reg_payments ON student.RegNo=student_reg_payments.NIC_No AND student_reg_payments.Verified_status='Verified' ORDER BY student.Name_with_initials";
    	$stmt=$conn->prepare($sql);
    	//$stmt->bind_param('s','Not Verified');
    	$stmt->execute();
    	$result=$stmt->get_result();
    	$num=1;

    	if ($result->num_rows > 0) {
    		while($row = $result->fetch_assoc()) {
    				$id=$row['NIC'];
    				$program = $row['Program'];
    				$Year = date("Y");
    				$n = str_pad($num++, 3, 0, STR_PAD_LEFT);
    				/*$sql1 = "SELECT Program_Name FROM program INNER JOIN student ON student.Program=program.ProgramID WHERE student.NIC=$id";
    				$stmt1=$conn->prepare($sql1);
    				//$stmt1->bind_param('s','Not Verified');
    				$stmt1->execute();
    				$result1=$stmt1->get_result();
    				$row1 = $result->fetch_assoc();
    				$program = $row1['Program_Name'];
    				$stmt1->close();*/
    				$pro1;
    				if ($program=="1020") {
    					$pro1="EA";
    				}
    				elseif ($program=="1021") {
    					$pro1="FE";
    				}
    				$Reg_No=$Year.$pro1.$n;
    				$Index=date("y")."00".$n.(rand(0,9));

    				$sql1 = "UPDATE student SET RegNo=?,IndexNo=? WHERE NIC=? ";
    				$stmt1=$conn->prepare($sql1);
    				$stmt1->bind_param('sss',$Reg_No,$Index,$id);
    				$stmt1->execute();
    				//$result1=$stmt1->get_result();
    				$stmt1->close();

    				
    		}
    	}

    	$stmt->close();

    	$conn->close();
	}
?>