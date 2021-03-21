<?php
    session_start();
    $conn = new mysqli("localhost","root","","sis");

    if (isset($_POST['search']))
    {
        $program = $conn->real_escape_string($_POST['program']);

        //$sql1 = " SELECT RegNo,Name FROM student WHERE Program='$program' ";
        //$result1 = mysqli_query($conn,$sql1);

        $sql2 = " SELECT student.RegNo,student.Name,student_payment.PayDate,student_payment.Verified_status FROM student INNER JOIN student_payment WHERE student.RegNo=student_payment.RegNo AND student.Program = ? ";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("i",$program);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        $stmt2->close();

        if (!$result2) 
        {
            printf("Error: %s\n", $conn->error());
            exit();
        }
        
        if ( $result2->num_rows > 0 )
        {
            include("../displaypayments.php");   
        }

    }

    $conn->close();
?>