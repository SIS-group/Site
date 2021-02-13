<?php 
	include ('../../../config/dbcon.php');
	//if(isset($_POST['myform'])) {
		$role = $_POST['role'];
		$Staff_id = $_POST['Staff_id'];
		$name = $_POST['Name'];
		$email = $_POST['Email'];
	//}

		$str=rand(); 
		$result = sha1($str); //create a random password and hash it using sha1

		$sql = "INSERT INTO staff(Staff_ID,Name,Role,Email,Password) VALUES(?,?,?,?,?)";
    	$stmt1=$conn->prepare($sql);
		$stmt1->bind_param('sssss',$Staff_id,$name,$role,$email,$result);
		$stmt1->execute();
		$stmt1->close();

		/*$subject="SIS User Credentials";
		$message="Welcome to the Student Information System of Cyber Campus, University of Colombo. '</br>'
		You can use your Staff ID as your username. '</br>' 
		Your Password is : $result";
		mail($email,$subject,$message)*/
	$conn->close();
	header("location: ../create_accounts.php");
?>