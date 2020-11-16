<?php
    session_start();
?>
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
            table{ border-radius: 10px ;background-color: white; padding: 4% 4%;}
            td{ padding: 10px 10px }
            body{font-family: 'Raleway', sans-serif;margin: 0;}
            input[type="submit"]:hover{background-color: green}
            th{background-color: #002b80;color: white;border-radius: 10px ;}
            .sidebar a 
            {
                padding: 15%;
            }
            select 
            {
                border: 1px solid black;
                border-radius: 10px;
                padding: 7px 20px;
            }
            /*table
            {
                border-style: solid; 
                border-radius: 30px ;
                background-color: white; 
                padding: 7% 7%; 
                align:center;
                margin-top:5%;
                margin-bottom:5%;
            }*/
            .container
            {
                width: 50%; 
                height: 50%; 
                float: left;
            }
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
                    <a href="../../Login/logout.php">Log out</a>
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
            <form name="payments" method="post" action="paymentdetails.php">
                <table>
                    <tr>
                        <th colspan="2">
                            <p style="font-size:160%">Student Payment Details</p>
                        </th>
                    <tr>
                        <td>
                            <label for="program">Program
                        </td>
                        <td>
                            <select name="program">
                                <option value="1020">BSc (External) in Electronics and Automation Technologies</option>
                                <option value="1021">BSc (External) in Financial Engineering</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="year">Year
                        </td>
                        <td>
                            <select name="year">
                                <option value="year1">First Year</option>
                                <option value="year2">Second Year</option>
                                <option value="year3">Third Year</option>
                                <option value="year4">Fourth Year</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right"><input type="submit" name="search" value="Search" style="border-radius:5px"></td>
                    </tr>
                </table>
            </form>
        </div>

    </body>
</html>