<?php 
include ("../config/dbcon.php");
	$sql = "SELECT Username from userlog where Logout_time IS NULL";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->get_result();
    $active_users=$result->num_rows;
    $stmt->close();

    $sql2 = "SELECT DISTINCT Username from userlog ORDER BY Login_time ASC limit 10";
    $stmt2=$conn->prepare($sql2);
    $stmt2->execute();
    $result2=$stmt2->get_result();
    
    $stmt2->close();

    //SELECT DISTINCT Username FROM userlog WHERE Login_time BETWEEN now() AND SUBTIME(now(),"0:5:0") ORDER BY Login_time 

    $conn->close();		
?>