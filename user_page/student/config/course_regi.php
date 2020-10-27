<?php 
	include ("../../config/dbcon.php");
    include ("../../config/session.php");
    $active_user = $user;
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql1 = "SELECT IndexNo FROM student WHERE RegNo='$user'";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
    $index1 = $row1["IndexNo"];
    $Curr_Year = date("Y");

    $sql2 = "SELECT CourseID,Name,Credits FROM course WHERE Type='optional'";
    $result2 = mysqli_query($conn, $sql2);
?>