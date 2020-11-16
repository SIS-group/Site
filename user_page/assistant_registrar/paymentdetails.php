<?php
    session_start();
     $conn = mysqli_connect("localhost","root","","sis");

    if (isset($_POST['search']))
    {
        $program = mysqli_real_escape_string($conn,$_POST['program']);

        $sql1 = " SELECT RegNo,Name FROM student WHERE Program='$program' ";
        $result1 = mysqli_query($conn,$sql1);

        $sql2 = " SELECT student.RegNo,student.Name,student_payment.PayDate,student_payment.Verified_status FROM student INNER JOIN student_payment WHERE student.RegNo=student_payment.RegNo ";
        $result2 = mysqli_query($conn,$sql2);

        if (!$result1) 
        {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        if ( mysqli_num_rows($result2) > 0 )
        {?>
        <!DOCTYPE html>
        <html>
            <head>
                <title>Student Payment Details</title>
                <link rel="stylesheet" type="text/css" href="../../css/css.css">
                <link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
                <link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
                <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

                <style type="text/css">
                    body
                    {
                        font-family: 'Raleway', sans-serif;
                        margin: 0;
                    }
                    button
                    {
                        margin-top: 5%;
                        background-color:#002b80 ;
                        color: white;
                        border: none;
                        padding: 7px 40px;
                        text-align: center;
                        border-radius: 10px;
                        display: inline-block;
                    }
                    .sidebar a 
                    {
                        padding: 15%;
                    }
                    table{ border-radius: 10px ;background-color: white; padding: 6% 6%;}
                    td{ padding: 10px 10px }
                    body{font-family: 'Raleway', sans-serif;margin: 0;}
                    input[type="submit"]:hover{background-color: green}
                    th{background-color: #002b80;color: white;border-radius: 1px ; font-size:120%; padding:8px}
                    
                </style>
            </head>

            <body>
                <div class="sidebar">
                    <center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
                        <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
                    </center>
                    <a class="active" href="studentpaymentdetails.php">Student Payment Details</a>
                    <a href="studentpersonaldetails.php ">Student's Personal Details</a>
                    <a href="../assistant_registrar.php">Student Results and Grades</a>
                    <a href="account_settings.php">Account settings</a>
                    <a href="../../login/Logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
                </div>  <!-- sidebar -->
                <ul>
                    <li style="margin-right: 270px" class="dropdown">
                        <img src="../Assistant_bursar/Profile_photo/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
                        <div class="dropdown-content">
                            <a href="account_settings.php">Setting</a>
                            <a href="../../login/logout.php">Log out</a>
                        </div>
                    </li>
                    <li style="margin: 25px 20px"><?php echo "Assistant Registrar" ?></li>
                    
                    <li class="dropdown"> 
                        <img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
                        <div class="dropdown-content1">
                            <p>notifications are shown here</p>
                        </div>
                    </li>
                </ul>

                <div class="content" align="center">
                <table>
                    <tr>
                        <th>Registration Number</th>
                        <th>Name</th>
                        <th>Pay Date</th>
                        <th>Verify Status</th>
                    </tr>
            <?php
            while ( $row2 = mysqli_fetch_assoc($result2) )
            {?>
                <tr>
                    <td><?php echo $row2["RegNo"] ?></td>
                    <td><?php echo $row2["Name"] ?></td>
                    <td><?php echo $row2["PayDate"] ?></td>
                    <td><?php echo $row2["Verified_status"] ?></td>
                </tr>
            <?php    
            }
        }

    }

     mysqli_close($conn);
?>