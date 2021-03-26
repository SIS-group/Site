<?php 
    
    include ('../../config/dbcon.php');
    //include ('../../config/session.php');

    $active_user = $user;
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    /*$sql1 = "SELECT IndexNo FROM student WHERE RegNo=? ";

    $stmt1=$conn->prepare($sql1);
    $stmt1->bind_param('s',$active_user);
    $stmt1->execute();
    $result1=$stmt1->get_result();
    $row1 = $result1->fetch_assoc();

    $index1 = $row1["IndexNo"];
    $Curr_Year = date("Y");*/
   /* $sql0 = "SELECT Course_ID,Name FROM course_registration WHERE Reg_No=?";
    $stmt0=$conn->prepare($sql0);
    $stmt0->bind_param('s',$active_user);
    $stmt0->execute();
    $result0=$stmt0->get_result();*/

    $sql0 = "SELECT StartDate,EndDate FROM deadlines WHERE Type='Course_Reg' ";
    $stmt0=$conn->prepare($sql0);
    $stmt0->execute();
    $result0=$stmt0->get_result();
    $row0 = $result0->fetch_assoc();
    $StartDate = $row0['StartDate'];
    $EndDate = $row0['EndDate'];
    $result0->close();
    $stmt0->close();


    if (date("Y-m-d")>=$StartDate && date("Y-m-d")<=$EndDate ) {

    $sql1 = "SELECT Paid_for_level FROM student_payment WHERE RegNo=? and Verified_status='Verified' ORDER BY Uploaded_time DESC";
    $stmt1=$conn->prepare($sql1);
    $stmt1->bind_param('s',$active_user);
    $stmt1->execute();
    $result1=$stmt1->get_result();
    $row1 = $result1->fetch_assoc();
    $Year = $row1['Paid_for_level'];


    $sql2 = "SELECT CourseID,Name,Credits,Semester FROM course WHERE CourseID NOT IN (SELECT Course_ID FROM course_registration WHERE Reg_No=?) and Type='optional' and Year=$Year ORDER BY Semester";


    $stmt2=$conn->prepare($sql2);
    $stmt2->bind_param('s',$active_user);
    $stmt2->execute();
    $result2=$stmt2->get_result();
    
    }
    else{
        $result2->num_rows=0;
    }


?>