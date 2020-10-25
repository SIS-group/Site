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
  		<a href="./interview_committee_member/studentpaymentdetails.php">Student Payment Details</a>
  		<a href=" ./interview_committee_member/account_settings.php">Account settings</a>
  		<a href="../login/logout.php" style="all:unset ;padding: 25%; "><button>Log out</button></a>
	</div>
        <div class="container1">
            <p style="font-size:160%; color:cornsilk;">Student Registrations</p>
        </div>
        <div class="content">
            <?php
                include './interview_committee_member/reg.php';
            ?>
        </div>
    </body>
</html>