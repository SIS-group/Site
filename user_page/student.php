<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
  <link rel="stylesheet" type="text/css" href="../css/css.css">
  <link rel="stylesheet" type="text/css" href="../css/top_navigation.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <style type="text/css">
    table{background-color: white; padding: 10px 10px; border-radius: 10px ;margin-bottom: 5%;width: 50%}
    th, td {padding: 15px;border-bottom: 1px solid #ddd;}
    th{background-color: #002b80;border-radius: 10px;color: white}
    tr:hover {background-color: #f2f2f2;}
    body{font-family: 'Raleway', sans-serif;}
  </style>
</head>
<body>
	
    <div class="sidebar">
    	<center><img src="../icons/logo.png" style="width:80px;height:80px;" >
          <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
      </center>
      <a class="active" href="">Home</a>
    	<a href="./student/Results.php">Results & Grades</a>
  		<a href="./student/Medical.php">Medical Submission</a>
  		<a href="./student/course_reg.php">Course Registration</a>
  		<a href="./student/payment.php">Payment Details</a>
  		<a href="#contact">Notifications</a>
  		<a href="./student/Account_Setting.php">Account setting</a>
  		<a href="../login/logout.php" style="all:unset ; "><button style="margin-top: 20%;margin-left: 25%">Log out</button></a>
	  </div>

    <?php

    include("./student/config/get_name_forstudentpage.php");
    ?>

    <ul>
      <li style="margin-right: 250px"><img src="./student/Profile_photo/user.jpg" style="width: 60px;height: 60px;border-radius: 50%;"></li>
      <li style="margin: 25px 10px"><?php echo $UserName; ?></li>
    </ul>

	<div class="content">
  	
      
    
	</div>
</body>
</html>