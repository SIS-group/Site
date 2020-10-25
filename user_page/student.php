
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
  <link rel="stylesheet" type="text/css" href="../css/css.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <style type="text/css">
    table{background-color: white; padding: 10px 10px; border-radius: 10px ; margin-top: 5% ; margin-bottom: 5%;width: 40%}
    th, td {padding: 10px;border-bottom: 1px solid #ddd;}
    th{background-color: #002b80;border-radius: 10px;color: white}
    tr:hover {background-color: #f2f2f2;}
    body{font-family: 'Raleway', sans-serif;}
  </style>
</head>
<body>
	
    <div class="sidebar">
    	<center><img src="../icons/logo.png" style="width:80px;height:80px;" ></center>
    	<a class="active" href="./student.php">Results & Grades</a>
  		<a href="./student/Medical.php">Medical Submission</a>
  		<a href="./student/course_reg.php">Course Registration</a>
  		<a href="./student/payment.php">Payment Details</a>
  		<a href="#contact">Notifications</a>
  		<a href="./student/Account_Setting.php">Account setting</a>
  		<a href="../login/logout.php" style="all:unset ; "><button style="margin-top: 20%;margin-left: 25%">Log out</button></a>
	</div>

	<div class="content">
  		
    <?php
      include ("../config/dbcon.php");
      include ("../config/session.php");
      $active_user = $user;
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $sql1 = "SELECT IndexNo FROM student WHERE RegNo='$user'";
      $result1 = mysqli_query($conn, $sql1);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      $index1 = $row1["IndexNo"];
       

      $sql2 = "SELECT student_result.CourseID,student_result.Result,course.Name,course.Year,course.Semester FROM course INNER JOIN student_result ON student_result.CourseID=course.CourseID WHERE student_result.IndexNo='$index1' ORDER BY course.Year,course.Semester";
      $result2 = mysqli_query($conn, $sql2);
      
      if (mysqli_num_rows($result2) > 0) {
        
        $stat1 = $stat2 = $stat3 = $stat4 = $stat5 = $stat6 = $stat7 = $stat8 = 0;
        // output data of each row
        while($row2 = mysqli_fetch_assoc($result2)) {
          
          $Year = $row2["Year"];
          $Sem =  $row2["Semester"];


          if($Year == '1'){
            if ($Sem == '1') {
              
              if($stat1==0){
                $stat1=1;
                echo "<table align='center'>
                        <tr>
                            <th colspan=2>
                                <h3>1 Year - 1st Semester Results</h3>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td><b>".$row2["Result"]."</b></td>
                    </tr>";

            }
            
            elseif ($Sem == '2') {
              

              if($stat2==0){
                echo "</table>";
                $stat2=1;
                echo "<table align='center'>
                        <tr>
                            <th colspan=2>
                                <h3>1 Year - 2nd Semester Results</h3>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td><b>".$row2["Result"]."</b></td>
                    </tr>";
            }
          }

          elseif ($Year == '2') {
            
            if ($Sem == '1') {
              if($stat3==0){
                echo "</table>";
                $stat3=1;
                echo "<table align='center'>
                        <tr>
                            <th colspan=2>
                                <h3>2nd Year - 1st Semester Results</h3>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td><b>".$row2["Result"]."</b></td>
                    </tr>";
            }
            elseif ($Sem == '2') {
              
              if($stat4==0){
                echo "</table>";
                $stat4=1;
                echo "<table align='center'>
                        <tr>
                            <th colspan=2>
                                <h3>2nd Year - 2nd Semester Results</h3>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td><b>".$row2["Result"]."</b></td>
                    </tr>";
            }
          }

          elseif ($Year == '3') {
            if ($Sem == '1') {
              if($stat5==0){
                echo "</table>";
                $stat5=1;
                echo "<table align='center'>
                        <tr>
                            <th colspan=2>
                                <h3>3rd Year - 1st Semester Results</h3>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td><b>".$row2["Result"]."</b></td>
                    </tr>";
            }
            elseif ($Sem == '2') {
              if($stat6==0){
                echo "</table>";
                $stat6=1;
                echo "<table align='center'>
                        <tr>
                            <th colspan=2>
                                <h3>3rd Year - 2nd Semester Results</h3>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td><b>".$row2["Result"]."</b></td>
                    </tr>";
            }
          }

          elseif ($Year == '4') {
            if ($Sem == '1') {
              if($stat7==0){
                echo "</table>";
                $stat7=1;
                echo "<table align='center'>
                        <tr>
                            <th colspan=2>
                                <h3>4th Year - 1st Semester Results</h3>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td><b>".$row2["Result"]."</b></td>
                    </tr>";
            }
            elseif ($Sem == '2') {
              if($stat8==0){
                echo "</table>";
                $stat8=1;
                echo "<table align='center'>
                        <tr>
                            <th colspan=2>
                                <h3>4th Year - 2nd Semester Results</h3>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td><b>".$row2["Result"]."</b></td>
                    </tr>";
            }
          }
        }
        
      } 
      else {
        echo "0 results";
      }
      
      //mysqli_close($conn);
      ?>
      
    
	</div>
</body>
</html>