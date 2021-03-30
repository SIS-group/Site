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
<style>
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
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>ProgramID</th>
    <th>CourseID</th>
    <th>Name</th>
    <th>Year</th>
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
                $sql = "SELECT ProgramID,CourseID ,Name ,Year,Semester,Credits FROM course WHERE ProgramID='$phpVariable'  ORDER BY Year,Semester ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {

                    $id = $row['ProgramID'];
            ?>
                      <tr>
                          
                          
                          <td nowrap="true" style="text-align: center;"><?php echo $row['ProgramID']; ?></td>
                          
                          <td nowrap="true" style="text-align: center;"><?php echo $row['CourseID']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Name']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Year']; ?></td>
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

</body>
</html>
