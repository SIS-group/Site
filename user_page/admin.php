<!DOCTYPE html>
<html>
<head>
	<title>Welocme Admin</title>
  <link rel="stylesheet" type="text/css" href="../css/css.css">
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
  <link rel="stylesheet" type="text/css" href="../css/top_navigation.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">

  body{font-family: 'Raleway', sans-serif;}
  #grid2{font-size: 17px;padding: 20px 20px}

  .site_visit {
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    margin: 10px 20px;
    border-radius: 10px;
    background-color: white;
    width: 70%;
    height: 50%;
  }
  .site_visit img{
    padding: 20px 140px;
  }
  .site_visit label{
    padding: 50px 20px;
  }

  .grid-container {
    display: grid;
    grid-template-columns: auto auto;
    grid-gap: 20px;
    padding: 20px;
  }

  .grid-container > div {
    background-color: white;
    text-align: center;
    padding: 40px 0;
    font-size: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
  }
    
</style>

</head>
<body>
	<div class="sidebar">
      <center><img src="../icons/logo.png" style="width:80px;height:80px;" >
      <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
      </center>
  		<a class="active" href="">Dashboard</a>
  		<a href="./Admin/manage_accounts.php ">Manage User Accounts</a>
  		<a href="./Admin/prog_manage.php">Program Managment</a>
  		<a href="./Admin/course_manage.php">Course Managment</a>
      <a href="./Admin/broadcast.php">Broardcast Notifications</a>
      <a href="./Admin/manage_deadlines.php">Manage Deadlines</a>
  		<a href="../login/logout.php" style="all:unset ; "><button style="margin-top: 20%;margin-left: 20%" id="logout">Log out</button></a>
	</div>

  <ul> 
    <li style="margin-right: 275px" class="dropdown">
      <img src="../icons/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
      <div class="dropdown-content">
            <a href="./admin/account_setting.php">Setting</a>
            <a href="../login/logout.php">Log out</a>
        </div>
    </li>
      <li style="margin: 25px 20px">Welcome , Admin</li>
  </ul>

  <?php include ("./admin/config/get_users.php"); ?>
	<div class="content">
    <div class="site_visit" align="center">
    <div id="chart_div" style="width: 95%; height: 350px;border-radius: 10px">
      
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'No of Visits'],
          ['Monday',  22],
          ['Tuesday',  30],
          ['Wednesday',  16],
          ['Thursday',  10],
          ['Friday',  20],
          ['Saturday',  19],
          ['Sunday',  12]
        ]);

        var options = {
          title: 'Site Visits',
          hAxis: {title: 'Day',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    </div>
    </div>
    <div class="grid-container">
      <div id="grid1" style="background-color: ">
        <font size="5px" style="background-color: #4B0082;padding: 10px;border-radius: 10px;color: white"> Active users </font>
        <br><br> 
        <?php 
        echo $active_users; 
        ?>
      </div>
      <div id="grid2">
          <center><font size="5px" style="background-color: #4B0082;padding: 10px;border-radius: 10px;color: white">Recently Logged in Users</font><br><br>
          <?php
          if ( $result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) { 
              echo $row['Username'];
          ?>
          <br>
        <?php } } ?>
         <br>
        </center>
      </div>
 
      
    </div>
  </div>

  		
	</div>
</body>
</html>