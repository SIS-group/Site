<?php 
	include ("../config/dbcon.php");
    include ("../config/session.php");
    $active_user = $user;
      // Check connection
    if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
    }

	$sql1 = "SELECT IndexNo FROM student WHERE RegNo='$user'";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
    $index1 = $row1["IndexNo"];
       

    $sql2 = "SELECT student_result.CourseID,student_result.Result,course.Name,course.Year,course.Semester FROM course INNER JOIN student_result ON student_result.CourseID=course.CourseID WHERE student_result.IndexNo='$index1' ORDER BY course.Year,course.Semester";
    $result2 = mysqli_query($conn, $sql2);
?>