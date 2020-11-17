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
      <th nowrap="true" style="text-align: center;">IndexNo</th>
      <th nowrap="true" style="text-align: center;">Result</th>
    
      <th nowrap="true" style="text-align: center;">Action</th>
      
    </tr>
    
    <?php
                $conn = mysqli_connect("localhost", "root", "", "sis11");
                // Check connection
                if ($conn->connect_error) 
                {
                  die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "SELECT CourseID, Name,No_of_Students,Semester, ProgramID FROM course ORDER BY CourseID ASC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {

                    $id = $row['CourseID'];
            ?>
                      <tr>
                          
                          <td align='center'><form method="get" action="page2.php"><input type="hidden" name="varname" value="$row['CourseID']" /><input type=submit value="<?php echo $row['CourseID']; ?>" style="width:100%"></form></td>
                          <td align='center'><form method="get" action="page2.php"><input type="hidden" name="varname" value="$row['CourseID']" /><input type=submit value="<?php echo $row['IndexNo']; ?>" style="width:100%"></form></td>
                          <td align='center'><form method="get" action="page2.php"><input type="hidden" name="varname" value="$row['CourseID']" /><input type=submit value="<?php echo $row['Result']; ?>" style="width:100%"></form></td>
                          
                          
                          <td nowrap="true" style="text-align: center;">
                            <a class="btn btn-success" href="View.php?id=<?php echo $id ?>">View</a>
                          </td>
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