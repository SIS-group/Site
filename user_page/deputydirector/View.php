<!DOCTYPE html>
<html>
<title>Deputy Director</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0.1">
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
  <link rel="stylesheet" type="text/css" href="../css/css.css">
  <link rel="stylesheet" type="text/css" href="../css/top_navigation.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
  </style>
  </head>
  <body>
    <div class="sidebar">
    	<center><img src="../icons/logo.png" style="width:100px;height:90px;" >
          
      </center>
      <a class="active" href="">Paper Marking Progress</a>
    	<a href="deputydirector/Dx1.php">Student Results & Grades</a>
  		<a href="#">Verify Result Sheet</a>
  		<a href="deputydirector/DD5.php">Account Settings</a>
  		<a href="../login/logout.php" style="all:unset ; "><button style="margin-top: 10%;margin-left: 25%" id="logout">Log out</button></a>
    </div>
    
    <ul>
      <li style="margin-right: 258px" class="dropdown">
      
      <div class="dropdown-content">
            <a href="./student/Account_Setting.php">Setting</a>
            <a href="../login/logout.php">Log out</a>
        </div>
      </li>
      <li style="margin: 25px 20px"><?php //echo $UserName; ?></li>
      <li > 
        <img src="../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top: 15px">
      </li>
    </ul>
   
    
  <?php
      $c_id = $_REQUEST["id"];
      $conn = mysqli_connect("localhost", "root", "", "sis2");
      // Check connection
      if ($conn->connect_error) 
      {
        die("Connection failed: " . $conn->connect_error);
      } 
      $sql = "SELECT * FROM result WHERE CourseID = '$c_id' ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) 
      {
          // output data of each row
          while($row = $result->fetch_assoc()) 
          { ?>
              <header class="w3-container" style="padding-top:22px">
              <h5><b>Course Id: <?php $code = $row['CourseID'];
              echo $code; ?></b></h5>
              </header>
          <?php
        }
      } 
      else 
      { 
        echo ""; 
      }
      $conn->close();
  ?>

    <table class="w3-table">
      <tr>
        <th nowrap="true">Information</th>
        <th nowrap="true">Files</th>
      </tr>

       <?php
      $c_id = $_REQUEST["id"];
      $conn = mysqli_connect("localhost", "root", "", "sis1");
      // Check connection
      if ($conn->connect_error) 
      {
        die("Connection failed: " . $conn->connect_error);
      } 
      $sql = "SELECT * FROM result WHERE CourseID = '$c_id' ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) 
      {
          // output data of each row
          while($row = mysqli_fetch_array($result)) 
          {?>
            <tr>
              <td nowrap="true">
                <label><strong>Course Id: &nbsp;</strong></label><?php echo $row['CourseID']; ?><br>
                <label><strong>Examiner Id: &nbsp;</strong></label><?php echo $row['Examiner_ID']; ?><br>
                <label><strong>Examiner Level: &nbsp;</strong></label><?php echo $row['Examiner_Level']; ?><br>
                <label><strong>Verification: &nbsp;</strong></label><?php echo $row['Verifying_status']; ?><br>
                <label><strong>Marking Status: &nbsp;</strong></label><?php echo $row['Marking_Status']; ?><br>
                <label><strong>Issues: &nbsp;</strong></label><?php echo $row['Issues/changes']; ?><br>
                <label><strong>Release Date: &nbsp;</strong></label><?php echo $row['Release_Date']; ?>
              </td>
              <td nowrap="true"><a href="http://localhost/phpmyadmin/tbl_get_field.php?db=sis&table=result&where_clause=%60result%60.%60CourseID%60+%3D+%271001%27+AND+%60result%60.%60Marking_Status%60+%3D+1&transform_key=File&sql_query=SELECT+%2A+FROM+%60result%60+ORDER+BY+%60CourseID%60+ASC+&where_clause_sign=a280be40941af14f4176d17909351c36010575e75a79fc3a3b43fc40ba3a1811" class="btn btn-warning" style="color: #000;">Download Document</a></td>
            </tr>
          <?php   
          }
      } 
      else 
      { 
        echo ""; 
      }
      $conn->close();
  ?>

    </table>

  
</body>
</html>
