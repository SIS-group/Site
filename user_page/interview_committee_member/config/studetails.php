<?php
    $sql2 = " SELECT Edu_file FROM student_edu_doc WHERE NIC_No= ? AND Type='O/L'";
    //$result2 = mysqli_query($conn,$sql2);
    //$row2 = mysqli_fetch_assoc($result2);
    //$row2_ol = $row2['Edu_file'];
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bind_param("s",$nic);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $row2 = $result2->fetch_assoc();
    $row2_ol = $row2['Edu_file'];

    $sql3 = " SELECT Edu_file FROM student_edu_doc WHERE NIC_No= ? AND Type='A/L'";
    //$result3 = mysqli_query($conn,$sql3);
    //$row3 = mysqli_fetch_assoc($result3);
    //$row3_al = $row3['Edu_file'];
    $stmt3 = $conn->prepare($sql3);
    $stmt3->bind_param("s",$nic);
    $stmt3->execute();
    $result3 = $stmt3->get_result();
    $row3 = $result3->fetch_assoc();
    $row3_al = $row3['Edu_file'];
?>