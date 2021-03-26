<?php
include ("../../../config/dbcon.php");
	$CourseID = $_POST['remove'];

    $sql="DELETE FROM course WHERE CourseID=?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("s",$CourseID);
    $stmt->execute();
    $stmt->close();
    //header("Location: ../prog_manage.php");
    $output;
    if($stmt){
    	$output=1;
    	echo $output;
    }


$conn->close();
?>