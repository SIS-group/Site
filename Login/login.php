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

		$sql1 = "SELECT RegNo FROM student WHERE RegNo = ? and Password = ? and Account_status = ? ";

		$stmt1=$conn->prepare($sql1);
		$stmt1->bind_param("sss",$username,$password,$status);

		$status=$status1;
		$stmt1->execute();
		$result1=$stmt1->get_result();
		$count1 = $result1->num_rows;	
		$result1->close();
		

		$status=$status2;
		$stmt1->execute();
		$result2=$stmt1->get_result();
		$count2 = $result2->num_rows;	
		$result2->close();
		$stmt1->close();

		if($count1 == 1) {
			
         	$_SESSION['login_user'] = $username;
        	header("location: ../user_page/student.php");

        	$sql2 = "INSERT INTO userlog(Username,Login_time) VALUES (?,now()) ";
			
			$stmt2=$conn->prepare($sql2);
			$stmt2->bind_param("s",$username);
			$stmt2->execute();	
			$stmt2->close();


    	}

    	elseif ($count2 == 1) {

    		$_SESSION['login_user'] = $username;
         	$sql3 = "SELECT NIC_No FROM student_reg_payments WHERE NIC_No=? ";

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
    			header("location: ../Student_Reg_form-2.html");
    		}
    	}

    	else {
        	$_SESSION["error"] = $error;
    		header("location: ../index.php");
    	}

    	//new users temp page forward
    
	}

	elseif($type == 'Staff') {
		$sql3 = "SELECT Staff_ID,Role FROM staff WHERE Staff_ID= ? and Password= ? ";

		$stmt4=$conn->prepare($sql3);
		$stmt4->bind_param("ss",$username,$password);
		$stmt4->execute();
		$result4=$stmt4->get_result();
		$row4 = $result4->fetch_assoc();
		$count4 = $result4->num_rows;	
		$result4->close();
		$stmt4->close();

		$role = $row4["Role"];

		if($count4 == 1) {
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
         	elseif ($role=="Assistant bursar") {
         		header("location:../user_page/Assistant_bursar.php");
         		
         	}
         	elseif ($role=="Deputy Director Examination") {
         		header("location:../user_page/deputydirector.php");
         		
         	}
         	elseif ($role=="Interview Commitee Member") {
         		header("location: ../user_page/interview_committee_member.php ");
         		
         	}
         	elseif ($role=="Staff assistant") {
         		header("location: ../user_page/Staff_assistant.php ");
         		
         	}
         	elseif ($role=="Assistant Registrar") {
         		header("location:../user_page/assistant_registrar.php ");
         		
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
		$sql6 = "SELECT * FROM admin WHERE Username= ? and Password= ? ";
		/*$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);*/

		$stmt6=$conn->prepare($sql6);
		$stmt6->bind_param("ss",$username,$password);
		$stmt6->execute();
		$result6=$stmt6->get_result();
		$count6 = $result6->num_rows;	
		$result6->close();

		if($count6 == 1) {
        	$_SESSION['login_user'] = $username;
        	header("location: ../user_page/admin.php");
    	}
    	else {
        	$_SESSION["error"] = $error;
    		header("location: ../index.php");
    	}
	}

	}
	mysqli_close($conn);
?>