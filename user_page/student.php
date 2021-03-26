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
    #sem_prog{
      background-color: white;
      width: 70%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      border-radius: 10px;
      padding: 20px 20px;
      margin-left: 13%;
    }


#progress {
    background: #333;
    border-radius: 13px;
    height: 20px;
    width: 90%;
    padding: 3px;
    margin: 20px 50px;
}

#progress:after {
    content: '';
    display: block;
    background: orange;
    width: <?php echo "30";?>%;
    height: 100%;
    border-radius: 9px;
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 20px;
  padding: 20px;
}

.grid-container > div {
  background-color: white;
  text-align: left;
  padding: 0px 20px;
  border-radius: 10px;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
}

.item2 {
  grid-column: 1 / 2;
  grid-row: 1/2;
}
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
  		<center><a href="../login/logout.php" style="all:unset ; "><button style="margin-top: 20%;" id="logout">Log out</button></a></center>
	  </div>

    <?php
    include("./student/config/get_name_forstudentpage.php");
    ?>

    <ul>
      <li style="margin-right: 258px" class="dropdown">
        <img src="./student/Profile_photo/<?php echo $Userpic ?>" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
        <div class="dropdown-content">
            <a href="./student/Account_Setting.php">Setting</a>
            <a href="../login/logout.php">Log out</a>
        </div>
      </li>
      
      <li style="margin: 25px 20px"><?php echo $UserName; ?></li>

      <li class="dropdown"> 
        <img src="../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
        <div class="dropdown-content1">
            <p>notifications are shown here</p>
        </div>
      </li>
    </ul>

	<div class="content">

    <center><font size="5px">Welcome to Student Information System of Cyber Campus, University of Colombo</font></center><br>
    <div id="sem_prog">
      <h3 align="center">Semester progress</h3>
      <div id="progress"></div>
    </div>

    <div class="grid-container">
      <div class="item1">
        <h3 style="background-color: green;border-radius: 10px;padding: 5px;color: white" align="center">News</h3>
        <p>Dengue prevention

          Under the dengue prevention uoc has arranged free blood testing facility for the undergraduate who are downed with fever. Those fever infected students have to report to university medical center before 9.30 am for the sample collection. For more detail contact medical center. Please pass this important message all students.</p>
      </div>
      <div class="item2">
        <h3 style="background-color: purple;border-radius: 10px;padding: 5px;color: white" align="center">Event calender</h3>
        <iframe src="https://calendar.google.com/calendar/embed?src=en.lk%23holiday%40group.v.calendar.google.com&ctz=Asia%2FColombo" style="border: 0" width="500px" height="300px" frameborder="0" scrolling="no"></iframe>
      </div>
 
      
    </div>
      
    
	</div>

</body>
</html>