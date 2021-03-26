<?php 
	include ('../../../config/dbcon.php');
    include ('../../../config/session.php');

    $active_user = $user;

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
		if ($_POST['register']) {
			$course=$_POST['register'];
			$sql = "INSERT INTO course_registration VALUES(?,?) ";

    		$stmt=$conn->prepare($sql);
    		$stmt->bind_param('ss',$course,$active_user);
    		$stmt->execute();
    		/*$result=$stmt->get_result();
    		$row = $result->fetch_assoc();*/
		}

	}
?>