<?php
include ("../../../config/dbcon.php");
//action.php

$prog_id=$_POST['pro_id'];
$prog_name=$_POST['pro_name'];
$cord_id=$_POST['cord_id'];

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $prog_id;
fwrite($myfile, $txt);
$txt = $prog_name.$cord_id;
fwrite($myfile, $txt);
fclose($myfile);

$sql="UPDATE program SET Program_Name=?,Program_Coordinator_ID=? WHERE ProgramID=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param("sss",$prog_name,$cord_id,$prog_id);
$stmt->execute();
$stmt->close();
//header("Location: ../prog_manage.php");

$conn->close();

?>