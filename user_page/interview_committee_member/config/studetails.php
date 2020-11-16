<?php
    $sql2 = " SELECT Edu_file FROM student_edu_doc WHERE NIC_No='$nic' AND Type='O/L'";
    $result2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_assoc($result2);
    $row2_ol = $row2['Edu_file'];

    $sql3 = " SELECT Edu_file FROM student_edu_doc WHERE NIC_No='$nic' AND Type='A/L'";
    $result3 = mysqli_query($conn,$sql3);
    $row3 = mysqli_fetch_assoc($result3);
    $row3_al = $row3['Edu_file'];
?>