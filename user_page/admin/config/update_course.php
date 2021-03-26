<?php
include ("../../../config/dbcon.php");
//action.php

$course_id=$_POST['course_id'];
$course_name=$_POST['course_name'];
$year=$_POST['year'];
$semester=$_POST['semester'];
$credits=$_POST['credits'];
$type=$_POST['type'];


$sql="UPDATE course SET Name=?,Year=?,Semester=?,Credits=?,Type=? WHERE CourseID=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param("siiiss",$course_name,$year,$semester,$credits,$type,$course_id);
$stmt->execute();
$stmt->close();
//header("Location: ../prog_manage.php");

$conn->close();

?>