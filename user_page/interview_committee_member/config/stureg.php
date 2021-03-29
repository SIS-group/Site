<?php
    session_start();
    $conn=new mysqli("localhost","root","","sis");

    if ( isset($_POST["search"]) )
    {
        $text = $conn->real_escape_string($_POST['searchtext']);
        $program = $conn->real_escape_string($_POST['program']);
        //echo $program;
        //$search = mysqli_real_escape_string($conn,$_POST['searchby']);

        $sql1 = " SELECT * FROM student WHERE NIC = ? AND Program= ? ";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("ss",$text,$program);
        $stmt1->execute();
        $result1 = $stmt1->get_result();
        $stmt1->close();

        //$result1 = mysqli_query($conn,$sql1);

        if (!$result1) {
            printf("Error: %s\n", $conn->error());
            exit();
        }

        if ( $result1->num_rows==0)
        {
            $_SESSION["success"] = "No result found ";
            header('location: ../../interview_committee_member.php');
            exit();
        }

        if ($result1->num_rows == 1)
        {
            include("./../reg.php");
        }
    }  
    
    $conn->close();
?>