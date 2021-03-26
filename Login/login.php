<?php 

	session_start();

	include("../config/dbcon.php");

	if (isset($_POST['loginform']) && (empty($_POST['Username'])||empty($_POST['Password']))) {
		header("location: ../index.php");
		$error="Username and Password can not be empty";
		$_SESSION["error"] = $error;
	}
	
	if (isset($_POST['loginform']) && !empty($_POST['Username']) && !empty($_POST['Password'])) {

		$username = mysqli_real_escape_string($conn,$_POST['Username']);
		$password = mysqli_real_escape_string($conn,$_POST['Password']);
		$type = $_POST['usertype'];
		$status1 = "Active";
		$status2 = "Pending";
		$error = "Username or Password is invalid";

	if($type == 'Student'){

		$sql1 = "SELECT Password,Account_status FROM student WHERE RegNo = ?";
		$stmt1=$conn->prepare($sql1);
		$stmt1->bind_param("s",$username);
		$stmt1->execute();
		$result1=$stmt1->get_result();
		$row1 = $result1->fetch_assoc();
		$pwd1=$row1["Password"];
		$status=$row1["Account_status"];
		$result1->close();
		$stmt1->close();

		if (password_verify($password, $pwd1)) {
			if ($status="Active") {
				$_SESSION['login_user'] = $username;
        		header("location: ../user_page/student.php");

        		$sql = "INSERT INTO userlog(Username,Login_time) VALUES (?,now()) ";
			
				$stmt2=$conn->prepare($sql);
				$stmt2->bind_param("s",$username);
				$stmt2->execute();	
				$stmt2->close();
			}
			elseif ($status="Pending") {
				$_SESSION['login_user'] = $username;
				header("location: ../Student_Reg_form-3.html");
         		/*$sql3 = "SELECT NIC_No,Verified_status FROM student_reg_payments WHERE NIC_No=? ";

				$stmt3=$conn->prepare($sql3);
				$stmt3->bind_param("s",$username);
				$stmt3->execute();
				$result3=$stmt3->get_result();
				$count3 = $result3->num_rows;	
				$result3->close();

				if($count3 == 1) {
			
         			$_SESSION['login_user'] = $username;
        			header("location: ../Student_Reg_form-3.html");
    			}
    			else {
    				$_SESSION['login_user'] = $username;
    				
    			}*/
			}
		}

		

    	else {
        	$_SESSION["error"] = $error;
    		header("location: ../index.php");
    	}

    	//new users temp page forward
    
	}

	elseif($type == 'Staff') {
		$sql3 = "SELECT Password,Role,Account_status FROM staff WHERE Staff_ID= ? ";

		$stmt4=$conn->prepare($sql3);
		$stmt4->bind_param("s",$username);
		$stmt4->execute();
		$result4=$stmt4->get_result();
		$row4 = $result4->fetch_assoc();
		//$count4 = $result4->num_rows;
		$pwd4=$row4["Password"];
		$status4=$row4["Account_status"];	
		$result4->close();
		$stmt4->close();

		$role = $row4["Role"];

		if(password_verify($password, $pwd4) && $status4=='Active') {
         	$_SESSION['login_user'] = $username;

         	if($role == "Director"){
         		header("location:../user_page/Director.php "); //Director page url
         		
         	}
         	elseif ($role =="program coordinator") {
         		header("location:../user_page/procordinator.php ");
         		
         	}
         	elseif ($role=="Examiner") {
         		header("location:../user_page/ ");
         		
         	}
         	elseif ($role=="Assistant Bursar") {
         		header("location:../user_page/Assistant_bursar.php");
         		
         	}
         	elseif ($role=="Deputy Director Examination") {
         		header("location:../user_page/deputydirector.php");
         		
         	}
         	elseif ($role=="Interview committee member") {
         		header("location: ../user_page/interview_committee_member.php ");
         		
         	}
         	elseif ($role=="Staff assistant") {
         		header("location: ../user_page/Staff_assistant.php ");
         		
         	}
         	elseif ($role=="Assistant registrar") {
         		header("location:../user_page/assistant_registrar.php ");
         		
         	}
         	else{
         		echo "mkddaoi";
         	}

         	$sql5 = "INSERT INTO userlog(Username,Login_time) VALUES (?,now()) ";
			
			$stmt5=$conn->prepare($sql5);
			$stmt5->bind_param("s",$username);
			$stmt5->execute();	
			$stmt5->close();
        	
    	}
    	else {
        	$_SESSION["error"] = $error;
    		header("location: ../index.php");
    	}
	}

	else {
		$sql6 = "SELECT * FROM admin WHERE Username= ? ";

		$stmt6=$conn->prepare($sql6);
		$stmt6->bind_param("s",$username);
		$stmt6->execute();
		$result6=$stmt6->get_result();
		$row6 = $result6->fetch_assoc();
		$pwd6=$row6["Password"];
		$result6->close();
		$stmt6->close();

		if(password_verify($password, $pwd6)) {
        	$_SESSION['login_user'] = $username;
        	header("location: ../user_page/admin.php");
    	}
    	else {
        	$_SESSION["error"] = $error;
    		header("location: ../index.php");
    	}
	}

	}
	$conn->close();
?>
