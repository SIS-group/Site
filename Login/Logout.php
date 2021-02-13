<?php
   include ("../config/session.php");
   include ("../config/dbcon.php");
	$userid = $user;
   session_start();
   
   if(session_destroy()) {
      header("Location: ../index.php");
      $sql = "UPDATE userlog SET Logout_time=now() WHERE Username=? and Logout_time IS NULL";
			
		$stmt=$conn->prepare($sql);
		$stmt->bind_param("s",$userid);
		$stmt->execute();	
		$stmt->close();
   }
?>