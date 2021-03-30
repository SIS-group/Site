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
    <th>RegNo</th>
    <th> Branch</th>
    <th>Pay Date</th>
    <th>Pay Slip</th>
    <th>Verified Status</th>
    <th>Assistant Bursar ID</th>
    <th>view Payslip</th>
    
  </tr>
  
      <?php
                $conn = mysqli_connect("localhost", "root", "", "sis11");
                // Check connection
                if ($conn->connect_error) 
                {
                  die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "SELECT RegNo,Branch ,PayDate,Pay_slip,Verified_status,Assistant_Bursar_ID FROM student_payment  ORDER BY RegNo";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) 
                {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {

                    $id = $row['RegNo'];
                    
            ?>
                      <tr>
                          
                          
                          <td nowrap="true" style="text-align: center;"><?php echo $row['RegNo']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Branch']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['PayDate']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Pay_slip']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Verified_status']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Assistant_Bursar_ID']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo "<img src='img/".$row['Pay_slip']."'>"; ?></td>

                          
                        
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
