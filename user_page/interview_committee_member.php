<?php
    session_start();
    
    //include("../config/dbcon.php");
    include("./interview_committee_member/config/getprofilepic.php");
    //echo $user;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Verify Registration</title>
        <link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
        <link rel="stylesheet" type="text/css" href="../css/css.css"> 
        <link rel="stylesheet" type="text/css" href="../css/top_navigation.css">
        <link rel="stylesheet" type="text/css" href="../css/image_view.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <style type="text/css">

        table{ border-radius: 10px ;background-color: white; padding: 4% 4%;}
		td{ padding: 10px 10px }
        th{background-color: #4B0082;color: white;border-radius: 10px ;}
		input[type=submit]:hover{background-color: green; border-radius: 5px}
        /* input[type=text]{padding: 10px 10px} */
        body{font-family: 'Raleway', sans-serif;margin: 0;}
		.sidebar a 
        {
  			padding: 25%;
        }
        select 
        {
            border: 1px solid black;
            border-radius: 10px;
            padding: 7px 20px;
        }
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
        <center><img src="../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
        <a class="active" href=" ">Interviews</a>
        <a href=" interview_committee_member/callforinterviews.php">Call for interviews</a>
  		<!-- <a href="interview_committee_member/notifications.php">Notifications</a> -->
  		<a href=" interview_committee_member/account_settings.php">Account settings</a>
  		<a href="../login/logout.php" style="all:unset ;padding: 25%; "><button style="margin-top: 20px;">Log out</button></a>
	</div>
    <ul>
     	<li style="margin-right: 270px" class="dropdown">
			<img src="./interview_committee_member/profile_photo/<?php echo $profile_picture ?>" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
			<div class="dropdown-content">
      			<a href="./interview_committee_member/account_settings.php">Setting</a>
      			<a href="../login/logout.php">Log out</a>
    		</div>
		</li>
     	<li style="margin: 25px 20px"><?php echo $username ?></li>
    	
    	<li class="dropdown"> 
        	<img src="../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
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

            // if( isset($_SESSION["Notreg"]))
            // {
            //     echo '<div class="alert">' . $_SESSION["Notreg"] . '</div>';
            //     unset($_SESSION["Notreg"]);
            // }

            if( isset($_SESSION["active"]))
            {
                echo '<div class="alert">' . $_SESSION["active"] . '</div>';
                unset($_SESSION["active"]);
            }
        ?>
    <!-- <p style="font-size: 160%;" >Search by the student's: </p> -->
            <form name="studentpersonaldata" method="POST" action="interview_committee_member/config/stureg.php">
                <table>
                    <tr>
                        <th colspan="2">
                            <p style="font-size: 160%">Search by student's: </p>
                        </th>
                    </tr>
                    <tr>
                        <td></td>
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
                    <!-- <tr>
                        <td>
                            <input type="radio"  name="searchby" value="NIC">
                            <label for="indexno">NIC</label><br>
                        </td>
                    </tr>-->
                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td>
                            NIC No   
                            <input type="text" name="searchtext" placeholder="enter nic" required>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="search" value="search">   
                        </td>
                    </tr>

                </table>
            </form>
        </div>
    </body>
</html>