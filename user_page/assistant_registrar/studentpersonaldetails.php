<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Personal Details</title>
        <link rel="stylesheet" type="text/css" href="../../css/css.css">
	    <link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
        <!-- <link rel="stylesheet" type="text/css" href="../css/styles.css"> -->
        <style type="text/css">
		table{border-style: solid; border-radius: 30px ;background-color: white; padding: 7% 7%;}
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
        <!--<div class="Button3">
            <button class="button" onclick="document.location='index.php'">Logout</button>
        </div>  -->
        <div class="sidebar">
  		<a href=" studentpaymentdetails.php">Student Payment Details</a>
  		<a href=" studentpersonaldetails.php ">Student's Personal Details</a>
  		<a href=" studentresultsandgrades.php">Student Results and Grades</a>
  		<a href=" ">Account settings</a>
  		<a href="../login/logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
	    </div>
        
        <p style="color:cornsilk; font-size:160%;">Personal Details of Students</p>

        <div class="content" align="center">
            <form name="studentpersonaldata" method="POST" action="personaldetails.php">
                <table>
                    <p style="font-size: 120%;">Search by: </p>
                    <tr>
                        <td>
                            <input type="radio"  name="searchby" value="IndexNo">
                            <label for="indexno">Index No</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="searchby" value="RegNo">
                            <label for="regno">Reg No</label><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="radio" name="searchby" value="Name">
                            <label for="name">Name</label><br>
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

        <h2><a href = "../login/logout.php">Sign Out</a></h2> 
    </body>
</html>