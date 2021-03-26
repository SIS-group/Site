<?php 
	include ('../../../config/dbcon.php');

		$role = $_POST['role'];
		$Staff_id = $_POST['Staff_id'];
		$name = $_POST['Name'];
		$email = $_POST['Email'];


		/*$str=rand(); 
		$result = sha1($str);*/ //create a random password and hash it using sha1

		
		$subject = "User Credentials for UOC - Cyber Campus SIS";

    		//random 10 character string
    	for ($s = '', $i = 0, 
    		$z = strlen($a = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789')-1; 
    		$i != 10; $x = rand(0,$z), $s .= $a{$x}, $i++);
        
        	
		$result = password_hash($s, PASSWORD_DEFAULT);

    	$message = "This is your account password : $s"."\n"."Use your Staff ID as the username.You can change your password anytime from the account setting";
    	if(mail($email,$subject,$message)){
    			$sql = "INSERT INTO staff(Staff_ID,Name,Role,Email,Password) VALUES(?,?,?,?,?)";
    			$stmt1=$conn->prepare($sql);
				$stmt1->bind_param('sssss',$Staff_id,$name,$role,$email,$result);
				$stmt1->execute();
				$stmt1->close();

    	}
		

		/*$subject="SIS User Credentials";
		$message="Welcome to the Student Information System of Cyber Campus, University of Colombo. '</br>'
		You can use your Staff ID as your username. '</br>' 
		Your Password is : $result";
		mail($email,$subject,$message)*/
		
			/*echo "
				<script type='text/javascript'>
      			document.getElementById('popup-1').classList.toggle('active');
  				</script>";*/
  		

  		

  		

	$conn->close();



		header("location: ../create_accounts.php");

	
?>