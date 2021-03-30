<?php
    $conn = new mysqli("localhost","root","","sis");

    $sql1 = " SELECT ProgramID,Program_Name FROM program ";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->execute();
    $result1 = $stmt1->get_result();
    //$data1 = $result1->fetch_array();
    $stmt1->close();

    $sql2 = " SELECT CourseID, Name FROM course ";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    //$data1 = $result1->fetch_array();
    $stmt2->close();
?>