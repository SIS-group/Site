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
                    .button1
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
                    p,th{background-color: #4B0082;color: white;border-radius:1px; padding: 6px;}
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
                    <table>
                        <tr>
                            <th colspan="2" style="padding: 10px; font-size:160%; border-radius:5px;"><?php echo $row2["Name"]." "?></th><br>
                        </tr>
                        <tr>
                           <th colspan="2" style="padding: 10px; font-size:160%; border-radius:5px; margin-top:15px;"><?php echo " ".$row2["Year"]." " ?>Year<?php echo" ".$row2["Semester"]." " ?>Semester
                        </tr>
                        <tr>
                            <th>Index Number</th>
                            <th>Result</th>
                        </tr>
            <?php
            while ( $row1 = mysqli_fetch_assoc($result1) )
            {
            ?>
                <tr>
                    <td><?php echo $row1["IndexNo"] ?></td>
                    <td><?php echo $row1["Result"] ?></td>
                </tr>
            <?php        
            }
            ?>
            </div><!-- content -->
    </body>
</html>