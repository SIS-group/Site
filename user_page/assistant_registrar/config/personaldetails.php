<?php

    $conn=new mysqli("localhost","root","","sis");

    if (isset($_POST['search']))
    {
        $text = $conn->real_escape_string($_POST['searchtext']);
        $search = $conn->real_escape_string($_POST['searchby']);

        $sql1 = " SELECT Name_with_initials,Name,Address,District,Province,Email,DOB,Gender,Marital_status FROM student WHERE $search = ? ";
        //$result1 = mysqli_query($conn,$sql1);
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("s",$text);
        $stmt1->execute();
        $result1 = $stmt1->get_result();
        $row1 = $result1->fetch_assoc();
        $stmt1->close();

        $sql2 = " SELECT student.NIC, student_emergency_contact.Contact_Name, student_emergency_contact.Relationship, student_emergency_contact.ContactNo FROM student INNER JOIN student_emergency_contact WHERE student.NIC = student_emergency_contact.NIC_No AND student.$search = ? ";
        //$result2 = mysqli_query($conn,$sql2);
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("s",$text);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        //$row2 = $result1->fetch_assoc();
        $stmt2->close();

        /*$sql3 = " SELECT student_contactno.ContactNo FROM student INNER JOIN student_contact WHERE student.NIC = student_contactno.NIC_No AND student.$search = ? ";
        $stmt3 = $conn->prepare($sql3);
        $stmt3->bind_param("s",$text);
        $stmt3->execute();
        $result3 = $stmt3->get_result();
        $row3 = $result3->fetch_assoc();
        $stmt3->close();*/
        //$result3 = mysqli_query($conn,$sql3);
        
        if (!$result1) {
            printf("Error: %s\n", $conn->error());
            exit();
        }

        if ($result1->num_rows == 0)
        {
            header('location: ./../studentpersonaldetails.php');
        }

        if ($result1->num_rows == 1) 
        {
            //$row1 = mysqli_fetch_assoc($result1);
                
            include("./../displaypersonaldetails.php");
                
        }
    }
    $conn->close();
    
    ?>