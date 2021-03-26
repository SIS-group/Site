<?php 
include ("../../config/dbcon.php");
$course;
if(isset($_GET['course_id'])){
	$course = $_GET['course_id'];

	$sql1 = "SELECT * from course where ProgramID=?";
    $stmt1=$conn->prepare($sql1);
    $stmt1->bind_param("s",$course);
    $stmt1->execute();
    $result1=$stmt1->get_result();
    $stmt1->close();
    header("location: ./course_manage.php");
    $conn->close();	
}
else{
	$sql1 = "SELECT * from course where ProgramID=?";
    $stmt1=$conn->prepare($sql1);
    $stmt1->bind_param("s",$course);
    $stmt1->execute();
    $result1=$stmt1->get_result();
    $stmt1->close();
    
    $conn->close();
}
?>