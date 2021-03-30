<!DOCTYPE html>
<html>
<head>
	<title>Student Personal Details</title>
	<link rel="stylesheet" type="text/css" href="../../css/css.css">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
	<link rel="stylesheet" type="text/css" href="../../css/image_view.css">
	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">

		.button {
  background-color: #7FFFD4;
  border: 2px solid #008CBA;
  border-radius: 20px;
  color: #000000;
  padding: 15px 26px;
  text-align: left;
  text-decoration: none;
  display: inline-block;  
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin-left: 2%;
}

.button:hover {
  background-color: #F0F8FF; 
  color: green; }
.headers{
  text-decoration: underline blue;
  text-align:center;
}

.mybox{
  border: 3px #6495ED solid; 
  padding : 80px;
  border-radius: 50px;
  margin-left: 20%;
  margin-top: 6%;
  margin-right: 1%;

}
.DirectorHover a:link {color:blue;}
.DirectorHover a:hover {color:black;  background-color:#002b80;}
		table{background-color: white; padding: 10px 10px; border-radius: 10px ;}
		th, td {padding: 10px}
		tr:hover {background-color: #f2f2f2;border-bottom: 1px solid #ddd;}
		button:hover{background-color: grey}
		#reject:hover{background-color: red}
		input[type=submit]{margin-left: 30px}
		body{font-family: 'Raleway', sans-serif;}
		h1{background-color: #002b80;color: white;padding: 20px 20px;margin: 1% 14%;border-radius: 10px}
	</style>
	<script src="../../js/showimage.js"></script>
</head>
<body>
	<div class="sidebar">

		<center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
			<div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
		</center>
		<a href="yearviceStudentpersonal2.php">Student Personal Details</a>
		
  		<a href="paymentdetails2.php">Student Payment Details</a>
  		<a href="coursestatprogram2.php">Course Statistic</a>
  		<a class="active"  href="yearvice2.php">Student results and grades</a>
  		
  		<a href="accountS2.php"> Account Settings</a>
  		<a href="../../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>

	</div>

    <ul>
     	<li style="margin-right: 270px" class="dropdown">
			<img src="../Assistant_bursar/Profile_photo/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
			<div class="dropdown-content">
      			<a href="accountS2.php">Setting</a>
      			<a href="../../login/logout.php">Log out</a>
    		</div>
		</li>
       <div class = "DirectorHover" > 
     	<li style="margin: 25px 20px"><a href="../Director.php">Director</a></li>
    	</div>
    	<li class="dropdown"> 
        	<img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
        	<div class="dropdown-content1">
            	<p>notifications are shown here</p>
        	</div>
      	</li>
    </ul>

    <div class="headers">
  <h2>View Results</h2>
</div>

<div class="mybox">
  <a href="year1.php" class="button">First year students</a>
  <a href="year2.php" class="button">Second year students</a>
  <a href="year3.php" class="button">Third year students</a>
  <a href="year4.php" class="button">Fourth year students</a>
</div>

	
</body>
</html>

