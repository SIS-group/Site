<?php 
    
    $active_user = $user;
      // Check connection
    if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
    }

	$sql1 = "SELECT IndexNo FROM student WHERE RegNo=? ";
    $stmt1=$conn->prepare($sql1);
    $stmt1->bind_param("s",$active_user);
    $stmt1->execute();
    $result1=$stmt1->get_result();
    $row1 = $result1->fetch_assoc();
    $index1 = $row1["IndexNo"];
    $result1->close();
    $stmt1->close();
    
       

    $sql2 = "SELECT student_result.CourseID,student_result.Result,course.Name,course.Year,course.Semester 
             FROM course 
             INNER JOIN student_result 
             ON student_result.CourseID=course.CourseID 
             WHERE student_result.IndexNo=? 
             ORDER BY course.Year,course.Semester";
    $stmt2=$conn->prepare($sql2);
    $stmt2->bind_param("s",$index1);
    $stmt2->execute();
    $result2=$stmt2->get_result();
    $stmt2->close();

    
?>