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
      <th nowrap="true" style="text-align: center;">IndexNo</th>
      <th nowrap="true" style="text-align: center;">Name</th>
   <!-->   <th nowrap="true" style="text-align: center;">RegNo</th>
      <th nowrap="true" style="text-align: center;">Addressss</th>
      <th nowrap="true" style="text-align: center;">NIC</th>
      <th nowrap="true" style="text-align: center;">District</th>
      <th nowrap="true" style="text-align: center;">Province</th>
      <th nowrap="true" style="text-align: center;">Divisional_secretariat</th>
      <th nowrap="true" style="text-align: center;">Zip_Code</th>
      <th nowrap="true" style="text-align: center;">Email</th> <-->

      
    </tr>
    
    <?php
                $conn = mysqli_connect("localhost", "root", "", "sis11");
                // Check connection
                if ($conn->connect_error) 
                {
                  die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "SELECT IndexNo ,Name FROM student WHERE IndexNo ='18000721'";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {

                    $id = $row['IndexNo'];
            ?>
                      <tr>
                          
                        
                          <td nowrap="true"style="text-align: center;"><?php echo $row['IndexNo']; ?></td>
                          <td nowrap="true"style="text-align: center;"><?php echo $row['Name']; ?></td>
                        
                        <!-->  <td nowrap="true" style="text-align: center;"><?php echo $row['RegNo']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Address']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['NIC']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['District']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Province']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Divisional_Secretariat']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Zip_Code']; ?></td>
                          <td nowrap="true" style="text-align: center;"><?php echo $row['Email']; ?></td> <-->

                          
                          
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