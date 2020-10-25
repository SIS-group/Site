<?php
 
    $conn=mysqli_connect("localhost","root","","sis");

    if (isset($_POST['search']))
    {
        $text = mysqli_real_escape_string($conn,$_POST['searchtext']);
        $search = mysqli_real_escape_string($conn,$_POST['searchby']);

        $sql1 = " SELECT Name,Address,District,Province,Email,DOB,Gender,Marital_status FROM student WHERE $search='$text' ";
        $result = mysqli_query($conn,$sql1);
        
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }

        if (mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result)) 
            {?>
                <!DOCTYPE html>
                <html>
                    <head>
                        <title>Student's Details</title>
                        <link rel="stylesheet" type="text/css" href="../../css/css.css">
                        <link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
                        
                        <style>
                            .container1{
                                border-radius: 5px;
                                background-color:#002b80 ;
                                padding: 20px;
                            } 
                            table 
                            {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }
                            th
                            {
                                border-radius: 1px;
                                background-color:darkgray;
                                padding: 8px;
                                height: 25px;
                            }
                            td
                            {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }

                            tr:nth-child(even) 
                            {
                                background-color: #dddddd;
                            }
                        </style>
                    </head>
                    <body style="background-color:lavender;">

                        <div class="sidebar">
                            <a href=" studentpaymentdetails.php">Student Payment Details</a>
                            <a href=" studentpersonaldetails.php ">Student's Personal Details</a>
                            <a href=" studentresultsandgrades.php">Student Results and Grades</a>
                            <a href=" ">Account settings</a>
                            <a href="../login/logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
                        </div>
                        
                        <div class="content">
                            <div class="container1">
                                <p style="color:cornsilk; font-size:160%;">Personal Details of <?php echo $text?></p>
                            </div>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td><?php echo $row["Name"]?></td>
                                </tr>
                                <tr>
                                    <td>Address</td>   
                                    <td><?php echo $row["Address"]?></td>
                                </tr>
                                <tr>
                                    <td>District</td>  
                                    <td><?php echo $row["District"]?></td>
                                </tr>
                                <tr>
                                    <td>Province</td>  
                                    <td><?php echo $row["Province"]?></td>
                                </tr>
                                <tr>
                                    <td>email</td>  
                                    <td><?php echo $row["Email"]?></td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>  
                                    <td><?php echo $row["DOB"]?></td>
                                </tr>
                                <tr>
                                    <td>Gender</td>  
                                    <td><?php echo $row["Gender"]?></td>
                                </tr>
                                <tr>
                                    <td>Marital_status</td>  
                                    <td><?php echo $row["Marital_status"]?></td>
                                </tr>
                            </table>
                        </div>
                    </body>
                </html>
            <?php
            }
        }

    }

    mysqli_close($conn);
    ?>