<?php 
	include ("../config/session.php");
	include ("../config/dbcon.php");
	$userid = $user;
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT Name FROM student WHERE RegNo='$userid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $UserName = $row["Name"];

?>