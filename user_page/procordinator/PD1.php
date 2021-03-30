<?php

if (isset($_POST['verify'])) 
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sis1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$c_id = $_POST['cid'];

$sql ="UPDATE result SET Verifying_status = 'Verified' WHERE CourseID = '$c_id' ";

if ($conn->query($sql) === TRUE) 
{
  echo '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
  <a href="update.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fas fa-check-circle"></i> Upload Success!</strong> Your Details Updated Successfully.</div>';
  echo "<script>setTimeout(function () {window.location.href= 'DD1.php';}, 4000);</script>";
} 
else 
{
  echo '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
  <a href="update.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fas fa-exclamation-triangle"></i> Upload Error!</strong> Please Register First.</div>';
  echo "<script>setTimeout(function () {window.location.href= 'DD1.php';}, 4000);</script>";
}

$conn->close();
}
?>

<!DOCTYPE html>
<html>
  <head>
<title>Program Coordinator</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
  <link rel="stylesheet" type="text/css" href="../css/css.css">
  <link rel="stylesheet" type="text/css" href="../css/top_navigation.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <style type="text/css">
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: right;
  padding: 0.1px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

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
    	<center><img src="../icons/logo.png" style="width:80px;height:80px;" >
          
      </center>
      <a class="../pmarking.php" href="">Paper Marking Progress</a>
    	<a href="../procordinator.php">Student Results & Grades</a>
  		<a href="#">Course Statistics</a>
  		<a href="../procordinator/account_Setting.php">Account Settings</a>
  		<a href="../login/logout.php" style="all:unset ; "><button style="margin-top: 20%;margin-left: 25%" id="logout">Log out</button></a>
    </div>
    
    <ul>
      <li style="margin-right: 258px" class="dropdown">
      <img src="../icons/default.png<?php //echo $Userpic ?>" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
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
    <h5><b><i class="fa fa-eye"></i> course statistics</b></h5>
  </header>
   

  <table>
  <tr>
    <th>CourseID</th>
    <th>CourseID</th>
    <th>Course Name</th>
    <th>No. of Students</th>
    <th>Programme Id</th>
    <th>Credits</th>

  </tr>
  <?php
                $conn = mysqli_connect("localhost", "root", "", "sis1");
                // Check connection
                if ($conn->connect_error) 
                {
                  die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "SELECT CourseID, Name, No_of_Students, Semester, ProgramID,Credits FROM course ORDER BY CourseID ASC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {

                    $id = $row['CourseID'];
            ?>
  <tr>
    
    <td><?php echo $row['CourseID']; ?></td>
    <td><?php echo $row['CourseID']; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['No_of_Students']; ?></td>
    <td><?php echo $row['ProgramID']; ?></td>
    <td><?php echo $row['Credits']; ?></td>
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
</form>

  
</body>
</html>
