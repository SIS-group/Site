<?php
 
    $conn=mysqli_connect("localhost","root","","sis");

    if (isset($_POST['search']))
    {
        $text = mysqli_real_escape_string($conn,$_POST['searchtext']);
        $search = mysqli_real_escape_string($conn,$_POST['searchby']);

        $sql1 = " SELECT Name,Address,District,Province,Email,DOB,Gender,Marital_status FROM student WHERE $search = '$text' ";
        $result1 = mysqli_query($conn,$sql1);

        $sql2 = " SELECT student.NIC, student_emergency_contact.Contact_Name, student_emergency_contact.Relationship, student_emergency_contact.ContactNo FROM student INNER JOIN student_emergency_contact WHERE student.NIC = student_emergency_contact.NIC_No AND student.$search = '$text' ";
        $result2 = mysqli_query($conn,$sql2);

        $sql3 = " SELECT student_contactno.ContactNo FROM student INNER JOIN student_contact WHERE student.NIC = student_contactno.NIC_No AND student.$search = '$text'";
        
        if (!$result1) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }

        if (mysqli_num_rows($result1) > 0) 
        {
            while($row1 = mysqli_fetch_assoc($result1)) 
            {
                include("./displaypersonaldetails.php");
                
            }
        }

    }

    mysqli_close($conn);
    ?>