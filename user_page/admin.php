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
  .site_visit {
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    margin: 10px 20px;
    border-radius: 10px;
    background-color: white;
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
  		<a href="../login/logout.php" style="all:unset ; "><button style="margin-top: 40%;margin-left: 20%" id="logout">Log out</button></a>
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

	<div class="content">
    <div class="site_visit">
      <br><label>Site Visits this week</label><br>
      <img src="../icons/site.png">
    </div>
    <div class="grid-container">
      <div>
        <font size="3px"> Active users </font>
        <br> 47
      </div>
      <div>
          Recently Log on users
      </div>
 
      
    </div>
  </div>

  		
	</div>
</body>
</html>