<?php
    session_start();

    include("config/getprofilepic.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Call For Interviews</title>
        <link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" type="text/css" href="../../css/top_navigation.css"> 
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <style type="text/css">
        table{ border-radius: 10px ;background-color: white; padding: 4% 4%;}
		td{ padding: 10px 10px }
        th,p{background-color: #4B0082;color: white;border-radius: 10px ; padding: 10px 10px}
		input[type=submit]:hover{background-color: green; border-radius: 5px}
		.sidebar a 
        {
  			padding: 25%;
        }
        .alert
        {
            background-color: green;
            color: white;
            border-radius: 5px;
            padding: 5px;
            text-align: center;
        }
        body{font-family: 'Raleway', sans-serif;margin: 0;}
	    </style>
    </head>

    <body>

        <div class="sidebar">
            <center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
                <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
            </center>
            <a href="../interview_committee_member.php">Interviews</a>
  		    <!-- <a href="notifications.php">Notifications</a> -->
            <a class="active" href=" callforinterviews.php">Call for interviews</a>
            <a href=" account_settings.php">Account settings</a>
            <a href="../../Login/logout.php" style="all:unset ;padding: 25%; "><button style="margin-top: 20px;">Log out</button></a>
        </div>

        <ul>
            <li style="margin-right: 270px" class="dropdown">
                <img src="./profile_photo/<?php echo $profile_picture ?>" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
                <div class="dropdown-content">
                    <a href="account_settings.php">Setting</a>
                    <a href="../../login/logout.php">Log out</a>
                </div>
            </li>
            <li style="margin: 25px 20px"><?php echo $username ?></li>
            
            <li class="dropdown"> 
                <img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
                <div class="dropdown-content1">
                    <p>notifications are shown here</p>
                </div>
            </li>
        </ul>

        <div class="content" align="center">
        <?php 
            //session_start();
            if (isset($_SESSION["success"])) 
            {

                echo '<div class="alert">' . $_SESSION["success"] . '</div>';
                unset($_SESSION["success"]);
            }
        ?>
        
        <form name="account settings" method="POST" action=" ./config/email.php">
            <table>
                <!-- <p style="font-size:160%; ">Change Password</p> -->
                <tr>
                    <th colspan="3">
                        <p style="font-size:160%">Send Email</p>
                    </th>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="date" name="date" required></td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td><input type="time" name="time" min="08:00" max="12:00" required></td>
                </tr>
                <tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                    <td align="right"><input type="submit" name="submit"></td>
                    <td></td>
                </tr>
            </table>
        </form>
        </div>
        
    </body>
</html>