<?php
    session_start();
    //include("../../Login/dbcon.php");
    include("./config/getprofilepic.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Account Settings</title>
        <link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
        <link rel="stylesheet" type="text/css" href="../../css/css.css"> 
        <link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <style type="text/css">
        table{ border-radius: 10px ;background-color: white; padding: 4% 4%;}
		td{ padding: 10px 10px }
        th{background-color: #4B0082;color: white;border-radius: 10px; padding: 10px 10px; }
		input[type=submit]:hover{background-color: green; border-radius: 5px}
		.sidebar a {
  			display: block;
  			color: black;
  			padding: 15%;
  			text-decoration: none;
  			text-align: center;
        }
        body{font-family: 'Raleway', sans-serif;margin: 0;}
        .alert
        {
            background-color: #4B0082;
            color: white;
            border-radius: 5px;
            padding: 5px;
            text-align: center;
            width: 50%;
            font-size: 120%;
            margin-bottom: 20px;
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
            <a href="../assistant_registrar.php">Student Results and Grades</a>
            <a class="active" href=" ">Account settings</a>
            <a href="../../login/Logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
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
            if( isset($_SESSION["success"]))
            {
                echo '<div class="alert">' . $_SESSION["success"] . '</div>';
                unset($_SESSION["success"]);
            }
        ?>
        
            <table>
                <!-- <p style="font-size:160%; ">Change Password</p> -->
                <tr>
                    <th colspan="2">
                        <p style="font-size:160%">Change Password or Upload a Profile Photo</p>
                    </th>
                </tr>
                <form name="profile upload" method="POST" action="./config/profile.php" enctype="multipart/form-data">
                <tr>
                    <td>Upload profile photo</td>
                    <td><input type="file" name="ProfileUpload" id="ProfileUpload"></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="right"><input type="submit" name="savephoto" value="uploadphoto"></td>    
                </tr>
                </tr>
                </form>
                <form name="account settings" method="POST" action="./config/password_settings.php">
                <tr>
                    <td>Current Password</td>
                    <td><input type="password" name="current_password" required></td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td><input type="password" name="new_password" id="newpassword" required></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="confirm_password" id="confirmpassword" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="right"><input type="submit" name="savepass" value="Save" style="border-radius:5px"></td>
                </tr>
            </table>
        </form>
        </div>
        
    </body>
</html>