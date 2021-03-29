<?php
    $conn = new mysqli("localhost","root","","sis");

    if ( isset($_POST['search']))
    {
        $course = $_POST['course'];

        $sql1 = " SELECT * FROM student_result WHERE CourseID = ? ";
        //$result1 = mysqli_query($conn,$sql1);
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("s",$course);
        $stmt1->execute();
        $result1 = $stmt1->get_result();

        $sql2 = " SELECT * FROM course WHERE CourseID = ? ";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("s",$course);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        $row2 = $result2->fetch_assoc();

        //$result2 = mysqli_query($conn,$sql2);
        //$row2 = mysqli_fetch_assoc($result2);

        if ($result1->num_rows > 0 )
        {
            include('./displayresultsandgrades.php'); 
            
            /*$data = array();

            for ( $x=0; $x<$result1->num_rows; $x++ )
            {
                $data[] = $result1->fetch_assoc();
            }

            echo json_encode($data);*/
        }

        $conn->close();
    }
?>