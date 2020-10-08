<?php 

	session_start();

	include("dbcon.php");
	
	if (isset($_POST['loginform']) && !empty($_POST['Username']) && !empty($_POST['Password'])) {

	$username = mysqli_real_escape_string($conn,$_POST['Username']);
	$password = mysqli_real_escape_string($conn,$_POST['Password']);
	$type = $_POST['usertype'];
	$error = "Login Name or Password is invalid";

	if($type == 'Student'){
		$sql = "SELECT RegNo FROM student WHERE RegNo= '$username' and Password= '$password' ";
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		//$active = $row['active'];
		$count = mysqli_num_rows($result);

		if($count == 1) {
			//session_register("username");
         	$_SESSION['login_user'] = $username;
        	header("location: ../user_page/student.php");
    	}
    	else {
        	$_SESSION["error"] = $error;
    		header("location: ../index.php");
    	}
	}

	elseif($type == 'Staff') {
		$sql = "SELECT Staff_ID FROM staff WHERE Staff_ID= '$username' and Password= '$password' ";
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);

		if($count == 1) {
			session_register("myusername");
         	$_SESSION["username"] = $username;
        	header("location: ../user_page/admin.html");
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
			session_register("myusername");
        	$_SESSION["username"] = $username;
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