<!DOCTYPE html>
<html>
  <head>
<title>Deputy Director</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="UTF-8">
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
  grid-row: 1/3;
}
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


.button2 {background-color: #008CBA;}
  </style>
  </head>
  <body>
    <div class="sidebar">
    	<center><img src="../icons/logo.png" style="width:80px;height:80px;" >
      <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
          
      </center>
      <a  href="#">Paper Marking Progress</a>
    	<a href="../deputydirector.php">Student Results & Grades</a>
  		<a href="../deputydirector/verify.php">Verify Result Sheet</a>
  		<a href="../deputydirector/account_setting.php">Account Settings</a>
  		<a href="../login/logout.php" style="all:unset ; "><button style="margin-top: 20%;margin-left: 25%" id="logout">Log out</button></a>
    </div>
    
    <ul>
      <li style="margin-right: 258px" class="dropdown">
      <img src="../icons/default.png"<?php //echo $Userpic ?> style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
      <div class="dropdown-content">
            <a href="./student/Account_Setting.php">Setting</a>
            <a href="../login/logout.php">Log out</a>
        </div>
      </li>
      <li style="margin: 25px 20px">Welcome , deputydirector</li>
      <li style="margin: 25px 20px"><?php //echo $UserName; ?></li>
      <li > 
        <img src="../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top: 15px">
        <div class="dropdown-content1">
            	<p>notifications are shown here</p>
        	</div>
      </li>
    </ul>
    <h1>Paper Marking Progress </h1>
    <div class="content">
    <div class="w3-container">

<?php

  $y = $_GET['year'];

	// Database credentials
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sis2';

// Create connection and select db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get data from database
$result = $db->query("SELECT *  FROM course WHERE Year = '$y' ");
?> <h2>Paper Marking Progress in Year <?php echo $y; ?></h2>
      <?php if($result->num_rows > 0)
      {
          while($row = $result->fetch_assoc())
          {?>
            <div class="w3-light-grey">
            <p><?php 
            
            echo $row['Name'];
            $id = $row['CourseID'];

            $result2 = $db->query("SELECT Marking_Status  FROM result WHERE CourseID = '$id' ");
            if($result2->num_rows > 0)
            {
              while($row2 = $result2->fetch_assoc())
              {
               $st = $row2['Marking_Status'];
               $dv = $st/5;
               $ps = $dv*100;
              ?>
        <?php if($ps > 0)
              {?>
                </p>
                <div class="w3-container w3-indigo w3-center" style="width:<?php echo $ps; ?>%">
                <?php echo $ps; echo "%"; ?><div id="percent"></div></div>
                </div><br>

        <?php }
              
                
              }
            }
            else
              {?>
                </p>
                <div class="w3-container w3-indigo w3-center" style="width:0%">
                0%<div id="percent"></div></div>
                </div><br>
             <?php }
            
          }
      }

?>
</div>
</div>

  </body>
</html>
