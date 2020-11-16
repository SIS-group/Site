<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Results and Grades</title>
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
            select 
            {
                border: 1px solid black;
                border-radius: 10px;
                padding: 7px 20px;
            }
            table{ border-radius: 10px ;background-color: white; padding: 4% 4%;}
            td{ padding: 10px 10px }
            input[type="submit"]:hover{background-color: green}
            th{background-color: #002b80;color: white;border-radius: 10px ;}
            .sidebar a 
            {
                padding: 15%;    
            }
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
            <a href="studentpaymentdetails.php">Student Payment Details</a>
            <a href="studentpersonaldetails.php ">Student's Personal Details</a>
            <a class="active" href="studentresultsandgrades.php">Student Results and Grades</a>
            <a href="account_settings.php">Account settings</a>
            <a href="../../login/Logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
        </div>  <!-- sidebar -->
        
        <ul>
            <li style="margin-right: 270px" class="dropdown">
                <img src="../Assistant_bursar/Profile_photo/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
                <div class="dropdown-content">
                    <a href="./account_settings.php">Setting</a>
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
            <form method="post" action="resultandgrades.php">
                <table>
                    <tr>
                        <th colspan="2">
                            <p style="font-size:160%">Results and Grades of Students</p>
                        </th>
                    </tr>
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
                        <td>
                            <label for="course">Course
                        </td>
                        <td>
                            <select name="course">
                                <option value="EA1001">Waves, Vibrations & AC Theory</option>
                                <option value="EA1002">Analogue & Digital Electronics - I</option>
                                <option value="EA1003">Electromagnetic Theory</option>
                                <option value="EA1004">Introduction to Computer Programming</option>
                                <option value="EA1005">Computer Applications</option>
                                <option value="EA1006">Computer Architecture - I</option>
                                <option value="EA1007">Electronic Circuit Simulations</option>
                                <option value="EA1008">Object Oriented Programming</option>
                                <option value="EA1009">Calculus</option>
                                <option value="EA1010">Mathematical Methods – I</option>
                                <option value="EA1011">Differential Equations</option>
                                <option value="EA1012">Probability and Statistics</option>
                                <option value="EA1013">English for Science and Technology</option>
                                <option value="EA1030">Analogue Electronic Laboratory</option>
                                <option value="EA1031">Digital Electronic Laboratory</option>
                                <option value="EA2001">Analogue & Digital Electronics - II</option>
                                <option value="EA2002">Analogue & Digital ICs</option>
                                <option value="EA2003">Sensors & Transducers and DAQ Systems</option>
                                <option value="EA2004">Computer Architecture – II</option>
                                <option value="EA2005">Applied Numerical Methods</option>
                                <option value="EA2006">Internet Programming</option>
                                <option value="EA2007">Data Communication Techniques</option>
                                <option value="EA2008">Rapid Applications Development</option>
                                <option value="EA2009">Computational Statistics</option>
                                <option value="EA2010">Mathematical Methods – II</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" style="border-radius: 5px" name="search" value="Search">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </body>

</html>