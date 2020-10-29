<?php

    session_start();
    
    include("../Login/dbcon.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Verify Registration</title>
        <link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
        <!-- <link rel="stylesheet" type="text/css" href="../css/styles.css"> -->
        <style type="text/css">
        table{border-style: solid; border-radius: 30px ;background-color: white; padding: 7% 7%; align:center;}
        /* th{padding: 5px 5px} */
		td{padding: 5px 5px}
		input[type=submit]:hover{background-color: green}
		.sidebar a {
  			display: block;
  			color: black;
  			padding: 15%;
  			text-decoration: none;
  			text-align: center;
		}
	    </style>
    </head>

    <body>
    <div class="sidebar">
  		<a href="interview_committee_member/notifications.php">Notifications</a>
  		<a href=" interview_committee_member/account_settings.php">Account settings</a>
  		<a href="../login/logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
	</div>

    <div class="content" align="center">
    <p style="font-size: 160%;" >Search by the student's: </p>
            <form name="studentpersonaldata" method="POST" action="interview_committee_member/reg.php">
                <table>

                    <tr>
                        <td>
                            <input type="radio"  name="searchby" value="NIC">
                            <label for="indexno">NIC</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="searchby" value="Name">
                            <label for="regno">Name</label><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="text" name="searchtext" placeholder="enter text">
                            <input type="submit" name="search" value="search">   
                        </td>
                    </tr>

                </table>
            </form>
        </div>
    </body>
</html>