<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Personal Details</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
        <link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
        <style type="text/css">
        table{border-style: solid; border-radius: 30px ;background-color: white; padding: 7% 7%; align:center;}
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
            <a href="studentpaymentdetails.php">Student Payment Details</a>
            <a href="studentpersonaldetails.php ">Student's Personal Details</a>
            <a href="studentresultsandgrades.php">Student Results and Grades</a>
            <a href=" ">Account settings</a>
            <a href="../../login/Logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
        </div>

        <div class="content" align="center">
            <p style="font-size: 160%;" >Search by the student's: </p>
            <form name="studentpersonaldata" method="POST" action="personaldetails.php">
                <table>
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