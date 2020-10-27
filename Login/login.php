<?php 

	session_start();

	include("../config/dbcon.php");
	
	if (isset($_POST['loginform']) && !empty($_POST['Username']) && !empty($_POST['Password'])) {

	$username = mysqli_real_escape_string($conn,$_POST['Username']);
	$password = mysqli_real_escape_string($conn,$_POST['Password']);
	$type = $_POST['usertype'];
	$error = "Username or Password is invalid";

	if($type == 'Student'){
		$sql = "SELECT RegNo FROM student WHERE RegNo= '$username' and Password= '$password' ";
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);

		if($count == 1) {
			
         	$_SESSION['login_user'] = $username;
        	header("location: ../user_page/student.php");
    	}
    	else {
        	$_SESSION["error"] = $error;
    		header("location: ../index.php");
    	}
	}

	elseif($type == 'Staff') {
		$sql = "SELECT Staff_ID,Role FROM staff WHERE Staff_ID= '$username' and Password= '$password' ";
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$role = $row["Role"];
		
		$count = mysqli_num_rows($result);

		if($count == 1) {
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
         	elseif ($role=="Interview committee member") {
         		header("location:../user_page/ ");
         		
         	}
         	elseif ($role=="Staff Assistant") {
         		header("location:../user_page/ ");
         		
         	}
         	elseif ($role=="Assistant registrar") {
         		header("location:../user_page/ ");
         		
         	}
        	
    	}
    	else {
        	$_SESSION["error"] = $error;
    		header("location: ../index.php");
    	}
	}

	else {
		$sql = "SELECT * FROM admin WHERE Username= '$username' and Password= '$password' ";
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);

		if($count == 1) {
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