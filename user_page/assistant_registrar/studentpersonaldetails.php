<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Personal Details</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
        <link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <style type="text/css">
            table{ border-radius: 10px ;background-color: white; padding: 4% 4%;}
            td{ padding: 10px 10px }
            body{font-family: 'Raleway', sans-serif;margin: 0;}
            input[type="submit"]:hover{background-color: green}
            select 
            {
                border: 1px solid black;
                border-radius: 10px;
                padding: 7px 20px;
            }
            th{background-color: #4B0082;color: white;border-radius: 10px ;}
            .sidebar a {
                padding: 15%;
            }
	    </style>
    </head>

    <body>
        <div class="sidebar">
            <center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
                <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
            </center>
            <a href="studentpaymentdetails.php">Student Payment Details</a>
            <a class="active" href="studentpersonaldetails.php ">Student's Personal Details</a>
            <a href="../assistant_registrar.php">Student Results and Grades</a>
            <a href="account_settings.php">Account settings</a>
            <a href="../../login/Logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
        </div>
        
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
            <!-- <p style="font-size: 160%;" >Search by the student's: </p> -->
            <form name="studentpersonaldata" method="POST" action="./config/personaldetails.php">
                <table>
                    <tr>
                        <th colspan="2">
                            <p style="font-size:160%">Search by the student's: </p>
                        </th>
                    </tr>
                    <tr>
                        <td style="padding:10px">
                            <label for="program">Program
                        
                            <select name="program" style="border-radius:5px">
                                <option value="1020">BSc (External) in Electronics and Automation Technologies</option>
                                <option value="1021">BSc (External) in Financial Engineering</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio"  name="searchby" value="IndexNo">
                            <label for="indexno">Index Number</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="searchby" value="RegNo">
                            <label for="regno">Registration Number</label><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="radio" name="searchby" value="NIC">
                            <label for="name">NIC</label><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="text" name="searchtext" placeholder="enter text" required>
                            <input type="submit" name="search" value="search">   
                        </td>
                    </tr>

                </table>
            </form>
        </div>
    </body>
</html>