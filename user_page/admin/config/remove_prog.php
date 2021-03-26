<?php
include ("../../../config/dbcon.php");
	$ProgramID = $_POST['remove'];

    $sql1="DELETE FROM program WHERE ProgramID=?";
    $stmt1=$conn->prepare($sql1);
    $stmt1->bind_param("s",$ProgramID);
    $stmt1->execute();
    $stmt1->close();
    header("Location: ../prog_manage.php");

$conn->close();
?>