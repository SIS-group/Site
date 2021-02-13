<?php
	include ("../config/dbcon.php");
	if(isset($_POST['forgotpass'])){
		$usertype = $_POST['usertype'];
		$to = $_POST['email'];
    	$subject = "This is your temporary password";
        
        $str=rand(); 
		$result = sha1($str); 
		echo $result;

    	$message = "This is your temporary password : $result";
    	if(mail($to,$subject,$message)){
    		if ($usertype=='Student') {
    			$stmt1=$conn->prepare("UPDATE student SET password=? WHERE email=?");
				$stmt1->bind_param('ss',$result,$to);
				$stmt1->execute();
				$stmt1->close();
    		}
    		else{
    			$stmt2=$conn->prepare("UPDATE staff SET password=? WHERE email=?");
				$stmt2->bind_param('ss',$result,$to);
				$stmt2->execute();
				$stmt2->close();
    		}
    		
    	}
      	header("location:../index.php");
      	


	}
?>