<?php
    session_start();

    $conn = mysqli_connect("localhost","root","","sis");
    $nic = $_SESSION['nic'];

    if ( isset($_POST['verify']) )
    {
        //$sql1 = " INSERT INTO student_edu_doc(Verified_Status) VALUES ('Verified') WHERE NIC_No = $nic";
        $sql1 = " UPDATE student_edu_doc SET Verified_Status='Verified' WHERE NIC_No = '$nic' AND Type='O/L' ";
        $result1 = mysqli_query($conn,$sql1);

        $sql2 = " UPDATE student_edu_doc SET Verified_Status='Verified' WHERE NIC_No = '$nic' AND Type='A/L' ";
        $result2 = mysqli_query($conn,$sql2);

        if ($result1 && $result2)
        {
            include("../verifysuccess.php");
        }
    }
?>