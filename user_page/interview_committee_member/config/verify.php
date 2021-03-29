<?php
    session_start();

    include("../../../config/dbcon.php");
    //$conn = mysqli_connect("localhost","root","","sis");
    $nic = $_SESSION['nic'];
    //echo $nic;

    if ( isset($_POST['verify']) )
    {
        //$sql1 = " INSERT INTO student_edu_doc(Verified_Status) VALUES ('Verified') WHERE NIC_No = $nic";
        $sql1 = " UPDATE student_edu_doc SET Verified_Status='Verified' WHERE NIC_No = ? AND Type='O/L' ";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("s",$nic);
        $stmt1->execute();
        $stmt1->close();

        //$result1 = mysqli_query($conn,$sql1);

        $sql2 = " UPDATE student_edu_doc SET Verified_Status='Verified' WHERE NIC_No = ? AND Type='A/L' ";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("s",$nic);
        $stmt2->execute();
        $stmt2->close();
        //$result2 = mysqli_query($conn,$sql2);

        if ($stmt1 && $stmt2)
        {
            $sql3 = " UPDATE student SET Account_status='Active' WHERE NIC = ? ";
            $stmt3 = $conn->prepare($sql3);
            $stmt3->bind_param("s",$nic);
            $stmt3->execute();
            $stmt3->close();

            if ($stmt3)
            {
                $_SESSION["success"] = "Account activated successfully. Index number and Registration number are issued.";
                header('location: ../../interview_committee_member.php');
                //include("../verifysuccess.php");
            }
        }
    }
?>