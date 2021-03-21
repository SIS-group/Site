<!DOCTYPE html>
<html>
    <head>
        <title>Student's Details</title>
        <link rel="stylesheet" type="text/css" href="../../../css/css.css">
        <link rel="stylesheet" type="text/css" href="../../../css/sidepanel.css">
        <link rel="stylesheet" type="text/css" href="../../../css/top_navigation.css">
        <link rel="stylesheet" type="text/css" href="../../../css/image_view.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        
        <style type="text/css">
            body{font-family: 'Raleway', sans-serif;margin: 0;}
            .sidebar a
            {
                padding: 25%;
            }
            .container1
            {
                margin-top: 5%;
                border-radius: 5px;
                background-color:#002b80 ;
                padding: 20px;
                width: 50%;
            } 
            table
            { 
                border-radius: 10px ;
                background-color: white; 
                padding: 4% 4%;
                margin-bottom: 4%;
            }
            td
            { 
                padding: 10px 10px ;
            }
            th
            {
                background-color: #4B0082;
                color: white;
                border-radius: 10px ;
            }
            input[type=submit],button:hover
            {
                background-color: green; 
                border-radius: 5px;
            }
        </style>
        <script src="../../js/showimage.js"></script>
    </head>
    <body>

        <div class="sidebar">
            <center><img src="../../../icons/logo.png" style="width:80px;height:80px;" >
                <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
            </center>
            <a href="../../interview_committee_member.php">Interviews</a>
            <!-- <a href="notifications.php">Notifications</a> -->
            <a href=" ../account_settings.php">Account settings</a>
            <a href="../../login/logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
        </div>
        <ul>
            <li style="margin-right: 270px" class="dropdown">
                <img src="../../Assistant_bursar/Profile_photo/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
                <div class="dropdown-content">
                    <a href="../account_settings.php">Setting</a>
                    <a href="../../../Login/logout.php">Log out</a>
                </div>
            </li>
            <li style="margin: 25px 20px"><?php echo "Interview Committee Member" ?></li>
            
            <li class="dropdown"> 
                <img src="../../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
                <div class="dropdown-content1">
                    <p>notifications are shown here</p>
                </div>
            </li>
        </ul>
        <div class="content" align="center">
            <div class="container1">
                <p style="color:cornsilk; font-size:160%;">Verified Successfully</p>
            </div> 
        </div>
    </body>
</html>