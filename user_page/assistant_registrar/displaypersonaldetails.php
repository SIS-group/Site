<!DOCTYPE html>
<html>
    <head>
        <title>Assistant Registrar</title>
        <link rel="stylesheet" type="text/css" href="../../../css/css.css">
        <link rel="stylesheet" type="text/css" href="../../../css/sidepanel.css">
        <link rel="stylesheet" type="text/css" href="../../../css/top_navigation.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <style type="text/css">
            table{ border-radius: 10px ;background-color: white; padding: 4% 4%;}
            td{ padding: 10px 10px }
            input[type="submit"]:hover{background-color: green}
            th{background-color: #4B0082;color: white;border-radius: 10px ; padding-left:4%; padding-right:4%;}
            body
            {
                font-family: 'Raleway', sans-serif;
                margin: 0;
            }
            .container1
            {
                margin-top: 10%;
                border-radius: 5px;
                background-color:#002b80 ;
                padding: 20px;
                width: 60%;
            } 
            .sidebar a
            {
                padding: 15%;    
            }
        </style>
    </head>

    <body>
        <div class="sidebar">
            <center><img src="../../../icons/logo.png" style="width:80px;height:80px;" >
                <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
            </center>
            <a href="../studentpaymentdetails.php">Student Payment Details</a>
            <a class="active" href="../studentpersonaldetails.php ">Student's Personal Details</a>
            <a href="../../assistant_registrar.php">Student Results and Grades</a>
            <a href="../account_settings.php">Account settings</a>
            <a href="../../../login/Logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
        </div>

        <ul>
            <li style="margin-right: 270px" class="dropdown">
                <img src="../../Assistant_bursar/Profile_photo/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
                <div class="dropdown-content">
                    <a href="../account_settings.php">Setting</a>
                    <a href="../../../Login/logout.php">Log out</a>
                </div>
            </li>
            <li style="margin: 25px 20px"><?php echo "Assistant Registrar" ?></li>
            
            <li class="dropdown"> 
                <img src="../../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
                <div class="dropdown-content1">
                    <p>notifications are shown here</p>
                </div>
            </li>
        </ul>
        
        <div class="content" align="center">

            <table>
                <tr>
                    <th colspan="2">
                        <p style="font-size:160%;">Personal Details of <?php echo $text?></p>
                    </th>
                </tr>
                <tr>
                    <td>Name with initials</td>
                    <td><?php echo $row1["Name_with_initials"]?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?php echo $row1["Name"]?></td>
                </tr>
                <tr>
                    <td>Address</td>   
                    <td><?php echo $row1["Address"]?></td>
                </tr>
                <tr>
                    <td>District</td>  
                    <td><?php echo $row1["District"]?></td>
                </tr>
                <tr>
                    <td>Province</td>  
                    <td><?php echo $row1["Province"]?></td>
                </tr>
                <tr>
                    <td>email</td>  
                    <td><?php echo $row1["Email"]?></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>  
                    <td><?php echo $row1["DOB"]?></td>
                </tr>
                <tr>
                    <td>Gender</td>  
                    <td><?php echo $row1["Gender"]?></td>
                </tr>
                <tr>
                    <td>Marital_status</td>  
                    <td><?php echo $row1["Marital_status"]?></td>
                </tr>
                    <?php 
                    $i = 0;
                    while ($row2 = $result2->fetch_assoc())
                    { 
                        $i++;
                    ?>
                        <tr><td colspan="2">Emergency Contact<?php echo " ".$i ?></td></tr>
                        <tr>
                            <td>Contact Number</td>
                            <td><?php echo $row2["ContactNo"] ?></td>
                        </tr>
                        <tr>
                            <td>Name </td>
                            <td><?php echo $row2["Contact_Name"] ?></td>
                        </tr>
                        <tr>
                            <td>Relationship to the student</td>
                            <td><?php echo $row2["Relationship"] ?></td>
                        </tr>

                    <?php
                    }
                    ?>
            </table>

        </div>
    </body>
</html>