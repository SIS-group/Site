<!DOCTYPE html>
<html>
<head>
  <title>Manage User Accounts</title>
  <link rel="stylesheet" type="text/css" href="../../css/css.css">
  <link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
  <link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <style type="text/css">
    body{font-family: 'Raleway', sans-serif;}
    #broadcast{
      background-color: white;
      margin: 50px 50px;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
      border-radius: 10px;
      padding: 20px 20px
    }
    h2{background-color: #002b80;color: white;border-radius: 10px ;padding: 20px 20px;width: 50%}
    textarea{border-radius: 10px}
  </style>
</head>
<body>
  <div class="sidebar">
    <center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
        <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
        </center>
      <a href="../Admin.php">Dashboard</a>
      <a href=" ./manage_accounts.php ">Manage User Accounts</a>
      <a href=" ./prog_manage.php">Program Managment</a>
      <a href="./course_manage.php">Course Managment</a>
      <a class="active" href="./broadcast.php">Broardcast Notifications</a>
      <a href="../../login/logout.php" style="all:unset ; "><button style="margin-top: 40%;margin-left: 20%" id="logout">Log out</button></a>
  </div>

  <ul> 
    <li style="margin-right: 275px" class="dropdown">
      <img src="../../icons/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
      <div class="dropdown-content">
            <a href="./account_setting.php">Setting</a>
            <a href="../../login/logout.php">Log out</a>
        </div>
    </li>
      <li style="margin: 25px 20px">Welcome , Admin</li>
    </ul>

  <div class="content">
    
    <div id="broadcast" align="center">
      <h2 align="center">Broadcast Notifications</h2>
      Type the Message here <br><br> <textarea rows="5" cols="50"></textarea><br><br>
      Target Audience
      <input type="checkbox" name="Student">Student
      <input type="checkbox" name="Staff">Staff
      <br><br><button>Send</button>
    </div>

  </div>

</body>
</html>