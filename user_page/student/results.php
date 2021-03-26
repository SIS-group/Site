<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/sidepanel.css">
  	<link rel="stylesheet" type="text/css" href="../../css/css.css">
  	<link rel="stylesheet" type="text/css" href="../../css/top_navigation.css">
  	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
 	<style type="text/css">
    	table{background-color: white; padding: 10px 10px; border-radius: 10px ;margin-bottom: 5%;width: 50%}
    	th, td {padding: 15px;border-bottom: 1px solid #ddd;}
    	th{background-color: #4B0082;border-radius: 10px;color: white}
    	tr:hover {background-color: #f2f2f2;}
    	body{font-family: 'Raleway', sans-serif;}
 	</style>
</head>
<body>
	
    <div class="sidebar">
    	<center><img src="../../icons/logo.png" style="width:80px;height:80px;" >
          <div id="sys">Student Information System of Cyber Campus, University of Colombo</div>
      </center>
      	<a href="../student.php">Home</a>
    	<a class="active" href=" ">Results & Grades</a>
  		<a href="./Medical.php">Medical Submission</a>
  		<a href="./course_reg.php">Course Registration</a>
  		<a href="./payment.php">Payment Details</a>
  		<center><a href="../../login/logout.php" style="all:unset ; "><button style="margin-top: 20%;" id="logout">Log out</button></a></center>
	  </div>

    <?php include("./config/get_name.php") ?>

    <ul>
     	<li style="margin-right: 258px" class="dropdown">
			<img src="./Profile_photo/<?php echo $Userpic ?>" style="width: 60px;height: 60px;border-radius: 50%;" class="dropbtn">
			<div class="dropdown-content">
      			<a href="Account_Setting.php">Setting</a>
      			<a href="../../login/logout.php">Log out</a>
    		</div>
	  	</li>
    	<li style="margin: 25px 20px"><?php echo $UserName; ?></li>
    	
    	<li class="dropdown"> 
        	<img src="../../icons/bell.png" style="width: 40px;height: 40px;border-radius: 50%;background-color: white;margin-top:15px" class="dropbtn">
        	<div class="dropdown-content1">
            	<p>notifications are shown here</p>
        	</div>
      	</li>
    </ul>

	<div class="content">
  	
    <?php
      include ("./config/get_result.php");
      if ( $result2->num_rows > 0) {
        
        $stat1 = $stat2 = $stat3 = $stat4 = $stat5 = $stat6 = $stat7 = $stat8 = 0;
        // output data of each row
        while($row2 = $result2->fetch_assoc()) { 
          
          $Year = $row2["Year"];
          $Sem =  $row2["Semester"];


          if($Year == '1'){
            if ($Sem == '1') {
              
              if($stat1==0){
                $stat1=1;
                echo "<table align='center'>
                        <tr>
                            <th colspan=2>
                                <h2>1<sup>st</sup> Year - 1<sup>st</sup> Semester Results</h2>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td style='background-color: #4B0082;border-radius: 10px;color: white'><center>".$row2["Result"]."</center></td>
                    </tr>";

            }
            
            elseif ($Sem == '2') {
              

              if($stat2==0){
                echo "</table>";
                $stat2=1;
                echo "<table align='center'>
                        <tr>
                            <th colspan=2>
                                <h2>1<sup>st</sup> Year - 2<sup>nd</sup> Semester Results</h2>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td style='background-color: #4B0082;border-radius: 10px;color: white'><center>".$row2["Result"]."</center></td>
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
                                <h2>2<sup>nd</sup> Year - 1<sup>st</sup> Semester Results</h2>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td style='background-color: #4B0082;border-radius: 10px;color: white'><center>".$row2["Result"]."</center></td>
                    </tr>";
            }
            elseif ($Sem == '2') {
              
              if($stat4==0){
                echo "</table>";
                $stat4=1;
                echo "<table align='center'>
                        <tr>
                            <th colspan=2>
                                <h2>2<sup>nd</sup> Year - 2<sup>nd</sup> Semester Results</h2>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td style='background-color: #4B0082;border-radius: 10px;color: white'><center>".$row2["Result"]."</center></td>
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
                                <h2>3<sup>rd</sup> Year - 1<sup>st</sup> Semester Results</h2>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td style='background-color: #4B0082;border-radius: 10px;color: white'><center>".$row2["Result"]."</center></td>
                    </tr>";
            }
            elseif ($Sem == '2') {
              if($stat6==0){
                echo "</table>";
                $stat6=1;
                echo "<table align='center'>
                        <tr>
                            <th colspan=2>
                                <h2>3<sup>rd</sup> Year - 2<sup>nd</sup> Semester Results</h2>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td style='background-color: #4B0082;border-radius: 10px;color: white'><center>".$row2["Result"]."</center></td>
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
                                <h2>4<sup>th</sup> Year - 1<sup>st</sup> Semester Results</h2>
                            </th>
                        </tr>";
              }
              echo "<tr>
                      <td>".$row2["Name"]."</td>
                      <td style='background-color: #4B0082;border-radius: 10px;color: white'><center>".$row2["Result"]."</center></td>
                    </tr>";
            }
            elseif ($Sem == '2') {
              if($stat8==0){
                echo "</table>";
                $stat8=1;
                echo "<table align='center'>
                        <tr>
                            <th colspan=2>
                                <h2>4<sup>th</sup> Year - 2<sup>nd</sup> Semester Results</h2>
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