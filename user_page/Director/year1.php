<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "sis11";
 $conn = new mysqli($servername, $username, $password, $dbname) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }

 $phpVariable = $_GET['phpVariable'];
 ?>


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


    #myInput  {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 49%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 5px solid #ddd;
  margin-bottom: 12px;
}
#myInput2  {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 49%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 5px solid #ddd;
  margin-bottom: 12px;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2; }

#customers tr: {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000080;
  color: white;
  text-align: center;
}

      
    .button {
  background-color: #7FFFD4;
  border: 2px solid #008CBA;
  border-radius: 20px;
  color: #000000;
  padding: 15px 28px;
  text-align: left;
  text-decoration: none;
  display: inline-block;  
  font-size: 16px;
  margin: 4px 5px;
  cursor: pointer;
  margin-left: 0%;
}

.button:hover {
  background-color: #F0F8FF; /* Green */
  color: green; }
.headers{
  text-decoration: underline blue;
  text-align:center;
}

.mybox{
  border: 3px #ccc solid; 
  padding : 80px;
  border-radius: 50px;
  margin-left: 17%;
  margin-top: 6%;
  margin-right: 1%;
  padding-left: 5px;

}
    table{background-color: white; padding: 10px 10px; border-radius: 10px ;}
    th, td {padding: 10px}
    tr:hover {background-color: #f2f2f2;border-bottom: 1px solid #ddd;}
    button:hover{background-color: grey}
    #reject:hover{background-color: red}
    input[type=submit]{margin-left: 7px}
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
    <a  href="yearviceStudentpersonal2.php">Student Personal Details</a>
    
      <a href="paymentdetails2.php">Student Payment Details</a>
      <a href="coursestatprogram2.php">Course Statistic</a>
      <a class="active" href="yearvice2.php">Student results and grades</a>
      
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
      <li style="margin: 25px 20px"><?php echo "Director" ?></li>
      
      <li class="dropdown"> 
          <img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
          <div class="dropdown-content1">
              <p>notifications are shown here</p>
          </div>
        </li>
    </ul>

    <div class="headers">
  
</div>



<div class="mybox">
<table id="customers">
  <tr>
    <th>CourseID</th>
    <th>Name</th>
    <th>Semester</th>
    <th>Credits</th>
  </tr>
  
      <?php
                $conn = mysqli_connect("localhost", "root", "", "sis11");
                // Check connection
                if ($conn->connect_error) 
                {
                  die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "SELECT CourseID,Name ,Semester, Credits FROM course  WHERE Year='1' ORDER BY Semester ASC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {

                    $id = $row['CourseID'];
            ?>
                      <tr>
                          
                          <td   align='center'><form class="visible" method="get" action="coursevise.php"><input type=submit name="phpVariable" value="<?php echo $row['CourseID']; ?>" style="width:100%"></form></td>

                         
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Name']; ?></td>
                          
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Semester']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Credits']; ?></td>
                          
                        
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
</div>


</body>
</html>
