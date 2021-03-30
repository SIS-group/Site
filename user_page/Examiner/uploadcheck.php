<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="../css/css.css">
  <link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
  <link rel="stylesheet" type="text/css" href="../css/image_view.css">
  <link rel="stylesheet" type="text/css" href="../css/top_navigation.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <style type="text/css">

    input[type="checkbox"]
{
    vertical-align:middle;
}



    table{background-color: white; padding: 10px 10px; border-radius: 10px ;}
    th, td {padding: 10px}
    tr:hover {background-color: #f2f2f2;border-bottom: 1px solid #ddd;}
    button:hover{background-color: grey}
    #reject:hover{background-color: red}
    input[type=submit]{margin-left: 30px}
    body{font-family: 'Raleway', sans-serif;}
    h1{background-color: #002b80;color: white;padding: 20px 20px;margin: 1% 14%;border-radius: 10px}



      .mybox{
  border: 3px #ccc solid; 
  padding : 80px;
  border-radius: 50px;
  margin-left: 17%;
  margin-top: 6%;
  margin-right: 1%;
  padding-left: 5px;

}


    .box1{

      border-radius: 15px;
      margin-left: 30%;
      margin-right: 20%;
      margin-top: 1%;
      border : 20px;
      padding-top: 10%;
      border: 2px solid #008CBA;
      border-radius: 15px;
      background-color: #6495ED;
      padding: 20px;

    }

    .btnl{
            margin-top: 5%;
            margin-left: ;
    }

       .box2{

      border-radius: 15px;
      margin-left: 30%;
      margin-right: 20%;
      margin-top: 7%;
      border : 20px;
      padding-top: 10%;
      border: 2px solid #008CBA;
      border-radius: 15px;
      background-color: #6495ED;
      padding: 20px;

    }

    .checkb{
      margin-top: 4%;
    }
   .DirectorHover a:link {color:blue;}
  .DirectorHover a:hover {color:black;  background-color:#002b80;}

  </style>
  <script src="../js/showimage.js"></script>
</head>
<body>

<?php

    session_start();
    $username = $_SESSION['login_user'];
     
  ?>


  <div class="sidebar">

    <center><img src="../icons/logo.png" style="width:80px;height:80px;" >
      <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
    </center>
    
    
      <a href="Examiner/reportissues.php">Report issues</a>
      <a href="Examiner/accountS2e1.php">Account Settings</a>
    
      <a href="../login/logout.php" target="_self" style="all:unset ;"><button id="logout" style="margin-top: 80%;margin-left: 25%">Log out</button></a>

  </div>

    <ul>
      <li style="margin-right: 270px" class="dropdown">
      <img src="../Assistant_bursar/Profile_photo/default.png" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
      <div class="dropdown-content">
            <a href="Examiner/accountS2e1.php">Setting</a>
            <a href="../login/logout.php">Log out</a>
        </div>
    </li>
    <div class = "DirectorHover" > 
      <li style="margin: 25px 20px"><a href="Examiner.php">Examiner</a></li>
    </div>
      <li class="dropdown"> 
          <img src="../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
          <div class="dropdown-content1">
              <p>notifications are shown here</p>
          </div>
        </li>
    </ul>

 
      <div class="mybox">
        <?php
          echo "<h2> Examiner ID : {$username}</h2> ";
          echo "<h3> Select a CourseID to open its paper marking progress. </h3> ";



        ?>
          
     
  <table id="customers">
  <tr>
    <th>ExaminerID</th>
    <th>ProgramID</th>
    <th>CourseID</th>
    <th>Year</th>
    <th>Semester</th>
    <th>ExaminerLVL</th>
    <th>1st ppr marking progress</th>
    <th>2nd ppr marking progress</th>
    
  </tr>
  
      <?php
                $conn = mysqli_connect("localhost", "root", "", "sis11");
                // Check connection
                if ($conn->connect_error) 
                {
                  die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "SELECT examinerID,ProgramID ,CourseID,year,sem,examinerLVL,1st_marking_progress,2nd_marking_progress FROM examinertable WHERE examinerID ='$username'  ORDER BY ProgramID  ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {

                    $id = $row['examinerID'];
            ?>
                      <tr>
                          
                          
                          
                          
                          <td nowrap="true" style="text-align: center;"><?php echo $row['examinerID']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['ProgramID']; ?></td>

                          <td align='center'><form method="post" action="Examiner/Examiner1.php"><input type=submit class="button" name="phpVariable" value="<?php echo $row['CourseID']; ?>" style="width:80%"></form></td>

                          <td nowrap="true" style="text-align: center;"><?php echo $row['year']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['sem']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['examinerLVL']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['1st_marking_progress']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['2nd_marking_progress']; ?></td>
                          
                          
                        
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




    
    <div class="box2">

        <h3 align="center">Update paper marking progress</h3>
    <form action="/action_page.php">
    <label for="fname"> Subject Code</label>
    <input type="text" id="fname" name="firstname" placeholder="Subject Code..">
      <br /><br />
     <label class="container">1st Examiner
          <input type="radio" checked="checked" name="radio">
          <span class="checkmark"></span>
        </label>
        <label class="container">2nd Examiner
          <input type="radio" disabled="" name="radio">
          <span class="checkmark"></span>
          </label>
            <br/>

            <div class="checkb">
          <label class="container">1st paper marking in progress
          <input type="checkbox" >
          <span class="checkmark"></span>
        </label>
        <br />
        <label class="container">1st paper marking is done
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <br />
        <label class="container">2nd paper marking in progress
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <br />
        <label class="container">2nd paper marking is done
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <br />
        <label class="container">result sheet uploaded
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </div>

  </div>

 
  <div class="box1">
   <h3 align="left">Upload Result Sheets</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel File</label>
    <input type="file" name="excel" />
    <br />

        

      
     

    <input type="submit" name="import" class="btnl" value="Import" />
   </form>
   <br />
   <br />
  
  </div>

  

  
</body>
</html>

