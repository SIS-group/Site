<?php

$db = mysqli_connect("localhost","root","","sis2");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['Verify'])) // when click on Update button
{
    $exid = $_POST['eid'];
	
    $edit = mysqli_query($db,"UPDATE result SET Verifying_status='Verified' WHERE Examiner_ID='$exid'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:verify.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<!DOCTYPE html>
<html>
  <head>
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


.button
{
  border: none;
  color: white;
  padding: 13px 40px;
  text-align: center;
  text-decoration: none;
  background-color: #002b80;
  border-radius: 40px;
  color: white
}
.button:hover
{
  background-color: #4CAF50;
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
      <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
          
      </center>
      <a class="../deputydirector/pmarking.php" href="">Paper Marking Progress</a>
    	<a href="../deputydirector.php">Student Results & Grades</a>
  		<a href="#">Verify Result Sheet</a>
  		<a href="../deputydirector/account_setting.php">Account Settings</a>
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
   
    <header class="w3-container" style="padding-top:30px">
    <h5><b><i class="fa fa-eye"></i> Verify Result Sheet</b></h5>
  </header>
  <form action="verify.php" method="POST">
   
    
  <table class="w3-table">
    <tr>
      <th nowrap="true" style="text-align: center;">Course Id</th>
      <th nowrap="true" style="text-align: center;">Examiner Id</th>
      
      <th nowrap="true" style="text-align: center;">Verification</th>
      <th nowrap="true" style="text-align: center;">Marking Status</th>
      
      <th nowrap="true" style="text-align: center;">Release Date</th>
      <th nowrap="true" style="text-align: center;">Action</th>
      
    </tr>
    
    <?php
                $conn = mysqli_connect("localhost", "root", "", "sis2");
                // Check connection
                if ($conn->connect_error) 
                {
                  die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "SELECT CourseID, Examiner_ID, Verifying_status, Marking_Status,Release_Date FROM result ORDER BY CourseID ASC";
                $result = $conn->query($sql);
                

                if($result)
                {
                if ($result->num_rows > 0) 
                { 
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {

                    $id = $row['CourseID'];
            ?>
                      <tr>
                          <td nowrap="true" style="display: none;"><input type="text" name="cid" value="<?php echo $row['CourseID']; ?>"></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['CourseID']; ?></td>
                          <td nowrap="true"style="text-align: center;"><?php echo $row['Examiner_ID']; ?></td>
                        
                          <td nowrap="true"style="text-align: center;"><?php echo $row['Verifying_status']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Marking_Status']; ?></td>
                          
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Release_Date']; ?></td>
                          <td nowrap="true" style="text-align: center;">
                            <br><a class="button" href="c.php?id=<?php echo $id ?>">View</a><br><br>
                            <form action="" method="POST">          
                            <input type="hidden" name="eid" value="<?php echo $row['Examiner_ID']; ?>"></input>
                            <input type="submit" name="Verify" value="Verify"></input>
                            </form>
                            
                            
                          </td>
                      </tr>
            <?php
                  }
                } 
              }
                else 
                { 
                  echo ""; 
                }
                $conn->close();
            ?>

            








  </table>
</form>


  </body>
</html>
