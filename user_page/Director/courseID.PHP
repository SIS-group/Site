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
 echo $phpVariable; 

 ?>
   


<!doctype html>
<html>
<head>
	<title>Director</title>
	<link rel="stylesheet" type="text/css" href="Dstyle.css">

</head>

<body>
    <div class="container">
	

<div class="categoriess">
	<h2> Results and gradings </h2>
	<h1> Dashboard </h1>

</div>
</div> <!--container ends-->

<table class="w3-table">
    <tr>
      <th nowrap="true" style="text-align: center;">CourseID</th>
      <th nowrap="true" style="text-align: center;">Name</th>
      <th nowrap="true" style="text-align: center;">No_of_Students</th>
      <th nowrap="true" style="text-align: center;">Semester</th>
       <th nowrap="true" style="text-align: center;">ProgramID</th>

      
    </tr>
    
    <?php
                $conn = mysqli_connect("localhost", "root", "", "sis11");
                // Check connection
                if ($conn->connect_error) 
                {
                  die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "SELECT CourseID, Name,No_of_Students,Semester, ProgramID FROM course WHERE CourseID ='$phpVariable'";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {

                    $id = $row['CourseID'];
            ?>
                      <tr>
                          
                        
                          <td nowrap="true"style="text-align: center;"><?php echo $row['CourseID']; ?></td>
                          <td nowrap="true"style="text-align: center;"><?php echo $row['Name']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['No_of_Students']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Semester']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['ProgramID']; ?></td>
                          
                          
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