<?php 

	header('Content-type: application/json; charset=UTF-8');
	//$response = array();
	include("../../../config/dbcon.php");

	if ($_POST['verify']) {	
		$id = $_POST['verify'];
/*
		$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
		$txt = $id;
		fwrite($myfile, $txt);
		$txt = "mahela Doe\n";
		fwrite($myfile, $txt);
		fclose($myfile);
		
*/			
		$sql = "UPDATE student_reg_payments SET Verified_status='Verified' WHERE NIC_No=? ";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('s',$id);
		$stmt->execute();

		if($stmt){
			$sql1 = "SELECT Email FROM student WHERE NIC=? ";
    		$stmt1=$conn->prepare($sql1);
    		$stmt1->bind_param('s',$id);
    		$stmt1->execute();
    		$result1=$stmt1->get_result();
    		$row1 = $result1->fetch_assoc();
    		$stmt1->close();

			$to = $row1['Email'];
    		$subject = "User Credentials for UOC - Cyber Campus SIS";

    		//random 10 character string
    		for ($s = '', $i = 0, 
    			$z = strlen($a = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789')-1; 
    			$i != 10; $x = rand(0,$z), $s .= $a{$x}, $i++);
        
        	
			$result = password_hash($s, PASSWORD_DEFAULT);

    		$message = "This is your temporary password : $s";
    		if(mail($to,$subject,$message)){
    				$stmt2=$conn->prepare("UPDATE student SET password=? WHERE NIC=? ");
					$stmt2->bind_param('ss',$result,$id);
					$stmt2->execute();
					$stmt2->close();
    		}

		}
		else{
			echo "Error: Not able to execute $sql. ";
		}
		echo json_encode($response);
		$conn->close();
	}
	
	elseif ($_POST['reject']) {
		$id = $_POST['reject'];
		$sql = "UPDATE student_reg_payments SET Verified_status='Rejected' WHERE NIC_No=? ";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('s',$id);
		$stmt->execute();
		
		$conn->close();
	}
?>